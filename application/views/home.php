<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$nome_empresa?> - <?=$titulo?></title>
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wdth,wght@0,90.8,100..800;1,90.8,100..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url('uploads/css/main.css')?>">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php 
        require_once("home/header.php");
        require_once("home/planos.php");
        require_once("home/beneficios.php");
        require_once("home/faq.php");
        require_once("home/footer.php");
    ?>
</body>
</html>
