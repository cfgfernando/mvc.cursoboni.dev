<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
            <title>Chat Ao Vivo</title>
            <link href="<?php echo BASE_URL; ?>/assets/css/template.css" rel="stylesheet"/>
            <link href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css" rel="stylesheet"/>
            <link href="<?php echo BASE_URL; ?>/assets/css/bootstrap-theme.css" rel="stylesheet"/>
            <link href="<?php echo BASE_URL; ?>/assets/css/bootstrap-theme.min.css" rel="stylesheet"/>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-3.0.0.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
    </head>
        <body>
        <div class="environment" style="background-color:<?php
        if(isset($_SESSION['area']) && $_SESSION['area'] == 'suporte') {
            echo '#ff0000';
        } elseif(isset($_SESSION['area']) && $_SESSION['area'] == 'cliente') {
            echo '#00ff00';
        } else {
            echo '#000000';
        }
        ?>"></div>
            <div class="container">
               <?php $this->loadViewInTemplate($viewName, $viewData);?>
            </div>

        </body>
</html>