<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="js/global.js"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Delta Global Staffing</title>
<link href="/employeeservices.css" media="screen, print, projection" rel="stylesheet" type="text/css">
</link>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
<style type="text/css">
<!--
table {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	line-height: 18px;
	color: #535353;
}
div.Section1
	{page:Section1;}
-->
</style>
<script>
function init() {


}
</script>

<SCRIPT LANGUAGE="JavaScript">
         function isEmpty(str) {
            // Check whether string is empty.
            for (var intLoop = 0; intLoop < str.length; intLoop++)
               if (" " != str.charAt(intLoop))
                  return false;
            return true;
         }

         function checkRequired() {
            f = document.getElementById("frm");
            var strError = "";
            for (var intLoop = 0; intLoop < f.elements.length; intLoop++) {
               if (null!=f.elements[intLoop].getAttribute("required"))
                  if (isEmpty(f.elements[intLoop].value))
                     strError += "  " + f.elements[intLoop].getAttribute("displayName") + "\n";
            }
            if ("" != strError) {
               alert("Required data is missing:\n" + strError);
               //return false;
            } else {
              //return true;
              frm.submit();
            }
         }
</SCRIPT>
<!--style sheet-->
<style media="all" type="text/css">@import "css/dgs_styles2.css";</style>
<style type="text/css">
pre { display:none }
</style>
<style type="text/css">
div.newsclass
  {
  width:260px;
  background:url(images/newsblogindustry.png) no-repeat;
  border:0px solid black;
  overflow:hidden;
  }
div.transbox
  {
  width:250px;
  height:180px;
  margin:30px 50px;
  background-color:#ffffff;
  border:1px solid black;
  /* for IE */
  filter:alpha(opacity=60);
  /* CSS3 standard */
  opacity:0.6;
  }
div.transbox p
  {
  margin:30px 40px;
  font-weight:bold;
  color:#000000;
  }
</style>

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

<body onload="MM_preloadImages('/images/nav_highlights_01.png','/images/nav_highlights_02.png','/images/nav_highlights_03.png','/images/nav_highlights_04.png','/images/nav_highlights_05.png','/images/nav_highlights_06.png')">
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
    <div id="contentholder" >
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
	<div id="containerShell2"  style="height:1200px;">
<div style="color:white;font-size:25px;font-weight:bold;font-family:verdana;padding-left:15px;">
Employers
</div>

<table style="margin-left:50px;margin-top:30px;color:white;font-size:15px;" width="750">
<tr valign="top">
<td width="550">
<div>
<b>What we do?</b>
<br><br>
We offer customized and cost efficient staffing solutions to local, regional and national customers. We're problem solvers. Our support includes:
<br>
&middot; Short and Long Term Assignments   <br>
&middot; VMS Partnering and Support <br>
&middot; VOP Management <br>
&middot; Temp-to-Hire & Direct Placement Recruitment <br>
&middot; Payrolling, via Our P*A*S*S Payrolling Program  <br>
&middot; Value Added Business Alliances <br>
<br>
<b>What are our Service Competencies?</b>
<br><br>
&middot; Call Centers  <br>
&middot; Customer Service   <br>
&middot; Administrative  <br>
&middot; IT <br>
&middot; Mechanics <br>
&middot; Engineers <br>
&middot; Professional  <br>
&middot; Logistics  <br>
&middot; Aviation/Airline  <br>
&middot; Hospitality <br>
&middot; Convention/Event Support <br>
<br>
<b>Who is our customer?</b>
<br><br>
Any business or organization who has or needs employees is a potential customer, regardless of industry. We're about people. Our clients are as diverse as our solutions.

