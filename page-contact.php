<?php echo get_header(); ?>
<main class="conact-main global-width">
    <div class="contact1">
        <img src="<?php echo OMNI_IMG . "/sample-img2.png" ?>" alt="">
        <section>
            <h2>Contact Us</h2>
            <p>Tell us About yourSelf</p>
        </section>
    </div>
    <div class="contact2">
        <div class="contact-details">
            <div class="contactif">
                <section>
                    <h2>Contact Details</h2>
                    <ul>
                        <li>
                            <p><span><img src="<?php echo OMNI_IMG . "/ico_mail.svg" ?>" alt="Omniverse Email"></span>
                                ceo@omniverse.com.ph</p>
                        </li>

                        <li>
                            <p><span><img src="<?php echo OMNI_IMG . "/ico_location.svg" ?>"
                                        alt="Omniverse Location"></span>
                                Iloilo City </p>
                        </li>
                        <li>
                            <p><span><img src="<?php echo OMNI_IMG . "/ico_phone.svg" ?>" alt="Omniverse Phone"></span>
                                63+9213456789</p>
                        </li>

                    </ul>

                </section>
                <section class="contact-socials">
                    <h2>Follow us </h2>
                    <ul>
                        <li>
                            <a href=""><i class="fa fa-facebook"></i> Omnivers.com.ph/facebook</a>



                        </li>

                        <li>
                            <a href=""><i class="fa fa-linkedin"></i> Omnivers.com.ph/instagram</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-instagram"></i> Omnivers.com.ph/linkedin</a>
                        </li>

                    </ul>

                </section>
                <section class="contact-lincese">
                    <h2>Contact Details</h2>
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

                </section>
            </div>
            <div class="contactform">
                <form action="">
                    <div class="contact-flex name">
                        <Label>Full name</Label>
                        <input type="text" name="username">
                    </div>
                    <div class="contact-flex email">
                        <Label>Email</Label>
                        <input type="text" name="email">
                    </div>
                    <div class="numberssection">
                        <div class=" contact-flex number">
                            <label for="">
                                Mobile Number
                            </label>
                            <input type="text" name="number">
                        </div>
                        <div class="contact-flex phone">
                            <label for="">
                                Phone Number
                            </label>
                            <input type="text" name="phonenumer">
                        </div>
                    </div>
                    <div class="contact-flex company">
                        <label for="">
                            Company
                        </label>
                        <input type="text" name="company">
                    </div>
                    <div class="contact-flex inquiry">
                        <label for="">
                            Inquiry Subject
                        </label>
                        <select name="industry" id="">
                            <option value=""></option>
                            <option value="Product Inquiry">Product Inquiry</option>
                            <option value="Appointement">Appointment</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="contact-flex industry">
                        <label for="">
                            Industry
                        </label>
                        <select name="industry" id="">
                            <option value=""></option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="School">School</option>
                            <option value="University">University</option>
                            <option value="Manufacturing">Manufacturing</option>
                        </select>
                    </div>
                    <div class="contact-flex message">
                        <label for="">Message</label>
                        <textarea name="message" id="" cols="30" rows="10"></textarea>
                    </div>
                    <Button type="submit" id="submitbtton">
                        SUBMIT
                    </Button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php echo get_footer(); ?>