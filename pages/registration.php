<h3>Registration Form</h3>
<?php
if(!isset($_POST['regbtn']))
{
    ?>

    <form action="index.php?page=4" method="post">
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-7 col-md-6">
                    <div class="form-group">
                        <label for="login">Login:</label>
                        <input type="text" class="form-control" name="login">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 col-sm-7 col-md-6">
                    <div class="form-group">
                        <label for="pass1">Password:</label>
                        <input type="password" class="form-control" name="pass1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 col-sm-7 col-md-6">
                    <div class="form-group">
                        <label for="pass2">Confirm Password:</label>
                        <input type="password" class="form-control" name="pass2">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 col-sm-7 col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-info col-5 col-md-3 btn-block"
                    name="regbtn">Register</button>
        </div>
    </form>
    <?php
}
else {
    if(register($_POST['login'],$_POST['pass1'],$_POST['email'])) {
    echo "<h3/><span style='color:green;'>New User Is Added!</span><h3/>";
    }
}
?>