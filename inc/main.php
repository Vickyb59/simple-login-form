<section class="section-wrapper">
    <div class="login-container">
        <div class="promo">
            <a href="<?php echo $promoLink ?>" target="_blank">&nbsp;</a>
        </div>
        <div class="login-form-wrapper">
            <form>
                <div class="form-group">
                	<div class="qr-code">
                		<img src="<?php echo $qrCode ?>">
                	</div>            		
                	<label>Account:</label>
                    <input type="text" name="member-id" placeholder="Email Address or Member ID"> 
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
                    <a href="">Mobile number sign in</a>
                    <a href="">Join for free</a>
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