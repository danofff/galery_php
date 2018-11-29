<?php
session_start();
if(!isset($_SESSION['registered-user'])){

    echo '<h3 class="text-danger">Update is available for logged user</h3>';
    echo ' <script>window.location = "index.php?page=4";</script>';
}
?>

<h3>Upload Form</h3>
<?php
if (!isset($_POST['uppbtn'])) {
    ?>
    <form action="index.php?page=2" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="myfile">Select file for upload:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304"/>
            <input type="file" class="form-control-file" name="myfile" accept="image/*" value="">
        </div>
        <button type="submit" class="btn btn-info"
                name="uppbtn">Send File
        </button>
    </form>
    <?php
}
else
{
    if(isset($_POST['uppbtn']))
    {
        if($_FILES['myfile']['error'] != 0)
        {
            echo "<h3/><span style='color:red;'>Upload error code: " . $_FILES['myfile']['error'] . "</span><h3/>";
            exit();
        }

        if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
            move_uploaded_file($_FILES['myfile']['tmp_name'], "./images/".$_FILES['myfile']['name']);
        }

        echo "<h3/><span style='color:green;'>File Uploaded Successfuly!</span><h3/>";
    }
}
?>


