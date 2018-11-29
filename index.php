<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>My Site</title>
</head>
<body>
<div class="container">
    <div class="row">
        <header class="col-12">

        </header>
    </div>
    <div class="row">
        <nav class="col-12">
            <?php include_once ('pages/menu.php');?>
            <?php include_once ('pages/functions.php');?>
        </nav>
    </div>
    <div class="row">
        <section class="col-12">
            <?php
            if(isset($_GET['page'])){
                $page=$_GET['page'];
                switch ($page){
                    case 1:
                        include_once ('pages/home.php');
                        break;
                    case 2:
                        include_once ('pages/uploads.php');
                        break;
                    case 3:
                        include_once('pages/gallery.php');
                        break;
                    case 4:
                        include_once('pages/registration.php');
                        break;
                    case 5:
                        include_once('pages/login.php');
                        break;
                }
            }
            ?>

        </section>
    </div>
</div>



<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"
></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"
></script>

</body>
</html>