<!--
 * The Alif arabic programming language - Documentation.
 * - - - - - - - - - - - - - - - - - - - - - - - - -
 * CoreUI - Open Source Bootstrap Admin Template
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <?php

require_once "../m.php";
require_once "docs_config.php";

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
    <link rel="shortcut icon" href="img/favicon.png">
    <title>إدماج لغة جافا سكريبت مع لغة ألف - وثائق لغة البرمجة العربية ألف</title>

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <link href="dest/style.css" rel="stylesheet">
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

                <?php echo $Docs_Menu_LI ?>

            </ul>
        </nav>
    </div>

    <main class="main">
        <div class="container-fluid">
            <h2>&nbsp;إدماج لغة جافا سكريبت مع لغة ألف</h2>
            <br />
        <!-- ------------------------------------------------------------------ -->

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <strong>مقدمة</strong>
                </div>
                <div class="card-block" style="text-align: justify;text-justify: inter-word;">
                    
                من مميزات لغة ألف أنها تقبل إدماج لغة جافا سكريبت، وهذا عن طريق واجهة الرسومية بتقنية الويب، مما يسمح للمبرمج بتصميم واجهة إحترافية عن طريق HTML5/CSS3، و جافا سكريبت.<br />
                    <br />
                    
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <strong>أمثلة بالصور</strong>
                </div>
                <div class="card-block">
                    <img class="d-block w-100" src="img/AlifJS_Example1.png"></img>
                </div>
            </div>

        </div>

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <strong>الجسر</strong>
                </div>
                <div class="card-block" style="text-align: justify;text-justify: inter-word;">
                    
                كل شيئ عن طريق النداء على Alif() في جافا سكريبت، و هو عبارة عن جسر بين جافا سكريبت و لغة ألف، مما يمكن من تنفيذ عمليات مختلفة.<br />
                    <br />
                    
                </div>
            </div>

            <div class="card">
                    <div class="card-header">
                        <strong>أمثلة</strong>
                    </div>
                    <div class="card-block">
                        
<pre style="text-align: left; padding-left: 10px; direction: ltf"><code style="text-align: left; padding-left: 10px; direction: ltf">
<div style="text-align: left; padding-left: 10px; direction: ltf">

&lt;button OnClick="MyJavaScriptFunction()"&gt;MyButton&lt;/button&gt;

&lt;script&gt;

    function MyJavaScriptFunction(){

		// متغير عام

        var Res = Alif('أ'); 
		alert(Res);

        // نداء على دالة عامة

        Alif('حساب'); 

        // نداء على دالة مع معطيات

        Alif('حساب', 123, 'abc'); 

	}

    &lt;/script&gt;

</div>
</code></pre>

                    </div>
                </div>
        
        </div>

        <!-- ------------------------------------------------------------------ -->
        </div>
    </main>

    <footer class="footer">
        <span class="pull-right">
            جميع الحقوق محفوظة <?php echo date("Y"); ?>&copy; <a href="https://twitter.com/dragahassan" target="_blank">حسن دراكة</a>، <a href="https://www.aliflang.org/community" target="_blank">مجتمع ألف</a>. | هذا الموقع مدعوم بـ <a href="http://coreui.io" target="_blank">CoreUI</a>
        </span>
    </footer>
    
    <!-- Bootstrap and necessary plugins -->
    <script src="js/libs/jquery.min.js"></script>
    <script src="js/libs/tether.min.js"></script>
    <script src="js/libs/bootstrap.min.js"></script>
    <script src="js/libs/pace.min.js"></script>
    <!-- CoreUI main scripts -->
    <script src="js/app.js"></script>

</body>
</html>