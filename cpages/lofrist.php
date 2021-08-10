<? session_start();
include("../config/config.php");
include("../checksession.php");
include("../config/otherclass.php");
include("../config/timeline.class.php");
$jso=$_REQUEST['jso'];

$pfiles= getalllikes($jso);
echo $pfiles;
?>

 