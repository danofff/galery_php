<h2>Gallery</h2>
<form action='index.php?page=3' method='post'>
    <p>Select graphics extension to display:</p>
    <select name='ext' style="width:25%">
        <?php
        $path = 'images/';
        if($dir = opendir($path))
        {
            $ar = array();
            while (($file = readdir($dir)) !== false)
            {
                $fullname = $path . $file;
                $pos = strrpos($fullname, '.');
                $ext = substr($fullname, $pos+1);
                $ext= strtolower($ext);
                if( !in_array($ext, $ar) )
                {
                    $ar[] = $ext;
                    echo "<option>" . $ext . "</option>";
                }
            }
            closedir($dir);
        }
        ?>
    </select>
    <input type="submit" name="submit" value="Show Pictures" class="btn btn-info"/>
</form>
<br/>
<?php
if (isset($_POST['submit'])) {
    $ext = $_POST['ext'];
    $ar = glob($path . "*." . $ext);
    echo "<div class='container'>";
    echo '<h3 class="panel-title">Gallery content</h3></div>';
    echo '<div class="row align-items-center">';
    foreach ($ar as $a) {
        echo "<div class='col-12 col-sm-6 col-md-4 col-lg-3 mb-3'>";
        echo "<a href='" . $a . "'target='_blank'><img src='" . $a . "'border='0' alt='picture' class='img-thumbnail'/></a>";
        echo "</div>";
    }
    echo "</div>";
}
?>