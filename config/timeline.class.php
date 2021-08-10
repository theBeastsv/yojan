<?
 function GetALlGroupsofMy(){
	$lastPost=$_REQUEST['lastPost'];
	global $conn;
	global $themeData; 
	$perPage =PERPAGE_PRIM;
	$page =1;
	if(!empty($_REQUEST["page"])) {
		$page = $_REQUEST["page"];
		} 
		 
	  
	$start = ($page-1)*$perPage;
 	if ($perPage < 1)
	{
		$perPage = 5;
	}

	$userId=$uid=$userId=$_SESSION['Username'];;
 
 	if($lastPost!=''){
	$remove_string = explode("-",$lastPost);
	$bans=$remove_string[1];
	 $babus="AND a.main_id< '$bans' ";	
	} else{
	
	$babus="AND a.main_id>0";
	}

     $AllCountgsql="SELECT a.*,b.*,a.main_id as groupId FROM  signup as a, group_admins as b  WHERE b.admin_id='$userId' AND b.group_id=a.main_id  ORDER BY a.main_id DESC ";
     $queryAllCount1 = $conn->query($AllCountgsql);
    $msseSt= $queryAllCount1->fetchAll()  ;
    $AllRecrd = $queryAllCount1->rowCount(); 
      
    $gsql=$AllCountgsql . " limit " . $start . "," . $perPage; 
    $query1 = $conn->query($gsql);
    $myTReset= $query1->fetchAll()  ;
    $ifrecset = $query1->rowCount(); 
    if( $ifrecset>0){ 
        foreach ($myTReset as $postData) {
                	$Gropdisplay_name= $postData['display_name'] ;
				 	$groupId= $postData['groupId'] ;
	  			 	$GeFollowerDet="SELECT uf_one,uf_two FROM follow WHERE uf_one='$groupId' order by id DESC";
					 
  	 				$quGetFoloweDet1 = $conn->query($GeFollowerDet);
   		   			$GetSweetRecordSet= $quGetFoloweDet1->fetchAll()  ;
		    		$allmembers = $quGetFoloweDet1->rowCount();
						$bbaus=0;
						$pfiles='';
						$display_name='';
						foreach( $GetSweetRecordSet as $GroDmbers ) {
						if($bbaus<7){
							$ftimeline_id=$GroDmbers['uf_two'];
							$Ussql = "SELECT Userphoto,user_cover_photo FROM signup  WHERE main_id='$ftimeline_id' "; 
							$mUssqllry=$conn->query($Ussql);
							$GetSar= $mUssqllry->fetchAll()  ;
							$babus='';
							foreach( $GetSar as $UseSfo ) { 
							$display_name=$UseSfo['Userphoto'];
							$profileImage=$UseSfo['user_cover_photo'];
							$postedBY=$UseSfo['main_id'];
							$pfiles=$pfiles.'<li><a href="#" title="'.$display_name.'"><img src="'.$profileImage.'" alt="friend"></a></li>';
							}
						
						}
						$bbaus++;
					}
                $txturn=$txturn.'<div class="friend-item friend-groups create-group" data-mh="friend-groups-item" style="height: 398.65px;">
			<div class="ui-block" style="height: 398.65px;">
				<div class="friend-item friend-groups">

					<div class="friend-item-content">
				
						
						<div class="friend-avatar">
							<div class="author-thumb">
								<a href="timeline.php?gid='.$groupId.'&gt='.$Gropdisplay_name.'"><img src="img/logo.png" alt="'.$Gropdisplay_name.'"></a>
							</div>
							<div class="author-content">
								<a href="timeline.php?gid='.$groupId.'&gt='.$Gropdisplay_name.'" class="h5 author-name">'.$Gropdisplay_name.'</a>
								<div class="country">'.$Gropdisplay_name.' members in the Group</div>
							</div>
						</div>

						<ul class="friends-harmonic">'.$pfiles.'</ul>


						<div class="control-block-button">
							<a href="javascript:void(0)" onclick="grouploadfriends(\''.$groupId.'\');" class="  btn btn-control bg-blue" data-toggle="modal" data-target="#create-friend-group-add-friends">
								<svg class="olymp-happy-faces-icon"><use xlink:href="icons/icons.svg#olymp-happy-faces-icon"></use></svg>
							</a>

							<a  href="javascript:void(0)" onclick="groupsettings(\''.$groupId.'\');"class="btn btn-control btn-grey-lighter">
								<svg class="olymp-settings-icon"><use xlink:href="icons/icons.svg#olymp-settings-icon"></use></svg>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>';
             }
            $rt=0;
 	}
    $txturn=$txturn.'';
     

        
        echo  $txturn ;	
	 }
	 
	 
 function gerSweetDetail($sweetId){
	 global $conn;
	 $defaultCommentNo=5;
	 $GetPostDet="SELECT * FROM wpost WHERE main_id='$sweetId'";
  	 $quGetPostDet1 = $conn->query($GetPostDet);
   		    $GetSweetRecordSet= $quGetPostDet1->fetchAll()  ;
		    $ifrecSset = $quGetPostDet1->rowCount();  
			if( $ifrecSset>0){ 
			
			foreach ($GetSweetRecordSet as $poDstData)
			{
 			$Postid		=$poDstData['post_id'];
		    $author_id=$poDstData['author_id'];
			$post_img =$poDstData['post_img']; 
			$post_time=$poDstData['post_time'];
			$post_content=$poDstData['post_content'];
			$p_title=$poDstData['p_title'];
			$p_likes=$poDstData['p_likes'];
			$p_privacy=$poDstData['p_privacy'];
			$shared=$poDstData['shared'];

		
			
		if(!empty($post_google_map_name)){
			$goglemap= '<div class="post-thumb"><img src="https://maps.googleapis.com/maps/api/staticmap?center='.$post_google_map_name.'&amp;zoom=13&amp;size=600x300&amp;maptype=roadmap&amp;markers=color:red%7C'.$post_google_map_name.'&amp;key=AIzaSyDXBJtT85FNi-4es98tVgN_MB2Ao60DmaQ" alt="lucknow" width="100%"></div>';
		}else{
			$goglemap='';
		}
		if(!empty($post_youtube_video_id)){
			$allmedia= '<div class="video-content"><iframe width="100%" height="480"  src="https://www.youtube.com/embed/'.$youtube_video_id.'" frameborder="0" gesture="media" allowfullscreen></iframe></div>';
			}else{
			$allmedia=getMediaId($post_media_id);
		}
		//$post_hidden TO HIDE POST NEXT TO IMPLEMENT
		if(empty($post_recipient_id)){
			$post_recipient_id=0;
		}
			 
		$MessagePoster=getMessagePosterName($post_id,$post_recipient_id,$post_times,$Postid);
		$commentBox=GetCommentBox($Postid);
		$trfanseget=GetSideShareBox($Postid);
		$getLatestComment=GetlastesCtComments($Postid,$defaultCommentNo,0);
		$allikes= getalllikes($Postid);
		$totsql = "SELECT post_id,timeline_id FROM postlikes  WHERE post_id='$Postid'  ";
$Gtotsqlc=$conn->query($totsql);
	$Gesxr= $Gtotsqlc->fetchAll()  ;
	$toCounted = $Gtotsqlc->rowCount();
 		$tot_return= $tot_return. '<div class="ui-block"><i class="pointer" id="pgena-'.$Postid.'"></i>
									<article class="hentry post video">  
									'.$MessagePoster.'
									<p>'.$post_text.'</p>
									'.$allmedia.' 
									'.$goglemap ;
   $tot_return= $tot_return.'<div class="post-additional-info inline-items">
 							<a href="#" class="reaction tooltipstered post-add-icon inline-items" id="like'.$Postid.'" rel="like"><svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
								<span>'.$toCounted.'</span></a>
							<div id="statusbar'.$Postid.'" class="inline-items"> '.$allikes.'</div>
							<div class="comments-shared">
								<a href="javascript:void(0)"  class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
 									<span>0</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
 									<span>16</span>
								</a>
							</div>
 						</div>
						 '.$getLatestComment.'
					 
                    <div id="comment'.$Postid.'">
					'.$commentBox.'
					</div>'. $trfanseget; 
				
	 $tot_return=$tot_return .'</article>
				</div>';
			}
			}
			
			return  $tot_return ;
	 }
