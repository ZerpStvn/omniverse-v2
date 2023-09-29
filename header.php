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
    <h1><img src="<?php echo OMNI_IMG . "/Omniverse-logo.svg" ?>" alt="omniverse"></h1>
    <nav id="header-nav" class="header-nav">
        <a class="humbergericon menunav">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <ul>
            <li>Home</li>
            <li>Who We Are</li>
            <li>What we offer</li>
            <li>Updates</li>
            <li>Contact</li>
        </ul>
    </nav>
</Header>

<body>