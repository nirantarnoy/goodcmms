<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Goodoper | Helpdesk And Pm</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">

</head>
<body class="blank">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>

<div class="back-link">
    <a href="index.html" class="btn btn-primary">Back to Dashboard</a>
</div>

<div class="login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <img src="images/pm_logo.png" width="20%" class="img-circle m-b" alt="logo">
            </div>
            <div class="text-center m-b-md">
                <h3>กรุณาลงชื่อเข้าใช้งานระบบ</h3>
<!--                <small>This is the best app ever!</small>-->
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>"example@gmail.com"]) ?>

                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>"Please enter you username"]) ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <input type="submit" value="เข้าใช้งาน" class="btn btn-success btn-block" />
                    <a class="btn btn-default btn-block" href="#">ลงทะเบียน</a>

                    <?php ActiveForm::end(); ?>
<!--                    <form action="#" id="loginForm">-->
<!--                        <div class="form-group">-->
<!--                            <label class="control-label" for="username">Username</label>-->
<!--                            <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">-->
<!--                            <span class="help-block small">Your unique username to app</span>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label class="control-label" for="password">Password</label>-->
<!--                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">-->
<!--                            <span class="help-block small">Yur strong password</span>-->
<!--                        </div>-->
<!--                        <div class="checkbox">-->
<!--                            <input type="checkbox" class="i-checks" checked>-->
<!--                            Remember login-->
<!--                            <p class="help-block small">(if this is a private computer)</p>-->
<!--                        </div>-->
<!--                        <button class="btn btn-success btn-block">เข้าใช้งาน</button>-->
<!--                        <a class="btn btn-default btn-block" href="#">ลงทะเบียน</a>-->
<!--                    </form>-->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <strong>Goodoper</strong> - Helpdesk And Preventive maintenance WebApp <br/> 2019 Copyright goodoper
        </div>
    </div>
</div>


<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>

</body>
</html>
