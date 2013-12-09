<?php
define('MAGPIE_DIR', 'rss/magpie/');
require_once(MAGPIE_DIR.'rss_fetch.inc');
?>
<?php
$arr = array();

$arr[] = "http://www.legacybowesgroup.com/blog/categories/employer-tips.html?format=feed&type=rss";
$arr[] = "http://jobdig.com/podcast/stream.php/JobSeeker.xml";
$arr[] = "http://www.thedailyrecruiter.com/ask-a-executive-recruiter/rss.xml";
$arr[] = "http://www.thedailyrecruiter.com/the-daily-recruiter-blog/rss.xml";
$arr[] = "http://www.thedailyrecruiter.com/industry-snippets/rss.xml";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="alexaVerifyID" content="GG0vLw0SfPqimn6Q40WcZvv-ONU" />
<meta name="description" content="Delta Global Staffing (DGS), a wholly owned subsidiary of Delta Air Lines, delivering integrity, innovation and an elevated degree of responsiveness to customers throughout the United States.">
<title>Delta Global Staffing</title>
<link href="/css/global.css" media="screen, print, projection" rel="stylesheet" type="text/css">
</link>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle.all.js"></script>
<script type="text/javascript">
$.fn.cycle.defaults.speed   = 1000;
$.fn.cycle.defaults.timeout = 6000;

$(function() {
    // run the code in the markup!
    $('#banner pre code').each(function() {
        eval($(this).text());
    });


});


</script>
<script>
function init() {

  //document.getElementById("pics").style.visibility = "visible";
  l = document.getElementById("bannerIMG");

  pos = $("#bannerIMG").offset();
  //alert(pos.top);

  d = document.getElementById("formDIV");
  //off = l.offsetParent
  //d.style.top = off.offsetTop +305;
  //d.style.left = off.offsetLeft +500;
  d.style.top = pos.top +305 +"px";
  d.style.left = pos.left +500 + "px";
  d.style.display = "block";

<?php
if($_REQUEST["emailadded"] == "y") {
echo "alert('Email Added');";
}
?>

}
</script>
<!--style sheet-->
<style media="all" type="text/css">@import "css/dgs_styles2.css";</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8327442-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>

<body onLoad="init()">
  <h1 class="seo">Welcome to the only staffing firm with flight privileges</h1>
  <!--Begin Header-->
	<div id="header"><img src="images/header.jpg" alt="DGS - Experience the Difference" width="930" height="119" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="815,85,839,109" href="http://www.facebook.com/DeltaGlobalStaffingDifference" alt="Facebook" title="Facebook"    />
    <area shape="rect" coords="844,87,865,110" href="http://www.twitter.com/deltaglobal" alt="Twitter" title="Twitter"    />
    <area shape="rect" coords="871,88,891,109" href="http://www.linkedin.com/companies/389402/Delta%20Global%20Staffing,%20a%20Wholly%20Owned%20Subsidiary%20of%20Delta%20Air%20Lines" alt="Linked In" title="Linked In"    />
    <area shape="rect" coords="899,87,919,108" href="http://traveltemp-tations.blogspot.com/" alt="Blogspot" title="Blogspot"    />
  </map>
	</div>
  <!--End Header-->
