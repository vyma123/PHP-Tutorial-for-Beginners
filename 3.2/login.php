<?php
session_start();
$title = 'includes';

include('./../inc/header.php');
require_once('./../inc/config.php');
require_once('./../inc/functions.php');

if(is_user_authenticated()) {
    redirect('admin.php');
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
 
    if(authenticate_user($email, $password)){
        $_SESSION['email'] = $email;
        redirect('admin.php');
        die();
    }else {
        $status = "the provided didn't not working";
    }


    if($email == false) {
        $status = 'Please enter a valid email address';
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