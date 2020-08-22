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
    <title>الأصناف - وثائق لغة البرمجة العربية ألف</title>

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
            <h2>&nbsp;الأصناف</h2>
            <br />
        <!-- ------------------------------------------------------------------ -->

        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <strong>تعريف</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
                        
                    تعدّ الأصناف وسيلة لجمع البيانات والعمليات في بوتقة واحدة، ويؤدي إنشاء صنف جديد إلى تكوين نوع جديد من الكائنات، ما يتيح إنشاء نسخ (instances) من ذلك النوع. يمكن أن ترتبط بكلّ صنف مجموعة من الخاصيات (attributes) التي تساعد في متابعة حالة الصنف، إضافة إلى مجموعة من التوابع (methods) التي تساعد في تعديل حالة ذلك الصنف. 
                    <br><br>
                    <em>* حاليا لغة ألف لا تدعم خاصية الإرث، لكن في القريب إن شاء الله</em>
                    <br><br>
                    للإعلان و إنشاء متغير منطقي نستعمل الكلمة المفتاحية: <b>صنف</b>
                
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>مثال: صنف</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
<pre><code>
#ألف

صنف التلميذ

      عدد العمر = 0
      خاص نص الإسم = ""

            دالة بناء (نص  ن، عدد ع)

                  العمر = ع
                  الإسم = ن

            نهاية دالة	

            دالة نص معلومات_التلميذ ()

                  إرجاع "إسم التلميذ هو: " + الإسم + سطر + "عمر التلميذ هو: " + العمر + " سنة"

            نهاية دالة

نهاية صنف

نافذة رئيسية 

      دالة رئيسية 

            كائن التلميذ_الأول = التلميذ ("عمر"، 22)
            كائن التلميذ_الثاني = التلميذ ("آدم"، 18)

            التلميذ_الأول : العمر = 23
            التلميذ_الثاني : العمر = 19

            رسالة (التلميذ_الأول : معلومات_التلميذ() )
            رسالة (التلميذ_الثاني : معلومات_التلميذ() )

      نهاية دالة 

نهاية نافذة 

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