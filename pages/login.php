<?php
if(!isset($_POST['logbtn']))
{
    ?>
    <h3>Login Form</h3>
    <form action="index.php?page=5" method="post">
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
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-info col-5 col-md-3 btn-block"
                    name="logbtn">Login</button>
        </div>
    </form>
    <?php
}
else {
    if(login($_POST['login'],$_POST['pass'])) {
        echo "<h3/><span style='color:green;'>You are logged in!</span><h3/>";
    }
}
?>