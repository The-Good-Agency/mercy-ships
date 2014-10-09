            <?php 
                include $_SERVER['DOCUMENT_ROOT']."/mercy_ships/includes/header.php";
            ?>
            </div>
            <section class="hero_image slideshow">

            </section>
            <div class="clear"></div>
            <!-- MAIN CONTENT -->
            <section class="main_content donate_user_form container_24">                
                <section class="row_01 row ">
                    <div class="inner_content">
                       <h2>1. Donate</h2>
                       <div class="step_01 steps">
                           <p>I would like to make a monthly donation of £20</p>
                           <a href="#"><img src="/mercy_ships/images/layout/form_down_arrow.png" alt="" class="right step_arrow_img"></a>
                       </div>
                    </div>
                </section>
                <!-- END ROW 1 -->
                <div class="clear"></div>
                <!-- ROW 2 -->
                <section class="row_02 row grid_24 billing_info">
                    <div class="inner_content ">                        
                        <h2>2. Billing Information</h2> 
                        <p>All fields marked with * are mandatory</p>    
                        <div class="steps step_02">
                            <form>
                                <div class="column_01 grid_11 grid_mobile_24">
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

                                    <!-- PHONE NUMBER -->
                                    <div class="form-item input-row">
                                        <label for="phonenumber" class="inline">Phone Number*</label>
                                        <input type="number" name="phonenumber" id="phonenumber" value="" class="input-text" validate="" />
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="clear show_mobile"></div>
                                <div class="column_02 grid_11 grid_mobile_24 right">
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
                                        <input type="text" name="address2" id="address2" value="" class="input-text error" validate="" />
                                        <span class="error"><p>Enter a correct address</p></span>
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
                                <button type="submit" class="form_submit">Continue to payment details</button>
                            </form>
                            <div class="clear"></div>
                            
                        </div>
                    </div>                    
                </section>
                <!-- END ROW 2 -->
                <div class="clear"></div>                
                <!-- ROW 3 -->
                <section class="row_03 row next_stage">
                    <div class="inner_content">
                       <h2>3. Payment Details</h2>
                       <div class="step_03 steps">
                           <p>Fill in your payment details    </p>
                           <a href="#"><img src="/mercy_ships/images/layout/form_down_arrow.png" alt="" class="right step_arrow_img"></a>
                       </div>
                    </div>
                </section>
                <!-- END ROW 3 -->
                <div class="clear"></div>
                <!-- ROW 4 -->
               <section class="row_04 row next_stage">
                    <div class="inner_content">
                       <h2>4. Review and confirm</h2>
                       <div class="step_04 steps">
                           <p>Review your details and accept Terms and Conditions</p>
                           <a href="#"><img src="/mercy_ships/images/layout/form_down_arrow.png" alt="" class="right step_arrow_img"></a>
                       </div>
                    </div>
                </section>          
                <!-- END ROW 4 -->
                <div class="clear"></div>               
            </section>
            <div class="clear"></div>
            <!-- END MAIN CONTENT -->

            <!-- SITE FOOTER -->
            <?php 
                include $_SERVER['DOCUMENT_ROOT']."/mercy_ships/includes/footer.php";
            ?>           