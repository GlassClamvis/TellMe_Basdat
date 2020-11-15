<?php $this->load->view("templates/head.php") ?>
<?php $this->load->view("templates/header.php") ?>
<!-- Header Layout Content -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    /* Style all input fields */
    input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
    }

    /* Style the submit button */
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
    }

    /* Style the container for inputs */
    .container {
        background-color: #f1f1f1;
        padding: 20px;
    }

    /* The message box is shown when the user clicks on the password field */
    #message {
        display: none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    #message p {
        padding: 10px 35px;
        font-size: 18px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
    }
</style>
<div class="mdk-header-layout__content page-content pb-0">
    <div class="bg-gradient-primary py-32pt">
        <div class="container d-flex flex-column flex-sm-row align-items-sm-center">
            <div class="flex">
                <h1 class="text-white flex mb-0">Reset Password</h1>
                <p class="text-white-50 lead">Account Management</p>
            </div>
            <p class="d-sm-none"></p>
        </div>
    </div>
    <div class="page-section ">
        <div class="container page__container">
            <form action="<?= base_url('auth/ubahPassword'); ?>" class="col-sm-5 mx-auto" method="post">
                <div class="form-group">
                    <!-- Input name='email' type='hidden' value='< this-input-get('email') ?=' -->
                    <!-- <input type="text" method="post" name="id" value="<= $this->db->get_where('tm_mahasiswa_id') ?>" /> -->
                    <input type="hidden" method="post" name="nim" value="<?= $this->input->get('nim') ?>" />
                    <input type="hidden" name="tm_mahasiswa_email" value="<?= $this->input->get('email') ?>" />
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="myFunction()">
                </div>
                <div class="form-group">
                    <label for="password">Password Baru :</label>
                    <input type="password" class="form-control" id="password1" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Masukkan password baru . . ." title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <!-- <= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?> -->
                </div>
                <div class="form-group">
                    <label for="password2">Konfirmasi Password Baru:</label>
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Masukkan kembali password anda . . .">
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="text-center">
                    <button type="submit" value="submit" class="btn btn-accent btn-lg">Reset Password</button>
                </div>
                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>

                <script>
                    var myInput = document.getElementById("password1");
                    var letter = document.getElementById("letter");
                    var capital = document.getElementById("capital");
                    var number = document.getElementById("number");
                    var length = document.getElementById("length");

                    myInput.onfocus = function() {
                        document.getElementById("message").style.display = "block";
                    }

                    myInput.onblur = function() {
                        document.getElementById("message").style.display = "none";
                    }

                    myInput.onkeyup = function() {
                        // Validate lowercase letters
                        var lowerCaseLetters = /[a-z]/g;

                        if (myInput.value.match(lowerCaseLetters)) {
                            letter.classList.remove("invalid");
                            letter.classList.add("valid");
                        } else {
                            letter.classList.remove("valid");
                            letter.classList.add("invalid");
                        }

                        // Validate capital letters
                        var upperCaseLetters = /[A-Z]/g;
                        if (myInput.value.match(upperCaseLetters)) {
                            capital.classList.remove("invalid");
                            capital.classList.add("valid");
                        } else {
                            capital.classList.remove("valid");
                            capital.classList.add("invalid");
                        }

                        // Validate numbers
                        var numbers = /[0-9]/g;
                        if (myInput.value.match(numbers)) {
                            number.classList.remove("invalid");
                            number.classList.add("valid");
                        } else {
                            number.classList.remove("valid");
                            number.classList.add("invalid");
                        }

                        // Validate length
                        if (myInput.value.length >= 8) {
                            length.classList.remove("invalid");
                            length.classList.add("valid");
                        } else {
                            length.classList.remove("valid");
                            length.classList.add("invalid");
                        }
                    }

                    function myFunction() {
                        var x = document.getElementById("password1");
                        var y = document.getElementById("password2");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        if (y.type === "password") {
                            y.type = "text";
                        } else {
                            y.type = "password";
                        }
                    }
                </script>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer.php") ?>
<?php $this->load->view("templates/js.php") ?>
<!-- // END Header Layout -->