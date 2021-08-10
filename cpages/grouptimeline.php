<?
$display_name =$ssgsow ['display_name'];
$about =$ssgsow ['about'];
$dateceated =date("F j, Y, g:i a",strtotime($ssgsow ['dateceated']));
?><div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="img/top-header2.jpg" alt="nature">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="img/author-main2.jpg" alt="author">
							</div>
							<div class="author-content">
								<a href="#" class="h3 author-name"><?=$display_name;?></a>
								<div class="country">Rock Band  |  San Francisco, CA</div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col-xl-8 m-auto col-lg-8 col-md-12">
								<? include("incfiles/pageadmingroup.php");?>
							</div>
						</div>

						<div class="control-block-button">
							<a href="#" class="btn btn-control bg-primary">
								<svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-sm-12 col-xs-12">
        <? 
		 $_SESSION['timeLineId']=$gid;
		 include("incfiles/postnewsfeed.php");?>
        
			<div id="newsfeed-items-grid">
            
            <div id="stories-wrapper">
                
                <?
				  
				$mytweets=getTimeLineforme_group($gid,'');
				echo $mytweets;
				?>
				
 

			</div>
			</div>	     

		</div>

		<div class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Group Intro</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<ul class="widget w-personal-info item-block">
						<li>
							<span class="text"><?=$about;?></span>
						</li>
						<li>
							<span class="title">Created:</span>
							<span class="text"><?=$dateceated;?></span>
						</li>
						    
					</ul>

					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="#" class="social-item bg-facebook">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="#" class="social-item bg-green">
							<i class="fa fa-dribbble" aria-hidden="true"></i>
							Spotify
						</a>
					</div>
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Location</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>

				<div class="widget w-contacts">
					<!-- Google map -->

					<div class="section">
						<div id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;" class="gm-style"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;" tabindex="0"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; position: absolute; left: -122px; top: -145px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -122px; top: 111px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 134px; top: -145px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 134px; top: 111px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -122px; top: -145px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -122px; top: 111px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 134px; top: -145px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 134px; top: 111px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 246px; height: 200px;"><img style="width: 246px; height: 200px;" src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i3623802&amp;2i2402705&amp;2e1&amp;3u14&amp;4m2&amp;1u246&amp;2u200&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=113433"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="position: absolute; left: -122px; top: -145px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14155!3i9385!4i256!2m3!1e0!2sm!3i401097430!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=2903"></div><div style="position: absolute; left: -122px; top: 111px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14155!3i9386!4i256!2m3!1e0!2sm!3i401097430!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=38924"></div><div style="position: absolute; left: 134px; top: -145px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14156!3i9385!4i256!2m3!1e0!2sm!3i401095309!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=22593"></div><div style="position: absolute; left: 134px; top: 111px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14156!3i9386!4i256!2m3!1e0!2sm!3i401095309!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=58614"></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;" class="gm-style-pbc"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" href="https://maps.google.com/maps?ll=-25.363,131.044&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps"><div style="width: 66px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 192px; height: 148px; position: absolute; left: 5px; top: 10px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 71px; bottom: 0px; width: 121px;"><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank">Terms of Use</a></div></div><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: 0px none; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; -moz-user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;" draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button"><img style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control"></button><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@-25.363,131.044,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 107px; right: 28px;" draggable="false" controlwidth="28" controlheight="93"><div class="gmnoprint" style="position: absolute; left: 0px; top: 38px;" controlwidth="28" controlheight="55"><div draggable="false" style="-moz-user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;" draggable="false" title="Zoom in" aria-label="Zoom in" type="button"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></button><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;" draggable="false" title="Zoom out" aria-label="Zoom out" type="button"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: -15px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></button></div></div><div class="gm-svpc" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; position: absolute; left: 0px; top: 0px;" controlwidth="28" controlheight="28"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;" aria-label="Street View Pegman Control"><img style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Pegman is on top of the Map"><img style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Street View Pegman Control"><img style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; display: none;" title="Rotate map 90 degrees"><img style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; top: 0px; cursor: pointer;" class="gm-tilt"><img style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div style="float: left; position: relative;" class="gm-style-mtc"><div role="button" tabindex="0" title="Show street map" aria-label="Show street map" aria-pressed="true" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 22px; font-weight: 500;" draggable="false">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 30px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show street map with terrain"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div style="float: left; position: relative;" class="gm-style-mtc"><div role="button" tabindex="0" title="Show satellite imagery" aria-label="Show satellite imagery" aria-pressed="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 40px; border-left: 0px none;" draggable="false">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 30px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show imagery with street names"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
						<script>
							var map;

							function initMap() {

								var myLatLng = {lat: -25.363, lng: 131.044};

								map = new google.maps.Map(document.getElementById('map'), {
									center: myLatLng,
									zoom: 14,
									scrollwheel: false//set to true to enable mouse scrolling while inside the map area
								});

								var marker = new google.maps.Marker({
									position: myLatLng,
									map: map,
									icon: {
										url: "img/marker-google.png",
										scaledSize: new google.maps.Size(50, 50)
									}

								});
							}


						</script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESxStZOWN9aMvTdR3Nov66v6TXxpRZMM&amp;callback=initMap" async="" defer=""></script>
						</div>

					<!-- End Google map -->

					<ul>
						<li>
							<span class="title">Address:</span>
							<span class="text">Fake Street 320, San Francisco California, USA.
							</span>
						</li>
						<li>
							<span class="title">Working Hours:</span>
							<span class="text">Mon-Fri 9:00am to 6:00pm
								Weekends 10:00am to 8:00pm
							</span>
						</li>
					</ul>
				</div>

			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Faved this Page</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<ul class="widget w-faved-page">
						<li>
							<a href="#">
								<img src="img/faved-page1.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page2.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page3.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page4.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page5.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page6.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page7.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page8.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page9.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page7.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page10.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page11.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page7.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/faved-page12.jpg" alt="user">
							</a>
						</li>
						<li class="all-users">
							<a href="#">+5k</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Twitter Feed</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>

				<ul class="widget w-twitter">
					<li class="twitter-item">
						<div class="author-folder">
							<img src="img/twitter-avatar.png" alt="avatar">
							<div class="author">
								<a href="#" class="author-name">Green Goo Rock</a>
								<a href="#" class="group">@greengoo_rock</a>
								<span class="verified"><i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
						</div>
						<p>This Friday at 8pm we’ll be playing a song of our new album, come and join us! <a href="#" class="link-post">#NewsoftheGoo</a></p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								4 hours ago
							</time>
						</span>
					</li>
					<li class="twitter-item">
						<div class="author-folder">
							<img src="img/twitter-avatar.png" alt="avatar">
							<div class="author">
								<a href="#" class="author-name">Green Goo Rock</a>
								<a href="#" class="group">@greengoo_rock</a>
								<span class="verified"><i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
						</div>
						<p>Tickets for the Marina Party are now available on <a href="#" class="link-post">www.ggrock.com</a></p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								Yesterday
							</time>
						</span>
					</li>
					<li class="twitter-item">
						<div class="author-folder">
							<img src="img/twitter-avatar.png" alt="avatar">
							<div class="author">
								<a href="#" class="author-name">Green Goo Rock</a>
								<a href="#" class="group">@greengoo_rock</a>
								<span class="verified"><i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
						</div>
						<p>We had a great time playing in Italy. Thanks a lot to the incredible fans! <a href="#" class="link-post">#GGinRome #PisaArena </a></p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								5 days ago
							</time>
						</span>
					</li>
				</ul>
			</div>
		</div>

		<div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Photos</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<ul class="widget w-last-photo js-zoom-gallery">
						<li>
							<a href="img/last-photo1-large.jpg">
								<img src="img/last-photo1-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-photo2-large.jpg">
								<img src="img/last-photo2-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-photo3-large.jpg">
								<img src="img/last-photo3-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-photo4-large.jpg">
								<img src="img/last-photo4-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot11-large.jpg">
								<img src="img/last-phot11-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-phot12-large.jpg">
								<img src="img/last-phot12-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-photo7-large.jpg">
								<img src="img/last-photo7-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-photo8-large.jpg">
								<img src="img/last-photo8-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="img/last-photo9-large.jpg">
								<img src="img/last-photo9-large.jpg" alt="photo">
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Green Goo’s Playlist</h6>
					<a href="#" class="more">
						<span class="c-green">
								<svg class="olymp-remove-playlist-icon"><use xlink:href="icons/icons.svg#olymp-remove-playlist-icon"></use></svg>
							</span>
					</a>
				</div>

					<ol class="widget w-playlist">
						<li class="js-open-popup" data-popup-target=".playlist-popup">
							<div class="playlist-thumb">
								<img src="img/playlist1.jpg" alt="thumb-composition">
								<div class="overlay"></div>
								<a href="#" class="play-icon">
									<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
								</a>
							</div>

							<div class="composition">
								<a href="#" class="composition-name">Ruler of Firenze</a>
								<a href="#" class="composition-author">Eden Artifact</a>
							</div>

							<div class="composition-time">
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
								<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
							</div>

						</li>

						<li class="js-open-popup" data-popup-target=".playlist-popup">
							<div class="playlist-thumb">
								<img src="img/playlist2.jpg" alt="thumb-composition">
								<div class="overlay"></div>
								<a href="#" class="play-icon">
									<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
								</a>
							</div>

							<div class="composition">
								<a href="#" class="composition-name">Ruler of Firenze</a>
								<a href="#" class="composition-author">Eden Artifact</a>

							</div>

							<div class="composition-time">
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
								<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
							</div>

						</li>
						<li class="js-open-popup" data-popup-target=".playlist-popup">
							<div class="playlist-thumb">
								<img src="img/playlist3.jpg" alt="thumb-composition">
								<div class="overlay"></div>
								<a href="#" class="play-icon">
									<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
								</a>
							</div>

							<div class="composition">
								<a href="#" class="composition-name">Ruler of Firenze</a>
								<a href="#" class="composition-author">Eden Artifact</a>
							</div>

							<div class="composition-time">
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
								<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
							</div>

						</li>
						<li class="js-open-popup" data-popup-target=".playlist-popup">
							<div class="playlist-thumb">
								<img src="img/playlist4.jpg" alt="thumb-composition">
								<div class="overlay"></div>
								<a href="#" class="play-icon">
									<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
								</a>
							</div>

							<div class="composition">
								<a href="#" class="composition-name">Ruler of Firenze</a>
								<a href="#" class="composition-author">Eden Artifact</a>
							</div>

							<div class="composition-time">
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
								<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
							</div>

						</li>
						<li class="js-open-popup" data-popup-target=".playlist-popup">
							<div class="playlist-thumb">
								<img src="img/playlist5.jpg" alt="thumb-composition">
								<div class="overlay"></div>
								<a href="#" class="play-icon">
									<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
								</a>
							</div>

							<div class="composition">
								<a href="#" class="composition-name">Ruler of Firenze</a>
								<a href="#" class="composition-author">Eden Artifact</a>
							</div>

							<div class="composition-time">
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
								<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
							</div>

						</li>
					</ol>

			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Green Goo's Poll</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<ul class="widget w-pool">
						<li>
							<p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
						</li>

						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">

										<span class="radio">
											<label>
												<input name="optionsRadios" type="radio"><span class="circle"></span><span class="check"></span>
											Thomas Bale
											</label>
										</span>
									</span>
									<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span><span class="units">62%</span></span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary skills-animate" style="width: 62%; opacity: 1;"></span>
								</div>

								<div class="counter-friends">12 friends voted for this</div>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic1.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic2.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic3.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic4.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic5.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic6.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#" class="all-users">+3</a>
									</li>
								</ul>

							</div>
						</li>

						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">

										<span class="radio">
											<label>
												<input name="optionsRadios" type="radio"><span class="circle"></span><span class="check"></span>
											Ben Robertson
											</label>
										</span>
									</span>
									<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span><span class="units">27%</span></span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
								</div>
								<div class="counter-friends">7 friends voted for this</div>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic12.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic13.jpg" alt="friend">
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input name="optionsRadios" type="radio"><span class="circle"></span><span class="check"></span>
											Michael Streiton
											</label>
										</span>
									</span>
									<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span><span class="units">11%</span></span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
								</div>

								<div class="counter-friends">2 people voted for this</div>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic14.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic15.jpg" alt="friend">
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
					<a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote Now!</a>
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Videos</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<ul class="widget w-last-video">
						<li>
							<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
								<svg class="olymp-play-icon"><use xlink:href="icons/icons.svg#olymp-play-icon"></use></svg>
							</a>
							<img src="img/video1.jpg" alt="video">
							<div class="video-content">
								<div class="title">Green Goo - Live at Dan’s Arena</div>
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
							</div>
							<div class="overlay"></div>
						</li>
						<li>
							<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
								<svg class="olymp-play-icon"><use xlink:href="icons/icons.svg#olymp-play-icon"></use></svg>
							</a>
							<img src="img/video2.jpg" alt="video">
							<div class="video-content">
								<div class="title">Green Goo - Live at Dan’s Arena</div>
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
							</div>
							<div class="overlay"></div>
						</li>
						<li>
							<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
								<svg class="olymp-play-icon"><use xlink:href="icons/icons.svg#olymp-play-icon"></use></svg>
							</a>
							<img src="img/video3.jpg" alt="video">
							<div class="video-content">
								<div class="title">Green Goo - Live at Dan’s Arena</div>
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
							</div>
							<div class="overlay"></div>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>