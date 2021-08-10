<? session_start();
include("../config/connect.php");
//include("../checksession.php");
//include("../config/otherclass.php");
include("../config/timeline.class.php");
$userId=$_SESSION['Username'];
$mtime=time();
$dateceated=date("Y-m-d G:i:s");
error_reporting(E_NOTICE ^ E_ALL);
if (is_file('../home.php')){
    $path = "";
}elseif (is_file('../home.php')){
    $path =  "../";
}elseif (is_file('../../home.php')){
    $path =  "../../";
}
include_once $path."../langs/set_lang.php";


$Usewrsql = "SELECT Email,Username,Password FROM signup  WHERE main_id='$userId' ";
   	$mUsewrsqlry=$conn->query($Usewrsql);
	$GetUserBar= $mUsewrsqlry->fetchAll() ;
 		foreach( $GetUserBar as $UserInfo ) {
			$email=$UserInfo['Email'];
			$password=$UserInfo['Password'];
			$display_name=$UserInfo['Userphoto'];
 		}

$group_name		=$_REQUEST['groupname'];
$aboutgroup		=$_REQUEST['aboutgroup'];
$group_privacy	=$_REQUEST['group_privacy'];
$imge='imgs/default-cover-page.png';
$profiles='imgs/default-cover-page.png';
// Account ENTRY
$query = $conn->query("INSERT INTO signup SET createdby='$userId', about ='$aboutgroup',active='2',Email='$email' ,Username='$group_name',Fullname='$group_name',Password='$password',timeu='$mtime',ctype='group',Userphoto='$imge'
,user_cover_photo='$imge'");
 $groupId = $conn->lastInsertId();
 
 $query2 = $conn->query("INSERT INTO groups SET id='$groupId',createdip='$createdip',createdby='$userId',group_privacy='$group_privacy'");

$query3 = $conn->query("INSERT INTO follow SET active='1',uf_one='$userId' ,uf_two='$groupId' ,times='$mtime'");
 
 
 $query4 = $conn->query("INSERT INTO group_admins SET active='1',admin_id='$userId',group_id='$groupId'");

header('Location: ../groups.php');
?>