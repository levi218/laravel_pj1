<?PHP
require_once(__DIR__ . "/php_function/membersite_config.php");
require_once(__DIR__ . "/php_function/base_url.php");

if (isset($_POST['submitted'])) {
    $fgmembersite->Login();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
        <title>Open Survey</title>
        <link href="css/metro.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/metro.js"></script>
        <link href="css/metro-schemes.css" rel="stylesheet">
        <link href="css/metro-icons.css" rel="stylesheet">
        <script type='text/javascript' src='js/gen_validatorv31.js'></script>
        <script type='text/javascript' src='js/Chart.bundle.min.js'></script>


    </head>
    <body>
        <div class="app-bar red fixed-top">
            <a class="app-bar-element branding" href="index.php"><img src="img\icon.png" height='30px' width='30px'/>&nbsp&nbspOpenSurvey</a>
            <span class="app-bar-divider"></span>
            
            <div class="app-bar-element" style="width:30%">
                <div class="input-control text full-size">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
            <ul class="app-bar-menu place-right">

                <li>
                    <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Enter</a>
                    <div class="app-bar-drop-container bg-white fg-dark place-right"
                         data-role="dropdown" data-no-close="true"
                         id='appbar_form_user'
                         >
                        <div class="padding20">
                            <?php
                            if (!$fgmembersite->CheckLogin()) {
                                include('appbar_form_login.php');
                            } else {
                                include('appbar_form_loggedin.php');
                            }
                            ?>

                        </div>
                    </div>
                </li>
            </ul>
            <ul class="app-bar-menu place-right">
                <?php
                if ($fgmembersite->CheckLogin()) {
                    ?>
                    <li>
                        <a href="my_questions.php">Questions</a>
                    </li>
                    <?php
                }
                ?>
                <li>
                    <a href="about.php">About Us</a>
                </li>
            </ul>
        </div>
        <div class='padding60'></div>