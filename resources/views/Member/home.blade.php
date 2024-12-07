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
                            <a href="{{url('enrollclasses')}}" class="nav-link smoothScroll">Enroll Classes</a>
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






        <div class="sideprofilezz">
            <div class="cardssz">
                <img src="othercss/imagesss/rat.jpg" class="imahe" alt="">
                <div class="infozz">
                    <h3>Rex Lester Bastaoang</h3>
                    <p>Member</p>

                    <div class="moreinfo">
                        <h3 class="section-title">Program Selected: <span class="badge bg-warning">Weight Loss</span>
                        </h3>

                        <h3 class="section-title">Coach/Trainer: <span class="badge badge-dark">Arnel Cruz</span>
                        </h3>

                        <h3 class="section-title">Member Type <span class="badge badge-success">Gold Member</span>
                        </h3>

                        <button class="btn btn-danger btnn">View More</button>

                    </div>
                </div>

            </div>


        </div>


        </div>



        <section class="rytrhme section" id="rythme">

            <div class="container">



                <h1 class="split">Split Workout Schedule</h1>

                <div class="cardss">
                    <div class="card-container">
                        <div class="image-container">
                            <img src="othercss/imagesss/monday.jpg" class="imagesss" alt="">
                            <div class="info">
                                <h3>Monday</h3>
                                <span>Chest Triceps & Shoulder</span>
                                <a href="#" class="bview">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>

                            </div>


                        </div>
                    </div>


                    <div class="card-container">
                        <div class="image-container">
                            <img src="othercss/imagesss/tuesday.jpg" class="imagesss" alt="">
                            <div class="info">
                                <h3>Tuesday</h3>
                                <span>Back & Biceps</span>
                                <a href="#" class="bview">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-container">
                        <div class="image-container">
                            <img src="othercss/imagesss/wednesday.jpg" class="imagesss" alt="">
                            <div class="info">
                                <h3>Wenesday</h3>
                                <span>Cardio</span>

                                <a href="#" class="bview">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="card-container">
                        <div class="image-container">
                            <img src="othercss/imagesss/thursday.jpg" class="imagesss" alt="">
                            <div class="info">
                                <h3>Thursday</h3>
                                <span>Chest & Back</span>

                                <a href="#" class="bview">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>

                        </div>
                    </div>


                    <div class="card-container">
                        <div class="image-container">
                            <img src="othercss/imagesss/friday.jpg" class="imagesss" alt="">
                            <div class="info">
                                <h3>Friday</h3>
                                <span>Legs & Core</span>
                                <a href="#" class="bview">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-container">
                        <div class="image-container">
                            <img src="othercss/imagesss/saturday.jpg" class="imagesss" alt="">
                            <div class="info">
                                <h3>Saturday</h3>
                                <span>Bicep & Triceps</span>
                                <a href="#" class="bview">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>










        <!-- Modal -->
        <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">

                        <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form class="membership-form webform" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                            <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                            <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890"
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                            <textarea class="form-control" rows="3" name="cf-message"
                                placeholder="Additional Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Submit
                                Button</button>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="signup-agree">
                                <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to
                                    the <a href="#">Terms &amp;Conditions</a>
                                </label>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer"></div>

                </div>
            </div>
        </div>

        <!-- SCRIPTS -->


        <script src="landing/js/jquery.min.js"></script>
        <script src="landing/js/bootstrap.min.js"></script>
        <script src="landing/js/aos.js"></script>
        <script src="landing/js/smoothscroll.js"></script>
        <script src="landing/js/custom.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    </body>

</html>