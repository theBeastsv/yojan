 <?
 $myuserId=$_SESSION['yojan_user_id'];
  $myuserquery= show_selecttable($debug,$limitstring,$conn,'users','*','WHERE userId=\''.$myuserId.'\' ',$limit,1,' rowId ASC');
		foreach( $myuserquery as $userrow ) { 
 
		}
 ?>
<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Hobbies and Interests</h6>
				</div>
				<div class="ui-block-content">
					<form action="forms/perint.php" method="post" enctype="multipart/form-data">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Hobbies</label>
								<textarea name="hobbies" class="form-control" style="font-size:12px; padding-top:40px;" id="hobbies" placeholder="I like to ride the bike to work, swimming..."  ><?=$userrow['hobbies'];?> </textarea>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Favourite TV Shows</label>
									<textarea name="favtvshow" class="form-control" style="font-size:12px; padding-top:40px;" id="favtvshow" placeholder="Breaking Good, RedDevil, People of Interest..."  ><?=$userrow['favtvshow'];?> </textarea>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Favourite Movies</label>
									<textarea name="favmovie" class="form-control" style="font-size:12px; padding-top:40px;" id="favmovie" placeholder="Idiocratic, The Scarred Wizar..."  ><?=$userrow['favmovie'];?> </textarea>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Favourite Games</label>
									<textarea name="favgames" class="form-control" style="font-size:12px; padding-top:40px;" id="favgames" placeholder="The First of Us, Assassin’s Squad..."  ><?=$userrow['favgames'];?> </textarea>
								</div>

								<button class="btn btn-secondary btn-lg full-width">Cancel</button>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Favourite Music Bands / Artists</label>
									<textarea name="favmusic" class="form-control" style="font-size:12px; padding-top:40px;" id="favmusic" placeholder="Iron Maid, DC/AC, Megablow..."  ><?=$userrow['favmusic'];?></textarea>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Favourite Books</label>
									<textarea name="favbooks" class="form-control" style="font-size:12px; padding-top:40px;" id="favbooks" placeholder="Egiptian Mythology 101, The Scarred Wizard..."  ><?=$userrow['favbooks'];?></textarea>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Favourite Writers</label>
									<textarea name="favwriters" class="form-control" style="font-size:12px; padding-top:40px;" id="favwriters" placeholder="Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle..."  ><?=$userrow['favwriters'];?></textarea>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Other Interests</label>
									<textarea name="otherint" class="form-control" style="font-size:12px; padding-top:40px;"id="otherint" placeholder="Swimming, Surfing, Scuba..."  ><?=$userrow['otherint'];?></textarea>
								</div>

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
