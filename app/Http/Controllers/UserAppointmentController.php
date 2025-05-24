<?php

namespace App\Http\Controllers;

use App\Events\CustomerBookingRequestEvent;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserAppointmentController extends Controller
{

    /**
     * Show the form for creating a new booking request.
     */
    public function renderBookingForm()
    {
        return view('backend.appointments.booking-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAppointment(Request $request)
    {
        try
        {
//            $test = Carbon::createFromFormat('h:i A',
//                $request['appointment_time'])->format('H:i:s');
//            dd($request->all(), $test);
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:2|exists:users,name', // Ensure name exists in the users table
                'email' => 'required|email|exists:users,email', // Ensure email is valid and exists
                'appointment_time' => 'required|date_format:h:i A', // Validate time in "h:i A" format (e.g., 11:00 AM)
                'appointment_date' => 'required|date|after_or_equal:today', // Ensure the day is today or a future date
                'reason_for_visit' => 'nullable|string|max:255', // Optional field with max length
            ]);

            if ($validator->fails())
            {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $validator->validated();

            $userId = auth()->user()->id;

            $data['appointment_time'] = Carbon::createFromFormat('h:i A',
                $data['appointment_time'])->format('H:i:s');


            $data['user_id'] = $userId;
            
//            if (Appointment::hasPendingBookingToday($userId)) {
//
//                return redirect()
//                    ->route('dental-appointment.client-booking-status-page')
//                    ->with('success', 'You already have a pending appointment request for today. Please wait for further updates This is your booking status.');
//            }


            if (Appointment::isSlotIsBooked($data['appointment_time'], $data['appointment_date']))
            {

                $availableSlots  = Appointment::fetchAvailableTimeSlot(now()->toDateString());

                if (count($availableSlots) === 0)
                {
                    $makedSlots = $this->adjustAppointment(4, $data['appointment_time'], $data['appointment_date']);

                    if (count($makedSlots) === 0)
                    {
                        return redirect()
                            ->route('dental-appointment.client-booking-status-page')
                            ->with('error', 'Sorry, but the slot is already booked for today Try to do it for tomorrow.')
                            ->with('availableSlots', $availableSlots);
                    }


                    return redirect()
                    ->route('dental-appointment.show-appointment-form')
                    ->with('error', 'The slot you choose is booked But for only you we make below slot available')
                    ->with('extra', '101')
                    ->with('makedSlots', $makedSlots);
                }

                return redirect()
                    ->route('dental-appointment.client-booking-status-page')
                    ->with('error', 'Sorry, but the slot is already booked. Below are the available slots for today please select one of them!')
                    ->with('availableSlots', $availableSlots);

            }


            $result = Appointment::create($data);

            event(new CustomerBookingRequestEvent($result));

//            Log::info($result);

            return redirect()
                ->route('dental-appointment.client-booking-status-page')
                ->with('success', 'your appointment request is sent successfully')
                ->with('data', $result);
        }
        catch (\Exception $exception)
        {
            Log::error($exception);

            return redirect()->route('dental-appointment.show-appointment-form')->with('error',$exception->getMessage());
        }
    }

    /**
     * render the specified status page for user and history too.
     */
    public function renderAppointmentStatusPageForCustomer()
    {
//        $data = Appointment::fetchTheExistingBookingOfTodayByUserId(auth()->id());

        $data = Appointment::where('user_id', auth()->id())->orderBy('id', 'desc')->first();

//        $appointmentHistory = Appointment::where('user_id', auth()->id())->where('appointment_date', '!=', now()->toDateString())->get();
        $appointmentHistory = Appointment::where('user_id', auth()->id())->where('id', '!=', $data?->id)->get();

        return view('backend.appointments.client-appointment-page', compact('data', 'appointmentHistory'))->with(['success' => 'Your booking status'])->with('status', $data->status ?? null);
    }

    public function adjustAppointment($goldenSlotFactor, $clientAskedTimeSlot, $clientAskedDate)
    {
        $slot = Carbon::make($clientAskedTimeSlot)->format('H:i:s');

        $lowerSlot = (int) substr($slot, 0, 2);

        $upperSlot = $lowerSlot + 1;

        $start = strlen((string)$lowerSlot) == 1 ? "0$lowerSlot:00:00" : "$lowerSlot:00:00";
        $end = strlen((string)$upperSlot) == 1 ? "0$upperSlot:00:00" : "$upperSlot:00:00";

        $bookingNumber = Appointment::fetchNumberOfBookingInGiveTimeAndDate($start, $end, $clientAskedDate);

            if ($bookingNumber < $goldenSlotFactor)
        {
            $maximumSlots[] = $start;

            if ($goldenSlotFactor == 4)
            {
                $maximumSlots[] = strlen((string)$lowerSlot) == 1 ? "0$lowerSlot:15:00" : "$lowerSlot:15:00";
                $maximumSlots[] = strlen((string)$lowerSlot) == 1 ? "0$lowerSlot:30:00" : "$lowerSlot:30:00";
                $maximumSlots[] = strlen((string)$lowerSlot) == 1 ? "0$lowerSlot:45:00" : "$lowerSlot:45:00";
            }


            $bookings = Appointment::fetchBookingsInGiveTimeAndDate($start, $end, $clientAskedDate);
            $bookingTimeSlotArray = $bookings->pluck('appointment_time')->toArray();

            $makedSlots = array_diff($maximumSlots, $bookingTimeSlotArray);

            return $makedSlots;

        }

        return [];
    }

}
