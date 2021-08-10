<div class="ui-block">
				<div class="news-feed-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">

								<svg class="olymp-status-icon"><use xlink:href="icons/icons.svg#olymp-status-icon"></use></svg>

								<span>Status</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link inline-items" onClick="loadtabs(1);" href="javascript:void(0);">

								<svg class="olymp-multimedia-icon"><use xlink:href="icons/icons.svg#olymp-multimedia-icon"></use></svg>

								<span>Multimedia</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link inline-items" onClick="loadtabs(2);" href="javascript:void(0);">
								<svg class="olymp-blog-icon"><use xlink:href="icons/icons.svg#olymp-blog-icon"></use></svg>

								<span>Blog Post</span>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active story-publisher-box" id="home-1" role="tabpanel" aria-expanded="true">
							<form  enctype="multipart/form-data" id="storyboard"  method="post" >
								<div class="author-thumb">
									<img src="img/author-page.jpg" alt="author">
								</div>
								<div class="form-group with-icon label-floating is-empty inputs-container">
									<label class="control-label">Share what you are thinking here...</label>
									 <div class="mentions-input-box"><div class="mentions"><div></div></div><textarea id="postdata" name="postdata" class="form-control story-text-area" placeholder=""></textarea></div><div class="mentions-autocomplete-list" style="display: none;"></div>
								<span class="material-input"></span></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="midimili">
</div>
								<div class="add-options-message">
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="ADD PHOTOS">
										<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
									</a>
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
									</a>

									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="ADD LOCATION">
										<svg class="olymp-small-pin-icon"><use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use></svg>
									</a>
									<div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><select name="post_privacy" class="btn-group bootstrap-select form-control">
	<option value="friends">People I Follow</option>
	<option value="public" selected="yes">Public</option>
</select></div>

  <input name="timeline_id" value="<?=$_SESSION['yojan_user_id'];?>" type="hidden">
        <input name="recipient_id" value="" type="hidden">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="btn btn-primary btn-md-2" id="story_submit_btn" name="story_submit_btn"   value="Post Status" type="submit"> <input name="albyumId" id="albyumId" type="text" value="0"> </div></div>
									 

								</div>

							</form>
						</div>

						 

						 
					</div>
				</div>
			</div>