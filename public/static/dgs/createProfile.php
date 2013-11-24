<?php
// Connect to database
$hostname = "sql5c38a.carrierzone.com";
$username = "empdata";
$password = "DLL2030dgs";
$dbname = "empdata";

mysql_connect($hostname, $username, $password) or DIE("Unable to connect to MySQL server $hostname");
$selected = mysql_select_db($dbname) or DIE("Could not select requested db $dbname");

$today = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
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
F
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
function init() {


}
</script>
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
<link href="formStyles.css" rel="stylesheet" type="text/css" >
<script>
function init() {
  //
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
            f = frm;
            var strError = "";
            for (var intLoop = 0; intLoop < f.elements.length; intLoop++)
               if (null!=f.elements[intLoop].getAttribute("required"))
                  if (isEmpty(f.elements[intLoop].value))
                     strError += "  " + f.elements[intLoop].getAttribute("displayName") + "\n";
            if ("" != strError) {
               alert("Required data is missing:\n" + strError);
               return false;
            } else {
            //checkCheckboxes();
            //checkAgreement();
            //f.submit();
            return true;
            }
         }

function checkNumeric(o) {
  if(o.value.length > 0) {
    if(isNaN(o.value)) {
      alert("Requires numberic value.");
      o.focus();
      o.select();
    }
  }
}

</SCRIPT>
<style>
.input6  {
  text-decoration: none;
  font-size : 12px;
  font-family: arial,helvetica,verdana,;
  font-weight: normal;
  color: black;
  border: 1 solid black;
  width: 290px;
}
.contentBold {
  text-decoration: none;
  font-size : 12px;
  font-family: arial,helvetica,verdana,;
  font-weight: bold;
  color: white;

}
div.categoryDiv {
  width:175px;
  float: left;
}
</style>
<style>
.contentBold {
 color:white;
}
.content {
 color:white;
}
link {
  color:white;
}
</style>
<script>
function noClicked() {
  document.getElementById("submitButton").disabled = true;
  alert("Thank you for your interest in Delta Global Staffing. Based on your answer to this question, you do not meet the basic requirement for employement with DGS.");
}

function yesClicked() {
  if((document.getElementById("q1").checked)&&(document.getElementById("q3").checked)&&(document.getElementById("q3").checked)) {
    document.getElementById("submitButton").disabled = false;
  }
}
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
	<div id="containerShell2"  style="height:30000px;">
<div style="color:white;font-size:25px;font-weight:bold;font-family:verdana;padding-left:15px;">
Create Profile
</div>

<div style="height:2000px;overflow:auto;width:850px;margin-left:80px;margin-top:50px;">


<form action="profileUpload.php" name="frm" method="post" onsubmit="return checkRequired()" enctype="multipart/form-data">
<input type="hidden" name="recid" value="<?= $_REQUEST['recid'] ?>">
<input type="hidden" name="datestamp" value="<?= $today ?>">
<table border="0" cellpadding="0" cellspacing="0" width="650">
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;"></span><span class="contentBold" style="text-align:right;">Jobs Applied For :</span>
    </td><td width="400" style="padding-left:10px;">
    <div class="contentBold" style="color:black;background-color:white;text-align:left;padding-left:0px;height:80px;overflow:auto;width:350px;">
<?
$hostname = "sql5c38a.carrierzone.com";
$username = "empdata";
$password = "DLL2030dgs";
$dbname = "empdata";

$link = mysql_connect($hostname, $username, $password) or DIE("Unable to connect to MySQL server $hostname");
$selected = mysql_select_db($dbname) or DIE("Could not select requested db $dbname");

