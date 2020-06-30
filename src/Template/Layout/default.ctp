<?php
$cakeDescription = isset($page) ? strtoupper($page) : APP_NAME;
// $this->assign('title', 'Sterling Doubble');
?>
<!DOCTYPE html>
<html>

<head>
   <!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

    <?= $this->Html->charset() ?>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
   
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="https://spectaprime.azureedge.net/doubble/v2/assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/themes/bootstrap.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" rel="stylesheet"/>
    <title><?= $this->fetch('title') ?></title>
    <meta name="description" content="<?= $this->fetch('pageDescription') ?>">
    <?= $this->Html->css('header.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script src="https://code.jquery.com/jquery-3.1.0.js"  crossorigin="anonymous"></script>
    <?= $this->Html->script('helpers')?>


</head>

<body>
<?= $this->Element('navbar'); ?>
        

    <div class="container-fluid">

       
            <?= $this->fetch('content') ?>
        
        <?= $this->Element('footer'); ?>
    </div>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <!-- <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGVRZKX" height="0" width="0" style="display:none;visibility:hidden"></iframe> -->
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?= $this->Html->script('stickyMenu') ?>
    <script>
        $(window).on('load', function () {
            AOS.refresh();
        });
        $(document).ready(function () {

            AOS.init({
                once: true
            });
            $('.collapse').on('hide.bs.collapse', function() {
                $(this).find('.collapse.show').removeClass('show');
            })
        });
    </script>


</body>


<?= $this->Html->script('faq') ?>


</html>