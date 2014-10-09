            <?php 
                include $_SERVER['DOCUMENT_ROOT']."/mercy_ships/includes/header.php";
            ?>
            </div>
            <section class="hero_image slideshow top">
               <img src="/mercy_ships/images/contact/contact_hero.jpg" alt="Donate" width="100%">  
            </section>
            <div class="clear"></div>
            <!-- MAIN CONTENT -->
            <div class="main_content contact container_24">
                <div class="inner_content">
                    <section class="row_01 row">
                       <div class="grid_17">
                           <h1>Send us a message</h1>
                            <p>All fields marked with * are mandatory</p>   
                            <div class="clear"></div>
                            <form action="">
                                <div class="contact_form">
                                    <!-- TITLE -->
                                    <div class="form-item input-row">
                                        <label for="" class="inline">Title*</label>
                                        <select name="title" id="title" class="right">
                                            <option value="">Mr</option>
                                            <option value="">Miss</option>
                                            <option value="">Mrs</option>
                                            <option value="">Other</option>
                                        </select>
                                        <span class="error"></span>
                                    </div>

                                    <!-- FIRST NAME -->
                                    <div class="form-item input-row">
                                        <label for="firstname" class="inline">First Name*</label>
                                        <input type="text" name="" id="firstname" value="" class="input-text" validate="" />
                                        <span class="error"></span>
                                    </div>

                                    <!-- LAST NAME -->
                                    <div class="form-item input-row">
                                        <label for="lastname" class="inline">Last Name*</label>
                                        <input type="text" name="" id="lastname" value="" class="input-text" validate="" />
                                        <span class="error"></span>
                                    </div>

                                    <!-- EMAIL -->
                                    <div class="form-item input-row">
                                        <label for="email" class="inline">Email*</label>
                                        <input type="email" name="email" id="email" value="" class="input-text" validate="" />
                                        <span class="error"></span>
                                    </div>

                                    <!-- CONFIRM EMAIL -->
                                    <div class="form-item input-row">
                                        <label for="cemail" class="inline">Confirm Email*</label>
                                        <input type="text" name="cemail" id="cemail" value="" class="input-text" validate="" />
                                        <span class="error"></span>
                                    </div>
                                    
                                    <!-- SUBJECT -->
                                    <div class="form-item input-row">
                                        <label for="subject" class="inline">Subject</label>
                                        <input type="text" name="" id="subject" value="" class="input-text" validate="" />
                                    </div>

                                    <!-- COMMENTS -->
                                    <div class="form-item input-row">
                                        <label for="" class="inline"></label>
                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="underline"></div>

                                    <!-- AGREE TERMS -->
                                    <div class="form-item input-row">                                    
                                        <input type="checkbox" name="terms" id="terms" value="" class="input-text terms left" />
                                        <label for="terms" class="inline terms_label">I agree to the <a href="#">Terms and Conditions</a></label>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <button type="submit" class="left read_more_cta">Send Request</button>
                            </form> 
                       </div>

                        <div class="contact_details grid_6">
                            <div class="underline show_mobile"></div>
                            <h2>Contact Us</h2>

                            <ul class="contact_list">
                                <li>
                                    <img src="/mercy_ships/images/contact/phone.png" alt="Phone Us">
                                    <strong>01438 727 800</strong>
                                </li>
                                <li>
                                    <img src="/mercy_ships/images/contact/email.png" alt="Email Us">
                                    <a href="mailto:info@mercyships.org.uk" target="_blank">info@mercyships.org.uk</a>
                                </li>
                                <li>
                                    <img src="/mercy_ships/images/contact/details.png" alt="Our Details">
                                    01438 7278002
                                    <a href="mailto:media@mercyships.org.uk" target="_blank">media@mercyships.org.uk</a>
                                </li>
                                <li>
                                    <img src="/mercy_ships/images/contact/location.png" alt="Our Location">
                                    The Lighthouse<br />
                                    12 Meadway Court<br />
                                    Stevenage<br />
                                    SG1 2EF
                                </li>
                                <li>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2461.4047051123257!2d-0.21944099999999997!3d51.908327!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487631b96ddf6faf%3A0x2e1237f0420f6f97!2sMercy+Ships+(UK)+Ltd!5e0!3m2!1sen!2suk!4v1412767685206" width="97%" height="225" frameborder="0" style="border:0"></iframe>
                                </li>
                           </ul>
                       </div>
                    </section>
                </div>
                <!-- END ROW 1 -->
               <div class="clear"></div>
                <!-- ROW 5 -->
                <section class="row_05 donate_now"> 
                    <a href="#" class="read_more_cta dontate_cta">Donate Now</a>
                </section>
                <!-- END ROW 5 -->
            </div>
            <div class="clear"></div>
            <!-- END MAIN CONTENT -->

            <!-- SITE FOOTER -->
            <?php 
                include $_SERVER['DOCUMENT_ROOT']."/mercy_ships/includes/footer.php";
            ?>