$query = "SELECT * from Jobs where archived <> 'Yes' and position <> '' order by recid desc";
//print $query."<br>";
$result = mysql_query($query,$link);
if ($result) {
  while($row = mysql_fetch_array($result)) {
    if((string)$row{"recid"} == $_REQUEST['recid']) {
      $selected = "checked";
    } else {
      $selected = "";
    }

  if($row{"position"} == "Other") {
    $tmp_position = $row{"other_position"};
  } else {
    $tmp_position = $row{"position"};
  }
?>
<input type="checkbox" name="jobs<?= $row{"recid"} ?>" value="<?= $row{"recid"} ?>" <?= $selected ?>>&nbsp;<?= $tmp_position ?><br>
<?
  }

} else {
  echo mysql_error();
}
?>
    </div>
    </td>
  </tr>

  <tr><td align="center" height="15" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Are you at least 18 years of age? :</span>
    </td><td width="400">
    <div class="contentBold" style="text-align:left;padding-left:10px;"><span style="padding-right:50px;"><input type="radio" name="q1" id="q1" value="Yes" onclick="yesClicked()"> Yes</span><span><input type="radio" name="q1" value="No" onclick="noClicked()"> No</span></div>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Are you legally eligible to remain and work in the United States? :</span>
    </td><td width="400">
    <div class="contentBold" style="text-align:left;padding-left:10px;"><span style="padding-right:50px;"><input type="radio" name="q2" id="q2" value="Yes" onclick="yesClicked()"> Yes</span><span><input type="radio" name="q2" value="No"  onclick="noClicked()"> No</span></div>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Are you willing to submit to a criminal background check? :</span>
    </td><td width="400">
    <div class="contentBold" style="text-align:left;padding-left:10px;"><span style="padding-right:50px;"><input type="radio" name="q3" id="q3" value="Yes" onclick="yesClicked()"> Yes</span><span><input type="radio" name="q3" value="No"  onclick="noClicked()"> No</span></div>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;"></span><span class="contentBold" style="text-align:right;">Have you ever worked for Delta or DGS in the past? :</span>
    </td><td width="400">
    <div class="contentBold" style="text-align:left;padding-left:10px;"><span style="padding-right:50px;"><input type="radio" name="q4" id="q4" value="Yes"> Yes</span><span><input type="radio" name="q4" value="No" > No</span></div>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>

  <tr><td align="center" height="15" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">First Name :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="first_name" class="input6" value="" required displayName="First Name"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="text-align:right;">Middle Name :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="middle_name" class="input6" value="" ></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Last Name :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="last_name" class="input6" value="" required displayName="Last Name"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Address 1 :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="address1" class="input6" value="" required displayName="Address 1"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="text-align:right;">Address 2 :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="address2" class="input6" value="" ></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">City :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="city" class="input6" value="" required displayName="City"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">State :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;">
