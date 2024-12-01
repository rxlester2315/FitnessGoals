<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Extreme Fitness</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="landing/css/bootstrap.min.css">
        <link rel="stylesheet" href="landing/css/font-awesome.min.css">
        <link rel="stylesheet" href="landing/css/aos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.min.css"
            integrity="sha512-T7lIYojLrqj7eBrV1NvUSZplDBi8mFyIEGFGdox8Bic92Col3GVrscbJkL37AJoDmF2iAh81fRpO4XZukI6kbA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
            integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="landing/css/tooplate-gymso-style.css">

        <style>
        /* Style the profile link */
        .profile {
            position: relative;
            display: inline-block;
        }

        .profile-link {
            text-decoration: none;
            font-size: 16px;
            color: black;
            padding: 10px;
            border-radius: 5px;
        }

        .profile-link:hover {}

        /* Hide the dropdown menu initially */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        /* Style for the dropdown menu links */
        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color on hover */
        .dropdown-menu a:hover {
            background-color: #f13a11;
        }

        /* Show the dropdown menu on hover */
        .profile:hover .dropdown-menu {
            display: block;
        }


        /* Dropdown Menu - Initially hidden */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            min-width: 200px;
            z-index: 1000;
        }

        /* Show dropdown on hover */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Style for dropdown items */
        .dropdown-menu a {
            padding: 8px 16px;
            display: block;
            text-decoration: none;
            color: #333;
        }

        /* Hover effect for dropdown items */
        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
        </style>




    </head>

    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">

        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <div class="logos">
                    <a href="{{url('/')}}">
                        <img src="loginss/assets/images/logoz.png" alt="logo" class="logos">

                    </a>
                </div>

                <a class="navbar-brand" href="index.html">EXTREME GYM</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="{{url('Non')}}" class="nav-link smoothScroll">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#about" class="nav-link smoothScroll">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link smoothScroll dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Classes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('yogas') }}">Yoga</a></li>
                                <li><a class="dropdown-item" href="{{ url('pilates') }}">Pilates</a></li>
                                <li><a class="dropdown-item" href="{{ url('trainstrengths') }}">Strength Training</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('zumba') }}">Zumba</a></li>
                                <li><a class="dropdown-item" href="{{ url('cardios') }}">Cardio</a></li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#schedule" class="nav-link smoothScroll">My Schedule</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contact" class="nav-link smoothScroll">List Trainer</a>
                        </li>


                    </ul>


                    <div class="profile">
                        <a href="#" class="profile-link">My Profile</a>
                        <div class="dropdown-menu">
                            <a href="#">View Profile</a>
                            <a href="#">Edit Profile</a>
                            <a href="{{route('logout')}}">Log Out</a>
                        </div>
                    </div>



                </div>



            </div>

        </nav>





        <section class="coach section" id="coach">
            <center>
                <h1>Fitness Instructor</h1>
            </center>

            <div class="coach-container">
                <div class="ccards">
                    <div class="outerimage">
                        <img style="heigth:1000px;" src="othercss/imagesss/coach/bg.jpg" class="outerimagez" alt="">

                    </div>




                    <img src="othercss/imagesss/coach/1.jpg" class="circleimage" alt="">
                    <div class="infocoach">
                        <h3>Louis Cruz</h3>
                        <p class="position">Specialty: Strength Training</p>
                        <p class="messagecoach">"I’m excited to connect with you! As a coach specializing in strength
                            training, my goal is to help you unlock your full potential—whether you're looking to build
                            muscle, increase power, or improve your overall fitness". </p>


                        <ul class="socialacc">
                            <li><a href="https://www.facebook.com" target="_blank"><i
                                        class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="tel:+1234567890" target="_blank"><i class="fa-solid fa-phone"></i></a></li>
                        </ul>

                        <button class="btn btn-success contak">Contact</button>

                    </div>
                </div>


                <div class="ccards">
                    <div class="outerimage">
                        <img src="othercss/imagesss/coach/bg/2.jpg" class="outerimagez" alt="">

                    </div>




                    <img src="othercss/imagesss/coach/2.jpg" class="circleimage" alt="">
                    <div class="infocoach">
                        <h3>Marielle Santos</h3>
                        <p class="position">Specialty: Yoga Instructor</p>
                        <p class="messagecoach">"Yoga is about progress, not perfection. Every breath and stretch brings
                            you closer to balance. Honor your journey, and let's grow stronger together".</p>


                        <ul class="socialacc">
                            <li><a href="https://www.facebook.com" target="_blank"><i
                                        class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="tel:+1234567890" target="_blank"><i class="fa-solid fa-phone"></i></a></li>
                        </ul>

                        <button class="btn btn-success contak">Contact</button>


                    </div>
                </div>



                <div class="ccards">
                    <div class="outerimage">
                        <img src="othercss/imagesss/coach/bg/3.jpg" class="outerimagez" alt="">

                    </div>




                    <img src="othercss/imagesss/coach/3.jpg" class="circleimage" alt="">
                    <div class="infocoach">
                        <h3>Cristy Joy Guiteriez</h3>
                        <p class="position">Specialty: Zumba Instructor</p>
                        <p class="messagecoach">"Dance, move, and feel the energy! Zumba is about having fun, breaking a
                            sweat, and celebrating your body. Let’s shake it out and feel the rhythm together!"

                        </p>


                        <ul class="socialacc">
                            <li><a href="https://www.facebook.com" target="_blank"><i
                                        class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="tel:+1234567890" target="_blank"><i class="fa-solid fa-phone"></i></a></li>
                        </ul>

                        <button class="btn btn-success contak">Contact</button>

                    </div>
                </div>

                <div class="ccards">
                    <div class="outerimage">
                        <img style="heigth:1000px;" src="othercss/imagesss/coach/bg/4.jpg" class="outerimagez" alt="">

                    </div>




                    <img src="othercss/imagesss/coach/4.jpg" class="circleimage" alt="">
                    <div class="infocoach">
                        <h3>Joana Marie Chavez</h3>
                        <p class="position">Specialty: Athletic Trainer</p>
                        <p class="messagecoach">"Push your limits, build your strength, and train with purpose. Every
                            step forward is progress. Let’s work hard, stay focused, and reach new heights together!"

                        </p>


                        <ul class="socialacc">
                            <li><a href="https://www.facebook.com" target="_blank"><i
                                        class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="tel:+1234567890" target="_blank"><i class="fa-solid fa-phone"></i></a></li>
                        </ul>

                        <button class="btn btn-success contak">Contact</button>


                    </div>
                </div>














            </div>

        </section>















        <script src="landing/js/jquery.min.js"></script>
        <script src="landing/js/bootstrap.min.js"></script>
        <script src="landing/js/aos.js"></script>
        <script src="landing/js/smoothscroll.js"></script>
        <script src="landing/js/custom.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    </body>

</html>