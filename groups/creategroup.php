
<!-- Window-popup Create Friends Group -->
<div class="modal fade" id="create-friend-group-1" style="background-color:#fff;">
	<div class="modal-dialog ui-block window-popup create-friend-group create-friend-group-1">
		

	<div class="ui-block-title">
		<h6 class="title">Create Friend Group</h6>
	</div>

	<div class="ui-block-content">
		<form action="forms/crtgroup.php" method="post"><div class="form-group is-select label-floating" >
			<label class="control-label">Group Name</label>
			<input class="form-control" name="groupname" id="groupname" placeholder="Highschool Friends" value="" type="text">
		</div>

		<div class="form-group with-button">
			<textarea class="form-control" name="aboutgroup" id="aboutgroup" placeholder="About this Group"></textarea> 

			

		</div>
        <div class="description-toggle"> 
        <input name="group_privacy" id="group_privacy" value="open" checked="" type="radio">
            <div class="description-toggle-content">
                <div class="h6">Open Group</div>
                <p style="font-size:12px;">Anyone can see and join the group.</p>
            </div> 
        </div>
        <div class="description-toggle">
        <input name="group_privacy" id="group_privacy" value="closed"  type="radio">
        <div class="description-toggle-content">
                <div class="h6">Closed Group</div>
                <p style="font-size:12px;">Anyone can see and request to join the group.<br /> Requests can be accepted or declined by admins. </p>
            </div>
         </div>
         <div class="description-toggle">
               <input name="group_privacy" id="group_privacy" value="secret"  type="radio">
               <div class="description-toggle-content">
                <div class="h6">Secret Group</div>
                <p style="font-size:12px;">Only members can access the group.</p>
            </div> 
         </div>
                   
		  
		<button class="btn btn-blue btn-lg full-width">Create Group</button>
        </form>
	</div>


</div>
</div>
<!-- ... end Window-popup Create Friends Group -->