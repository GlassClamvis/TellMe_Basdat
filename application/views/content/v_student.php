<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="assets/vendor/fix-footer.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="assets/css/preloader.css" rel="stylesheet">
    <link type="text/css" href="assets/css/preloader.rtl.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">





</head>

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
                        <img class="navbar-brand-icon mr-0 mr-md-8pt" src="assets/images/logo/white-100@2x.png" width="30" alt="Tutorio">
                        <span class="d-none d-md-block">Tutorio</span>
                    </a>

                    <button class="btn btn-black mr-16pt" data-toggle="modal" data-target="#courses">Courses <i class="material-icons">arrow_drop_down</i></button>

                    <form class="search-form search-form--black search-form-courses d-none d-md-flex" action="library-filters.html">
                        <input type="text" class="form-control" placeholder="What would you like to learn?">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </form>

                    <!-- Main Navigation -->



                    <nav class="nav navbar-nav ml-auto flex-nowrap">
                        <div class="nav-item dropdown d-none d-sm-flex ml-16pt">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <img width="32" height="32" class="rounded-circle" src="assets/images/people/50/guy-3.jpg" alt="student" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <div class="dropdown-header"><strong>Student</strong></div>
                                <a class="dropdown-item active" href="student-dashboard.html">Dashboard</a>
                                <a class="dropdown-item" href="student-my-courses.html">My Courses</a>
                                <a class="dropdown-item" href="student-quiz-results.html">Quiz Results</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item" href="student-edit-account.html">Edit Account</a>
                                <a class="dropdown-item" href="student-billing.html">Billing</a>
                                <a class="dropdown-item" href="student-billing-history.html">Payments</a>
                                <a class="dropdown-item" href="login.html">Logout</a>


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
                                                    <img src="assets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong>Michelle</strong>
                                                    <span class="text-black-70">Clients loved the new design.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="assets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong>Michelle</strong>
                                                    <span class="text-black-70">🔥 Superb job..</span>
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

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
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
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </li>
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
                    <img src="assets/images/illustration/student/128/white.svg" width="104" class="mr-md-32pt mb-32pt mb-md-0" alt="student">
                    <div class="flex mb-32pt mb-md-0">
                        <h2 class="text-white mb-0">Alexander Watson</h2>
                        <p class="lead text-white-50 d-flex align-items-center">Student <span class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> 2,300 IQ</span></p>
                    </div>
                    <a href="student-edit-account.html" class="btn btn-outline-white">Edit account</a>
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

                                <li class="nav-item active">
                                    <a href="student-dashboard.html" class="nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-my-courses.html" class="nav-link">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-discussions.html" class="nav-link">Discussions</a>
                                </li>

                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="student-profile.html" class="nav-link">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


















            <div class="container page__container">
                <div class="page-section">
                    <div class="card border-left-4 border-left-accent card-sm mb-lg-32pt">
                        <div class="card-body pl-16pt">
                            <div class="media flex-wrap align-items-center">
                                <div class="media-left">
                                    <i class="material-icons text-50">access_time</i>
                                </div>
                                <div class="media-body" style="min-width: 180px">
                                    Your subscription ends on <strong>25 February 2015</strong>
                                </div>
                                <div class="media-right mt-2 mt-sm-0">
                                    <a class="btn btn-link text-secondary" href="student-billing.html">Upgrade</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-lg-8pt">
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <div class="h2 mb-0 mr-3 text-accent">116</div>
                                    <div class="flex">
                                        <p class="mb-0"><strong>Angular</strong></p>
                                        <p class="text-50 mb-0 mt-n1">Best score</p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle text-70" data-toggle="dropdown">Popular Topics</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item">Popular Topics</a>
                                            <a href="" class="dropdown-item">Web Design</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-24pt">
                                    <div class="chart" style="height: 344px;">
                                        <canvas id="topicIqChart" class="chart-canvas"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-header d-flex align-items-center border-0">
                                    <div class="h2 mb-0 mr-3 text-accent">432</div>
                                    <div class="flex">
                                        <p class="mb-0"><strong>Experience IQ</strong></p>
                                        <p class="text-50 mb-0 mt-n1">4 days streak this week</p>
                                    </div>
                                    <i class="material-icons text-muted ml-2">trending_up</i>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="chart" style="height: 128px;">
                                        <canvas id="iqChart" class="chart-canvas"></canvas>
                                    </div>
                                </div>
                            </div>







                            <div id="carouselExampleFade" class="carousel carousel-card slide mb-24pt">
                                <div class="carousel-inner">

                                    <div class="carousel-item active">

                                        <a class="card mb-0" href="">
                                            <img src="assets/images/achievements/flinto.png" alt="Flinto" class="card-img" style="max-height: 100%; width: initial;">
                                            <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                            <span class="card-body fullbleed">
                                                <span class="row">
                                                    <span class="col-5 text-center">
                                                        <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Achievement</span>
                                                        <span class="text-white-60 d-block mb-16pt">Jun 5, 2018</span>
                                                        <img src="assets/images/illustration/achievement/128/white.png" alt="achievement">
                                                    </span>
                                                    <span class="col-7 d-flex flex-column">
                                                        <span class="text-right flex">
                                                            <img src="assets/images/paths/flinto_40x40@2x.png" width="64" alt="Flinto" class="rounded">
                                                        </span>
                                                        <span>
                                                            <span class="h4 text-white m-0 d-block">Flinto</span>
                                                            <span class="text-white-60">Introduction to The App Design Application</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>

                                    <div class="carousel-item">

                                        <a class="card mb-0" href="">
                                            <img src="assets/images/achievements/angular.png" alt="Angular fundamentals" class="card-img" style="max-height: 100%; width: initial;">
                                            <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                            <span class="card-body fullbleed">
                                                <span class="row">
                                                    <span class="col-5 text-center">
                                                        <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Achievement</span>
                                                        <span class="text-white-60 d-block mb-16pt">Jun 5, 2018</span>
                                                        <img src="assets/images/illustration/achievement/128/white.png" alt="achievement">
                                                    </span>
                                                    <span class="col-7 d-flex flex-column">
                                                        <span class="text-right flex">
                                                            <img src="assets/images/paths/angular_40x40@2x.png" width="64" alt="Angular fundamentals" class="rounded">
                                                        </span>
                                                        <span>
                                                            <span class="h4 text-white m-0 d-block">Angular fundamentals</span>
                                                            <span class="text-white-60">Creating and Communicating Between Angular Components</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>

                                </div>
                                <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_left</span>
    <span class="sr-only">Previous</span>
  </a> -->
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                    <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>


                        </div>
                    </div>

                    <div class="row mb-lg-8pt">
                        <div class="col-lg-6 mb-8pt mb-sm-0">
                            <div class="page-heading">
                                <h4>Learning Paths</h4>
                                <a href="student-my-courses.html" class="text-underline ml-sm-auto">My learning paths</a>
                            </div>




                            <div class="card card-path js-overlay stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-16pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title text-body mb-0">Angular</div>
                                                    <div class="text-muted d-flex lh-1">24 courses</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="path.html" class="ml-4pt btn btn-link text-secondary">Resume</a>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Angular</div>
                                        <span class="text-black-50 d-flex lh-1">18 courses</span>
                                    </div>
                                </div>

                                <div class="my-32pt">
                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                        <div class="d-flex align-items-center mr-8pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="path.html" class="btn btn-primary mr-8pt">Resume</a>
                                        <a href="path.html" class="btn btn-outline-secondary ml-0">Start over</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                    </div>
                                    <small class="text-black-50">4/5</small>
                                </div>
                            </div>


                            <div class="card card-path js-overlay stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-16pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title text-body mb-0">Swift</div>
                                                    <div class="text-muted d-flex lh-1">24 courses</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="path.html" class="ml-4pt btn btn-link text-secondary border-1 border-secondary">Resume</a>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Swift</div>
                                        <span class="text-black-50 d-flex lh-1">18 courses</span>
                                    </div>
                                </div>

                                <div class="my-32pt">
                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                        <div class="d-flex align-items-center mr-8pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="path.html" class="btn btn-primary mr-8pt">Resume</a>
                                        <a href="path.html" class="btn btn-outline-secondary ml-0">Start over</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                    </div>
                                    <small class="text-black-50">4/5</small>
                                </div>
                            </div>


                            <div class="card card-path js-overlay stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-16pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title text-body mb-0">React Native</div>
                                                    <div class="text-muted d-flex lh-1">24 courses</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="path.html" class="ml-4pt btn btn-link text-secondary">Resume</a>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">React Native</div>
                                        <span class="text-black-50 d-flex lh-1">18 courses</span>
                                    </div>
                                </div>

                                <div class="my-32pt">
                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                        <div class="d-flex align-items-center mr-8pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="path.html" class="btn btn-primary mr-8pt">Resume</a>
                                        <a href="path.html" class="btn btn-outline-secondary ml-0">Start over</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                    </div>
                                    <small class="text-black-50">4/5</small>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="page-heading">
                                <h4>Courses</h4>
                                <a href="student-my-courses.html" class="text-underline ml-sm-auto">My courses</a>
                            </div>



                            <div class="position-relative carousel-card">
                                <div class="js-mdk-carousel row d-block" id="carousel-courses1">

                                    <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#carousel-courses1" role="button" data-slide="next">
                                        <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                    <div class="mdk-carousel__content">

                                        <div class="col-12 col-sm-6">

                                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">




                                                <a href="student-take-course.html" class="js-image" data-position="">
                                                    <img src="assets/images/paths/angular_430x168.png" alt="course">
                                                    <span class="overlay__content">
                                                        <span class="overlay__action d-flex flex-column text-center">
                                                            <i class="material-icons">play_circle_outline</i>
                                                            <small>Resume course</small>
                                                        </span>
                                                    </span>
                                                </a>

                                                <div class="mdk-reveal__content">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex">
                                                                <a class="card-title" href="student-take-course.html">Learn Angular fundamentals</a>
                                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                                            </div>
                                                            <a href="student-take-course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                            </div>
                                                            <small class="text-50">6 hours</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0">Learn Angular fundamentals</div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small">with</span>
                                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        <div class="d-flex align-items-center mr-8pt">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="student-take-lesson.html" class="btn btn-primary mr-8pt">Resume</a>
                                                        <a href="student-take-course.html" class="btn btn-outline-secondary ml-0">Start over</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                                    <div class="rating mr-8pt">
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                    </div>
                                                    <small class="text-black-50">4/5</small>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-6">

                                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">




                                                <a href="student-take-course.html" class="js-image" data-position="">
                                                    <img src="assets/images/paths/swift_430x168.png" alt="course">
                                                    <span class="overlay__content">
                                                        <span class="overlay__action d-flex flex-column text-center">
                                                            <i class="material-icons">play_circle_outline</i>
                                                            <small>Resume course</small>
                                                        </span>
                                                    </span>
                                                </a>

                                                <div class="mdk-reveal__content">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex">
                                                                <a class="card-title" href="student-take-course.html">Build an iOS Application in Swift</a>
                                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                                            </div>
                                                            <a href="student-take-course.html" class="ml-4pt material-icons text-accent card-course__icon-favorite">favorite</a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                            </div>
                                                            <small class="text-50">6 hours</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0">Build an iOS Application in Swift</div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small">with</span>
                                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        <div class="d-flex align-items-center mr-8pt">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="student-take-lesson.html" class="btn btn-primary mr-8pt">Resume</a>
                                                        <a href="student-take-course.html" class="btn btn-outline-secondary ml-0">Start over</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                                    <div class="rating mr-8pt">
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                    </div>
                                                    <small class="text-black-50">4/5</small>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-6">

                                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">




                                                <a href="student-take-course.html" class="js-image" data-position="">
                                                    <img src="assets/images/paths/wordpress_430x168.png" alt="course">
                                                    <span class="overlay__content">
                                                        <span class="overlay__action d-flex flex-column text-center">
                                                            <i class="material-icons">play_circle_outline</i>
                                                            <small>Resume course</small>
                                                        </span>
                                                    </span>
                                                </a>

                                                <div class="mdk-reveal__content">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex">
                                                                <a class="card-title" href="student-take-course.html">Build a WordPress Website</a>
                                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                                            </div>
                                                            <a href="student-take-course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                            </div>
                                                            <small class="text-50">6 hours</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0">Build a WordPress Website</div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small">with</span>
                                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        <div class="d-flex align-items-center mr-8pt">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="student-take-lesson.html" class="btn btn-primary mr-8pt">Resume</a>
                                                        <a href="student-take-course.html" class="btn btn-outline-secondary ml-0">Start over</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                                    <div class="rating mr-8pt">
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                    </div>
                                                    <small class="text-black-50">4/5</small>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-6">

                                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">




                                                <a href="student-take-course.html" class="js-image" data-position="left">
                                                    <img src="assets/images/paths/react_430x168.png" alt="course">
                                                    <span class="overlay__content">
                                                        <span class="overlay__action d-flex flex-column text-center">
                                                            <i class="material-icons">play_circle_outline</i>
                                                            <small>Resume course</small>
                                                        </span>
                                                    </span>
                                                </a>

                                                <div class="mdk-reveal__content">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex">
                                                                <a class="card-title" href="student-take-course.html">Become a React Native Developer</a>
                                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                                            </div>
                                                            <a href="student-take-course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                            </div>
                                                            <small class="text-50">6 hours</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0">Become a React Native Developer</div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small">with</span>
                                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        <div class="d-flex align-items-center mr-8pt">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="student-take-lesson.html" class="btn btn-primary mr-8pt">Resume</a>
                                                        <a href="student-take-course.html" class="btn btn-outline-secondary ml-0">Start over</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                                    <div class="rating mr-8pt">
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                    </div>
                                                    <small class="text-black-50">4/5</small>
                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <h4>Discussions</h4>

                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center" style="white-space: nowrap;">
                                <div class="col-lg-auto">
                                    <form class="search-form search-form--dark d-lg-inline-flex mb-8pt mb-lg-0" action="student-discussions.html">
                                        <input type="text" class="form-control w-lg-auto" placeholder="Search discussions">
                                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                                    </form>
                                </div>
                                <div class="col-lg d-flex flex-wrap align-items-center">
                                    <div class="ml-lg-auto dropdown">
                                        <a href="#" class="btn btn-link dropdown-toggle text-70" data-toggle="dropdown">My Posts</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item active">My Posts</a>
                                            <a href="" class="dropdown-item">All Posts</a>
                                        </div>
                                    </div>
                                    <a href="student-discussions-ask.html" class="btn btn-outline-secondary">Ask a question</a>
                                </div>
                            </div>
                        </div>


                        <div class="list-group list-group-flush">

                            <div class="list-group-item p-3">
                                <div class="row align-items-center">
                                    <div class="col-md-3 mb-8pt mb-md-0">
                                        <div class="media">
                                            <div class="media-left mr-16pt">
                                                <a href="student-profile.html"><img src="assets/images/people/110/guy-1.jpg" width="40" alt="avatar" class="rounded-circle"></a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <p class="text-muted m-0">2 days ago</p>
                                                <p class="m-0"><a href="student-profile.html" class="text-body">Laza Bogdan</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-8pt mb-md-0">
                                        <p class="mb-8pt"><a href="student-discussion.html" class="text-body"><strong>Using Angular HttpClientModule instead of HttpModule</strong></a></p>


                                        <a href="student-discussion.html" class="chip chip-outline-secondary">Angular fundamentals</a>


                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                        <h5 class="m-0">1</h5>
                                        <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item p-3">
                                <div class="row align-items-center">
                                    <div class="col-md-3 mb-8pt mb-md-0">
                                        <div class="media">
                                            <div class="media-left mr-16pt">
                                                <a href="student-profile.html"><img src="assets/images/people/110/guy-2.jpg" width="40" alt="avatar" class="rounded-circle"></a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <p class="text-muted m-0">3 days ago</p>
                                                <p class="m-0"><a href="student-profile.html" class="text-body">Adam Curtis</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-8pt mb-md-0">
                                        <p class="mb-0"><a href="student-discussion.html" class="text-body"><strong>Why am I getting an error when trying to install angular/http@2.4.2</strong></a></p>

                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                        <h5 class="m-0">1</h5>
                                        <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="card-body text-center">
                            <a href="student-discussions.html" class="text-underline">View more discussions</a>
                        </div>
                    </div>

                </div>
            </div>



        </div>
        <!-- // END Header Layout Content -->

        <div class="js-fix-footer  border-top-2">
            <div class="container page-section py-lg-48pt">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-6 col-md-4 mb-24pt mb-md-0">
                                <h4 class="">Learn</h4>
                                <nav class="nav nav-links nav--flush flex-column">
                                    <a class="nav-link" href="library.html">Library</a>
                                    <a class="nav-link" href="library-featured.html">Featured</a>
                                    <a class="nav-link" href="library-filters.html">Explore</a>
                                    <a class="nav-link" href="paths.html">Learning Paths</a>
                                </nav>
                            </div>
                            <div class="col-6 col-md-4 mb-24pt mb-md-0">
                                <h4 class="">Join us</h4>
                                <nav class="nav nav-links nav--flush flex-column">
                                    <a class="nav-link" href="pricing.html">Pricing</a>
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="signup.html">Sign Up</a>
                                    <a class="nav-link" href="signup-payment.html">Payment</a>
                                </nav>
                            </div>
                            <div class="col-6 col-md-4 mb-32pt mb-md-0">
                                <h4 class="">Community</h4>
                                <nav class="nav nav-links nav--flush flex-column">
                                    <a class="nav-link" href="student-discussions.html">Discussions</a>
                                    <a class="nav-link" href="student-discussions-ask.html">Ask Question</a>
                                    <a class="nav-link" href="student-profile.html">Student Profile</a>
                                    <a class="nav-link" href="instructor-profile.html">Instructor Profile</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <p class="text-70 brand justify-content-md-end">
                            <img class="brand-icon" src="assets/images/logo/white-100@2x.png" width="30" alt="Tutorio"> Tutorio
                        </p>
                        <p class="text-muted mb-0 mb-lg-16pt">Tutorio is an online learning platform that helps anyone achieve their personal and professional goals.</p>
                    </div>
                </div>
            </div>
            <div class="bg-footer page-section py-lg-32pt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                            <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                            <nav class="nav nav-links nav--flush">
                                <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png" width="24" height="24" alt="Facebook"></a>
                                <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/twitter-square@2x.png" width="24" height="24" alt="Twitter"></a>
                                <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/vimeo-square@2x.png" width="24" height="24" alt="Vimeo"></a>
                                <a href="#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                            <a href="" class="btn btn-outline-white">English <span class="icon--right material-icons">arrow_drop_down</span></a>
                        </div>
                        <div class="col-md-4 text-md-right">
                            <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                                <a href="" class="text-white-70 text-underline mr-16pt">Terms</a>
                                <a href="" class="text-white-70 text-underline">Privacy policy</a>
                            </p>
                            <p class="text-white-50 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- // END Header Layout -->

    <div class="navbar navbar-expand-sm navbar-mini navbar-dark fixed-bottom bg-dark d-none d-md-flex p-0" id="demo-navbar">
        <div class="container-fluid">

            <!-- Main Navigation -->
            <ul class="nav navbar-nav flex-nowrap">
                <li class="nav-item dropup">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Catalog</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.html">Home page</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="library.html">Library</a>
                        <a class="dropdown-item" href="library-featured.html">Featured</a>
                        <a class="dropdown-item" href="library-development.html">Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="library-filters.html">Explore</a>
                        <a class="dropdown-item" href="library-filters-list.html">Explore List</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="paths.html">Learning Paths</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="course.html">Course Details</a>
                        <a class="dropdown-item" href="lesson.html">Lesson Details</a>
                        <a class="dropdown-item" href="path.html">Path Details</a>
                    </div>
                </li>
                <li class="nav-item dropup active">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item active" href="student-dashboard.html">Dashboard</a>
                        <a class="dropdown-item" href="student-my-courses.html">My Courses</a>
                        <a class="dropdown-item" href="student-take-course.html">Take Course</a>
                        <a class="dropdown-item" href="student-take-lesson.html">Take Lesson</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-take-quiz.html">Take Quiz</a>
                        <a class="dropdown-item" href="student-quiz-result-details.html">Quiz Result</a>
                        <a class="dropdown-item" href="student-quiz-results.html">My Quizzes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-path-assessment.html">Skill Assessment</a>
                        <a class="dropdown-item" href="student-path-assessment-result.html">Skill Result</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Instructor</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="instructor-dashboard.html">Dashboard</a>
                        <a class="dropdown-item" href="instructor-courses.html">Courses</a>
                        <a class="dropdown-item" href="instructor-quizzes.html">Quizzes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="instructor-edit-course.html">Edit Course</a>
                        <a class="dropdown-item" href="instructor-edit-quiz.html">Edit Quiz</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="instructor-earnings.html">Earnings</a>
                        <a class="dropdown-item" href="instructor-statement.html">Statement</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Community</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="student-discussions.html">Discussions</a>
                        <a class="dropdown-item" href="student-discussion.html">Discussion Details</a>
                        <a class="dropdown-item" href="student-discussions-ask.html">Ask Question</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-profile.html">Student Profile</a>
                        <a class="dropdown-item" href="instructor-profile.html">Instructor Profile</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="pricing.html">Pricing</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="signup.html">Signup</a>
                        <a class="dropdown-item" href="signup-payment.html">Payment</a>
                        <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                        <a class="dropdown-item" href="change-password.html">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-edit-account.html">Edit Account</a>
                        <a class="dropdown-item" href="student-edit-account-profile.html">Profile &amp; Privacy</a>
                        <a class="dropdown-item" href="student-edit-account-notifications.html">Email Notifications</a>
                        <a class="dropdown-item" href="student-edit-account-password.html">Account Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-billing.html">Subscription</a>
                        <a class="dropdown-item" href="student-billing-upgrade.html">Upgrade Account</a>
                        <a class="dropdown-item" href="student-billing-payment.html">Payment Information</a>
                        <a class="dropdown-item" href="student-billing-history.html">Payment History</a>
                        <a class="dropdown-item" href="student-billing-invoice.html">Invoice</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Components</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="ui-buttons.html">Buttons</a>
                        <a class="dropdown-item" href="ui-charts.html">Charts</a>
                        <a class="dropdown-item" href="ui-avatars.html">Avatars</a>
                        <a class="dropdown-item" href="ui-forms.html">Forms</a>
                        <a class="dropdown-item" href="ui-loaders.html">Loaders</a>
                        <a class="dropdown-item" href="ui-tables.html">Tables</a>
                        <a class="dropdown-item" href="ui-cards.html">Cards</a>
                        <a class="dropdown-item" href="ui-icons.html">Icons</a>
                        <a class="dropdown-item" href="ui-tabs.html">Tabs</a>
                        <a class="dropdown-item" href="ui-alerts.html">Alerts</a>
                        <a class="dropdown-item" href="ui-badges.html">Badges</a>
                        <a class="dropdown-item" href="ui-progress.html">Progress</a>
                        <a class="dropdown-item" href="ui-pagination.html">Pagination</a>
                    </div>
                </li>
            </ul>
            <!-- // END Main Navigation -->

        </div>
    </div>
    <!-- drawer -->
    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-dark sidebar-left" data-perfect-scrollbar>
                <div class="sidebar-p-a sidebar-b-b sidebar-m-b pt-0">

                    <!-- Brand -->
                    <a href="index.html" class="sidebar-brand">
                        <img class="sidebar-brand-icon" src="assets/images/logo/white-100.svg" width="30" alt="Tutorio">
                        <span>Tutorio</span>
                    </a>
                    <!-- // END Brand -->

                    <!-- Search -->
                    <form action="library-filters.html" class="search-form search-form--black">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </form>

                </div>

                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="index.html">Home Page</a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#catalog_menu">
                            Catalog
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="catalog_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library.html">Library</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library-featured.html">Featured</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library-development.html">Development</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library-filters.html">Explore</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library-filters-list.html">Explore List</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="paths.html">Learning Paths</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="course.html">Course Details</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="lesson.html">Lesson Details</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="path.html">Path Details</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-heading">Pages</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item active open">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#student_menu">
                            Student
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show sm-indent" id="student_menu">
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="student-dashboard.html">Dashboard</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-my-courses.html">My Courses</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-quiz-results.html">My Quizzes</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-course.html">Take Course</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-lesson.html">Take Lesson</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-quiz.html">Take Quiz</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-quiz-result-details.html">Quiz Result</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-path-assessment.html">Skill Assessment</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-path-assessment-result.html">Skill Result</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#instructor_menu">
                            Instructor
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="instructor_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-dashboard.html">Dashboard</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-courses.html">Manage Courses</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-quizzes.html">Manage Quizzes</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-edit-course.html">Edit Course</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-edit-quiz.html">Edit Quiz</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-earnings.html">Earnings</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-statement.html">Statement</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                            Account
                            <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                            <span class="sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="account_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="pricing.html">Pricing</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="login.html">Login</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="signup.html">Signup</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="signup-payment.html">Payment</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="reset-password.html">Reset Password</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="change-password.html">Change Password</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-edit-account.html">Edit Account</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-edit-account-profile.html">Profile &amp; Privacy</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-edit-account-notifications.html">Email Notifications</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-edit-account-password.html">Account Password</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing.html">Subscription</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing-upgrade.html">Upgrade Account</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing-payment.html">Payment Information</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing-history.html">Payment History</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing-invoice.html">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#community_menu">
                            Community
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="community_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-discussions.html">Discussions</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-discussion.html">Discussion Details</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-discussions-ask.html">Ask Question</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-profile.html">Student Profile</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-profile.html">Instructor Profile</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-heading">Components</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                            Components
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-buttons.html">Buttons</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-charts.html">Charts</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-avatars.html">Avatars</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-forms.html">Forms</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-loaders.html">Loaders</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-tables.html">Tables</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-cards.html">Cards</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-icons.html">Icons</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-tabs.html">Tabs</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-alerts.html">Alerts</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-badges.html">Badges</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-progress.html">Progress</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-pagination.html">Pagination</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- // END drawer -->
    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings theme-active="teal-dark" :theme-location="{
      'blue-light': 'http://tutorio-bootstrap.frontendmatter.com/student-dashboard.html',
      'blue-dark': 'http://tutorio-dark.frontendmatter.com/student-dashboard.html',
      'teal-light': 'http://tutorio-teal.frontendmatter.com/student-dashboard.html',
      'teal-dark': 'http://tutorio-teal-dark.frontendmatter.com/student-dashboard.html'
    }" sidebar-type="dark" sidebar-variant="bg-transparent border-0"></app-settings>
    </div>
    <!-- Modal -->
    <div class="modal courses-modal" id="courses" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-i8-plus bg-body pr-0">
                            <div class="py-16pt pl-16pt menu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#courses-development" data-toggle="tab">Development</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#courses-design" data-toggle="tab">Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#courses-photography" data-toggle="tab">Photography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#courses-marketing" data-toggle="tab">Marketing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#courses-business" data-toggle="tab">Business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-i8-plus-auto tab-content">


                            <div id="courses-development" class="tab-pane show active">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Web Development</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">JavaScript</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">HTML</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">CSS</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">WordPress</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">PHP</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">iOS Development</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-design" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Illustration</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Design Skills</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Design Techniques</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Page Layout</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Projects</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Drawing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Typography</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-photography" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Cameras</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Raw Processing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Masking</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Compositing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Portraits</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Photo Management</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Lighting</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-marketing" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Small Business</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Enterprise Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Content Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Online Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Social Media Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Advertising</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-business" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Business Skills</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Productivity</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Communication</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Leadership</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Management</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Career Development</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Spreadsheets</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Fix Footer -->
    <script src="assets/vendor/fix-footer.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>


    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Moment.js -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/moment-range.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- Charts JS -->
    <script src="assets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script src="assets/js/page.student-dashboard.js"></script>

</body>

</html>
