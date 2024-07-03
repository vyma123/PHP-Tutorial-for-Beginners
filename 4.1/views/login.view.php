<div>
    <div>
        <h1>Login</h1>
    </div>
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
        if (isset($view_bag['status'])) {
            echo $view_bag['status'];
        }
        ?>
    </div>
</div>