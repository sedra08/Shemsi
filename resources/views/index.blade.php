<!doctype html>
<html lang="en">
<head>
    <title>Shemsi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <!-- <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" /> -->

    <link rel="stylesheet"
          href="./assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script
        src="./assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

    <!-- css file link  -->
    <link rel="stylesheet" href="./assets/css/index.css">

    <!-- jquery link  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- AOS css link  -->
    <link rel="stylesheet" href="./assets/aos-next/src/sass/aos.scss">

    <!-- AOS js link  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- fotorama js link  -->
    <script src="./fotorama-4.6.4/fotorama.js"></script>

    <!-- fotorama css link  -->
    <link rel="stylesheet" href="./fotorama-4.6.4/fotorama.css">

    <!-- font awesome link  -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<!-- navbar section start  -->
 @include('frontend.nav')
<!-- navbar section end  -->

<!-- hero section start  -->
<div class="container-fluid pt-3">
    <div class="container" id="hero">
        <div class="row">
            <div
                class="col-lg-6 d-flex justify-content-center align-items-center pb-3 ps-lg-5">
                <div id="heroleft">
                    <h1 class="pb-4"><b>Shemsi</b> prend soin de votre sourire</h1>
                    <p class="pb-5">le traitement le plus rapide et confortable possible à un cout de moins en moins onéreux</p>

                    <div
                        class="d-flex justify-content-lg-between align-items-lg-center"
                        id="spacing">
                        <div>
                            <button class="btn bookappointment">Prendre Rendez-Vous</button>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center gap-3 ">
                            <div class="blur">
                                <div class=" bg-white rounded-2"
                                     style="padding: 5px 8px 5px 8px;">
                                    <a href="#"> <i
                                            class="fa-solid fa-phone-volume"></i></a>
                                </div>
                            </div>
                            <div class="lh-0">
                                <h6 class>Urgence dentaire 24h/24</h6>
                                <h5 class>05374-05952</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div
                    class=" d-flex justify-content-center align-items-center"
                    style="position: relative;">
                    <img data-aos="flip-left"
                         src="./images/home/hero.png"
                         alt="wait for image" width="60%"
                         style="z-index: 1;">

                    <div class="teeth rounded-3">
                        <a href><i class="fa-solid fa-tooth"></i></a>
                    </div>

                    <div class="security">
                        <div class=" bg-white rounded-3"
                             style="padding: 10px 15px 10px 15px;">
                            <a href><i
                                    class="fa-solid fa-shield-halved"></i></a>
                        </div>
                    </div>

                    <div class="circule1 rounded-5"></div>
                    <div class="circule2 rounded-5"></div>
                    <div class="circule3 rounded-5"></div>
                    <div
                        style="position: absolute;left: 80px;top: 190px;z-index: 0;">
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero section end  -->

<!-- about us section start  -->
<div class="container-fluid pt-5 pb-5" id="about">
    <div
        class="container d-flex justify-content-center align-items-center">
        <div class="pt-3 pb-3 content">
            <h3 class="text-lg-center">Le dentiste réinvente ce que peut être l’expérience dentaire et établit fièrement une nouvelle norme en matière de soins aux patients.</h3>
        </div>
        <!-- <div class="d-flex justify-content-center">
                <div class="pt-3 pb-3 content" style="width: 51%;">
                    <h3 class="text-center">Dentalist is re-imagining
                        what
                        the dental experience can
                        be and proudly setting a new standard for
                        patient
                        care.</h3>

                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="pt-3 pb-3 content" style="width: 51%;">
                    <h3 class="text-center">Dentalist is re-imagining
                        what
                        the dental experience can
                        be and proudly setting a new standard for
                        patient
                        care.</h3>

                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="pt-3 pb-3 content" style="width: 51%;">
                    <h3 class="text-center">Dentalist is re-imagining
                        what
                        the dental experience can
                        be and proudly setting a new standard for
                        patient
                        care.</h3>

                </div>
            </div> -->

    </div>
</div>
<!-- about us section end  -->

