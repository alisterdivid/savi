<?php require_once("../common/header.php"); ?>
<body class="page-template-default page page-id-11632 woocommerce-account woocommerce-page woocommerce-lost-password lightbox nav-dropdown-has-arrow">
<link rel='stylesheet' id='select2-css'  href='../css/select2.css?ver=3.2.1' type='text/css' media='all' />
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

<div id="wrapper">

    <?php require_once("../common/nav-bar.php"); ?>


    <main id="main" class="">



        <div class="my-account-header page-title normal-title
	">


            <div class="page-title-inner flex-row  container">
                <div class="flex-col flex-grow medium-text-center">

                    <div class="text-center social-login">

                        <a href="#wp-login.php?loginFacebook=1&redirect=#my-account/"
                           class="button social-button large facebook circle"
                           onclick="window.location = '#wp-login.php?loginFacebook=1&redirect='+window.location.href; return false;"><i class="icon-facebook"></i>
                            <span>Login with <strong>Facebook</strong></span></a>


                        <a class="button social-button large google-plus circle"
                           href="#wp-login.php?loginGoogle=1&redirect=#my-account/"
                           onclick="window.location = '#wp-login.php?loginGoogle=1&redirect='+window.location.href; return false;">
                            <i class="icon-google-plus"></i>
                            <span>Login with <strong>Google</strong></span></a>

                    </div>

                </div><!-- .flex-left -->
            </div><!-- flex-row -->
        </div><!-- .page-title -->

        <div class="page-wrapper my-account mb">
            <div class="container" role="main">



                <div class="woocommerce">
                    <form method="post" class="woocommerce-ResetPassword lost_reset_password">

                        <p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>

                        <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                            <label for="user_login">Username or email</label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" />
                        </p>

                        <div class="clear"></div>


                        <p class="woocommerce-form-row form-row">
                            <input type="hidden" name="wc_reset_password" value="true" />
                            <input type="submit" class="woocommerce-Button button" value="Reset password" />
                        </p>

                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="0c0d2385b8" /><input type="hidden" name="_wp_http_referer" value="/nationaleventsupply/my-account/lost-password/" />
                    </form>
                </div>




            </div><!-- .container -->
        </div><!-- .page-wrapper.my-account  -->




    </main><!-- #main -->
    <?php include_once '../common/footer.php' ?>
<script type='text/javascript' src='../js/selectWoo.full.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='../js/lost-password.min.js?ver=3.2.1'></script>
</body>
</html>
