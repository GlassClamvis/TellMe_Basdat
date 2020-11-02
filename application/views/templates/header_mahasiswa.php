<body class="layout-navbar-mini-fixed-bottom">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header bg-dark js-mdk-header mb-0" data-effects="waterfall blend-background" data-fixed data-condenses>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt" id="default-navbar" data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="index.html" class="navbar-brand">
                        <img class="navbar-brand-icon mr-0 mr-md-8pt" src="<?php echo base_url ('assets/tealdark/images/logo/putih.png')?>" width="60" alt="TellMe Basdat">
                        <span class="d-none d-md-block">TellMe Basdat</span>
                    </a>

                    <!-- <button class="btn btn-black mr-16pt" data-toggle="modal" data-target="#courses">Courses <i class="material-icons">arrow_drop_down</i></button> -->

                    <form class="search-form search-form--black search-form-courses d-none d-md-flex" action="library-filters.html">
                        <input type="text" class="form-control" placeholder="What would you like to learn?">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </form>

                    <!-- Main Navigation -->



                    <nav class="nav navbar-nav ml-auto flex-nowrap">
                        <div class="nav-item dropdown d-none d-sm-flex ml-16pt">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <img width="32" height="32" class="rounded-circle" src="<?php echo base_url ('assets/tealdark/images/people/50/guy-3.jpg')?>" alt="student" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <div class="dropdown-header"><strong>Student</strong></div>
                                <a class="dropdown-item" href="<?php echo base_url('student') ?>">Dashboard</a>
                                <a class="dropdown-item" href="student-my-courses.html">My Courses</a>
                                <a class="dropdown-item" href="student-quiz-results.html">Quiz Results</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header"><strong>Akun</strong></div>
                                <a class="dropdown-item" href="<?php echo base_url('student/edit/'.$_SESSION['id_mahasiswa']); ?>">Edit Profil</a>
                                <!-- <a class="dropdown-item" href="student-billing.html">Billing</a>
                                <a class="dropdown-item" href="student-billing-history.html">Payments</a> -->
                                <a class="dropdown-item" href="<?php echo base_url('login/logout')?>">Logout</a>


                            </div>
                        </div>




                        <!-- Notifications dropdown -->
                        <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                            <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll data-caret="false">
                                <i class="material-icons">notifications</i>
                                <span class="badge badge-notifications badge-danger">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar class="position-relative">
                                    <div class="dropdown-header"><strong>Messages</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="<?php echo base_url ('assets/tealdark/images/people/110/woman-5.jpg')?>" alt="people" class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong>Michelle</strong>
                                                    <span class="text-black-70">Clients loved the new design.</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>

                                    <div class="dropdown-header"><strong>System notifications</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">3 minutes ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <!-- <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 hours ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-success">group_add</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong>Adrian. D</strong>
                                                    <span class="text-black-70">Wants to join your private group.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">1 day ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-warning">storage</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your deploy was successful.</span>
                                                </span>
                                            </span>
                                        </a> -->

                                    </div>
                                </div>
                            </div>
                        </  li>
                        <!-- // END Notifications dropdown -->
                    </nav>

                    <!-- // END Main Navigation -->

                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content ">

            <div class="bg-gradient-primary border-bottom-white py-32pt">
                <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                    <img src="<?php echo base_url ('assets/tealdark/images/illustration/student/128/white.svg')?>" width="104" class="mr-md-32pt mb-32pt mb-md-0" alt="student">
                    <div class="flex mb-32pt mb-md-0">
                        <h2 class="text-white mb-0"><?php echo $_SESSION['nama_mahasiswa']; ?></h2>
                        <p class="lead text-white-50 d-flex align-items-center">NIM<span class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> <?php echo $_SESSION['nim_mahasiswa']; ?></span></p>
                    </div>
                    <a class="btn btn-outline-white" data-toggle="modal" data-target="#profil">Detail</a>
                </div>
            </div>

            <div class="navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 ">
                <div class="container page__container">

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler ml-n16pt" type="button" data-toggle="collapse" data-target="#navbar-submenu2">
                        <span class="material-icons">people_outline</span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-submenu2">
                        <div class="navbar-collapse__content pb-16pt pb-sm-0">
                            <ul class="nav navbar-nav">

                                <li class="nav-item">
                                    <a href="<?php echo base_url('student') ?>" class="nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-my-courses.html" class="nav-link">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-discussions.html" class="nav-link">Discussions</a>
                                </li>

                            </ul>
                            <!-- <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="student-profile.html" class="nav-link">Profile</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
