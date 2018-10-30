<div class="get-started-form-container" data-country="<?php echo COUNTRY_CODE_ORIGINAL; ?>">
	<?php 
	$current_country_code = strtoupper(COUNTRY_CODE_ORIGINAL);
	$country_phone_details = get_country_phone_details($current_country_code);
	$prefix = '+';
	
	if (!empty($country_phone_details)){
		$prefix = '+' . $country_phone_details['code'];
	}
	?>
	<form id="get-started-form" action="<?php echo home_url('steps'); ?>" method="POST" novalidate autocomplete="off">

		<div class="form-group">
			<input type="text" class="form-control" placeholder="Your Name" id="full-name" name="full-name" autocomplete="off"/>
		</div>

		<div class="form-group">
			<input type="email" class="form-control" placeholder="Your Email" id="email-address" name="email-address" autocomplete="off"/>
		</div>
		
		<p><strong>Your M<span>obile</span> Number ( Country Code + Mobile Number )</strong></p>
		<div class="row">
			<div class="col-sm-2 col-no-padding-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="# Prefix" id="number-prefix" name="number-prefix" value="<?php echo $prefix; ?>" autocomplete="off"/>
				</div>
			</div>
			<div class="col-sm-10">
				<div class="form-group">
					<input type="text" class="form-control" id="number" name="number" value="" autocomplete="off"/>
				</div>
			</div>
		</div>

		<button type="submit" id="get-started" class="btn btn-block btn-get-started" name="get-started" value="started">LET’S GET STARTED</button>
		
	</form> 
	
</div>