<?php 
if(!isset($pgName)){
    $pgName = '';
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../styles/styles.css" type="text/css" rel="stylesheet">
    <link rel="import" href="bower_components/dsc-polymer-carousel/dsc-polymer-carousel.html">
    <title>Ingenius Creations - <?php echo $pgName; ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WNWBQ9MLW3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-WNWBQ9MLW3');
    </script>
</head>