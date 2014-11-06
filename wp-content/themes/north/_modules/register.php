				<!-- Register -->
                <div class="regis-cont" id="regis-cont">
                	
                	 <header class="header">

                    	<span class="close" id="close-regis"><em>Close window</em></span>
						<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/logo.png" alt="Lane Cove - North - By St Malo" width="252" height="142" class="main-logo"/>
                     </header>
                     <div class="wrapper">
                          <article class="regis-form-wrap">
                                <div class="cols8">
                                    <h2 class="ttl-brandnew">
                                        <span class="hl1">Brand new</span>
                                        <span  class="hl2">Designer apartments</span>
                                        <span class="block">
                                            <span  class="hl2">in Lane Cove from $495,000</span>
                                        </span>
                                        <em>register now</em>
                                    </h2>
                                </div>
                                <div class="cols8">

                                    <div class="msg error hidden">
                                        <p>Please fill out the required fields.</p>
                                    </div>
                        
                                    <div class="msg success hidden">
                                        <p>Thank you, your registration has been sent!</p>
                                    </div>

                                    <form class="regis-form" id="registerform" name="registerform" method="post" enctype="multipart/form-data" onSubmit="submitform()" novalidate>
                                        <fieldset class="field stack">
                                            <label>First Name</label>
                                            <input type="text" placeholder="name" name="fname" id="fname" required/>
                                        </fieldset>
                                        <fieldset class="field stack">
                                            <label>Surname</label>
                                            <input type="text" placeholder="surname" name="sname" id="sname" required/>
                                        </fieldset>
                                        <fieldset class="field stack">
                                            <label>Phone</label>
                                            <input type="tel" placeholder="phone" name="mobile" id="mobile" required/>
                                        </fieldset>
                                        <fieldset class="field stack">
                                            <label>Email</label>
                                            <input type="email" placeholder="email" name="email" id="email" required/>
                                        </fieldset>
                                        <fieldset class="field stack">
                                            <label>Postcode</label>
                                            <input type="text" placeholder="postcode" name="postcode" id="postcode" required/>
                                        </fieldset>
                                        <fieldset class="field stack">
                                            <label>Interested in...</label>
                                            <select name="interestedin" id="interestedin">
                                                <option value="">interested in...</option>
                                                <option value="1 bedroom">1 bedroom</option>
                                                <option value="2 bedroom">2 bedroom</option>
                                                <option value="3 bedroom">3 bedroom</option>
                                                <option value="3 bedroom">Studio</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="field stack">
                                            <label>Interested in...</label>
                                            <select name="category" id="category">
                                                <option value="">I am a...</option>
                                                <option value="Owner occupier">owner occupier</option>
                                                <option value="Investor">investor</option>
                                                <option value="First Home Buyer">first home buyer</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="field stack">
                                            <label>how did you hear about us ?</label>
                                            <select name="heardfrom" id="heardfrom">
                                                <option value="">how did you hear about us ?</option>
                                                <option value="Saturday Telegraph">Saturday Telegraph</option>
                                                <option value="Direct Mail">Direct Mail</option>
                                                <option value="Domain.com.au">Domain.com.au</option>
                                                <option value="Realestate.com.au">Realestate.com.au</option>
                                                <option value="Referral">Referral</option>
                                                <option value="Chinese Domain">Chinese Domain</option>
                                                <option value="Chinese Sydney Property Weekly">Chinese Sydney Property Weekly</option>
                                                <option value="Chinese Herald Property Weekly">Chinese Herald Property Weekly</option>
                                                <option value="SMH Domain">SMH Domain</option>
                                                <option value="Signage">Signage</option>
                                                <option value="Savills EDM">Savills EDM</option>
                                                <option value="Shopping Centre Kiosk">Shopping Centre Kiosk</option>
                                                <option value="North Shore Times">North Shore Times</option>
                                                <option value="Mosman Daily">Mosman Daily</option>
                                                <option value="Northern District Times">Northern District Times</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </fieldset>
                                        <input name="Submit" type="submit" class="btn white" id="Submit" value="Register" onClick="submitform()" />
                                    </form>
                                </div><!-- /colspan6 -->
    
                            </article><!-- /regis-form-wrap -->
                            <footer class="footer">
                                <div class="symbol bronze"></div>
                            </footer>
    
    
                        </div><!-- /regis-cont -->
                    </div>
                    