<!-- service section start  -->
<div class="cintainer-fluid pt-5 pb-5 service">
    <div class="container" data-aos="fade-up">
        <div class="content">
            <h5>SERVICES</h5>
            <div class="row pt-3 pb-5">
                <div class="col-lg">
                    <h2>Soyez fier de votre santé bucco-dentaire.</h2>
                </div>
                <div class="col-lg d-flex align-items-center">
                    <p>Nous avons à coeur d’offrir des soins et traitements dentaires de qualité en un seul endroit!</p>
                </div>
            </div>
        </div>

        <div class="row p-2 g-3">
            <div class="col-lg-3">
                <div class="card p-2 card1 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #DBEFFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img src="./images/home/detartage.png"
                                        alt="wait for image" style="weitgh:50px; height:50px"></i>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Détartrage</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-2 card2 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #DBDEFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img src="./images/home/blanchiment.png"
                                        alt="wait for image" style="weitgh:50px; height:50px"></i>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Blanchiment</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-2 card3 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #F6DBFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img src="./images/home/impliment.png"
                                        alt="wait for image" style="weitgh:50px; height:50px"></i>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-body p-0 pt-2">
                        <h5
                            class="card-title text-center">Implant dentaire</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card p-2 card4 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #FADBE2;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img
                                        src="./images/home/nettoyage.png"
                                        alt="wait for image" style="weitgh:50px; height:50px"></i>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Nettoyage</h5>
                    </div>
                </div><br>
            </div>

            <div class="col-lg-3">
                <div class="card p-2 card5 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #FADBE2;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img
                                        src="./images/home/protege.png"
                                        alt="wait for image" style="weitgh:50px; height:50px"></i>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Protège-dents</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card p-2 card6 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #DBEFFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img
                                        src="./images/home/prothese.png"
                                        alt="wait for image" style="weitgh:50px; height:50px"></i>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Prothèse dentaire</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card p-2 card7 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #F6DBFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img
                                        src="./images/home/pardonti.png"
                                        alt="wait for image" style="weitgh:50px; height:50px"></i>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Parodontie</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card p-2 card8 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #DBDEFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img
                                        src="./images/home/soin.png"
                                        alt="wait for image" style="weitgh:50px; height:50px"></i>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Soins conservateurs</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service section end  -->

<!-- Emergency section start  -->
<div class="container-fluid pt-5 pb-5 emergency">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6"
                 data-aos="fade-right">
                <div class="p-5 imagebox">
                    <img src="./images/home/cabinet1.png" width="120%"
                         class="rounded"
                         alt="wait for image"
                         style="position: absolute;bottom: 70px;left: 70px;">
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center"
                 data-aos="fade-left">
                <div class="content">
                    <h5 class="pb-3">Urgence dentaire 24h/24</h5>
                    <h1 class="pb-3">Un traitement doux et amical de notre cabinet de proximité</h1>
                    <p>Notre cabinet dentaire local vous accueille dans un environnement chaleureux et 
                        vous assure des soins attentifs et délicats. 
                        Nous sommes là pour prendre soin de votre santé bucco-dentaire avec professionnalisme et bienveillance.</p>
                    <div class="pt-5">
                        <button class="btn bookappointment">Book
                            appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Emergency section end  -->

