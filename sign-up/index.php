            <?php 
                include $_SERVER['DOCUMENT_ROOT']."/mercy_ships/includes/header.php";
            ?>
            </div>
            <section class="hero_image slideshow no_img">
                <img src="/mercy_ships/images/layout/no_img_trans.png" alt="Donate" width="100%">  
            </section>
            <div class="clear"></div>
            <!-- MAIN CONTENT -->
            <section class="main_content donate container_24">
                <div class="inner_content">
                    <section class="row_01 row">
                        <h1>Sign up for our newsletter</h1>
                        <p>All fields marked with * are mandatory</p>
                    </section>
                </div>
                <!-- END ROW 1 -->
                <div class="clear"></div>
                <!-- ROW 2 -->
                <section class="row_02 grid_24">
                    <div class="inner_content sign_up_form">
                        <div class="grid_13">
                            <form action="" class="newsletter_form">
                                <!-- TITLE -->
                                <div class="form-item input-row">
                                    <label for="" class="inline">Title*</label>
                                    <select name="title" id="title">
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

                                <!-- FREQUENCY -->
                                <div class="toggle-radio">
                                    <label for="Frequency" class="inline toggle_label left">Frequency</label>
                                    <label for="" class="left frequency_dates frequency_left first_li">Quarterly</label>
                                    <input class="toggle-radio__input toggle-radio__input--left" type="radio" name="radio" id="radio1">
                                    <label class="toggle-radio__label toggle-radio__label--left" for="radio1"></label>
                                    <input class="toggle-radio__input toggle-radio__input--right" type="radio" name="radio" id="radio2">
                                    <label class="toggle-radio__label toggle-radio__label--right" for="radio2"></label>
                                     <label for="" class=" frequency_dates last_li">Monthly</label>
                                </div>
                                
                                <div class="form_underline"></div>
                                <!-- AGREE TERMS -->
                                <div class="form-item input-row">                                    
                                    <input type="checkbox" name="terms" id="terms" value="" class="input-text terms left" />
                                    <label for="terms" class="inline terms_label">I agree to the <a href="#">Terms and Conditions</a></label>
                                    <span class="error"></span>
                                </div>
                                
                                <button type="submit" class="form_submit">
                                    Sign up for newsletter
                                </button>
                            </form>
                        </div>     
                        <div class="grid_10 right show_desktop">
                            <img src="/mercy_ships/images/home/content_boat.png" alt="Sign Up" width="100%">
                        </div>                 
                    </div>                    
                </section>
                <!-- END ROW 2 -->
                <div class="clear"></div>
                <!-- ROW 3 -->
                <section class="row_03 row grid_24">
                    <div class="inner_content">
                       
                    </div>
                </section>
                <!-- END ROW 3 -->
                <div class="clear"></div>
                <!-- ROW 4 -->
                <section class="row_04 row grid_24">
                    <div class="inner_content">
                                           
                    </div>
                </section>                
                <!-- END ROW 4 -->
                <div class="clear"></div>
                <!-- ROW 5 -->
                <section class="row_05 donate_now"> 
                    <a href="#" class="read_more_cta dontate_cta">Donate Now</a>
                </section>
                <!-- END ROW 5 -->
            </section>
            <div class="clear"></div>
            <!-- END MAIN CONTENT -->

            <!-- SITE FOOTER -->
            <?php 
                include $_SERVER['DOCUMENT_ROOT']."/mercy_ships/includes/footer.php";
            ?>