function GetlastesCtComments($Postid,$defaultCommentNo,$lastPost){
	global $conn;
	$perPage = 5;
	$tquery="WHERE post_id='$Postid' AND active='1'";
 	if($lastPost!=0){
		$tquery=$tquery." AND main_id<'$lastPost'";
		$perPage = 10;
		} else{
		$perPage = 5;
		}
		   
       
		
	$qxostDet1="SELECT * FROM comments  $tquery";
	
   	 $qxostDetx1 = $conn->query($qxostDet1);
   		    $GexrdSet= $qxostDetx1->fetchAll()  ;
		    $iCgset = $qxostDetx1->rowCount();  
  			if( $iCgset>0){ 
 			$getComments= '<ul class="comments-list" id="comenId'.$Postid.'">';
			$GetPoDet=$qxostDet1." limit  " . $perPage; 
  			$quGetP1 = $conn->query($GetPoDet);
   		    $GetSweecommet= $quGetP1->fetchAll()  ;
			foreach ($GetSweecommet as $poDData)
			{
 			$PostComId		=$poDData['main_id'];
			$timeline_id	=$poDData['timeline_id'];
			$timestamp		=$poDData['timestamp'];
			
			$times			=$poDData['times'];
			$media_id		=$poDData['media_id'];
			$post_id		=$poDData['post_id'];
			$texts			=$poDData['texts'];
			
			$MessageCommentrer=getCommentPoster($timeline_id,$timestamp,$PostComId);
	        $getComments=$getComments.'<li id="comentId'.$PostComId.'"> '.$MessageCommentrer.'
							<p>'.nl2br($texts	).'</p>
 							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
								<span>3</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>';
			
			}$getComments=$getComments.'</ul>
                    <div id="lastcometid'.$PostComId.'"><a href="javascript:void(0)" onclick="loadmorecomments(\''.$Postid.'\',\''.$PostComId.'\',\''.$defaultCommentNo.'\');" class="more-comments">View more comments <span>+</span></a></div>';
			}else{
				$getComments=$getComments.'  <a href="#" class="more-comments">No comments  </a>';
				}
			return $getComments;
	}