</td>
<td width="200" style="padding-top:20px;"><img src="/images/BPTWLogo_Top25.jpg" width="150"><div style="color:white;font-weight:bold;padding-top:30px;font-size:12px;line-height:25px;">Named one of Atlanta's Top 25 Temporary Employment Agencies for 9 straight years.</div></td>
</tr>
</table>
<form action="clientservices_email.php" method="post" name="frm" id="frm">
<table style="margin-left:50px;margin-top:30px;color:white;font-size:15px;" width="750">
<tr valign="top"><td colspan="3"><a name="EMPLOYERFORM"></a><span style="color:red;font-weight:bold;font-size:15px;">Are you looking for a job? Search available positions and apply via our <a href="job_board.php" style="color:red;">Job Board</a>.</span><br><br><b>Owners and Employers, let us help you find the right candidate for your open positions!</b><br><br></td></tr>
<tr><td align="right" width="340">Name:</td><td width="10"></td><td width="400"><input name="name" style="border:1px solid black;width:200px;"></td></tr>
<tr><td align="right">Email Address:</td><td></td><td><input name="email" style="border:1px solid black;width:200px;"></td></tr>
<tr><td align="right">Company You Represent:</td><td></td><td><input name="company" style="border:1px solid black;width:200px;" required displayName="Company You Represent"></td></tr>
<tr><td align="right">Phone:</td><td></td><td><input name="phone" style="border:1px solid black;width:200px;"></td></tr>
<tr><td align="right">How did you hear about Delta Global Staffing?</td><td></td><td><select name="how_did_you_hear" style="border:1px solid black;width:200px;">
					<option selected="" value="">- Please select -</option>
					<option value="Facebook">Facebook</option>
                    <option value="Twitter">Twitter</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="Search Engine">Search Engine</option>
					<option value="Ad">Ad</option>
					<option value="Publication">Publication</option>
					<option value="Referral">Referral</option>
					<option value="Email">Email</option>
					<option value="Web">Web</option>
					<option value="DGS Representative">DGS Representative</option>
					<option value="Other">Other</option>
</select>
</td></tr>
<tr valign="top"><td align="right">We will be happy to contact you with more information about any of our services. Please select your areas of interest:</td><td></td><td>
<input name="areas_of_interest1" value="Administrative Services" type="checkbox"> Administrative Services<br>
<input name="areas_of_interest2" value="Managed Service Provider" type="checkbox"> Managed Service Provider<br>
<input name="areas_of_interest3" value="Project Hiring" type="checkbox"> Project Hiring<br>
<input name="areas_of_interest4" value="Recruiting" type="checkbox"> Recruiting<br>
<input name="areas_of_interest5" value="Screening & Assessment" type="checkbox"> Screening & Assessment<br>
</td></tr>
<tr valign="top"><td align="right">What type of employee are you looking for?:</td><td></td><td><input type="checkbox" name="type_of_employee1" value="Direct Hire"> Direct Hire<br><input type="checkbox"  name="type_of_employee2" value="Temporary"> Temporary<br><input type="checkbox" name="type_of_employee3" value="Temp To Hire"> Temp To Hire</td></tr>
<!--
<tr><td align="right">Keep me up to date with latest information on DGS's products and services</td><td></td><td><input type="radio" name="online_request">Yes&nbsp;&nbsp;&nbsp;<input type="radio" name="online_request">No</td></tr>
-->
<tr valign="top"><td colspan="3" height="5"></td></tr>
<tr><td align="right"></td><td></td><td><input type="button" value="submit" style="color:black;background-color:white;width:150px;" onclick="checkRequired()"></td></tr>
</table>
</form>
    </div>

<!--Begin Footer-->
  <div id="footer">
    <div id="footerCopyright">&copy; 2012 Delta Global Staffing. All Rights Reserved.</div>
           	<div id="footerLogos">
        <img src="images/logo_ASA.jpg" alt="ASA" />
        <img src="images/logo_2.jpg" />
    </div>

    </div>


<!--End Footer-->
    </div>
	 <!--End Content Holder-->



</div>
<div style="height:500px;"></div>

</body>
</html>