<!-- fetures section start  -->
<div class="container-fluid pt-5 pb-5 fetures">
    <div class="container box" data-aos="fade-up">
        <div
            class="d-flex justify-content-center align-items-center">
            <div
                class="w-75 d-flex justify-content-center align-items-center">
                <div>
                    <h5>Caractéristiques</h5>
                    <h1>Des soins spécialisés grâce à l'expérience</h1>
                    <p class="p1">Notre expérience nous permet de vous offrir des soins spécialisés en toute sécurité et avec la prise en charge adaptée à votre situation.</p>
                </div>
            </div>
        </div>
        <div
            class="d-flex justify-content-center align-items-center">
            <div class="w-75 pt-5">
                <div
                    class="row d-flex justify-content-center">
                    <div class="col-lg-5">
                        <div
                            class="d-flex justify-content-center align-items-center gap-3">
                            <div
                                class=" d-flex justify-content-center align-items-center">
                                <div
                                    class="blurbox border border-white p-2">
                                    <div
                                        class="whitebox border border-white bg-white rounded-2"
                                        style="padding: 12px;">
                                        <i class="fa-solid fa-shield"
                                           style="font-size: 20px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class>
                                <h4 class="pt-3 lh-1">Priorité à la sécurité</h4>
                                <p class="p-0">Nous privilégions la sécurité grâce à des contrôles de santé et bien plus encore.</p>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center gap-3 pt-4">
                            <div
                                class=" d-flex justify-content-center align-items-center">
                                <div
                                    class="blurbox border border-white p-2">
                                    <div
                                        class="whitebox border border-white bg-white rounded-2"
                                        style="padding: 12px;">
                                        <img
                                            src="./images/home/chair 1.png"
                                            alt style="width: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class>
                                <h4 class="pt-3 lh-1">Services dentaires complets</h4>
                                <p class="p-0">Notre clinique offre une gamme complète de services dentaires, 
                                    allant des examens aux implants et facettes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div
                            class="d-flex justify-content-center align-items-center gap-3">
                            <div
                                class=" d-flex justify-content-center align-items-center">
                                <div
                                    class="blurbox border border-white p-2">
                                    <div
                                        class="whitebox border border-white bg-white rounded-2"
                                        style="padding: 12px;">
                                        <i class="fa-solid fa-shield"
                                           style="font-size: 20px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class>
                                <h4 class="pt-3 lh-1">Assurance acceptée</h4>
                                <p class="p-0">Nous sommes en réseau avec les principaux assureurs.</p>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center gap-3 pt-4">
                            <div
                                class=" d-flex justify-content-center align-items-center">
                                <div
                                    class="blurbox border border-white p-2">
                                    <div
                                        class="whitebox border border-white bg-white rounded-2"
                                        style="padding: 12px;">
                                        <img
                                            src="./images/home/chair 1.png"
                                            alt style="width: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class>
                                <h4 class="pt-3 lh-1">Jamais de jugement</h4>
                                <p class="p-0">Peu importe vos habitudes, du soin méticuleux au penchant pour le sucre,
                                    chaque bouche trouve sa place ici.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fetures section end  -->

<!-- expert section start  -->
<div class="container-fluid pt-5 pb-5 expert">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div
                class="col-lg-6 d-flex justify-content-center align-items-center ps-5"
                data-aos="fade-right">
                <div>
                    <h5 class="pb-3">EXPERTS EN DENTAIRE</h5>
                    <h1 class="pb-2">Dentisterie de premier ordre, par les meilleurs dentistes de Temara.</h1>
                    <p class="pb-3">L'excellence dentaire à Temara, notre engagement pour votre sourire.</p>
                    <ul class="list-unstyled gap-2">
                        <li><i
                                class="fa-solid fa-check-double p-2"></i>Équipe dentaire de qualité supérieure</li>
                        <li><i
                                class="fa-solid fa-check-double p-2"></i>Services dentaires à la pointe de la technologie</li>
                        <li><i
                                class="fa-solid fa-check-double p-2"></i>Remise sur tous les soins dentaires</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-end"
                 data-aos="fade-left">
                <div class="p-5 imagebox">
                    <img src="./images/home/dentiste2.png" width="90%"
                         class="rounded"
                         alt="wait for image"
                         style="position: absolute;bottom: 60px;right: 70px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- expert section end  -->

