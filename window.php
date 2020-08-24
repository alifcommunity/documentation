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
    <title>النوافذ - وثائق لغة البرمجة العربية ألف</title>

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
            <h2>&nbsp;النوافذ</h2>
            <br />
        <!-- ------------------------------------------------------------------ -->

            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                    <strong>تعريف</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
                        
                    من بين مميزات لغة ألف ليس فقط دعمها للواجهة الرسومية (النوافذ)، بل تدعم نوعن منها، الواجهة التقليدية (أزرار، نصوص..)، و الواجهة الإحترافية بتقنية الويب (HTML5/CSS3/JavaScript)، حيث يمكن إنشاء واجهة تشبه صفحة من موقع على الإنترنت، و هذا يجعل شكل التطبيق أكثر إحترافية.
                    <br><br>
                    للإعلان و إنشاء واجهة رسومية (نافذة) نستعمل الكلمة المفتاحية: <b>نافذة</b>
                
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>أمثلة بالصور - واجهة إحترافية</strong>
                    </div>
                    <div class="card-block">
                        <img class="d-block w-100" src="img/AlifJS_Example1.png"></img>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                    <strong>أمثلة بالصور - واجهة تقليدية</strong>
                    </div>
                    <div class="card-block">
                        <img class="d-block w-100" src="../images/fibo_example.png"></img>
                    </div>
                </div>

            </div>

            <div class="col-md-6">

            <div class="card">
                    <div class="card-header">
                        <strong>مثال: واجهة إحترافية</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
<pre><code>
#ألف

#واجهة_ويب رئيسية "إسم الملف هنا"


نافذة رئيسية 

    دالة رئيسية 

        النافذة_الثانية : إظهار()

    نهاية دالة 

نهاية نافذة


نافذة النافذة_الثانية 



نهاية نافذة

</code></pre>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>مثال: واجهة تقليدية</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
<pre><code>
#ألف

#واجهة "إسم الملف هنا"


نافذة رئيسية 

    دالة رئيسية 

        النافذة_الثانية : إظهار()

    نهاية دالة 

نهاية نافذة


نافذة النافذة_الثانية 



نهاية نافذة

</code></pre>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>خصائص</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
<pre><code>
[إسم النافذة] : إظهار()

[إسم النافذة] : إخفاء()

[إسم النافذة] : تدمير()

[إسم النافذة] : منتصف()

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