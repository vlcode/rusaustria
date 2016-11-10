<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Rus-Austria - образование в Австрии. Полная документальная и визовая поддержка.</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="assets/css/hover.css" rel="stylesheet">
 <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86912060-1', 'auto');
  ga('send', 'pageview');

</script>
    </head>
    <body>


         <?php
          //Если форма отправлена
          if(isset($_POST['submit'])) {
         //Проверка Поля ИМЯ
          if(trim($_POST['contactname']) == '') {
          $hasError = true;
          } else {
          $name = trim($_POST['contactname']);
          }
         //Проверка правильности ввода EMAIL
          if(trim($_POST['email']) == '')  {
          $hasError = true;
          } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
          $hasError = true;
          } else {
          $email = trim($_POST['email']);
          }
         //Проверка наличия ТЕКСТА сообщения
          if(trim($_POST['message']) == '') {
          $hasError = true;
          } else {
          if(function_exists('stripslashes')) {
          $comments = stripslashes(trim($_POST['message']));
          } else {
          $comments = trim($_POST['message']);
          }
          }
         //Если ошибок нет, отправить email
          if(!isset($hasError)) {
          $emailTo = 'office@rus-austria.com'; //Сюда введите Ваш email
          $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
          $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
         mail($emailTo, $body, $headers);
          $emailSent = true;
          }
          }
          ?>


        <div id="body-bg">
            <?php require 'blocks/header.php'; ?>
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        <div class="col-md-9">
                            <!-- Main Content -->
                            <div class="headline">
                                <h2>Форма связи</h2>
                            </div>
                            <p>Свяжитесь с нами и наши специалисы ответят Вам в ближайшее время</p>
                            <br>
                            <!-- Contact Form -->
                            <form>
                                <label>Ф.И.О.</label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input class="form-control" type="text" name="contactname" id="contactname">
                                    </div>
                                </div>
                                <label>Email
                                    <span class="color-red">*</span>
                                </label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input class="form-control" type="text" name="email" id="email">
                                    </div>
                                </div>
                                <label>Сообщение</label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-8 col-md-offset-0">
                                        <textarea rows="8" class="form-control" name="message" id="message"></textarea>
                                    </div>
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-primary" name="submit">Отправить</button>
                                </p>
                            </form>
                            <!-- End Contact Form -->
                            <!-- End Main Content -->
                        </div>
                        <!-- End Main Column -->
                        <!-- Side Column -->
                        <div class="col-md-3">
                            <!-- Recent Posts -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Контактная информация</h3>
                                </div>
                                <div class="panel-body">

                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fa-phone color-primary"></i> +7 499 499 11 41 (Россия) </li>
                                            <li>
                                            <i class="fa-phone color-primary"></i> +43 660 509 47 26 (Австрия) </li>
                                        <li>
                                            <i class="fa-envelope color-primary"></i> office@rus-austria.com</li>

                                    </ul>
                                    <ul class="list-unstyled">
                                        <li>
                                            <strong class="color-primary">По будням:</strong> с 9:00 до 18:00</li>
                                        <li>
                                            <strong class="color-primary">Суббота:</strong> С 9:00 до 16:00</li>
                                        <li>
                                            <strong class="color-primary">Воскресенье:</strong> Выходной</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End recent Posts -->
                            <!-- About -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Коротко о главном</h3>
                                </div>
                                <div class="panel-body">
                                    Наша компания готова взять на себя квалифицированное и конфиденциальное решение задач, связанных с получение образования в Австрии и Словакии, а также получением Вида на жительство в Европе впоследствии.
                                </div>
                            </div>
                            <!-- End About -->
                        </div>
                        <!-- End Side Column -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <?php require 'blocks/footer.php'; ?>
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
