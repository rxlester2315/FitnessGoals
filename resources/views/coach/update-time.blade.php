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
        <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('landing/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('landing/css/aos.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.min.css"
            integrity="sha512-T7lIYojLrqj7eBrV1NvUSZplDBi8mFyIEGFGdox8Bic92Col3GVrscbJkL37AJoDmF2iAh81fRpO4XZukI6kbA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{asset('landing/css/tooplate-gymso-style.css')}}">

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

        .container-list-clientt {
            display: flex;
            justify-content: center;

        }

        form {
            border: 1px solid black;
            border-radius: 5px;
            padding: 15px;
            margin: 15px;
        }

        .form-input {
            margin: 50px;
        }



        .form-time input {
            width: 200px;

        }

        button {
            align-items: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin: 30px;
        }

        .icon-image img {
            width: 100px;
            object-fit: cover;
            border: 1px solid white;
            border-radius: 50%;
        }

        .form-input h4 {
            font-size: 13px;
        }

        .form-input input {
            border: 1px solid grey;
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
                            <a href="{{url('Coach')}}" class="nav-link smoothScroll">Home</a>
                        </li>



                        <li class="nav-item">
                            <a href="{{url('list_clients')}}" class="nav-link smoothScroll">My Clients</a>
                        </li>

                        <li class="nav-item">
                            <a href="#schedule" class="nav-link smoothScroll">Schedule</a>
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








        </div>



        <section class="rytrhme section" id="rythme">
            <center>
                <h3 style="margin:10px;">Update Time</h3>

            </center>
            <div class="container-list-clientt">
                <form action="{{ url('updatetimes/' . $selectedUser->id) }}" method="POST">

                    @csrf
                    @method('PUT')
                    <div class="icon-image">
                        <img src="{{asset('landing/images/blank.jpg')}}" alt="">
                    </div>

                    <div class="form-input">
                        <h4>Name</h4>
                        <input type="text" disabled value="{{ $selectedUser->name }}">
                    </div>

                    <div class="form-input">
                        <h4>Email</h4>
                        <input type="email" disabled value="{{ $selectedUser->email }}">
                    </div>

                    <div class="form-input">
                        <h4>Type Of Training</h4>
                        <input type="text" disabled value="{{ $selectedUser->typeoftraining }}">
                    </div>

                    <div class="form-input">
                        <h4>Select Time</h4>

                        <input type="time" id="appointment-time" name="prefertime" min="09:00" max="18:00" step="1800"
                            required>
                    </div>
                    <!-- Add this wrapper around your button -->
                    <div class="button-container">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                </form>


            </div>














        </section>












        <!-- SCRIPTS -->


        <script src=" {{asset('landing/js/jquery.min.js')}}"></script>
        <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('landing/js/aos.js')}}"></script>
        <script src="{{asset('landing/js/smoothscroll.js')}}"></script>
        <script src="{{asset('landing/js/custom.js')}}"></script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js">
        </script>


    </body>

</html>