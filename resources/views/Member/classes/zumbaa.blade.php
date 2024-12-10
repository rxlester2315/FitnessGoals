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
                            <a href="{{url('members')}}" class="nav-link smoothScroll">Home</a>
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







        <section class="main section" id="mains">

            <h1 class="yogaas">Yoga</h1>

            <div class="yogacards-container">
                <div class="yogacards">
                    <img src="othercss/imagesss/zumba/1.jpg" alt="">
                    <div class="infocard">
                        <h3>Zumba Fitness

                        </h3>

                        <p>Zumba involves continuous movement that strengthens the heart and improves blood circulation.
                        </p>
                        <a href="{{url('enrollzumbaa')}}">
                            <button class="btn btn-warning">Enroll Now</button>

                        </a>
                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/yoga/vinyasa.jpg" alt="">
                    <div class="infocard">
                        <h3>Zumba Toning</h3>
                        <p>An hour-long Zumba session can burn 300–900 calories, depending on intensity.

                        </p>
                        <a href="{{url('enrollzumbaa')}}">
                            <button class="btn btn-warning">Enroll Now</button>

                        </a>
                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/yoga/astanga.jpg" alt="">
                    <div class="infocard">
                        <h3>Aqua Zumba
                        </h3>
                        <p>Choreographed moves enhance hand-eye coordination and overall balance.</p>

                        <a href="{{url('enrollzumbaa')}}">
                            <button class="btn btn-warning">Enroll Now</button>

                        </a>
                    </div>
                </div>



                <div class="yogacards">
                    <img src="othercss/imagesss/yoga/iyengar.jpg" alt="">
                    <div class="infocard">
                        <h3>Zumba Gold</h3>
                        <p>Some Zumba programs, like Toning or Step, incorporate resistance for muscle strengthening.
                        </p>
                        <a href="{{url('enrollzumbaa')}}">
                            <button class="btn btn-warning">Enroll Now</button>

                        </a>
                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/yoga/bikram.jpg" alt="">
                    <div class="infocard">
                        <h3>Zumba Kids</h3>
                        <p>Classes are community-oriented, providing opportunities to meet and interact with others.</p>
                        <a href="{{url('enrollzumbaa')}}">
                            <button class="btn btn-warning">Enroll Now</button>

                        </a>
                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/yoga/kundami.jpg" alt="">
                    <div class="infocard">
                        <h3>Zumba Kids Jr.</h3>
                        <p>Programs cater to beginners, older adults, children, and even advanced fitness enthusiasts.

                        </p>
                        <a href="{{url('enrollzumbaa')}}">
                            <button class="btn btn-warning">Enroll Now</button>

                        </a>

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