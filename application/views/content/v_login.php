<?php $this->load->view("templates/head.php") ?>
<?php $this->load->view("templates/header.php") ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content page-content pb-0">

           <div class="bg-gradient-primary py-5">
                <div class="container text-center">
                    <div class="text-center mb-md-0">
                        <img class="navbar-brand-icon" src="assets/tealdark/images/illustration/student/128/white.svg" width="100">
                        <h1 class="text-white mb-0">Sign In</h1>
                        <center> <p class="text-white mb-0">Account Management</p> </center>
                    </div>
                    <!-- <a href="signup.html" class="btn btn-outline-white flex-column">
                        Don't have an account?
                        <span class="btn__secondary-text">Sign up Today!</span>
                    </a> -->
                </div>
            </div>
            <div class=" pt-32pt pt-sm-64pt pb-32pt">
                <div class="container page__container">
                  <!-- <div class="flex mb-32pt mb-md-0">
                      <center><h1 class="text-black mb-0">Sign In</h1></center>
                      <center> <p class="lead measure-lead text-black-50">Account Management</p> </center>
                  </div> -->
                  <div class="text-center">
                    <span style="color:red;font-style:italic;font-weight:bold;"><?php echo $this->session->flashdata('msg'); ?></span>
                  </div>
                    <form action="<?php echo base_url('Login/auth')?>" class="col-md-5 p-0 mx-auto" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input id="username" name="tm_login_username" type="text" class="form-control" placeholder="Your Username ...">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input id="password" type="password" name="tm_login_password" class="form-control" placeholder="Your password ...">
                            <p class="text-right"><a href="<?php echo base_url('Lupa_password')?>" class="small">Forgot your password?</a></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-lg btn-accent">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="page-separator m-0">
                <div class="page-separator__text">or sign-in with</div>
                <div class="page-separator__bg-top "></div>
            </div>
            <div class="bg-body pt-32pt pb-32pt pb-md-64pt text-center">
                <div class="container page__container">
                    <a href="student-dashboard.html" class="btn btn-lg btn-secondary btn-block-xs">Facebook</a>
                    <a href="student-dashboard.html" class="btn btn-lg btn-secondary btn-block-xs">Twitter</a>
                    <a href="student-dashboard.html" class="btn btn-lg btn-secondary btn-block-xs">Google+</a>
                </div>
            </div> -->

</div>
<!-- // END Header Layout Content -->

<?php $this->load->view("templates/footer.php") ?>
<?php $this->load->view("templates/js.php") ?>
