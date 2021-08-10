
<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Account Settings</h6>
				</div>
				<div class="ui-block-content">
					<form action="forms/savepinfo.php" method="post" enctype="multipart/form-data">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">
Confirm request when someone follows you: </label>
									 <select name="confirm_followers" id="confirm_followers" class="selectpicker form-control">
            <option value="0">  No </option>
            <option value="1" selected=""> Yes </option>
        </select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label"> Who can follow you: </label>
									 
										<select name="follow_privacy" id="follow_privacy" class="selectpicker form-control">
            <option value="everyone">Everyone</option>
            <option value="following" selected="">People I Follow</option>
        </select>
								</div>
							</div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label"> Who can message you: </label>
								 <select name="message_privacy" id="message_privacy" class="selectpicker form-control">
                    <option value="everyone">Everyone</option>
                    <option value="following" selected="">People I Follow</option>
                </select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label"> Who can comment on your posts:  </label>
									 
									<select name="comment_privacy" id="comment_privacy" class="selectpicker form-control">
                    <option value="everyone"> Everyone </option>
                     <option value="following" selected=""> People I Follow </option>
                </select>
								</div>
							</div>
 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">  Who can post on your timeline:  </label>
									 
										<select name="timeline_post_privacy" id="timeline_post_privacy" class="selectpicker form-control">
                    <option value="everyone"> Everyone </option>
                     <option value="following" selected=""> People I Follow </option>
                     <option value="none"> No one </option>
                </select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
							 <label class="control-label"> Who can see your posts:   </label><select name="post_privacy" id="post_privacy"class="selectpicker form-control">
                    <option value="everyone">Everyone</option>
                    <option value="following" selected="">People I Follow</option>
                </select>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Notifications Sound</div>
										<p>A sound will be played each time you receive a new activity notification</p>
									</div>

									<div class="togglebutton">
										<label>
											<input name="notification_sound" type="checkbox" id="notification_sound" value="1" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Notifications Email</div>
										<p>We’ll send you an email to your account each time you receive a new activity notification</p>
									</div>

									<div class="togglebutton">
										<label>
											<input name="notification_email" type="checkbox" id="notification_email" value="1" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Friend’s Birthdays</div>
										<p>Choose wheather or not receive notifications about your friend’s birthdays on your newsfeed</p>
									</div>

									<div class="togglebutton">
										<label>
											<input name="friendsbrithday" type="checkbox" id="friendsbrithday" value="1" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Chat Message Sound</div>
										<p>A sound will be played each time you receive a new message on an inactive chat window</p>
									</div>

									<div class="togglebutton">
										<label>
											<input name="chatmessagesound" type="checkbox" id="chatmessagesound" value="1" checked="">
										</label>
									</div>
								</div>
                                

<div class="description-toggle">
    <div class="description-toggle-content">
        <div class="h6">Email Settings</div>
        <p> E-mail me when someone follows me</p>
    </div>

    <div class="togglebutton">
        <label>
          <input name="mailnotif_follow" value="1" checked="checked" type="checkbox">
        </label>
    </div>
</div>

<div class="description-toggle">
    <div class="description-toggle-content"> 
    <div class="h6">&nbsp;</div>
        <p> E-mail me when someone comments on my posts </p>
    </div>

    <div class="togglebutton">
        <label>
            <input name="mailnotif_comment" value="1" checked="checked" type="checkbox">
        </label>
    </div>
</div>

  
 



<div class="description-toggle">
    <div class="description-toggle-content"> 
    <div class="h6">&nbsp;</div>
        <p>E-mail me when someone likes my post</p>
    </div>

    <div class="togglebutton">
        <label>
            <input name="mailnotif_postlike" value="1" checked="checked" type="checkbox">
        </label>
    </div>
</div>
 
<div class="description-toggle">
    <div class="description-toggle-content"> 
    <div class="h6">&nbsp;</div>
        <p>E-mail me when someone shares my post</p>
    </div>

    <div class="togglebutton">
        <label>
            <input name="mailnotif_postshare" value="1" checked="checked" type="checkbox">
        </label>
    </div>
</div>

<div class="description-toggle">
    <div class="description-toggle-content"> 
    <div class="h6">&nbsp;</div>
        <p> E-mail me when someone wants to join my group</p>
    </div>

    <div class="togglebutton">
        <label>
          <input name="mailnotif_groupjoined" value="1" checked="checked" type="checkbox">
        </label>
    </div>
</div>
 
<div class="description-toggle">
    <div class="description-toggle-content"> 
    <div class="h6">&nbsp;</div>
        <p>E-mail me when someone likes my page</p>
    </div>

    <div class="togglebutton">
        <label>
             <input name="mailnotif_pagelike" value="1" checked="checked" type="checkbox">
        </label>
    </div>
</div>

<div class="description-toggle">
    <div class="description-toggle-content"> 
    <div class="h6">&nbsp;</div>
        <p>  E-mail me when someone messages me </p>
    </div>

    <div class="togglebutton">
        <label>
         <input name="mailnotif_message" value="1" checked="checked" type="checkbox">
        </label>
    </div>
</div> 
<div class="description-toggle">
    <div class="description-toggle-content"> 
    <div class="h6">&nbsp;</div>
        <p> E-mail me when someone posts on my timeline </p>
    </div>

    <div class="togglebutton">
        <label>
           <input name="mailnotif_timelinepost" value="1" checked="checked" type="checkbox">
        </label>
    </div>
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
