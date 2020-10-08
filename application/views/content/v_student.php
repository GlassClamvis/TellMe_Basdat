<?php $this->load->view("templates/head.php") ?>

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
                                <a class="dropdown-item active" href="student-dashboard.html">Dashboard</a>
                                <a class="dropdown-item" href="student-my-courses.html">My Courses</a>
                                <a class="dropdown-item" href="student-quiz-results.html">Quiz Results</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item" href="student-edit-account.html">Edit Account</a>
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
                    <a class="btn btn-outline-white" data-toggle="modal" data-target="#profil">Profil</a>
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
                            <!-- <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="student-profile.html" class="nav-link">Profile</a>
                                </li>
                            </ul> -->
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
                                <!-- <div class="media-right mt-2 mt-sm-0">
                                    <a class="btn btn-link text-secondary" href="student-billing.html">Upgrade</a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="row mb-lg-8pt">
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <div class="h2 mb-0 mr-3 text-accent">            </div>
                                    <div class="flex">
                                        <p class="mb-0"><strong>          </strong></p>
                                        <p class="text-50 mb-0 mt-n1">      </p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle text-70" data-toggle="dropdown">       </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item">          </a>
                                            <a href="" class="dropdown-item">          </a>
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
                                    <div class="h2 mb-0 mr-3 text-accent">       </div>
                                    <div class="flex">
                                        <p class="mb-0"><strong>               </strong></p>
                                        <p class="text-50 mb-0 mt-n1">              </p>
                                    </div>
                                    <i class="material-icons text-muted ml-2">                   </i>
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
                                            <img src="<?php echo base_url ('assets/tealdark/images/achievements/flinto.png')?>" alt="Flinto" class="card-img" style="max-height: 100%; width: initial;">
                                            <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                            <span class="card-body fullbleed">
                                                <span class="row">
                                                    <span class="col-5 text-center">
                                                        <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">               </span>
                                                        <span class="text-white-60 d-block mb-16pt">                   </span>
                                                        <img src="<?php echo base_url ('assets/tealdark/images/illustration/achievement/128/white.png')?>" alt="achievement">
                                                    </span>
                                                    <span class="col-7 d-flex flex-column">
                                                        <span class="text-right flex">
                                                            <img src="<?php echo base_url ('assets/tealdark/images/paths/flinto_40x40@2x.png')?>" width="64" alt="Flinto" class="rounded">
                                                        </span>
                                                        <span>
                                                            <span class="h4 text-white m-0 d-block">                     </span>
                                                            <span class="text-white-60">                      </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>

                                    <div class="carousel-item">

                                        <a class="card mb-0" href="">
                                            <img src="<?php echo base_url ('assets/tealdark/images/achievements/angular.png')?>" alt="Angular fundamentals" class="card-img" style="max-height: 100%; width: initial;">
                                            <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                            <span class="card-body fullbleed">
                                                <span class="row">
                                                    <span class="col-5 text-center">
                                                        <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">                   </span>
                                                        <span class="text-white-60 d-block mb-16pt">                  </span>
                                                        <img src="<?php echo base_url ('assets/tealdark/images/illustration/achievement/128/white.png')?>" alt="achievement">
                                                    </span>
                                                    <span class="col-7 d-flex flex-column">
                                                        <span class="text-right flex">
                                                            <img src="<?php echo base_url ('assets/tealdark/images/paths/angular_40x40@2x.png')?>" width="64" alt="Angular fundamentals" class="rounded">
                                                        </span>
                                                        <span>
                                                            <span class="h4 text-white m-0 d-block">                </span>
                                                            <span class="text-white-60">                             </span>
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
                                <h4>        </h4>
                                <a href="student-my-courses.html" class="text-underline ml-sm-auto">        </a>
                            </div>




                            <div class="card card-path js-overlay stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-16pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/angular_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title text-body mb-0">       </div>
                                                    <div class="text-muted d-flex lh-1">        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="path.html" class="ml-4pt btn btn-link text-secondary">       </a>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/angular_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">  </div>
                                        <span class="text-black-50 d-flex lh-1">   </span>
                                    </div>
                                </div>

                                <div class="my-32pt">
                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                        <div class="d-flex align-items-center mr-8pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">     </span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>        </small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">            </span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>           </small></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="path.html" class="btn btn-primary mr-8pt">                 </a>
                                        <a href="path.html" class="btn btn-outline-secondary ml-0">      </a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-black-50 mr-8pt">          </small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">      </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">      </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">      </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">      </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">      </span></span>
                                    </div>
                                    <small class="text-black-50">    </small>
                                </div>
                            </div>


                            <div class="card card-path js-overlay stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-16pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/swift_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title text-body mb-0">   </div>
                                                    <div class="text-muted d-flex lh-1">  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="path.html" class="ml-4pt btn btn-link text-secondary border-1 border-secondary">  </a>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/swift_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">  </div>
                                        <span class="text-black-50 d-flex lh-1">  </span>
                                    </div>
                                </div>

                                <div class="my-32pt">
                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                        <div class="d-flex align-items-center mr-8pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">  </span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>  </small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">  </span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>  </small></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="path.html" class="btn btn-primary mr-8pt">  </a>
                                        <a href="path.html" class="btn btn-outline-secondary ml-0">  </a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-black-50 mr-8pt">  </small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                    </div>
                                    <small class="text-black-50">  </small>
                                </div>
                            </div>


                            <div class="card card-path js-overlay stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-16pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/react_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title text-body mb-0">  </div>
                                                    <div class="text-muted d-flex lh-1">  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="path.html" class="ml-4pt btn btn-link text-secondary">  </a>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/react_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">  </div>
                                        <span class="text-black-50 d-flex lh-1">  </span>
                                    </div>
                                </div>

                                <div class="my-32pt">
                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                        <div class="d-flex align-items-center mr-8pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">  </span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>  </small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">  </span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>  </small></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="path.html" class="btn btn-primary mr-8pt">  </a>
                                        <a href="path.html" class="btn btn-outline-secondary ml-0">  </a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-black-50 mr-8pt">  </small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">  </span></span>
                                    </div>
                                    <small class="text-black-50">  </small>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="page-heading">
                                <h4>  </h4>
                                <a href="student-my-courses.html" class="text-underline ml-sm-auto">  </a>
                            </div>



                            <div class="position-relative carousel-card">
                                <div class="js-mdk-carousel row d-block" id="carousel-courses1">

                                    <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#carousel-courses1" role="button" data-slide="next">
                                        <span class="carousel-control-icon material-icons" aria-hidden="true">  </span>
                                        <span class="sr-only">  </span>
                                    </a>

                                    <div class="mdk-carousel__content">

                                        <div class="col-12 col-sm-6">

                                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">




                                                <a href="student-take-course.html" class="js-image" data-position="">
                                                    <img src="<?php echo base_url ('assets/tealdark/images/paths/angular_430x168.png')?>" alt="course">
                                                    <span class="overlay__content">
                                                        <span class="overlay__action d-flex flex-column text-center">
                                                            <i class="material-icons">  </i>
                                                            <small>  </small>
                                                        </span>
                                                    </span>
                                                </a>

                                                <div class="mdk-reveal__content">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex">
                                                                <a class="card-title" href="student-take-course.html">  </a>
                                                                <small class="text-50 font-weight-bold mb-4pt">  </small>
                                                            </div>
                                                            <a href="student-take-course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">  </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <span class="rating__item"><span class="material-icons">  </span></span>
                                                                <span class="rating__item"><span class="material-icons">  </span></span>
                                                                <span class="rating__item"><span class="material-icons">  </span></span>
                                                                <span class="rating__item"><span class="material-icons">  </span></span>
                                                                <span class="rating__item"><span class="material-icons">  </span></span>
                                                            </div>
                                                            <small class="text-50">  </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/angular_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0">  </div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small">  </span>
                                                            <span class="text-black-50 small font-weight-bold">  </span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        <div class="d-flex align-items-center mr-8pt">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">  </span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>  </small></p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">  </span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small>  </small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="student-take-lesson.html" class="btn btn-primary mr-8pt">  </a>
                                                        <a href="student-take-course.html" class="btn btn-outline-secondary ml-0">  </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt">  </small>
                                                    <div class="rating mr-8pt">
                                                        <!-- <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span> -->
                                                    </div>
                                                    <small class="text-black-50">  </small>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-6">

                                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">




                                                <a href="student-take-course.html" class="js-image" data-position="">
                                                    <img src="<?php echo base_url ('assets/tealdark/images/paths/swift_430x168.png')?>" alt="course">
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
                                                                <a class="card-title" href="student-take-course.html">  </a>
                                                                <small class="text-50 font-weight-bold mb-4pt">  </small>
                                                            </div>
                                                            <a href="student-take-course.html" class="ml-4pt material-icons text-accent card-course__icon-favorite">  </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <!-- <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star_border</span></span> -->
                                                            </div>
                                                            <small class="text-50">  </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/swift_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0">  </div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small">  </span>
                                                            <span class="text-black-50 small font-weight-bold">  </span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        <div class="d-flex align-items-center mr-8pt">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt"> </span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small> </small></p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt"> </span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small> </small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="student-take-lesson.html" class="btn btn-primary mr-8pt"> </a>
                                                        <a href="student-take-course.html" class="btn btn-outline-secondary ml-0"> </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt"> </small>
                                                    <div class="rating mr-8pt">
                                                        <!-- <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span> -->
                                                    </div>
                                                    <small class="text-black-50">4/5</small>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-6">

                                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">




                                                <a href="student-take-course.html" class="js-image" data-position="">
                                                    <img src="<?php echo base_url ('assets/tealdark/images/paths/wordpress_430x168.png')?>" alt="course">
                                                    <span class="overlay__content">
                                                        <span class="overlay__action d-flex flex-column text-center">
                                                            <i class="material-icons"> </i>
                                                            <small> </small>
                                                        </span>
                                                    </span>
                                                </a>

                                                <div class="mdk-reveal__content">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex">
                                                                <a class="card-title" href="student-take-course.html"> </a>
                                                                <small class="text-50 font-weight-bold mb-4pt"> </small>
                                                            </div>
                                                            <a href="student-take-course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite"> </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <!-- <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star_border</span></span> -->
                                                            </div>
                                                            <small class="text-50"> </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/wordpress_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0"> </div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small"> </span>
                                                            <span class="text-black-50 small font-weight-bold"> </span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        <div class="d-flex align-items-center mr-8pt">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt"> </span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small> </small></p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt"> </span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small> </small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="student-take-lesson.html" class="btn btn-primary mr-8pt"> </a>
                                                        <a href="student-take-course.html" class="btn btn-outline-secondary ml-0"> </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt"> </small>
                                                    <div class="rating mr-8pt">
                                                        <!-- <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span> -->
                                                    </div>
                                                    <small class="text-black-50"> </small>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-6">

                                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">

                                                <a href="student-take-course.html" class="js-image" data-position="left">
                                                    <img src="<?php echo base_url ('assets/tealdark/images/paths/react_430x168.png')?>" alt="course">
                                                    <span class="overlay__content">
                                                        <span class="overlay__action d-flex flex-column text-center">
                                                            <i class="material-icons"> </i>
                                                            <small> </small>
                                                        </span>
                                                    </span>
                                                </a>

                                                <div class="mdk-reveal__content">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex">
                                                                <a class="card-title" href="student-take-course.html"> </a>
                                                                <small class="text-50 font-weight-bold mb-4pt"> </small>
                                                            </div>
                                                            <a href="student-take-course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite"> </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <!-- <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star_border</span></span> -->
                                                            </div>
                                                            <small class="text-50"> </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url ('assets/tealdark/images/paths/react_40x40@2x.png')?>" width="40" height="40" alt="Angular" class="rounded">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0"> </div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small"> </span>
                                                            <span class="text-black-50 small font-weight-bold"> </span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        <div class="d-flex align-items-center mr-8pt">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt"> </span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small> </small></p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt"> </span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small> </small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="student-take-lesson.html" class="btn btn-primary mr-8pt"> </a>
                                                        <a href="student-take-course.html" class="btn btn-outline-secondary ml-0"> </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt"> </small>
                                                    <div class="rating mr-8pt">
                                                        <!-- <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span> -->
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

                    <!-- <h4>Discussions</h4> -->

                    <!-- <div class="card">
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
                                                <a href="student-profile.html"><img src="<?php echo base_url ('assets/tealdark/images/people/110/guy-1.jpg')?>" width="40" alt="avatar" class="rounded-circle"></a>
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
                                                <a href="student-profile.html"><img src="<?php echo base_url ('assets/tealdark/images/people/110/guy-2.jpg')?>" width="40" alt="avatar" class="rounded-circle"></a>
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
                    </div> -->

                </div>
            </div>



        </div>
        <!-- // END Header Layout Content -->
    </div>

    <?php $this->load->view("templates/footer.php") ?>

    <!-- jQuery -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/jquery.min.js')?>"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/popper.min.js')?>"></script>
    <script src="<?php echo base_url ('assets/tealdark/vendor/bootstrap.min.js')?>"></script>

    <!-- Perfect Scrollbar -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/perfect-scrollbar.min.js')?>"></script>

    <!-- DOM Factory -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/dom-factory.js')?>"></script>

    <!-- MDK -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/material-design-kit.js')?>"></script>

    <!-- Fix Footer -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/fix-footer.js')?>"></script>

    <!-- Chart.js -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/Chart.min.js')?>"></script>

    <!-- App JS -->
    <script src="<?php echo base_url ('assets/tealdark/js/app.js')?>"></script>

    <!-- Highlight.js -->
    <script src="<?php echo base_url ('assets/tealdark/js/hljs.js')?>"></script>

    <!-- App Settings (safe to remove) -->
    <script src="<?php echo base_url ('assets/tealdark/js/app-settings.js')?>"></script>


    <!-- Global Settings -->
    <script src="<?php echo base_url ('assets/tealdark/js/settings.js')?>"></script>

    <!-- Moment.js -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/moment.min.js')?>"></script>
    <script src="<?php echo base_url ('assets/tealdark/vendor/moment-range.min.js')?>"></script>

    <!-- Chart.js -->
    <script src="<?php echo base_url ('assets/tealdark/vendor/Chart.min.js')?>"></script>

    <!-- Charts JS -->
    <script src="<?php echo base_url ('assets/tealdark/js/chartjs.js')?>"></script>

    <!-- Chart.js Samples -->
    <script src="<?php echo base_url ('assets/tealdark/js/page.student-dashboard.js')?>"></script>

</body>

</html>
