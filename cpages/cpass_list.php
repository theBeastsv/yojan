
<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Change Password</h6>
				</div>
				<div class="ui-block-content">
					<form action="forms/cpass.php" method="post" enctype="multipart/form-data">
						<div class="row">

							

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Your New Password</label>
									<input name="npassword" type="password" class="form-control validate[required] text-input" id="npassword" placeholder="">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Confirm New Password</label>
									<input name="npasswordre" type="password" class="form-control validate[required,equals[npassword]] text-input" id="npasswordre" placeholder="">
								</div>
							</div>

							<div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12">
								<div class="remember">
 
 <?
                             $txo=$_REQUEST['txo'];
							 if($txo=='1'){
								 echo '<div class="alert alert-info"><h3 style="text-align:center">Password has been changed.</h3></div>';
								 }
							 ?>
								</div>
							</div>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<button class="btn btn-primary btn-lg full-width">Change Password Now!</button>
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
