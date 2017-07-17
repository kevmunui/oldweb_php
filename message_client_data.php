<?php   



include_once "global_setting.php";


	session_start();

$msg='';


if(isset($_POST['submit']) && isset($_POST['subject']) && isset($_POST['text_msg'])){
  
	$sub=mysql_real_escape_string($_POST['subject']);
	$txt=mysql_real_escape_string($_POST['subject']);
  
  if( !empty($sub) && !empty($txt)){
  
	$q2="SELECT * FROM clients WHERE `id` = $_POST[id]";
	$result = mysql_query($q2) or die("Query failed".mysql_error());
	
	
	
	while($info = mysql_fetch_array($result)){
	
	
	$username=$info['fname'];
	$secname=$info['sname'];
	
	
	
	
	
	}


	$q="INSERT INTO `message`(fname,sname,user,subject,message) VALUES
	('".$username."','".$secname."','$_POST[id]','".$sub."','$txt')";
	$result = mysql_query($q) or die("Query failed".mysql_error());
	if ($result){
	
	echo "<script language='javascript'>alert('The message was posted successfully');</script>";
	
}
}
else{

echo "<script language='javascript'>alert('All fields are required!');</script>";

}


}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Messages</title>
<meta name="keywords" content="life,policy,jahazi,insurance" />
<meta name="description" content="by kevinndiga.com,covers" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/ddsmoothmenu.js">


</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 


</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a rel="nofollow" href="index.html">jahazi</a></div>
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value="Enter a keyword" name="keyword" id="keyword" title="keyword" 
              		onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
            </form>
            <ul id="social">
                <li><a href="http://www.forwallpaper.com/" title="free wallpaper download" class="social_other"  target="_blank"></a></li>
            	<li><a href="#"><img src="images/rss.png" alt="RSS" /></a></li>
                <li><a href="https://www.facebook.com/templatemo"><img src="images/facebook.png" alt="facebook" /></a></li>
                <li><a href="#"><img src="images/twitter.png" alt="twitter" /></a></li>
                <li><a href="#"><img src="images/flickr.png" alt="flickr" /></a></li>
                <li><a href="#"><img src="images/skype.png" alt="skype" /></a></li>
			</ul>
        </div>
    </div> <!-- END of header -->

        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="product.php">products</a>
                    <ul>
                        <li id='font'><a href="jahazi_med_covers.php">Medical Covers</a></li>
						<li id='font'><a href="jahazi_veh_covers.php">Motor Vehicle Cover</a></li>
						<li id='font'><a href="jahazi_allr_covers.php">Fire, burglary & risks</a></li>
						<li id='font'><a href="jahazi_life_covers.php">Life Insurance</a></li>                                                                    
                  </ul>
                </li>
               <li><a href="gallery.html">partners</a></li>
                <li><a href="about.html">About</a> 
					<ul>
                        <li id='font'><a href="">The Company</a></li>
						<li id='font'><a href="">The Team</a></li>
					</ul>
					</li>
				<li><a href="client_login.php">Log In</a></li>                
                <li class="last"><a href="contact.html" class="last">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> 

    <div id="templatemo_main">
        <div id="templatemo_content" class="left">
            <div class="post">
                <?php 
		
		
		if(!isset($_SESSION['user1']))
			{
			header('location:client_login.php');
			}
			elseif(isset($_SESSION['user1']))
			{
				$name = $_SESSION['user1']; 
				echo "<div><br>
						<form action='Logout_client.php' id='comment_form' >
						<span>Logged in as $name</span><br>
						<input type='submit' value='Logout' name='login' class='submit_btn'/></form>
				      </div>";
			}
		
		
		
		
		
		
		?>


</div>	
            
        
        <div class="clear"></div>
            
           
            
            <hr />
            
            <div id="comment_form">
            <h3>Leave your comment</h3>
            
           <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label>subject(* required )</label>
                <input type="text" name="subject" class="input_field" />
                
                <label>Message</label>
                <textarea  name="text_msg" rows="" cols=""></textarea>
				
				<input type="hidden" name='id' value='<?php echo @$_GET['id'];?>'>
			
				<br>
				<span class="errormsg"><?php echo $msg ;?></span><br><br>
				<br>	
                <input type='submit'  value='submit' name='submit' class="submit_btn" />
            </form>

        </div>
		</div>
        <div id="templatemo_sidebar" class="right">
       		<div class="sidebar_section">
                <h3>Menu</h3>
                <ul class="nobullet sidebar_link rc_comment">
                    <li><a href="client_post.php"><span>control panel home</span></a></li>
                    <!--<li><a href="message_client_data.php?id='<?php echo @$_GET['id']; ?>'" class='errormsg'><span>Send Us A Message</span></a></li>
                    <li><a href="premium.php?id='<?php echo @$_GET['id']; ?>'" class='errormsg'><span>See your premium</span></a></li>
                   -->
                </ul>
        	</div>		
        </div>
        <div class="clear"></div>
    </div> <!-- END of templatemo_main -->

	<div id="templatemo_footer">
    	<div class="col_4">
        	<h4>Pages</h4>
            <ul class="nobullet bottom_list">
            	<li><a href="index.html">Home</a></li>
                <li><a href="products.php">products</a></li>
                <li><a href="partners.html">partners</a></li>
                <li><a href="about.html">About</a></li>
				<li><a href="client_login.php">login</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
       <div class="col_4">
        	<h4>Partners</h4>
            <ul class="nobullet bottom_list">
                <li><a href="#">UAP</a></li>
                <li><a href="#">AIG</a></li>
                <li><a href="#">ALLIANZ</a></li>
                <li><a href="#">JUBILLEE</a></li>
                <li><a href="#">BRITISH AMERICAN</a></li>
            </ul>
        </div>
        
        <div class="col_4">
        	<h4>Links</h4>
            <ul class="nobullet bottom_list">
            	
            </ul>
        </div>
        
        <div class="col_4 no_margin_right">
        	<h4>Twitter</h4>
           <p> we are now on twitter please follow us to get tips on new products!</p>
            <a href="#">Follow us on Twitter</a>
        </div>
        <div class="clear"></div>
    </div><!-- END of templatemo_footer -->
</div> <!-- END of templatemo_wrapper -->
<div id="templatemo_copyright_wrapper">
    <div id="templatemo_copyright">
        Copyright ©<a href="#">Jahazi Insurance Agency</a> 
		| <a rel="nofollow" href="www.kevinndiga.com">A KEVIN NDIGA PRODUCTION</a> 

		</div>
</div>
</body>
<script type='text/javascript' src='js/logging.js'></script>
</html>