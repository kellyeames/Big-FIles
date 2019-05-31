<?php include "includes/header.php"?>   
<h1>Welcome to Web Services By Kelly Leanne</h1>
    <p>Please complete the form below to be contacted about your website needs:</p>
    <!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			How Did You Hear About Us?:<br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
				<option value="Phone">Phone</option>
				<option value="Web">Web</option>
				<option value="Magazine">Magazine</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
			<input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
			<input type="checkbox" name="Interested_In[]" value="Website Consult" /> Website Consult <br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to be contacted by Kelly?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Please share any comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
		</label>
	</div>	
	<div><?=$feedback?></div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
 </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Website Design Resources</h3>
    <p>Please check out these resources on the web design cycle:</p>
    
    <p>Web Development Life Cycle <a href="http://cs.tsu.edu/ghemri/CS117/ClassNotes/Web%20Development%20Life%20Cycle_small.htm"> Web Development Life Cycle</a></p>
    
     <p>7 Phases of Web Design and Development Life Cycle <a href="https://the-loupe.com/blog/7-phases-of-web-design-and-development-life-cycle"> 7 Phases of Web Design</a></p>
    
     <p>Life Cycle of a Website - Stages for Web Projects<a href="https://disenowebakus.net/en/lifecycle-website"> Life Cycle of a Website</a></p>
    
    
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php"?> 