<!-- Testimonial section start  -->
<div class="container-fluid pt-5 pb-5 Testimonial">
    <div class="container pb-5 pt-5" data-aos="fade-up">
        <div class="d-flex justify-content-center align-items-center">
            <div class="content pb-4">
                <h5>TÉMOIGNAGE</h5>
                <div
                    class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg">
                        <h1 class="pt-2">
                            Avis de nos clients
                        </h1>
                    </div>
                    <div class="col-lg">
                        <p>Découvrez les expériences authentiques de ceux qui nous ont fait confiance et témoignent 
                            de la qualité de nos soins et de notre engagement.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-group gap-5 pt-5">
            <div class="card rounded-4">
                <div class="text-center imgdiv">
                    <img src="./images/home/hijabi2.png"
                         alt="wait for image"
                         class="rounded-circle Testimonialimg">
                </div>
                <div class="card-body text-center">
                    <h5>Kind Halima</h5>
                    <p>Je recommande vivement le cabinet du Dr. Houda Shemsi, 
                        une dentiste véritablement excellente. Elle est non seulement compétente dans son
                        domaine, mais aussi ponctuelle et sérieuse. Les enfants l'adorent, grâce à son sourire et 
                        à sa chaleur humaine. Un grand bravo également à son assistante à l'accueil, 
                        qui offre un service de haut niveau. Si vous recherchez une expérience dentaire exceptionnelle, ce cabinet est le choix parfai</p>
                    <div>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 g-5">
                <div class="text-center imgdiv">
                    <img src="./images/home/hijabi1.png"
                         alt="wait for image"
                         class="rounded-circle Testimonialimg">
                </div>
                <div class="card-body text-center">
                    <h5>Meriem Tanan</h5>
                    <p>Que Dieu vous protège, Dr. Houda. Votre cabinet est vraiment remarquable. 
                        J'ai ressenti un grand soulagement lors de notre rencontre. Vous méritez tout le respect, 
                        le succès et la prospérité.</p>
                    <div class="gap-2">
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                    </div>
                </div>
            </div>
            <div class="card rounded-4">
                <div class="text-center imgdiv">
                    <img src="./images/home/about3.png"
                         alt="wait for image"
                         class="rounded-circle Testimonialimg">
                </div>
                <div class="card-body text-center">
                    <h5>Houda</h5>
                    <p>un médecin compétente se caractérise par son respect des rendez-vous et de ses patients. elle offre un niveau de service exceptionnel, et ses assistantes se distinguent par leur sympathie et leur générosité.</p>
                    <div class>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
<!-- Testimonial section end  -->


<!-- book appointment section start  -->
<div class="container-fluid appointment pb-5">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div
                class="col-lg-6  rounded-5 d-flex align-items-center justify-content-center p-4"
                data-aos="fade-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3311.1478452529977!2d-6.9150532242895695!3d33.911594273210376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzPCsDU0JzQxLjciTiA2wrA1NCc0NC45Ilc!5e0!3m2!1sen!2sma!4v1747445898080!5m2!1sen!2sma" 
                    width="75%" height="100%" 
                    style="border-radius: 30px;" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-4">
                    <h5 class="mb-3">PRENDRE RENDEZ-VOUS</h5>
                    <h1 class="mb-3">Les soins chez Shemsi sont un plaisir</h1>
                    <p class="mb-4">Prenez rendez-vous et découvrez une expérience dentaire où le 
                        soin rencontre le plaisir, dans un environnement accueillant et serein.</p>
                    <form action>
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label"> <b>NOM COMPLET :</b></label>
                                    <input
                                        type="text"
                                        class="form-control p-2"
                                        style="border-radius: 10px;"
                                        name="username"
                                        id="username"
                                        aria-describedby="emailHelpId" />
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label"> <b>NUMÉRO DE TÉLÉPHONE :</b>
                                        </label>
                                    <input
                                        type="text"
                                        class="form-control p-2"
                                        style="border-radius: 10px;"
                                        name="useremail"
                                        id="useremail"
                                        aria-describedby="emailHelpId" />
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label"> <b>SERVICES :</b></label>
                                    <select
                                        class="form-select form-select-lg p-2"
                                        style="border-radius: 10px;color: #212529;font-size: 17px;"
                                        name
                                        id>
                                        <option selected>Soins conservateurs</option>
                                        <option value>Détartrage</option>
                                        <option value>Parodontie</option>
                                        <option value>Blanchiment</option>
                                        <option value>Prothèse dentaire</option>
                                        <option value>Implant dentaire</option>
                                        <option value>Protège-dents</option>
                                        <option value>Nettoyage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for="date" class="form-label"> <b>DATE :</b></label>
                                    <input type="date" class="form-control" id="date" min="{{ date('Y-m-d') }}" required>
                                    <div class="invalid-feedback">Veuillez sélectionner une date valide</div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2 mb-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label"> <b>MESSAGES :</b></label>
                                    <textarea class="form-control"
                                              name="message"
                                              id="message" rows="5"
                                              style="border-radius: 10px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-between align-items-center contact">
                            <div
                                class="d-flex justify-content-start align-items-center gap-3">
                                <div class="p-2"
                                     style="border-radius: 5px;background: linear-gradient(80deg, rgb(255, 255, 255) 0%, rgba(88,63,188,1) 100%);">
                                    <i
                                        class="fa-solid fa-phone-volume p-2 rounded-4 text-light"
                                        style="border-radius: 5px;background-color: #583FBC;"></i>
                                </div>
                                <div>
                                    <h6>Urgence dentaire 24h/24</h6>
                                    <h6>05374-05952</h6>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn">Confirmer</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- book appointment section end  -->

