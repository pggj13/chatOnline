<html>
    <head>
        <title>CHAT</title>
        <link rel="stylesheet" href="assets/css/template.css" />
        <script type="text/javascript" src="assets/js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
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
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
    </body>
</html>