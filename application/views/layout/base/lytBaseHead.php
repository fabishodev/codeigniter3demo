<!DOCTYPE HTML>
<html>
    <head>
        <title>ASPAAUG</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- styles -->
       <!-- <link href="css/lib/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/styles.css" rel="stylesheet" type="text/css">-->
        <!-- styles -->
        <?php echo link_tag('css/lib/bootstrap.min.css');?>
        <?php echo link_tag('css/lib/font-awesome.min.css'); ?>


        <!-- scripts -->
        <script src="<?php echo base_url();?>js/lib/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url();?>js/lib/bootstrap.min.js"></script>

        <?php
        if (isset($scripts)):
        foreach ($scripts as $js):?>
                    <script src="<?php echo base_url()."js/{$js}.js";?>" type="text/javascript"></script>
        <?php
        endforeach;
        endif;?>

    </head>
    <body>
