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
    <title>إدماج لغة البايثون مع لغة ألف - وثائق لغة البرمجة العربية ألف</title>

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
            <h2>&nbsp;إدماج لغة البايثون مع لغة ألف</h2>
            <br />
        <!-- ------------------------------------------------------------------ -->

        <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                    <strong>تعريف</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
                        
                    لغة ألف قادرة على نداء ملف سكريبت بايثون، نداء على دالة ثم قرائة النتيجة Integer أو String
                    <br><br>
                    <em>* حاليا لغة ألف تدعم فقط البايثون 3</em><br>
                    <em>* حاليا لغة ألف تدعم فقط إرسال String واحد لأية دالة بايثون</em>
                    <br><br>
                
                    </div>
                </div>

        </div>

        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>مثال: تطبيق بلغة ألف ينادي على ملف MyPythonFile ثم ينفد دالة بايثون و يقرأ النتيجة</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
<pre><code>
#ألف

#البايثون_مسار_عناوين		"/usr/include/python3.5"
#البايثون_مسار_مكتبات		"/usr/lib/python3.5/config-3.5m-x86_64-linux-gnu" 
#البايثون_مكتبات				"python3.5"

#مكتبة "البايثون" 

نافذة رئيسية

		دالة رئيسية

				كائن بايثون = البايثون_3 (تطبيق:مسار() ، "MyPythonFile")

				عدد ع = 0
				ع = بايثون : نفذ_عدد ("MyDouble", "22")
				رسالة(ع)

				نص ن = ""
				ن = بايثون : نفذ_نص ("MyString", "Salam")
				رسالة(ن)

		نهاية دالة

نهاية نافذة 

</code></pre>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>مثال: MyPythonFile.py</strong>
                    </div>
                    <div class="card-block" style="text-align: justify;text-justify: inter-word;">
                    <pre style="text-align: left; padding-left: 10px; direction: ltf"><code style="text-align: left; padding-left: 10px; direction: ltf">
<div style="text-align: left; padding-left: 10px; direction: ltf">
def MyDouble(a):
    print (a)
    c = int(a) * 10
    return c

def MyString(a):
    print (a)
    c = "Python[" + a + "]"
    return c

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