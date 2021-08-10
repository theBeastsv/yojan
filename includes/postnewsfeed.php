<div class="ui-block">
				<div class="news-feed-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link inline-items active" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">

								<svg class="olymp-status-icon"><use xlink:href="icons/icons.svg#olymp-status-icon"></use></svg>

								<span>Status</span>
							<div class="ripple-container"></div></a>
						</li>
						<li class="nav-item">
							<a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false">

								<svg class="olymp-multimedia-icon"><use xlink:href="icons/icons.svg#olymp-multimedia-icon"></use></svg>

								<span>Multimedia</span>
							<div class="ripple-container"></div></a>
						</li>

						<li class="nav-item">
							<a class="nav-link inline-items" data-toggle="tab" href="#blog" role="tab" aria-expanded="false">
								<svg class="olymp-blog-icon"><use xlink:href="icons/icons.svg#olymp-blog-icon"></use></svg>

								<span>Blog Post</span>
							<div class="ripple-container"></div></a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
						<form id="picpost" name="picpost">
								<div class="author-thumb">
									<img src="img/author-page.jpg" alt="author">
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control" name="message" id="pmessage"></textarea> <input type="hidden" name="pic_url" id="pic_url" >
           
								<span class="material-input"></span></div>
								<div class="add-options-message">
									<a  href="javascript:void(0)"  class=" options-message" id="upload_pic" data-placement="top" data-original-title="ADD PHOTOS">
										<svg class="olymp-camera-icon" data-toggle="modal"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
									</a>
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
									</a>

									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="ADD LOCATION">
										<svg class="olymp-small-pin-icon"><use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use></svg>

									</a><p id="files" style="padding-top:10px"><span id="statuss"></span></p>
  <div id="moaduploadstatus"></div>
									<div class="row"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><select name="post_privacy" class="btn-group bootstrap-select form-control">
	<option value="friends">People I Follow</option>
	<option value="public" selected="yes">Public</option>
</select></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><input name="xlbumid" id="xlbumid" type="hidden" value="0" />
  <input name="timeline_id" value="<?=$_SESSION['yojan_user_id'];?>" type="hidden">
  <input name="recipient_id" value="<?=$_SESSION['timeLineId'];?>" type="hidden"><button type="button"  class="fb_submit btn btn-primary btn-md-2" title="picpost" >Post Status</button></div>
       </div>

								</div>

							</form>	 
						</div>

						<div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="false">
							<form id="npost" name="npost">
								<div class="author-thumb">
									<img src="img/author-page.jpg" alt="author">
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control" name="message" id="message"></textarea>
								<span class="material-input"></span></div>
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

									<button type="button"  class="fb_submit btn btn-primary btn-md-2 " title="npost">Post Status</button>
									<button class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>

								</div>

							</form>
						</div>

						<div class="tab-pane" id="blog" role="tabpanel" aria-expanded="false">
							 <form id="vidpost" name="vidpost">
								<div class="author-thumb">
									<img src="img/author-page.jpg" alt="author">
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control" name="message" id="vmessage"></textarea>
								 <input type="text" name="y_link" style="width:100%" id="y_link" placeholder="Enter Youtube Url - www.youtube.com/watch?v=rdmycu13Png"><span class="material-input"></span></div>
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

									<button type="button" class="fb_submit btn btn-primary btn-md-2 " title="vidpost">Post Status</button>
									<button class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>

								</div>

							</form>
						</div>
					</div>
				</div>
			</div>