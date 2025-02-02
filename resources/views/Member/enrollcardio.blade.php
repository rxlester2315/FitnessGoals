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

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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



        <section class="subscribed section" id="subscribed">

            <center>
                <h1>Enroll Now</h1>
            </center>




            <form action="{{route('store.subscriptionss')}}" method="POST">
                @csrf

                <div class="availcoach container">
                    <label class="cardavail">
                        <input type="radio" name="coachprefer" value="Shane Sanchez">
                        <div class="card-content">
                            <img src="othercss/imagesss/coach/14.jpg" alt="">
                            <h3 class="namecoach">Shane Sanchez</h3>
                            <p class="titlez">Cardio Coach</p>
                            <div class="infoavail">
                                <div class="info-item">
                                    <i class="fa-solid fa-dumbbell"></i>
                                    <p class="info-text">Trainer Experience: 1-4 Years</p>
                                </div>
                                <div class="info-item">
                                    <i class="fa-solid fa-award"></i>
                                    <ul class="certifications">
                                        <li>Certified Fitness Trainer (CFT)</li>
                                        <li>Certified Strength and Conditioning Specialist</li>
                                        <li>Bodybuilding Specialist Certification</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </label>

                    <label class="cardavail">
                        <input type="radio" name="coachprefer" value="Richard Gomez">
                        <div class="card-content">
                            <img src="othercss/imagesss/coach/15.jpg" alt="">
                            <h3 class="namecoach">Richard Gomez</h3>
                            <p class="titlez">Cardio Coach</p>
                            <div class="infoavail">
                                <div class="info-item">
                                    <i class="fa-solid fa-dumbbell"></i>
                                    <p class="info-text">Trainer Experience: 1-4 Years</p>
                                </div>
                                <div class="info-item">
                                    <i class="fa-solid fa-award"></i>
                                    <ul class="certifications">
                                        <li>Certified Fitness Trainer (CFT)</li>
                                        <li>Certified Strength and Conditioning Specialist</li>
                                        <li>Bodybuilding Specialist Certification</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </label>

                    <label class="cardavail">
                        <input type="radio" name="coachprefer" value="Revea Trins">
                        <div class="card-content">
                            <img src="othercss/imagesss/coach/16.jpg" alt="">
                            <h3 class="namecoach">Revea Trins</h3>
                            <p class="titlez">Cardio Coach</p>
                            <div class="infoavail">
                                <div class="info-item">
                                    <i class="fa-solid fa-dumbbell"></i>
                                    <p class="info-text">Trainer Experience: 1-4 Years</p>
                                </div>
                                <div class="info-item">
                                    <i class="fa-solid fa-award"></i>
                                    <ul class="certifications">
                                        <li>Certified Fitness Trainer (CFT)</li>
                                        <li>Certified Strength and Conditioning Specialist</li>
                                        <li>Bodybuilding Specialist Certification</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

                <h2 class="sessionssz">Select Personal Training Session</h2>
                <div class="persession">
                    <label class="cardsession">
                        <input type="radio" name="sessiontrain" value="12 Sessions">
                        <div class="card-content">
                            <h3>12 Sessions</h3>
                            <p>1500PHP (1 Month)</p>
                        </div>
                    </label>

                    <label class="cardsession">
                        <input type="radio" name="sessiontrain" value="24 Sessions">
                        <div class="card-content">
                            <h3>24 Sessions</h3>
                            <p>2600PHP (2 Month)</p>
                        </div>
                    </label>

                    <label class="cardsession">
                        <input type="radio" name="sessiontrain" value="36 Sessions">
                        <div class="card-content">
                            <h3>36 Sessions</h3>
                            <p>3250PHP (3 Month)</p>
                        </div>
                    </label>

                    <label class="cardsession">
                        <input type="radio" name="sessiontrain" value="48 Sessions">
                        <div class="card-content">
                            <h3>48 Sessions</h3>
                            <p>4200PHP (5 Month)</p>
                        </div>
                    </label>

                    <label class="cardsession">
                        <input type="radio" name="sessiontrain" value="144 Sessions">
                        <div class="card-content">
                            <h3>144 Sessions</h3>
                            <p>10000PHP (1 Year)</p>
                        </div>
                    </label>
                </div>



                <h2 class="sessionssz">Information</h2>
                <div class="moreinfoss">

                    <div class="form-input">
                        <h4>Name</h4>

                        <input type="text" name="name" placeholder="Enter Name" required>

                    </div>

                    <div class="form-input">
                        <h4>Email Address</h4>

                        <input type="email" name="email" placeholder="Enter Email">
                    </div>


                    <div class="form-input">
                        <h4>Phone Number</h4>

                        <input type="number" name="phone_number" placeholder="Phone Number">
                    </div>


                    <div class="select-train">
                        <h4>Type of Training</h4>
                        <select name="typeoftraining">
                            <option value="">Select Train Type</option>
                            <option value="Yoga">Yoga Training</option>
                            <option value="Pilates">Pilates Training</option>
                            <option value="Strength">Strength Training</option>
                            <option value="Zumba">Zumba Training</option>
                            <option value="Cardio">Cardio Training</option>
                        </select>
                    </div>


                </div>


                <h2 class="sessionssz">Payment</h2>

                <div class="cardspayments">
                    <label class="paymentcard">
                        <input type="radio" name="paymentmethod" value="GCash">
                        <img src="othercss/imagesss/payment/gcash.jpg" alt="GCash">
                    </label>

                    <label class="paymentcard">
                        <input type="radio" name="paymentmethod" value="QR Code">
                        <img src="othercss/imagesss/payment/qr.jpg" alt="QR Code">
                    </label>

                    <label class="paymentcard">
                        <input type="radio" name="paymentmethod" value="paycounter">
                        <div class="paycounter">
                            <h3>Pay At Counter</h3>
                        </div>


                    </label>

                </div>

                <div class="buttons">
                    <button type="submit" class="submitbtn">Submit</button>

                </div>







            </form>










        </section>








        @if(Session::has('message'))
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            swal({
                title: "Success!",
                text: "{{ Session::get('message') }}",
                icon: "success",
                button: "Okay",
            });
        });
        </script>
        @endif















        <script src="landing/js/jquery.min.js"></script>
        <script src="landing/js/bootstrap.min.js"></script>
        <script src="landing/js/aos.js"></script>
        <script src="landing/js/smoothscroll.js"></script>
        <script src="landing/js/custom.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    </body>

</html>