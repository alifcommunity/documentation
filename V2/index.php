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
    <title>وثائق لغة البرمجة العربية ألف</title>

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
            <h2>&nbsp;وثائق لغة البرمجة العربية ألف</h2>
            <br />
        <!-- ------------------------------------------------------------------ -->

            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        <strong>أهداف لغة ألف</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
                        
                        ظهرت لغة ألف 1.0 سنة 2018، كانت مصممة لهدف واحد وهو تعليم الطلبة الغير الناطقين باللغة الإنجليزية مبادئ البرمجة بالعربية، وقد تم تحقيق الهدف والحمد الله، حيث تدرس الآن لغة ألف في مجموعة من المدارس. في سنة 2020 ظهرت ألف 2.0، نسخة إحترافية و أهداف محددة، حيث تم تصميمها لتحقيق أهداف ثلات.<br />
                        <br />
                        <ul>
                            <li>لغة سهلة التعلم ومرنة، كائنية التوجُّه وعربية.</li>
                            <li>تصميم واجهة احترافية باستعمال تكنولوجيا الويب، أصلية الشكل والمظهر.</li>
                            <li>متعددة المنصات بشفرة واحدة (<em>ويندوز، لينكس، ماك أو إس، أندرويد، آي أو إس</em>).</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>مرحبا بالعالم</strong>
                    </div>
                    <div class="card-block">
                        
<pre><code>
#ألف

نافذة رئيسية 

    دالة رئيسية 

        عدد ن = 6 + 4
        نص  م = "مرحبا، ن = " + ن

        رسالة(م)

    نهاية دالة 

نهاية نافذة

</code></pre>

                    </div>
                </div>

            </div>
        
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>هل لغة ألف هي مجرد ترجمة حرفية ؟</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
                        
                        أولا يجب أن نفرق بين "<em>لغة مترجمة</em>" و "<em>لغة مفسرة</em>" و "<em>ترجمة حرفية</em>"، <em>لغة مترجمة</em> تعني أن هاته اللغة تحتاج لأن تترجم للغة الآلة أو لغة الأسمبلي عن طريق برنامج مصرف قبل التنفيذ، مثلا لغة سي++، <em>لغة مفسرة</em> تعني أن هاته اللغة يمكن تنفيذها مباشرة عن طريق برنامج مفسر، مثلا لغة البايثون، بينما جملة <em>ترجمة حرفية</em> تعني أن هاته اللغة هي عبارة عن ترجمة حرفية للغة أخرى، مثلا هته ترجمة لغة سي++ إلى العربية:<br>
                        <code>int main(){ return 0; }</code> &harr; <code>متغير main(){ رجوع 0; }</code><br>
                        <br>
                        لغة ألف لها نسقها الخاص، ليست ترجمة حرفية لأية لغة، بل صممت خالصة للغة العربية، كتبت من الصفر تماما، و ثم تجنب استعمال أدوات مثل Lex/Yacc/LLVM حتى يتاح لنا التحكم بشكل اللغة بسلاسة، لغة ألف مفتوحة المصدر ومجانية، هدفها الوصول بالعربية إلى الإحترافية في عالم البرمجة.

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>القائمة</strong>
                    </div>
                    <div class="card-block">
                        
                        <ul>
                            <li>تثبيت والبدء باستعمال لغة ألف</li>
                            <li>تعلم البرمجة بلغة ألف</li>
                            <li>تعلم إستعمال الواجهة الرسومية</li>
                            <li>استخدام المكتبات المتاحة</li>
                            <li>تطوير مكتبات خاصة</li>
                            <li>إستعمال ودمج لغة البايثون</li>
                            <li>إستعمال ودمج لغة جافا سكريبت</li>
                            <li>بلغ عن خطأ برمجي</li>
                        </ul>

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