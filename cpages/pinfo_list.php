 <?
 $myuserId=$_SESSION['yojan_user_id'];
  $myuserquery= show_selecttable($debug,$limitstring,$conn,'accounts','*','WHERE rowId=\''.$myuserId.'\' AND active=\'1\'',$limit,1,' rowId ASC');
		foreach( $myuserquery as $userrow ) {
			$datetimepickers		=date("d/m/Y",strtotime($userrow['dateofbirth'])); 
 
		}
 ?>

<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">
					<form action="forms/ediprof.php" method="post" enctype="multipart/form-data">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label"><strong>Profile Name</strong></label>
									<input class="form-control validate[optional] text-input" placeholder="" name="display_name" id="display_name" type="text" value="<?=$userrow['display_name'];?>">
								</div>
                                <div class="form-group label-floating">
									<label class="control-label">First Name</label>
									<input class="form-control validate[required] text-input" placeholder="" id="first_name" name="first_name" type="text" value="<?=$userrow['first_name'];?>">
								</div>
                                <div class="form-group label-floating">
									<label class="control-label">Last Name</label>
									<input class="form-control validate[required] text-input" placeholder="" name="last_name" id="last_name" type="text" value="<?=$userrow['last_name'];?>">
								</div>
                                 
								

								
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Your Email</label>
									<input class="form-control validate[required,custom[email]] " name="email" id="email" placeholder="" type="email" value="<?=$userrow['email'];?>">
								</div>
                                <div class="form-group label-floating">
									<label class="control-label">Mobile Number</label>
									<input class="form-control validate[required,custom[phone]] text-input" id="mobile_number" name="mobile_number" placeholder="" type="text" value="<?=$userrow['mobile_number'];?>">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Your Website</label>
									<input id="website" name="website" class="form-control validate[optional,custom[url]] " placeholder="" value="<?=$userrow['website'];?>">
								</div>
                                 <div class="form-group  date-time-picker label-floating is-focused">
									<label class="control-label">Date of Birth </label>
									<input class="form-control validate[optional] text-input datepicker" placeholder="" name="datetimepicker" id="datetimepicker" type="text" value="<?=$datetimepickers;?>">
								</div>


								 
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your Country</label>
									<select id="country" name="country" class="selectpicker form-control validate[required] text-input" onchange="loadallddval(this.value,1);">
										<? $myval=getcountry_state_city(1,$userrow['country'],$tofilter) ;echo $myval;?>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select" id="loadstate">
									 <label class="control-label">Your State / Province</label>
									<select id="state" name="state" class="selectpicker form-control validate[required] text-input" onchange="loadallddval(this.value,2);">
										<? $myval=getcountry_state_city(2,$userrow['state'],$userrow['country']) ;echo $myval;?>
									</select> 
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select" id="loadcity">
									 <label class="control-label">Your City</label>
									
                                    <select id="city" name="city" class="selectpicker form-control validate[required] text-input">
									<? $myval=getcountry_state_city(3,$userrow['city'],$userrow['state']) ;echo $myval;?>
									</select> 
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Write a little description about you</label>
									<textarea id="aboutme" name="aboutme" class="form-control validate[optional] text-input" placeholder=""><?=$userrow['display_name'];?></textarea>
								</div>

								<div class="form-group label-floating is-select">
									<label class="control-label" id="gender" name="gender" >Your Gender</label>
									<select class="selectpicker form-control validate[optional] text-input">
										<option value="1">Male</option>
										<option value="2">Female</option>
									</select>
								</div>

								<div class="form-group label-floating  is-select">
									<label class="control-label">Religious Belifs</label>
									<input class="form-control validate[optional] text-input" name="religious_belifs"  id="religious_belifs" placeholder="" type="text" value="<?=$userrow['religious_belifs'];?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating  is-select">
									<label class="control-label">Your Birthplace</label>
									<input class="form-control validate[optional] text-input" name="birth_place" id="birth_place" placeholder="" type="text" value="<?=$userrow['birth_place'];?>">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Your Occupation</label>
									<input class="form-control validate[optional] text-input" name="occupation" id="occupation" placeholder="" type="text" value="<?=$userrow['occupation'];?>">
								</div>

								<div class="form-group label-floating is-select">
									<label class="control-label">Status</label>
									<select name="married_status" id="married_status" class="selectpicker form-control validate[required] text-input">
										<option value="MA">Married</option>
										<option value="FE">Not Married</option>
									</select>
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Political Incline</label>
									<input class="form-control validate[optional] text-input" id="political_in" name="political_in" placeholder="" type="text"  value="<?=$userrow['political_in'];?>">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group with-icon label-floating is-select">
									<label class="control-label">Your Facebook Account</label>
									<input name="fb_acc" id="fb_acc" class="form-control validate[optional] text-input" type="text" value="<?=$userrow['fb_acc'];?>">
									<i class="fa fa-facebook c-facebook" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating is-select">
									<label class="control-label">Your Twitter Account</label>
									<input name="twee_acc" id="twee_acc" class="form-control validate[optional] text-input" type="text" value="<?=$userrow['twee_acc'];?>">
									<i class="fa fa-twitter c-twitter" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating  is-select">
									<label class="control-label">Your Insta Account</label>
									<input id="insta_acc" name="insta_acc" class="form-control validate[optional] text-input" type="text" value="<?=$userrow['insta_acc'];?>">
									<i class="fa fa-rss c-rss" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating is-select">
									<label class="control-label">Your google Account</label>
									<input id="goog_acc" name="goog_acc" class="form-control validate[optional] text-input" type="text" value="<?=$userrow['goog_acc'];?>">
									<i class="fa fa-dribbble c-dribbble" aria-hidden="true"></i>
								</div>
								 
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>

		<? include("incfiles/pinfosidebar.php");?>
	</div>
</div>

<!-- ... end Your Account Personal Information -->
