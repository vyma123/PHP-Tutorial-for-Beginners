<?php

session_start();
require('app/app.php');


if(is_user_authenticated()) {
    redirect('admin/');
}

if(is_post()) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = sanitize($_POST['password']);
 
    if(authenticate_user($email, $password)){
        $_SESSION['email'] = $email;
        redirect('admin/');
    }else {
        $view_bag['status'] = "the provided didn't not working";
    }

    if($email == false) {
        $view_bag['status'] = 'Please enter a valid email address';
    }
}

// if (isset($_POST['login'])) {
//     output($_POST);
// }

?>


<div>
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" id="email" />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" id="password" />
        </div>
        <div class="form-group">
            <input type="submit" name="login" value="Login" />
        </div>
    </form>

    <div class="row">
        <?php 
        if(isset($status)) {
             echo $status;
        }
        ?>
    </div>
</div>

<?php
include('./../inc/footer.php');

?>


