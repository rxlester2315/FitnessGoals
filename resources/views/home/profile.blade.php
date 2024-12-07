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
        body {
            display: flex;
            justify-content: center;
            /* Centers horizontally */
            align-items: center;
            /* Centers vertically */
            min-height: 100vh;
            /* Ensures the body takes full viewport height */
            margin: 0;
            /* Remove default margin */
        }


        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            text-align: left;
            font-weight: bold;
        }

        input,
        textarea {
            padding: 10px;
            width: 100%;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            /* Ensures padding doesn't affect width */
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            height: 40px;
        }

        textarea {
            resize: vertical;
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
                            <a href="{{url('listcoach')}}" class="nav-link smoothScroll">List Trainer</a>
                        </li>


                    </ul>


                    <div class="profile">
                        <a href="#" class="profile-link">My Profile</a>
                        <div class="dropdown-menu">
                            <a href="{{url('myprofile')}}">View Profile</a>
                            <a href="#">Edit Profile</a>
                            <a href="{{route('logout')}}">Log Out</a>
                        </div>
                    </div>



                </div>



            </div>

        </nav>


        <section class="memberprof section" id="memberprof">

            <div class="memberprofile">

                <img src="othercss/imagesss/rat.jpg" class="profileimg" alt="">
                <div class="maininfo">
                    <h3>Rex Lester Bastaoang</h3>
                    <p>Member <span class="badge badge-warning">Gold Member</span></p>
                </div>
                <div class="memberinfo">


                    <form>
                        <label for="name">Full Name:</label>
                        <input disabled type="text" id="name" name="name" placeholder="Rex Lester Bastaoang" required>

                        <label for="email">Email:</label>
                        <input disabled type="email" id="email" name="email" placeholder="Rexlester@gmail.com "
                            required>

                        <label for="phone">Phone Number:</label>
                        <input disabled type="tel" id="phone" name="phone" placeholder="098172134121" required>

                        <label for="address">Address:</label>
                        <textarea disabled id="address" name="address" placeholder="San Jose Del Monte Bulacan" rows="4"
                            required></textarea>

                    </form>
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