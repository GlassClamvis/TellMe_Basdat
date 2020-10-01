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


                                <div class="dropdown-header"><strong>Instructor</strong></div>
                                <a class="dropdown-item" href="instructor-dashboard.html">Dashboard</a>
                                <a class="dropdown-item" href="instructor-courses.html">Courses</a>
                                <a class="dropdown-item" href="instructor-quizzes.html">Quizzes</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item" href="student-edit-account.html">Edit Account</a>
                                <a class="dropdown-item" href="student-billing-history.html">Billing</a>
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
                    <img src="assets/images/illustration/teacher/128/white.svg" width="104" class="mr-md-32pt mb-32pt mb-md-0" alt="instructor">
                    <div class="flex mb-32pt mb-md-0">
                        <h2 class="text-white mb-0">Elijah Murray</h2>
                        <p class="lead text-white-50 d-flex align-items-center">Instructor <span class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> 2,300 IQ</span></p>
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
                                    <a href="instructor-dashboard.html" class="nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="instructor-courses.html">Courses</a>
                                        <a class="dropdown-item" href="instructor-quizzes.html">Quizzes</a>
                                        <a class="dropdown-item" href="instructor-edit-course.html">Edit Course</a>
                                        <a class="dropdown-item" href="instructor-edit-quiz.html">Edit Quiz</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Reports</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="instructor-earnings.html">Earnings</a>
                                        <a class="dropdown-item" href="instructor-statement.html">Statement</a>
                                    </div>
                                </li>

                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="instructor-profile.html" class="nav-link">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
















            <div class="py-24pt  border-bottom-2">
                <div class="container page__container">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-1 border-left-3 border-left-accent rounded text-70 text-center mb-lg-0">
                                <div class="card-body">
                                    Earnings this month
                                    <p class="lead text-body mb-0"><strong>$1,569.00</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border rounded text-70 text-center mb-lg-0">
                                <div class="card-body">
                                    Account Balance
                                    <p class="lead text-body mb-0"><strong>$3,917.80</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border rounded text-70 text-center mb-lg-0">
                                <div class="card-body">
                                    Total Sales
                                    <p class="lead text-body mb-0"><strong>$10,211.50</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container page__container page-section">

                <div class="mb-heading d-flex align-items-end">
                    <div class="flex">
                        <h4 class="card-title">Earnings</h4>
                        <p class="card-subtitle">Last Week vs. Previous Week</p>
                    </div>
                    <a href="instructor-earnings.html" class="text-underline">View Earnings</a>
                </div>
                <div class="card p-24pt mb-32pt">
                    <div class="chart" style="height: 320px;">
                        <canvas id="earningsChart" class="chart-canvas"></canvas>
                    </div>
                </div>

                <div class="row mb-8pt">
                    <div class="col-lg-6">

                        <div class="mb-heading d-flex align-items-end">
                            <div class="flex">
                                <h4 class="card-title">Transactions</h4>
                                <p class="card-subtitle">Latest Transactions</p>
                            </div>
                            <a href="instructor-statement.html" class="text-underline">Statement</a>
                        </div>
                        <div class="card">
                            <div data-toggle="lists" data-lists-values='[
            "js-lists-values-course",
            "js-lists-values-document",
            "js-lists-values-amount",
            "js-lists-values-date"
          ]' data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" class="table-responsive">
                                <table class="table table-flush table-nowrap">
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-course">Course</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-document">Document</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-amount">Amount</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Date</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">




                                        <tr>
                                            <td>
                                                <div class="d-flex flex-nowrap align-items-center">
                                                    <a href="instructor-edit-course.html" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/paths/angular_routing_200x168.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="flex">
                                                        <a class="text-body js-lists-values-course" href="instructor-edit-course.html"><strong>Angular Routing In-Depth</strong></a><br>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8734</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">12 Nov 2018</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex flex-nowrap align-items-center">
                                                    <a href="instructor-edit-course.html" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/paths/angular_testing_200x168.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="flex">
                                                        <a class="text-body js-lists-values-course" href="instructor-edit-course.html"><strong>Angular Unit Testing</strong></a><br>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8735</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">13 Nov 2018</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex flex-nowrap align-items-center">
                                                    <a href="instructor-edit-course.html" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/paths/typescript_200x168.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="flex">
                                                        <a class="text-body js-lists-values-course" href="instructor-edit-course.html"><strong>Introduction to TypeScript</strong></a><br>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8736</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">14 Nov 2018</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex flex-nowrap align-items-center">
                                                    <a href="instructor-edit-course.html" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/paths/angular_200x168.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="flex">
                                                        <a class="text-body js-lists-values-course" href="instructor-edit-course.html"><strong>Learn Angular Fundamentals</strong></a><br>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8737</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">15 Nov 2018</small>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="mb-heading d-flex align-items-center">
                            <div class="flex">
                                <h4 class="card-title">Comments</h4>
                                <p class="card-subtitle">Latest comments</p>
                            </div>
                            <div class="d-flex align-items-center text-right">
                                <a href="#" class="btn btn-outline-secondary btn-sm"><i class="material-icons">keyboard_arrow_left</i></a>
                                <a href="#" class="btn btn-outline-secondary btn-sm ml-8pt"><i class="material-icons">keyboard_arrow_right</i></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="avatar avatar-sm">
                                            <img src="assets/images/people/110/guy-9.jpg" alt="Guy" class="avatar-img rounded-circle">
                                        </a>
                                    </div>
                                    <div class="media-body d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <a href="profile.html" class="text-body"><strong>Laza Bogdan</strong></a>
                                            <small class="ml-auto text-muted">27 min ago</small><br>
                                        </div>
                                        <span class="text-muted">on <a href="instructor-edit-course.html" class="text-50" style="text-decoration: underline;">Data Visualization With Chart.js</a></span>
                                        <p class="mt-1 mb-0 text-70">How can I load Charts on a page?</p>
                                    </div>
                                </div>
                                <div class="media ml-sm-32pt mt-3 border rounded p-3 bg-dark d-inline-flex measure-paragraph-max">
                                    <div class="media-left">
                                        <a href="#" class="avatar avatar-sm">
                                            <img src="assets/images/people/110/guy-6.jpg" alt="Guy" class="avatar-img rounded-circle">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <a href="profile.html" class="text-body"><strong>FrontendMatter</strong></a>
                                            <small class="ml-auto text-muted">just now</small>
                                        </div>
                                        <p class="mt-1 mb-0 text-70">Hi Bogdan,<br> Thank you for purchasing our course! <br><br>Please have a look at the charts library documentation <a href="#" class="text-underline">here</a> and follow the instructions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <form action="#" id="message-reply">
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control form-control-appended" required="" placeholder="Quick Reply">
                                        <div class="input-group-append">
                                            <div class="input-group-text pr-2">
                                                <button class="btn btn-flush" type="button"><i class="material-icons">tag_faces</i></button>
                                            </div>
                                            <div class="input-group-text pl-0">
                                                <div class="custom-file custom-file-naked d-flex" style="width: 24px; overflow: hidden;">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" style="color: inherit;" for="customFile">
                                                        <i class="material-icons">attach_file</i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group-text pl-0">
                                                <button class="btn btn-flush" type="button"><i class="material-icons">send</i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- <div class="mb-heading">
        <h4 class="card-title">Sales today</h4>
        <p class="card-subtitle">by course</p>
      </div>

      <div class="card">
        <ul class="list-group list-group-flush mb-0">
          <li class="list-group-item">
            <div class="media align-items-center">
              <div class="media-body">
                <a href="instructor-edit-course.html" class="text-body"><strong>Basics of HTML</strong></a>
              </div>
              <div class="media-right">
                <div class="text-center">
                  <span class="badge badge-pill badge-primary">15</span>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media align-items-center">
              <div class="media-body">
                <a href="instructor-edit-course.html" class="text-body"><strong>Angular in Steps</strong></a>
              </div>
              <div class="media-right">
                <div class="text-center">
                  <span class="badge badge-pill badge-success">50</span>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media align-items-center">
              <div class="media-body">
                <a href="instructor-edit-course.html" class="text-body"><strong>Bootstrap Foundations</strong></a>
              </div>
              <div class="media-right">
                <div class="text-center">
                  <span class="badge badge-pill badge-warning">14</span>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media align-items-center">
              <div class="media-body">
                <a href="instructor-edit-course.html" class="text-body"><strong>GitHub Basics</strong></a>
              </div>
              <div class="media-right">
                <div class="text-center">
                  <span class="badge badge-pill badge-danger ">14</span>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div> -->

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
                <li class="nav-item dropup">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="student-dashboard.html">Dashboard</a>
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
                <li class="nav-item dropup active">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Instructor</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item active" href="instructor-dashboard.html">Dashboard</a>
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
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#student_menu">
                            Student
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="student_menu">
                            <li class="sidebar-menu-item">
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
                    <li class="sidebar-menu-item active open">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#instructor_menu">
                            Instructor
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show sm-indent" id="instructor_menu">
                            <li class="sidebar-menu-item active">
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
      'blue-light': 'http://tutorio-bootstrap.frontendmatter.com/instructor-dashboard.html',
      'blue-dark': 'http://tutorio-dark.frontendmatter.com/instructor-dashboard.html',
      'teal-light': 'http://tutorio-teal.frontendmatter.com/instructor-dashboard.html',
      'teal-dark': 'http://tutorio-teal-dark.frontendmatter.com/instructor-dashboard.html'
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

    <!-- UI Charts Page JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script src="assets/js/page.instructor-dashboard.js"></script>

    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

</body>

</html>