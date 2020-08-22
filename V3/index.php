<!--
 * The Alif arabic programming language - Documentation.
 * - - - - - - - - - - - - - - - - - - - - - - - - -
 * CoreUI - Open Source Bootstrap Admin Template
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <?php

// require_once "../m.php";
// require_once "docs_config.php";

 ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Alif arabic programming language - Documentation - وثائق لغة البرمجة العربية ألف">
    <meta name="author" content="Hassan DRAGA">
    <meta name="keyword" content="وثائق لغة البرمجة العربية ألف">
    <link rel="shortcut icon" href="src/img/favicon.png">
    <!-- <title>وثائق لغة البرمجة العربية ألف</title> -->

    <link href="./src/css/font-awesome.min.css" rel="stylesheet">
    <link href="./src/css/simple-line-icons.css" rel="stylesheet">
    <link href="./src/dest/style.css" rel="stylesheet">
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
    <header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <a class="navbar-brand" href="https://www.aliflang.org/docs/"></a>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a> <!-- ||| -->
                </li>
            </ul>
        </div>
    </header>
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.aliflang.org/download" target="_blank"><i class="icon-energy"></i> لغة ألف نسخة <span class="tag tag-info"><?php echo $ALIF_STUDIO_VERSION_WINDOWS ?></span></a>
                </li>

                <?php require_once './menu-side-json.php' ?>

            </ul>
        </nav>
    </div>

    <main class="main">
    <link rel="stylesheet" href="src/css/markdown.css">
<?php 
include('Parsedown.php');
if (isset($_GET['md'])) {
    if (file_exists("./md/" . $_GET['md'] . '.md')) {
        $md = $_GET['md'];
        echo "<title> وثائق لغة ألف | $md </title>";
    }else{
        $error_msg = "خطأ ما";
        echo "<title> وثائق لغة ألف | $error_msg </title>";
    }
$url = isset($md) ? "./md/" .$md. '.md' : "./md/error.md";
$contents = file_get_contents($url);
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
}else{
    $url = "./md/الرئيسية.md";
    $contents = file_get_contents($url);
    $Parsedown = new Parsedown();
    echo $Parsedown->text($contents);
    echo "<title>وثائق لغة ألف</title>";
}


?>
    </main>

    <footer class="footer">
        <span class="pull-right">
            جميع الحقوق محفوظة <?php echo date("Y"); ?>&copy; <a href="https://twitter.com/dragahassan" target="_blank">حسن دراكة</a>، <a href="https://www.aliflang.org/community" target="_blank">مجتمع ألف</a>
        </span>
    </footer>
    
    <!-- Bootstrap and necessary plugins -->
    <script src="./src/js/libs/jquery.min.js"></script>
    <script src="./src/js/libs/tether.min.js"></script>
    <script src="./src/js/libs/bootstrap.min.js"></script>
    <script src="./src/js/libs/pace.min.js"></script>
    <!-- CoreUI main scripts -->
    <script src="./src/js/app.js"></script>

</body>
</html>