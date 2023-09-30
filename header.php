<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>
        <?php echo get_the_title() ?>
    </title>
    <!-- <link rel="icon" href="<?php echo get_template_directory_uri() . "/assets/images/bgwhirl.svg"; ?>"
        type="image/x-icon"> -->
</head>
<Header class="global-width global-padding ">
    <h1><a href="<?php echo get_home_url( ) . "/home"?>"><img src="<?php echo OMNI_IMG . "/Omniverse-logo.svg" ?>" alt="omniverse"></a></h1>
    <nav id="header-nav" class="header-nav">
        <a class="humbergericon menunav">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <ul>
            <li><a href="<?php echo get_home_url( ) . "/home"?>">Home</a></li>
            <li><a href="<?php echo get_home_url( ) . "/about"?>">Who We Are</a></li>
            <li><a href="<?php echo get_home_url( ) . "/offer"?>">What we offer</a></li>
            <li><a href="<?php echo get_home_url( ) . "/blogs"?>">Updates</a></li>
            <li><a href="<?php echo get_home_url( ) . "/contact"?>">Contact</a></li>
        </ul>
    </nav>
</Header>

<body>