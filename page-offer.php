<?php echo get_header(); ?>
<main class="offer-main global-width">
    <div class="navbar">
        <section>
            <div class="header-menu">
                <h1><a href="<?php echo get_home_url() . "/home" ?>"><img
                            src="<?php echo OMNI_IMG . "/Omniverse-logo.svg" ?>" alt="omniverse"></a></h1>
                <a class="close menunav">
                    <span></span>
                    <span></span>
                </a>
            </div>
            <nav>

                <ul>
                    <li><a href="<?php echo get_home_url() . "/home" ?>">Home</a></li>
                    <li><a href="<?php echo get_home_url() . "/about" ?>">Who We Are</a></li>
                    <li><a href="<?php echo get_home_url() . "/offer" ?>">What we offer</a></li>
                    <li><a href="<?php echo get_home_url() . "/blogs" ?>">Updates</a></li>
                    <li><a href="<?php echo get_home_url() . "/contact" ?>">Contact</a></li>

                </ul>
            </nav>
        </section>
    </div>
</main>
<?php echo get_footer(); ?>