<div id="page-box">
	<!--Begin Content Holder-->
  <div id="contentholder">
    <!--Begin Nav Menu-->
    <div id="menu" style="border:0px solid black;height:54px;overflow:hidden;">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr >
          <td width="10" align="left" valign="top"><img src="images/nav_bckgrnd.jpg" width="10" height="54" /></td>
          <td width="57" align="left" valign="top"><a href="/index.php"><img src="images/bttns/home.jpg" alt="Home" width="57" height="54" /></a></td>
          <td width="99" align="left" valign="top"><a href="/clientservices.php"><img src="images/bttns/employers.jpg" alt="Employers" width="99" height="54" /></a></td>
          <td width="104" align="left" valign="top"><a href="/job_board.php"><img src="images/bttns/job_search.jpg" alt="Job Search" width="104" height="54" /></a></td>
          <td width="101" align="left" valign="top"><a href="/resources.php"><img src="images/bttns/resources.jpg" alt="Resources" width="101" height="54" /></a></td>
          <td width="60" align="left" valign="top"><a href="/news.php"><img src="images/bttns/news.jpg" alt="News" width="60" height="54" /></a></td>
          <td width="87" align="left" valign="top"><a href="/aboutus.php"><img src="images/bttns/whoweare.jpg" alt="About Us" width="87" height="54" /></a></td>
          <td width="102" align="left" valign="top"><a href="/contactus.php"><img src="images/bttns/contact_us.jpg" alt="Contact Us" width="102" height="54" /></a></td>
          <td width="131" align="left" valign="top"><img src="images/nav_bckgrnd.jpg" width="131" height="54" /></td>
          <td width="57" align="left" valign="top"><a href="/MyDGS_Entry/MyDGSHome.htm" target="_blank"><img src="images/bttns/my_DGS.jpg" alt="My DGS" width="57" height="54" /></a></td>
          <td width="90" align="left" valign="top"><a href="http://tkdelta.vcgasp.com/timekeeper.web/pages/timekeeperlogin.aspx" target="_blank"><img src="images/bttns/ETime_login.jpg" alt="ETime Login" width="90" height="54" /></a></td>
          <td width="32" align="left" valign="top"><img src="images/nav_bckgrnd.jpg" width="32" height="54" /></td>
        </tr>
      </table>
    </div>
    <!--End Nav Menu-->

    <!--Begin Rotating Banner-->
    <div id="banner">
        <h2 class="seo">work with us, travel on us</h2>
        <h3 class="seo">talent acquisition, retention, stability and integrity</h3>
        <div id="fade" class="pics" >
            <img id="bannerIMG" src="images/banner1_2.jpg" alt="Work with us. Travel on us." />
            <img id="bannerIMG2" src="images/banner2_2.jpg" alt="Work with us. Travel on us." style="display:none;" />
            <img id="bannerIMG3" src="images/banner3_2.jpg" alt="Work with us. Travel on us." style="display:none;" />
        </div>
        <pre><code class="mix">$('#fade').cycle();</code></pre>
    </div>
    <!--End Rotating Banner-->

    <!--Begin Containers-->
  	<div id="containerShell">
      <h2 class="seo">find a professional</h2>
      <div id="container1" onClick="document.location='/job_board.php'">
        <img src="images/findajob2.png" alt="Resources" />
     	</div>
      <h2 class="seo">the DGS difference</h2>
      <div id="container2" onClick="document.location='/clientservices.php'">
        <img src="images/findaperson2.png" alt="Resources" />
     	</div>
      <div id="container3" class="newsclass" style="padding-top:50px;padding-left:0px;overflow:hidden;height:165px;">
        <div style="height:150px;width:240px;padding-left:20px;padding-right:5px;overflow:auto;">
  <?php
  foreach ($arr as $arrItem) {

  	$url = $arrItem;
  	$rss = fetch_rss( $url );
  	foreach ($rss->items as $item) {
  		$href = $item['link'];
  		$title = $item['title'];
  		$description = substr($item['description'],0,150);
  		echo "<div style='font-weight:bold;margin-bottom:13px;font-size:14px;'><a href=$href target='_blank' style='color:white;'>$title</a><br />";
  		echo "</div>";
  	}
  }
  ?>
        </div>
      </div>
    </div>
    <!--End Containers-->

    <!--Begin Footer-->
    <div id="footer">
      <h2 class="seo">Delta Global Staffing (DGS), a wholly owned subsidiary of Delta Air Lines, delivering integrity, innovation and an elevated degree of responsiveness to customers throughout the United States.</h2>
      <div id="footerCopyright">&copy; 2012 Delta Global Staffing. All Rights Reserved.<br><br><a href="admin_menu.php" target="_blank" style="color:white;">Administrator</a></div>
      <div id="footerLogos">
        <table border="0" valign="top">
          <tr>
            <td valign="top">
              <a href="http://gsa.camp8.org" target="_blank"><img src="images/GSA.PNG" alt="GSA" border="0" height="80" /></a>
            </td>
            <td valign="top">
              <a href="http://www.americanstaffing.net" target="_blank"><img src="images/ASA-member_monogram-RGB.jpg" alt="ASA" border="0" height="80" /></a>
            </td>
            <td valign="top">
              <a href="http://www.staffingindustry.com" target="_blank"><img src="images/SIA.PNG" alt="SIA" border="0" width2="80" height="80" /></a>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <!--End Footer-->
  </div>
	<!--End Content Holder-->
</div>

<!-- Begin Form -->
<div id="formDIV" style="font-face;verdana;font-size:12px;font-weight:bold;color:white;z-index:100;position:absolute;display:none;">
<!--
<form name="frm" id="frm" method="post" action="insertEmail.php">
Join our eNewsletter!
<input type="text" name="email" id="email" value="email address" onfocus="this.select();" style="width:200px;border:1px solid black;color:grey;" />
<a href="javascript:document.frm.submit()" style="color:white;">Go ></a>
</form>
-->
</div>
<!-- End Form -->
</body>
</html>
