<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">home</a></li>
                    <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                </ul>
            </div>
        </div>
    </div>

</main>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <?php
            if(validation_errors())
            {
                ?>
                <div class="alert  alert-danger alert_box">
                    <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                    <?php echo validation_errors();?>
                </div>

                <?php
            }
            ?>

            <?php if (isset($error)) {
                ?>
                <div class="alert alert-danger alert_box">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                    <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>.
                </div>
                <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('success') != "") {
                ?>
                <div class="alert alert-success alert_box">
                    <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                    <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>.
                </div>
                <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('error') != "") {
                ?>
                <div class="alert alert-danger alert_box">
                    <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                    <strong>Success !</strong> <?php echo $this->session->flashdata('error'); ?>.
                </div>
                <?php
            }
            //echo "Login Email:  " . $this->session->userdata('email');
            //echo "Customer ID: " . $this->session->userdata('customer_id');
            // echo "Redirect URL: " . $this->session->userdata('return_to_url');
            ?>
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                     alt="">
                <form method="POST" action="login" class="form-signin">
                    <input type="email" name="email" class="form-control" required placeholder="Username" required="" autofocus="">


                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>

                    <a href="login/password_rest" class="pull-right need-help">Forgotten password? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="login/register" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>


<style type="text/css">
    .form-signin
    {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .form-signin-heading, .form-signin .checkbox
    {
        margin-bottom: 10px;
    }
    .form-signin .checkbox
    {
        font-weight: normal;
    }
    .form-signin .form-control
    {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .form-signin .form-control:focus
    {
        z-index: 2;
    }
    .form-signin input[type="text"]
    {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"]
    {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .account-wall
    {
        margin-top: 20px;
        padding: 40px 0px 20px 0px;
        background-color: #f7f7f7;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }
    .login-title
    {
        color: #555;
        font-size: 18px;
        font-weight: 400;
        display: block;
    }
    .profile-img
    {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    .need-help
    {
        margin-top: 10px;
    }
    .new-account
    {
        display: block;
        margin-top: 10px;
    }
</style>
<!--Page Header-->



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
    display: table;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

@media only screen and (max-width: 768px) {
    .modal-content {
       width: 100%; 
    }
}
</style>



