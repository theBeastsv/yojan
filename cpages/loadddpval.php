<? session_start();
include("../config/config.php");
include("../checksession.php");
include("../config/otherclass.php");
$myval=$_REQUEST['myval'];
$tyhj=$_REQUEST['tyhj'];

if($tyhj==1){
	$tintags='<label class="control-label">Your State</label><select id="state" name="state" class="xselectpicker   form-control validate[required] text-input" onchange="loadallddval(this.value,2);" style="display:block">';
									 $myval=getcountry_state_city(2,0,$myval) ;
									 $tintags =$tintags.''.$myval.'</select>';
	}
if($tyhj==2){
	$tintags='<label class="control-label">Your City</label><select id="city" name="city" class="xselectpicker  form-control validate[required] text-input" style="display:block">';
									 $myval=getcountry_state_city(3,0,$myval) ;
									 $tintags =$tintags.''.$myval.'</select>';
	}
	echo $tintags;
?>