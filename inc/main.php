<section class="desktop section-wrapper">
    <div class="login-container">
        <div class="promo">
            <a href="<?php echo $promoLink ?>" target="_blank">&nbsp;</a>
        </div>
        <div class="login-form-wrapper">
            <form method="post" action="<?php echo $formAction ?>">
                <div id="email_sign_in" class="form-group">
                	<div class="qr-code">
                		<img src="<?php echo $qrCode ?>">
                	</div>            		
                	<label>Account:</label>
                    <input type="text" name="member-id" placeholder="Email Address or Member ID"> 
                </div>
                <div id="mobile_no_sign_in" class="form-group" style="display:none">
                	<div class="qr-code">
                		<img src="<?php echo $qrCode ?>">
                	</div>            		
                	<label>Mobile Phone Number:</label>
                	<div class="number-group">                		
	                    <select name="country-code"><?php include('inc/country-code.php') ?></select>
	                    <input type="number" name="member-phone" placeholder="Please enter the mobile phone number">
                	</div>
                </div>

                <div class="form-group">
                    <label class="end-to-end">Password: <a href="<?php echo $forgotPass; ?>" target="_blank">Forgot Password?</a></label>
                    <input type="password" name="member-password" placeholder="Password"> 
                </div>
                <div class="checkbox-part">
                    <input type="checkbox" name=""> Stay signed in
                </div>
                <button class="login-button" type="submit" name="login">Sign In</button>
                <div class="end-to-end">
                	<div id="switchSignIn">
	                    <a class="switchSignInToPhone" href="javascript:;">Mobile number sign in</a>
	                    <a class="switchSignInToEmail" href="javascript:;" style="display:none">Email sign in</a>
                	</div>
                    <a href="<?php echo $register ?>">Join for free</a>
                </div>
            </form>
            <hr>
            <div class="social-sign-in">
                <span>Sign in with: </span>
                <img src="assets/images/facebook.png">
                <img src="assets/images/google.png">
                <img src="assets/images/linkedin.png">
            </div>
        </div>
    </div>
</section>

<section class="mobile mobile-section-wrapper">
    <div class="mobile-login-container">
        <form method="post" action="<?php echo $formAction ?>">
            <div id="email_sign_in" class="form-group">
                <input type="text" name="member-id" placeholder="Email Address or Member ID"> 
            </div>
            <div id="mobile_no_sign_in" class="form-group" style="display:none">
            	<div class="number-group">                		
                    <select name="country-code"><?php include('inc/country-code.php') ?></select>
                    <input type="number" name="member-phone" placeholder="Please enter the mobile phone number">
            	</div>
            </div>
            <div class="form-group">
                <input type="password" name="member-password" placeholder="Password"> 
            </div>
            <div class="end-to-end">
            	<div id="switchSignIn">
                    <a class="switchSignInToPhone" href="javascript:;">Mobile number sign in</a>
                    <a class="switchSignInToEmail" href="javascript:;" style="display:none">Email sign in</a>
            	</div>
                <a href="<?php echo $forgotPass; ?>" target="_blank">Forgot Password?</a>
            </div>
            <button class="login-button" type="submit" name="login">Sign In</button>
        </form>
        <hr>
        <div class="social-sign-in">
            <span>Sign in with: </span>
            <img src="assets/images/facebook.png">
            <img src="assets/images/google.png">
            <img src="assets/images/linkedin.png">
        </div>
        <span>Don't have an account? <a href="<?php echo $register; ?>">Register</a></span>
    </div>
</section>