<?php
session_start();
if(!$_SESSION['user_email']){//if the session of the email is not active
    header("location: login.php");
}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Profile name</title>

<link href="css2/home.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.style4 {color: #999999;
margin-left:20px;

}
.style6 {color: #FF0000; margin-left: 10px; }
.ul_pages{background-color:#F8F9FA; margin-bottom:5px;}
-->
</style>
</head>

<body>
<div class="header">
  <div class="fix_top_header">
    <a href="http://myopenstyle.com"><div class="logo"></div></a>
	<div class="nivg_top"><a href="#">Profile</a> | <a href="#" title="View Activties">Activities <sup title="resent Activity" style="color:#FFFFFF; font-weight:bold; background-color:#FF0000; font-size:12px; margin-left:2px; margin-right:2px; ">0</sup></a> |<a href="#" title="View Messages"> Messages  <sup style="color:#FFFFFF; margin-left:2px; margin-right:2px; font-weight:bold; background-color:#FF0000; font-size:12px;" title="Unread Mesagess">43</sup></a>| <a href="#" title="View Friends List">Friends <small style="font-size:9px; color:#000000;" title="you have 345 friends">(345)</small><sup style="color:#FFFFFF; margin-left:2px; margin-right:2px; font-weight:bold; background-color:#FF0000; font-size:12px;" title="Friends Invitations">43</sup></a> | <a href="logout.php">Logout</a></div>
  </div>
  
</div><br />
<div class="wrapper_main">
  <table width="1000" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="200" valign="top"><div class="side_content_box">
        <div align="left"><img src="images/photo.jpg" alt="profile photo" width="190" height="200" /><h5 align="center">Ashley Tisdale</h5>
		Friends (3425)
		 
		<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td><img src="images/photo2.jpg" width="44" height="44" class="thumbphot_box" /></td>
    <td><img src="images/photo_icon.jpg" width="44" height="44" /></td>
    <td><img src="images/photo3.jpg" width="44" height="44" /></td>
    <td><img src="images/photo4.jpg" width="44" height="44" /></td>
  </tr>
  <tr>
    <td><img src="images/photo5.jpg" width="44" height="44" /></td>
    <td><img src="images/photo6.jpg" width="44" height="44" /></td>
    <td><img src="images/photo7.JPG" width="44" height="44" /></td>
    <td><img src="images/photo8.jpg" width="44" height="44" /></td>
  </tr>
</table>
<a href="#">View all </a>	<br /><br />
<a href="#" title="View Messages"><div class="left_title_content" >Messages : <span class="style6">123 </span></div>
</a>
<a href="#" title="View Events"><div class="left_title_content" >Events : <span class="style6">4</span> </div></a>
<b >Pages</b><br />
<ul>
 
    <li class="ul_pages" > <a href="#" title="myOpenStyle">MyOpenStyle <span class="style6">23  </span> </a></li>
	<li class="ul_pages"  > <a href="#" title="Best Friends">Best Friends <span class="style6">5  </span> </a></li>
	
</ul><br />
        </div>
      </div></td>
      <td width="575" valign="top">
	  <div class="senter_maincontenbox">
	 <div style="background-color: #F4F4F4; "> <h3>Activity</h3></div>
	    <div class="activity_insert_box">
	      <form id="form1" name="form1" method="post" action="">
	        <textarea name="" cols="" rows="5"  style="width:530px;  color:#333333; padding-left:5px; border:solid thin #4b4b4b; font: 12px Arial, Helvetica, Arial, sans-serif; padding-top:5px;" ></textarea>
	        
			<h6 align="right"><a href="#">Post</a> | <a href="#">Link</a> | <a href="#">Photo</a> | <a href="#">Video</a></h6>
            </form>
	      </div>
	    <br />
	    <div class="main_center_box">
		  <div class="pic_mainbox"><img src="images/photo7.JPG" width="44" height="44" class="thumbphot_box" /></div>
		  
		 
	      <div class="main_center_box_matter">
	        <b><a href="#">Asad Khan</a></b><span class="style4"> Yesterday 22:35 </span><br />
	         <p> Content for  class "main_center box" Goes Here</p>
	        <p>Content for  class &quot;main_center box&quot; Goes Here</p>
	        <p>Content for  class &quot;main_center box&quot; Goes Here</p><br />
			<a href="#">Comment</a> - <a href="#">Hide this Activity</a> - <a href="#">Shear</a>
			<div class="comments_box_profile">
			  <h5>Comments <span class="style4">15</span> </h5>  
			  <img src="images/photo5.jpg" width="44" height="44" class="thumbphot_box" />"comments_box_profile" Goes Here<br /><br />
			  <form action="#" method="get">
			    <input type="text" name="textfield"  size="40"/>
			  </form>
			  
			  </div>
	        </div>
	    </div>
		
		<div class="main_center_box">
		  <div class="pic_mainbox"><img src="images/photo8.JPG" width="44" height="44" class="thumbphot_box" /></div>
		  
		 
	      <div class="main_center_box_matter">
	        <b><a href="#">ASMA KHAN </a></b> <span class="style4">22 min ago</span> <br />
	         <p> Content for  class "main_center box" Goes Here</p>
	        <p>Content for  class &quot;main_center box&quot; Goes Here</p>
	        <p>Content for  class &quot;main_center box&quot; Goes Here</p>
	        <p>Content for  class &quot;main_center box&quot; Goes Here</p>
	        <p>Content for  class &quot;main_center box&quot; Goes Here</p>
	      </div>
	    </div>
		
		
      </div>	  </td>
      <td width="225" valign="top"><div class="side_main_contant_box_right">
        <div class="title_resent_activities">Resent Activities </div>
		
		<div class="resent_activityies_box">
		  <div class="res_pic_box"><img src="images/photo8.jpg" width="44" height="44" class="thumbphot_box" /></div>
		  
		  
		  <div class="tex_resent_act"><b><a href="#">Arif Said</a></b> comment on <b><a href="#">saba khan</a></b> picture<br />
		 <span class="style4"> 20 min ago	</span>			  </div>
		</div>
		
		<div class="resent_activityies_box">
		  <div class="res_pic_box"><img src="images/photo3.jpg" width="44" height="44" class="thumbphot_box" /></div>
		  
		  
		  <div class="tex_resent_act"><b><a href="#">Saba Khan </a></b> comment on her<a href="#"> picture</a><br />
		  <span class="style4"> 20 min ago	</span>			  </div>
		</div>
		
		<div class="resent_activityies_box">
		  <div class="res_pic_box"><img src="images/photo3.jpg" width="44" height="44" class="thumbphot_box" /></div>
		  
		  
		  <div class="tex_resent_act"><b><a href="#">Saba Khan </a></b> comment on her<a href="#"> picture</a><br />
		 <span class="style4"> 20 min ago	</span>	  </div>
		</div>
		<div class="title_resent_activities">Events</div>
		<a href="#">Search / Find Events</a><br />
		<a href="#">Create Event</a><br />
		<br />
		<div class="title_resent_activities">Friends</div>
		<a href="#">Search / Add Friends</a><br />
		<a href="#">Invite Friends</a><br />
		<br />
		<div class="title_resent_activities">Pages</div>
		<a href="#">Search / join pages</a><br />
		<a href="#">Create Page</a><br />
		<br />
		<div class="title_resent_activities">Groups</div>
		<a href="#">Search / join Groups</a><br />
		<a href="#">Create Group</a><br />
		<br />
		<div class="title_resent_activities">community </div>
		<a href="#">Search / join Communities</a><br />
		<a href="#">Create community</a><br />
		<br />
		    </div></td>
    </tr>
  </table>
</div>

<div class="footer"> myOpenStyle.com � 2012 All rights reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></div>
</body>
</html>
<?php } ?>


