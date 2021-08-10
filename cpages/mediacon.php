<? session_start();
include("../config/config.php");
$jso=$_REQUEST['jso'];

 $Gesec= show_selecttable($debug,$limitstring,$conn,'media','filename,rowId,album_id,timeline_id','WHERE album_id=\''.$jso.'\' AND activr=\'1\'',$limit,1,' rowId ASC');
$pfiles='';
		foreach( $Gesec as $xecSe ) {
			$rowId	=$xecSe['rowId'];
			$filename	=$xecSe['filename'];
			$timeline_id	=$xecSe['timeline_id'];
			$album_id	=$xecSe['album_id'];
			$pfiles=$pfiles.'<img src="filestouplo/tmp/'.$timeline_id.'/'.$filename.'" height="100" width="100" style="max-height:100px"> ';
 		} $pfiles=$pfiles.'<input name="albumId" type="hidden" value="'.$jso.'" />';
echo $pfiles;
?>

 