function GetSideShareBox($Postid){
	$trfanseget='<div class="control-block-button post-control-button">
 								<a href="#" class="reaction tooltipstered btn btn-control" id="like'.$Postid.'" rel="like"><svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg></a>
								
							 <a id="acomment-comment-'.$Postid.'"  href="#comment'.$Postid.'" class="btn btn-control acomment-reply " id="acomment-comment-">
								<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</a>
 							<a href="#" class="btn btn-control">
								<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
							</a>
 						</div>';
						
						return $trfanseget;
	}
function GetCommentBox($Postid){
	
	$taragats='<form  id="wps-'.$Postid.'" class="comment-form inline-items" enctype="multipart/form-data">

						<div class="post__author author vcard inline-items">
							<img src="img/author-page.jpg" alt="author">

							<div class="form-group with-icon-right is-empty">
								<input type="hidden" id="act-id-'.$Postid.'" name="act_id" value="'.$Postid.'" />
								<textarea class="form-control" id="ac-input-'.$Postid.'" placeholder="" name="ac-input-'.$Postid.'"></textarea>
								  
							<span class="material-input"><input class="form-control" name="uplocomentx-'.$Postid.'" id="uplocomentx-'.$Postid.'" type="file" /></span>
							</div>
						</div> 
						<div>
						<div class="post__author author vcard " style="padding-top:10px; text-align:right"><input name="ac_form_submit" class="uibutton confirm live_comment_submit" title="fb-'.$Postid.'" id="comment_id_'.$Postid.'" type="button" value="Submit"> &nbsp; <a href="javascript:void(0)"  class="uibutton comment_cancel" id="'.$Postid.'">Cancel</a>
						</div>
					</form>';
					
					return $taragats;
	}
 

function  getTimeLineforme_group($uid,$postlst){ 
 	 global $conn;
	 global $themeData; 
		 
		$page =1;
		if(!empty($_REQUEST["page"])) {
			$page = $_REQUEST["page"];
			} 
			if($page==1){
				$perPage =PERPAGE_PRIM;
				}else{
				$perPage =PERPAGE_SUB;}
		  
		$start = ($page-1)*$perPage;
 		$userId=$uid;
		if($userId==''){
		$userId=$_SESSION['USername'] ;
		}
		
		if($postlst!=''){ 
	
	$babus="AND p.main_id< '$postlst' ";	
	} else{
		
	$babus="AND p.main_id>0";
		}
	
	 $tot_return='';
  $AllCountgsql="SELECT DISTINCT p.post_id AS Postid FROM posts p WHERE recipient_id=".$userId." $babus AND p.active=1 AND hidden=0  ORDER BY p.main_id DESC ";
 			//$AllCountgsql="SELECT * FROM posts WHERE timeline_id='" . $_SESSION['yojan_user_id'] . "' OR timeline_id IN (SELECT main_id FROM signup WHERE main_id IN (SELECT uf_two FROM follow WHERE uf_one=" . $_SESSION['yojan_user_id'] . " AND uf_two<>" .  $_SESSION['yojan_user_id']  . " AND active=1) AND type='user' AND active=1)  OR   timeline_id=" .  $_SESSION['yojan_user_id'] . " AND active=1 ORDER BY times DESC";
			 
			//$AllCountgsql="SELECT * FROM posts WHERE    timeline_id=" .  $_SESSION['yojan_user_id'] . " AND active=1 ORDER BY times DESC  ";
			
			//echo $AllCountgsql;
		 
			
			$queryAllCount1 = $conn->query($AllCountgsql);
   		    $msseSt= $queryAllCount1->fetchAll()  ;
		    $AllRecrd = $queryAllCount1->rowCount(); 
			 
			
			$gsql=$AllCountgsql . " limit " . $start . "," . $perPage; 
 			$query1 = $conn->query($gsql);
   		    $myTReset= $query1->fetchAll()  ;
		    $ifrecset = $query1->rowCount(); 
 			if( $ifrecset>0){ 
			foreach ($myTReset as $postData)
			{
				$vpostId=$postData['Postid'];
				$myvaltusx=gerSweetDetail($postData['Postid']);
 				$txturn=$txturn.''.$myvaltusx;
			}
   
	 
			$rt=0;
			$txturn= $txturn.' <div id="cloadmore"><a id="load-more-button'.$vpostId.'" href="javascript:void(0)" onclick="loadmorethis(\''.$vpostId.'\',\''.$userId.'\');" class="btn btn-control btn-more" ><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg><div class="ripple-container"></div></a></div>' ;
			}else{
			$txturn='<div id="cloadmore" align="center"><a class="btn btn-control btn-more" style="font-size:12px">END</a> </div>' ;
			}
 			return  $txturn;
 	}
	
	
