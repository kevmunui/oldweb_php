<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>products</title>
<meta name="keywords" content="products,jahazi" />
<meta name="description" content="kevinndiga.com" />
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
                <li><a href="http://tr.forwallpaper.com/" title="duvar kağıtları from tr.forwallpaper.com" class="social_other"  target="_blank"></a></li>
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
                <li><a href="products.php">products</a>
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
    	<h2>News Page</h2>
        
        <div class="post_list col_4">
        	<a href="news_detail.html"><img src="images/news/01.jpg" alt="image 1" class="img_border img_border_b img_nom" /></a>
            <strong>Medical Covers</strong>
            <h2><a href="jahazi_med_covers.php">what are our medical covers?</a></h2>
            <p>we offer world class services to our clients.</p>
      		<a href="jahazi_med_covers.php" class="more">More</a>
            <div class="clear"></div>
        </div>	
        
        <div class="post_list col_4">
        	<a href="news_detail.html"><img src="images/news/02.jpg" alt="image 2" class="img_border img_border_b img_nom" /></a>
            <strong>Motor Vehicle Cover</strong>
            <h2><a href="jahazi_veh_covers.php">cars!</a></h2>
            <p>the numerous car policies available are...</p>
      		<a href="jahazi_veh_covers.php" class="more">More</a>
            <div class="clear"></div>
        </div>	
        
        <div class="post_list col_4">
        	<a href="news_detail.html"><img src="images/news/03.jpg" alt="image 3" class="img_border img_border_b img_nom" /></a>
            <strong>Fire, burglary & risks</strong>
            <h2><a href="jahazi_allr_covers.php">general property policies</a></h2>
            <p>we want to cover you holistically!</p>
      		<a href="jahazi_allr_covers.php" class="more">More</a>
            <div class="clear"></div>
        </div>	
        
        <div class="post_list col_4 no_margin_right">
        	<a href="news_detail.html"><img src="images/news/04.jpg" alt="image 4" class="img_border img_border_b img_nom" /></a>
            <strong>Life Insurance</strong>
            <h2><a href="jahazi_life_covers.php">life policies</a></h2>
            <p>we care about you and your loved ones...</p>
      		<a href="jahazi_life_covers.php" class="more">More</a>
            <div class="clear"></div>
        </div>	
        
        <div class="post_list col_4">
        	<a href="news_detail.html"><img src="images/news/05.jpg" alt="image 5" class="img_border img_border_b img_nom" /></a>
            <strong>message for the team.</strong>
            <h2><a href="news_detail.html">our goal</a></h2>
            <p>to serve our clients...</p>
      		<a href="news_detail.html" class="more">More</a>
            <div class="clear"></div>
        </div>	
        
        
        <div class="clear"></div>
        <div class="templatemo_paging">
        	<ul>
                <li><a href="#" target="_parent">Previous</a></li>
                <li><a href="#" target="_parent">1</a></li>
                <li><a href="#" target="_parent">2</a></li>
                <li><a href="#" target="_parent">3</a></li>
                <li><a rel="nofollow" href="http://www.templatemo.com/page/4" target="_parent">4</a></li>
                <li><a rel="nofollow" href="http://www.templatemo.com/page/5" target="_parent">5</a></li>
                <li><a rel="nofollow" href="http://www.templatemo.com/page/6" target="_parent">6</a></li>
                <li><a rel="nofollow" href="http://www.templatemo.com/page/7" target="_parent">7</a></li>
                <li><a rel="nofollow" href="http://www.templatemo.com/page/8" target="_parent">8</a></li>
                <li><a rel="nofollow" href="http://www.templatemo.com/page/9" target="_parent">Next</a></li>
            </ul>
        <div class="clear"></div>
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