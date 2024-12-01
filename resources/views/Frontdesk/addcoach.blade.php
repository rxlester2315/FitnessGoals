<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
        <meta name="description" content="Smarthr - Bootstrap Admin Template" />
        <meta name="keywords"
            content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
        <meta name="author" content="Dreamguys - Bootstrap Admin Template" />
        <meta name="robots" content="noindex, nofollow" />
        <title>Dashboard - HRMS admin template</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
            integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />

        <link rel="stylesheet" href="front/assets/css/bootstrap.min.css" />

        <link rel="stylesheet" href="front/assets/css/font-awesome.min.css" />

        <link rel="stylesheet" href="front/assets/css/line-awesome.min.css" />

        <link rel="stylesheet" href="front/assets/plugins/morris/morris.css" />

        <link rel="stylesheet" href="front/assets/css/style.css" />


        <style>
        .tableinfo {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .form-group {
            display: inline-flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-left: 20px;
        }

        input,
        select {
            padding: 5px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 20px;
        }
        </style>
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="{{url('Frontdesk')}}" class="logo">
                        <img src="loginss/assets/images/logoz.png" alt="logo" class="logos">

                    </a>
                </div>

                <a id="toggle_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>

                <div class="page-title-box">
                    <h3>EXTREME GYM</h3>
                </div>

                <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

                <ul class="nav user-menu">
                    <li class="nav-item">

                    </li>



                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-pill">3</span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti">
                                    Clear All
                                </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="front/assets/img/profiles/avatar-02.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">John Doe</span>
                                                        added new task
                                                        <span class="noti-title">Patient appointment
                                                            booking</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">4 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="front/assets/img/profiles/avatar-03.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Tarah
                                                            Shropshire</span>
                                                        changed the task name
                                                        <span class="noti-title">Appointment booking
                                                            with payment
                                                            gateway</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">6 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="front/assets/img/profiles/avatar-06.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Misty Tison</span>
                                                        added
                                                        <span class="noti-title">Domenic
                                                            Houston</span>
                                                        and
                                                        <span class="noti-title">Claire Mapes</span>
                                                        to project
                                                        <span class="noti-title">Doctor available
                                                            module</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">8 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="front/assets/img/profiles/avatar-17.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Rolland
                                                            Webber</span>
                                                        completed task
                                                        <span class="noti-title">Patient and Doctor
                                                            video
                                                            conferencing</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">12 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-13.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Bernardo
                                                            Galaviz</span>
                                                        added new task
                                                        <span class="noti-title">Private chat
                                                            module</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">2 days ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="fa fa-comment-o"></i>
                            <span class="badge badge-pill">8</span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Messages</span>
                                <a href="javascript:void(0)" class="clear-noti">
                                    Clear All
                                </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="front/assets/img/profiles/avatar-09.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Richard Miles
                                                    </span>
                                                    <span class="message-time">12:28 AM</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="assets/img/profiles/avatar-02.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">John Doe</span>
                                                    <span class="message-time">6 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="front/assets/img/profiles/avatar-03.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">
                                                        Tarah Shropshire
                                                    </span>
                                                    <span class="message-time">5 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="front/assets/img/profiles/avatar-05.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Mike Litorus</span>
                                                    <span class="message-time">3 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="front/assets/img/profiles/avatar-08.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">
                                                        Catherine Manseau
                                                    </span>
                                                    <span class="message-time">27 Feb</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="chat.html">View all Messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img"><img src="front/assets/img/profiles/avatar-21.jpg" alt="" />
                                <span class="status online"></span></span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">My Profile</a>
                            <a class="dropdown-item" href="settings.html">Settings</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </li>
                </ul>

                <div class="dropdown mobile-user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                            class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>
            </div>

            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">
                                <span>Main</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-dashboard"></i>
                                    <span> Dashboard</span>
                                    <span class="menu-arrow"></span></a>
                                <ul style="display: none">
                                    <li>
                                        <a class="active" href="index.html">Admin Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="employee-dashboard.html">Employee Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-cube"></i>
                                    <span> Apps</span>
                                    <span class="menu-arrow"></span></a>
                                <ul style="display: none">
                                    <li><a href="chat.html">Chat</a></li>
                                    <li class="submenu">
                                        <a href="#"><span> Calls</span>
                                            <span class="menu-arrow"></span></a>
                                        <ul style="display: none">
                                            <li>
                                                <a href="voice-call.html">Voice Call</a>
                                            </li>
                                            <li>
                                                <a href="video-call.html">Video Call</a>
                                            </li>
                                            <li>
                                                <a href="outgoing-call.html">Outgoing Call</a>
                                            </li>
                                            <li>
                                                <a href="incoming-call.html">Incoming Call</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="events.html">Calendar</a></li>
                                    <li>
                                        <a href="contacts.html">Contacts</a>
                                    </li>
                                    <li><a href="inbox.html">Email</a></li>
                                    <li>
                                        <a href="file-manager.html">File Manager</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-title">
                                <span>Employees</span>
                            </li>
                            <li class="submenu">
                                <a href="#" class="noti-dot"><i class="la la-user"></i>
                                    <span> Employees</span>
                                    <span class="menu-arrow"></span></a>
                                <ul style="display: none">
                                    <li>
                                        <a href="employees.html">All Employees</a>
                                    </li>
                                    <li>
                                        <a href="holidays.html">Holidays</a>
                                    </li>
                                    <li>
                                        <a href="leaves.html">Leaves (Admin)
                                            <span class="badge badge-pill bg-primary float-right">1</span></a>
                                    </li>
                                    <li>
                                        <a href="leaves-employee.html">Leaves (Employee)</a>
                                    </li>
                                    <li>
                                        <a href="leave-settings.html">Leave Settings</a>
                                    </li>
                                    <li>
                                        <a href="attendance.html">Attendance (Admin)</a>
                                    </li>
                                    <li>
                                        <a href="attendance-employee.html">Attendance (Employee)</a>
                                    </li>
                                    <li>
                                        <a href="departments.html">Departments</a>
                                    </li>
                                    <li>
                                        <a href="designations.html">Designations</a>
                                    </li>
                                    <li>
                                        <a href="timesheet.html">Timesheet</a>
                                    </li>
                                    <li>
                                        <a href="shift-scheduling.html">Shift & Schedule</a>
                                    </li>
                                    <li>
                                        <a href="overtime.html">Overtime</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="clients.html"><i class="la la-users"></i>
                                    <span>Clients</span></a>
                            </li>

                            <li>
                                <a href="{{url('addcoach')}}"><i class="la la-user"></i>
                                    <span>Add Instructor</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-rocket"></i>
                                    <span> Projects</span>
                                    <span class="menu-arrow"></span></a>
                                <ul style="display: none">
                                    <li>
                                        <a href="projects.html">Projects</a>
                                    </li>
                                    <li><a href="tasks.html">Tasks</a></li>
                                    <li>
                                        <a href="task-board.html">Task Board</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="page-header">

                    </div>


                    <div class="tableinfo">
                        <h1 class="creadentials">Basic Information</h1>

                        <form method="POST" action="{{ route('storecoach') }}" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Enter Name" required>
                            </div>

                            <div class="form-group">
                                <label for="birthdate">Birth Date</label>
                                <input type="date" name="birthdate">
                            </div>



                            <div class="form-group">
                                <label for="number">Phone Number</label>
                                <input type="tel" name="phone_number" placeholder="Enter Phone Number" required>

                            </div>

                            <div class="form-group">
                                <label for="coach">Type of Coach</label>
                                <select name="typecoach" id="typecoach">
                                    <option value="">Select Coach</option>
                                    <option value="Strength Coach">Strength Coach</option>
                                    <option value="Yoga Coach">Yoga Coach</option>
                                    <option value="Athlete Coach">Athlete Coach</option>
                                    <option value="Zumba Coach">Zumba Coach</option>
                                    <option value="Cardio Coach">Cardio Coach</option>
                                </select>
                            </div>
                            <div class="form-group imagebox">
                                <label for="image-upload" class="image-label">Profile Image</label>
                                <img src="othercss/imagesss/profile/blank.jpg" alt="Profile Image"
                                    class="profile-image">
                                <input type="file" name="file" class="btn btn-success saak" required>
                            </div>






                            <h1 class="creadentials">Create Login Credentials</h1>

                            <label for="email">Email Address</label>
                            <input type="email" name="email" placeholder="Enter Email" required>

                            <label for="email">Create Password</label>
                            <input type="password" id="password" name="password" placeholder="Create Password" required>
                            <button type="button" id="generatePassword" class="btn btn-warning"
                                style="margin:10px;">Generate</button>
                            <button class="emojis" type="button" id="togglePassword">🙈</button>


                            <button class="btn btn-success botun">Submit</button>


                        </form>
                    </div>



                </div>
            </div>
        </div>


        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const generateBtn = document.getElementById('generatePassword');
            const toggleBtn = document.getElementById('togglePassword');
            const passwordField = document.getElementById('password');

            // Generate random password
            generateBtn.addEventListener('click', function() {
                const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$&*";
                const passwordLength = 12;
                let password = "";
                for (let i = 0; i < passwordLength; i++) {
                    password += chars.charAt(Math.floor(Math.random() * chars.length));
                }
                passwordField.value = password;
            });

            // Toggle password visibility
            toggleBtn.addEventListener('click', function() {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                toggleBtn.textContent = type === 'password' ? '🙈' : '😲';
            });
        });
        </script>


        @if(Session::has('message'))
        <script>
        swal("Message", "{{Session::get('message')}}", 'success', {
            button: true,
            button: "Okay",
            timer: 3000,


        });
        </script>
        @endif


        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="front/assets/js/jquery-3.5.1.min.js"></script>

        <script src="front/assets/js/popper.min.js"></script>
        <script src="front/assets/js/bootstrap.min.js"></script>

        <script src="front/assets/js/jquery.slimscroll.min.js"></script>

        <script src="front/assets/plugins/morris/morris.min.js"></script>
        <script src="front/assets/plugins/raphael/raphael.min.js"></script>
        <script src="front/assets/js/chart.js"></script>

        <script src="front/assets/js/app.js"></script>
    </body>

</html>