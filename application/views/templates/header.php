<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <?php echo link_tag('/assets/css/bootstrap.css'); ?>
        <?php echo link_tag('/assets/css/styles.css'); ?>
        <title>SaciShop</title>
    </head>
    <body>
        <div class="container">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $image_properties = array(
                            'src' => '/assets/img/he1.jpg',
                            'width' => '100%'
                        );
                        ?>
                        <?php echo img($image_properties); ?>
                        <div class="titulosite">
                            <?php $atts = array('class' => 'h1'); ?>
                            <?php echo anchor('home/index', 'SaciShop', $atts); ?>
                        </div>
                    </div>
                </div>

