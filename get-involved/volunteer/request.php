            <?php 
                include $_SERVER['DOCUMENT_ROOT']."/mercy_ships/includes/header.php";
            ?>
            </div>
            <section class="hero_image slideshow top">
               <img src="/mercy_ships/images/contact/contact_hero.jpg" alt="Donate" width="100%">  
            </section>
            <div class="clear"></div>
            <!-- MAIN CONTENT -->
            <div class="main_content container_24">
                <div class="inner_content">
                    <section class="row_01 row">
                       <div class="grid_24">
                           <h1>Send us a message</h1>
                            <p>All fields marked with * are mandatory</p>   
                            <div class="clear"></div>
                            <form action="">                                
                                <div class="request_more_form">
                                    <div class="grid_11">
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
                                    </div>
                                    <div class="grid_11 right">
                                        <!-- HOUSE NO./NAME -->
                                        <div class="form-item input-row">
                                            <label for="house" class="inline">House no/name*</label>
                                            <input type="text" name="house" id="house" value="" class="input-text" validate="" />
                                            <span class="error"></span>
                                        </div>
                                        
                                        <!-- ADDRESS LINE 1 -->
                                        <div class="form-item input-row">
                                            <label for="address" class="inline">Address Line 1*</label>
                                            <input type="text" name="address" id="address" value="" class="input-text" validate="" />
                                            <span class="error"></span>
                                        </div>

                                        <!-- ADDRESS LINE 2 -->
                                        <div class="form-item input-row">
                                            <label for="address2" class="inline">Address Line 2*</label>
                                            <input type="text" name="address2" id="address2" value="" class="input-text" validate="" />
                                        </div>
                                        
                                        <!-- POSTCODE -->
                                        <div class="form-item input-row">
                                            <label for="postcode" class="inline">Postcode*</label>
                                            <input type="text" name="postcode" id="postcode" value="" class="input-text" validate="" />
                                            <span class="error"></span>
                                        </div>

                                        <!-- TOWN -->
                                        <div class="form-item input-row">
                                            <label for="town" class="inline">Town*</label>
                                            <input type="text" name="town" id="town" value="" class="input-text" validate="" />
                                            <span class="error"></span>
                                        </div>    

                                        <!-- COUNTRY -->
                                        <div class="form-item input-row">
                                            <label for="country" class="inline">Country*</label>
                                            <select name="country" id="country" class="country_select">
                                                <option value="">Make a selection</option>
                                                <option value="">Miss</option>
                                                <option value="">Mrs</option>
                                                <option value="">Other</option>
                                            </select>
                                            <span class="error"></span>
                                        </div>                    
                                    </div>

                                    <div class="clear"></div>
                                    
                                    <div class="grid_24">
                                        <div class="underline"></div>
                                        <div class="grid_11">
                                            <!-- INTERESTED IN -->
                                            <div class="form-item input-row">
                                                <label for="volunteer-type" class="inline">Interested in*</label>
                                                <input type="checkbox" name="ship" id="ship" value="" class="input-text" validate="" /> Volunteering on the ship <br>
                                                <input type="checkbox" name="ship" id="ship" value="" class="input-text" validate="" /> Volunteering on the ship
                                                <span class="error"></span>
                                            </div>  
                                        </div>
                                        <div class="grid_11 right">
                                            <!-- CONTACT VIA -->
                                            <div class="form-item input-row">
                                                <label for="contact" class="inline">Contact me via*</label>
                                                <input type="checkbox" name="email" id="email" value="" class="input-text" validate="" /> Email<br>
                                                <input type="checkbox" name="post" id="post" value="" class="input-text" validate="" /> Post
                                                <span class="error"></span>
                                            </div>  
                                        </div>
                                        <div class="clear"> </div>
                                        <div class="underline"></div>
                                        <!-- AGREE TERMS -->
                                        <div class="form-item input-row">                                    
                                            <input type="checkbox" name="terms" id="terms" value="" class="input-text terms left" />
                                            <label for="terms" class="inline terms_label">I agree to the <a href="#">Terms and Conditions</a></label>
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <button type="submit" class="white_cta read_more_cta">Send Request</button>
                            </form> 
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