<select name="state" size="1" class="input7" required displayName="State">
    <option value=""></option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">Dist of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
    </span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Zip :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="zip" class="input7" value="" required  displayName="Zip"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Main Contact Phone :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="phone" class="input7" value="" required displayName="Main Contact Phone"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;"></span><span class="contentBold" style="text-align:right;">Other Phone :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="other_phone" class="input7" value="" ></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Email Address :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="email" class="input6" value="" required  displayName="Email Address"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="text-align:right;">Current/Most Recent Employer :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="current_employer" class="input6" value="" ></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Minimum Hourly Requirement :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="minimum_salary" class="input6" value="" required displayName="Minimum Hourly Requirement"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr style="margin-top:5px;">
    <td width="250" align="right" valign="top">
    <span class="contentBold" style="text-align:right;">Skills :</span>
    </td><td width="400">
    <div class="contentBold" style="text-align:left;padding-left:10px;">
    <div class="categoryDiv" style=""><input type="checkbox" name="skills40" id="CB A/P Mechanic" value="A/P Mechanic"> A&P Mechanic</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills1" id="CB Accounting" value="Accounting"> Accounting</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills2" id="CB Accounts Payable" value="Accounts Payable"> Accounts Payable</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills3" id="CB Accounts Receivable" value="Accounts Receivable"> Accounts Receivable</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills4" id="CB Administrative Assistant" value="Administrative Assistant"> Administrative Assistant</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills5" id="CB Analyst" value="Analyst"> Analyst</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills6" id="CB Auditor" value="Auditor"> Auditor</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills7" id="CB Baggage Belt Handler" value="Baggage Belt Handler"> Baggage Belt Handler</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills8" id="CB Call Center" value="Call Center"> Call Center</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills47" id="CB Billing" value="Billing"> Billing</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills39" id="CB Business Analyst" value="Business Analyst"> Business Analyst</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills9" id="CB Cargo Handler" value="Cargo Handler"> Cargo Handler</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills10" id="CB Consultant" value="Consultant"> Consultant</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills11" id="CB Convention" value="Convention"> Convention</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills12" id="CB Customer Service" value="Customer Service"> Customer Service</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills13" id="CB Data Entry" value="Data Entry"> Data Entry</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills14" id="CB Database" value="Database"> Database</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills15" id="CB Developer" value="Developer"> Developer</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills16" id="CB Engineer" value="Engineer"> Engineer</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills17" id="CB Field Engineer" value="Field Engineer"> Field Engineer</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills51" id="CB Finance" value="Finance"> Finance</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills18" id="CB Forklift Operator" value="Forklift Operator"> Forklift Operator</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills19" id="CB General Office" value="General Office"> General Office</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills20" id="CB Help Desk Analyst" value="Help Desk Analyst"> Help Desk Analyst</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills21" id="CB Human Resources" value="Human Resources"> Human Resources</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills22" id="CB Import/Export" value="Import/Export"> Import/Export</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills38" id="CB Information Technology" value="Information Technology"> Information Technology</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills23" id="CB Instructor" value="Instructor"> Instructor</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills45" id="CB Language - French" value="Language - French"> Language - French</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills43" id="CB Language - German" value="Language - German"> Language - German</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills44" id="CB Language - Portuguese" value="Language - Portuguese"> Language - Portuguese</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills42" id="CB Language - Spanish" value="Language - Spanish"> Language - Spanish</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills24" id="CB Librarian" value="Librarian"> Librarian</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills25" id="CB Maintenance" value="Maintenance"> Maintenance</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills26" id="CB Marketing" value="Marketing"> Marketing</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills27" id="CB Mechanic" value="Mechanic"> Mechanic</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills50" id="CB Payroll" value="Payroll"> Payroll</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills28" id="CB Project Management" value="Project Management"> Project Management</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills29" id="CB Quality Assurance" value="Quality Assurance"> Quality Assurance</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills30" id="CB Real Estate" value="Real Estate"> Real Estate</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills31" id="CB Sales" value="Sales"> Sales</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills46" id="CB Sheet Metal Repair" value="Sheet Metal Repair"> Sheet Metal Repair</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills49" id="CB Sheet Metal Tech" value="Sheet Metal Repair"> Sheet Metal Tech</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills41" id="CB Small Engine Repair(weed eaters, chain saws, lawn mower blower / snow blowers)" value="Small Engine Repair(weed eaters, chain saws, lawn mower blower / snow blowers)"> Small Engine Repair(weed eaters, chain saws, lawn mower blower & snow blowers)</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills38" id="CB Staffing/Recruiter" value="Staffing/Recruiter"> Staffing/Recruiter</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills48" id="CB Structural Engineer" value="Structural Engineer"> Structural Engineer</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills32" id="CB Supervision" value="Supervision"> Supervision</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills33" id="CB Surveyor" value="Surveyor"> Surveyor</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills34" id="CB Systems Engineer" value="Systems Engineer"> Systems Engineer</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills35" id="CB Test Engineer" value="Test Engineer"> Test Engineer</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills36" id="CB Warehse Ship/Receive" value="Warehse Ship/Receive"> Warehouse Ship/Receive</div>
    <div class="categoryDiv" style=""><input type="checkbox" name="skills37" id="CB Web Development" value="Web Development"> Web Development</div>

    </div>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;">*</span><span class="contentBold" style="text-align:right;">Where did you hear about us? :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;">
    <select name="where_hear" class="input6" style="width:252px;" required displayName="Where did you hear about us?">
      <option value=""></option>
      <option value="DGS Career Center site">DGS Career Center site</option>
      <option value="Currently a DGS/DSS employee">Currently a DGS/DSS employee</option>
      <option value="careerbuilder.com">careerbuilder.com</option>
      <option value="hot.jobs.com">hot.jobs.com</option>
      <option value="Dice.com">Dice.com</option>
      <option value="craigslist.com">craigslist.com</option>
      <option value="twitter.com">twitter.com</option>
      <option value="facebook.com">facebook.com</option>
      <option value="LinkedIn">LinkedIn</option>
      <option value="JSfirm">JSfirm</option>
      <option value="Sologig">Sologig</option>
      <option value="MoneyJobs">MoneyJobs</option>
      <option value="HeadHUNTER">HeadHUNTER</option>
      <option value="Customer Referral">Customer Referral</option>
      <option value="Employee Referral">Employee Referral</option>
      <option value="Department of Labor">Department of Labor</option>
      <option value="Through my own Web search">Through my own Web search</option>
      <option value="Other">Other (please describe below)</option>
    </select>
    </span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="text-align:right;">Other source of hearing about us :</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="text" name="where_hear_other" class="input6" value="" ></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="color:white;font-size:13px;"></span><span class="contentBold" style="text-align:right;">Upload your Resume/CV :<br>(Recommended)</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input type="file" name="resume" class="input6" value="" displayName="Resume/CV"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="text-align:right;">Type or Copy your Resume :<br>Please remove all formatting (bold, bullet points, etc.)</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><textarea rows="25" name="resume2" class="input6" style="width:350px;" ></textarea></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="text-align:right;"></span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><img src="/images/1pblack.gif" border="0" height="1" width="300"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
  <tr valign="top">
    <td width="250" align="right">
    <span class="contentBold" style="text-align:right;">&nbsp;</span>
    </td><td width="400">
    <span class="contentBold" style="text-align:left;padding-left:10px;"><input id="submitButton" type="submit" class="button1" value="Create My Profile" style="width:160px;"></span>
    </td>
  </tr>
  <tr><td align="center" height="7" colspan="2"></td></tr>
</table>

</form>


</div>


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


</body>
</html>