<!-- footer section start  -->

<div class="container-fluid footer">
    <div class="container">
        <div class="row pt-5" data-aos="fade-up">
            <div class="col-lg-6 ">
                <div>
                    <a
                        class="d-flex justify-content-start align-items-center gap-2 fw-bold pb-4"
                        href="#"><img src="./images/home/logo.png"
                                      alt="wait for image">Shemsi</a>

                    <p class="pb-5">Le centre dentaire <b>Shemsi</b> offre des services de qualité, attirant la confiance des patients locaux.</p>

                    <p>SUIVEZ-NOUS SUR</p>
                    <div class>
                        <i class="fa-brands fa-facebook-f pe-4"></i>
                        <i class="fa-brands fa-twitter pe-4"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <ul>
                    <h6 class="pb-4">
                        QUICK LINKS
                    </h6>
                    <li class="list-unstyled pb-3"><a href="{{ route('about') }}">À propos</a></li>
                    <li class="list-unstyled pb-3"><a href="{{ route('services')  }}">Nos services</a></li>
                    <li class="list-unstyled pb-3"><a href>Shemsi</a></li>
                    <li class="list-unstyled pb-3"><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul>
                    <h6 class="pb-4">COORDONNÉES</h6>
                    <li class="pb-4">
                        <div
                            class="d-flex justify-content-start align-items-center gap-3">
                            <div class="p-2 box rounded-4">
                                <i
                                    class="fa-solid fa-phone-volume p-2 rounded-3"></i>
                            </div>
                            <div class="lh-0">
                                <h6>Numéro de téléphone</h6>
                                <h6 class="fw-bold">05374-05952</h6>
                            </div>
                        </div>
                    </li>
                    <li class="pb-4">
                        <div
                            class="d-flex justify-content-start align-items-center gap-3">
                            <div class="p-2 box rounded-4">
                                <i
                                    class="fa-solid fa-phone-volume p-2 rounded-3"></i>
                            </div>
                            <div class="lh-0">
                                <h6>Heures d'ouverture</h6>
                                <h6 class="fw-bold">09:00 - 13:30 <br>15:00 - 19:30</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="d-flex justify-content-start align-items-center gap-3">
                            <div class="p-2 box rounded-4">
                                <i
                                    class="fa-solid fa-phone-volume p-2 rounded-3"></i>
                            </div>
                            <div class="lh-0">
                                <h6>Adresse de la clinique</h6>
                                <h6 class="fw-bold">LOTISSEMENT AZIZA JIHANE, IMM 13, APPT 2, 1 ER ETAGE, Temara 12040</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row pt-5 pb-3 bottom">
            <div class="col-lg-6  justify-content-sm-center">
                <p> © Shemsi. All Right Reserved </p>
            </div>
            <div
                class="col-lg-6 d-flex gap-5 justify-content-lg-end justify-content-sm-center">
                <div class="d-flex gap-5">
                    <p>Termes et conditions</p>
                    <p>Politique de confidentialité</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer section end  -->
<script>
    // fotorama jQuery
    // $(document).ready(function(){
    //     $(".fotorama")
    // })

    AOS.init();

</script>

<!-- Bootstrap JavaScript Libraries -->
<!-- <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script> -->
</body>
</html>
