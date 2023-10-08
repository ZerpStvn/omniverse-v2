<?php echo get_header(); ?>

<main class="conact-main ">
    <div class="navbar global-width">
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
                    <li><a href="<?php echo get_home_url() . "/faqspage" ?>">FAQs</a></li>
                    <li><a href="<?php echo get_home_url() . "/contact" ?>">Contact</a></li>

                </ul>
            </nav>
        </section>
    </div>
    <div class="contact1 ">
        <img src="<?php echo OMNI_IMG . "/bg_eerg.png" ?>" alt="">
        <section class="global-width">
            <h2>Contact Us</h2>
            <p>Tell us About yourSelf</p>
        </section>
    </div>
    <div class="contact2 global-width">
        <div class="contact-details">
            <div class="contactif">
                <section>
                    <h2>Contact Details</h2>
                    <ul>
                        <li>
                            <p><span><img src="<?php echo OMNI_IMG . "/ico_mail.svg" ?>" alt="Omniverse Email"></span>
                                info@omniverse.com.ph</p>
                        </li>

                        <li>
                            <p><span><img src="<?php echo OMNI_IMG . "/ico_location.svg" ?>"
                                        alt="Omniverse Location"></span>
                                Iloilo City </p>
                        </li>
                        <li>
                            <p><span><img src="<?php echo OMNI_IMG . "/ico_phone.svg" ?>" alt="Omniverse Phone"></span>
                                +63 0916 215 4768</p>
                        </li>

                    </ul>

                </section>
                <section class="contact-socials">
                    <h2>Follow us </h2>
                    <ul>
                        <li>
                            <a href=""><i class="fa fa-facebook"></i> omniverse.com.ph/facebook</a>



                        </li>

                        <li>
                            <a href=""><i class="fa fa-instagram"></i> omniverse.com.ph/instagram</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-linkedin"></i> omniverse.com.ph/linkedin</a>
                        </li>

                    </ul>

                </section>
                <!-- <section class="contact-lincese">

                    <ul>
                        <li>
                            <section>
                                <h3>License Number:</h3>
                                <p>102-323-3454</p>
                            </section>
                        </li>

                        <li>
                            <section>
                                <h3>Permit Number:</h3>
                                <p>102-323-3454</p>
                            </section>
                        </li>


                    </ul>

                </section> -->
            </div>
            <div class="contactform">
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <div class="contact-flex name">
                        <label for="username">Full Name</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="contact-flex email">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="contact-flex number">
                        <label for="number">Contact Number</label>
                        <input type="text" name="number" id="number" required>
                    </div>
                    <div class="contact-flex company">
                        <label for="company">Company</label>
                        <input type="text" name="company" id="company">
                    </div>
                    <div class="contact-flex inquiry">
                        <label for="inquiry">Inquiry Subject</label>
                        <select name="inquiry" id="inquiry">
                            <option value=""> Select Category</option>
                            <option value="Product Inquiry">Product Inquiry</option>
                            <option value="Appointment">Appointment</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="contact-flex message">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <input type="hidden" name="action" value="custom_form_submission">
                    <?php wp_nonce_field('custom_form_nonce', 'custom_form_nonce_field'); ?>
                    <button type="submit" id="submitbutton">SUBMIT</button>
                </form>

            </div>
        </div>
    </div>
</main>
<?php echo get_footer(); ?>