function  getTimeLineforme($uid,$postlst){
	 
	 global $conn;
	 global $themeData; 
		 
		$page =1;
		if(!empty($_REQUEST["page"])) {
			$page = $_REQUEST["page"];
			} 
		if($page==1){
			$perPage = PERPAGE_PRIM;
		}else{
			$perPage =PERPAGE_SUB;}
		  
		$start = ($page-1)*$perPage;
		   
        
        if ($perPage < 1)
        {
            $perPage = 5;
        }
		
		$userId=$uid;
		if($userId==''){
		$userId=$_SESSION['yojan_user_id'] ;
		}
		
		if($postlst!=''){
			$babus="AND p.main_id< '$postlst' ";	
		} else{
			$babus="AND p.main_id>0";
		}
	
	 $tot_return='';
  
			$AllCountgsql="SELECT DISTINCT p.post_id AS Postid FROM wpost p WHERE ((timeline_id IN (SELECT main_id FROM signup WHERE main_id IN (SELECT uf_two FROM follow WHERE uf_one='$userId' AND active=1) AND active=1) OR timeline_id='$userId')
                    OR recipient_id IN (SELECT main_id FROM signup WHERE main_id IN (SELECT uf_two FROM follow WHERE uf_one='$userId'
                        AND uf_two IN (SELECT main_id FROM groups)
                    ) AND active=1))
                    AND recipient_id NOT IN (SELECT main_id FROM groups WHERE group_privacy='secret')
                    AND recipient_id NOT IN (SELECT main_id FROM events)
                    AND hidden=0 $babus AND p.post_id>0 AND p.active=1 ORDER BY p.main_id DESC ";
 			//$AllCountgsql="SELECT * FROM posts WHERE timeline_id='" . $_SESSION['yojan_user_id'] . "' OR timeline_id IN (SELECT main_id FROM signup WHERE main_id IN (SELECT uf_two FROM follow WHERE uf_one=" . $_SESSION['yojan_user_id'] . " AND uf_two<>" .  $_SESSION['yojan_user_id']  . " AND active=1) AND type='user' AND active=1)  OR   timeline_id=" .  $_SESSION['yojan_user_id'] . " AND active=1 ORDER BY times DESC";
			 
			//$AllCountgsql="SELECT * FROM posts WHERE    timeline_id=" .  $_SESSION['yojan_user_id'] . " AND active=1 ORDER BY times DESC  ";
			
			//echo $AllCountgsql;
		 
			
			$queryAllCount1 = $conn->query($AllCountgsql);
   		    $msseSt= $queryAllCount1->fetchAll()  ;
		    $AllRecrd = $queryAllCount1->rowCount(); 
			 
			
			$gsql=$AllCountgsql . " limit " . $start . "," . $perPage; 
 			$query1 = $conn->query($gsql);
   		    $myTReset= $query1->fetchAll()  ;
		    $ifrecset = $query1->rowCount(); 
 			if( $ifrecset>0){ 
				foreach ($myTReset as $postData)
				{
					$vpostId=$postData['Postid'];
					$myvaltusx=gerSweetDetail($postData['Postid']);
					$txturn=$txturn.''.$myvaltusx;
					
				}
 			$rt=0;
			$txturn= $txturn.' <div id="cloadmore"><a id="load-more-button'.$vpostId.'" href="javascript:void(0)" onclick="loadmorethis(\''.$vpostId.'\',\''.$userId.'\');" class="btn btn-control btn-more" ></a></div>' ;
			}else{
			$txturn='<div id="cloadmore" align="center"><a class="btn btn-control btn-more" style="font-size:12px">END</a> </div>' ;
			}
 
 		 
			
			return  $txturn;
	
	}

?>