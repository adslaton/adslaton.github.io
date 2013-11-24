<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Job Search - Delta Global Staffing</title>
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="/js/form.js"></script>
  </head>
  <body>

    <!--Begin Nav Menu-->
    <menu>
      <div id="js-menu" class="menu-container"></div>
      <div id="js-menu-button" class="bk-darkred menu-button">SHOW MENU</div>
    </menu>
    <!--End Nav Menu-->

    <header>
      <ul>
        <li><img src="http://www.dalgs.com/images/dgs_logo.png"/>
      </ul>
    </header>

    <article>
      <h2 class="page-title">JOB SEARCH</h2>
      <form name="frm" id="frm" action="/job_board.php" method="post">
        <ul>
          <li>
            <label>Keyword:</label>
          <li>
            <input type="text" name="searchStr" value="">
          <li>
            <label>Job Title:</label>
          <li>
            <input type="text" name="title" value="">
          <li>
            <label>City:</label>
          <li>
            <input type="text" name="city" value="">
          <li>
            <label>State:</label>
          <li>
            <input type="text" name="state" value="">
          <li class="center">
            <button type="submit" value="search">SEARCH</button>
        </ul>
      </form>
      <div>
        <div class="divider">
          <ul>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Information Technology
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Human Resources
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Maintenance / Mechanic
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Market / Sales
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Warehouse / Transportation
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Business / Professional
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Customer Service
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Management
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Finance / Accounting
              </div>
            </li></a>
            <a href="#"><li class="category">
              <div class="category-image">
                <img src="http://www.deltajobs.net/img/career_destinations/corporate.gif">
              </div>
              <div class="category-text">
                Admin / Executive Asst / Clerical
              </div>
            </li></a>
          </ul>
        </div>
      </div>
      <div>
        <div class="divider">
            <span><a href="#recid=167">Create Profile (Without Applying For Specific Job)</a></span>
        </div>
        <div id="js-jobs">
            <?php
// Connect to database
$hostname = "sql5c38a.carrierzone.com";
$username = "empdata";
$password = "DLL2030dgs";
$dbname = "empdata";

$link = mysql_connect($hostname, $username, $password) or DIE("Unable to connect to MySQL server $hostname");
$selected = mysql_select_db($dbname) or DIE("Could not select requested db $dbname");

$searchSQL = "";
$searchStr = trim($_REQUEST['searchStr']);
if(strlen($searchStr) > 0) {
  $searchSQL = $searchSQL." and ((position like ('%".$searchStr."%')) or (other_position like ('%".$searchStr."%')) or (generaldescription like ('%".$searchStr."%')) or (location like ('%".$searchStr."%')) or (details like ('%".$searchStr."%')) or (miscellaneous like ('%".$searchStr."%'))) ";
}
$searchStr = trim($_REQUEST['title']);
if(strlen($searchStr) > 0) {
  $searchSQL = $searchSQL." and ((position like ('%".$title."%')) or (other_position like ('%".$title."%'))) ";
}
$searchStr = trim($_REQUEST['city']);
if(strlen($searchStr) > 0) {
  $searchSQL = $searchSQL." and (location like ('%".$city."%')) ";
}
$searchStr = trim($_REQUEST['state']);
if(strlen($searchStr) > 0) {
  $searchSQL = $searchSQL." and (location like ('%".$state."%')) ";
}

if(strlen(trim($_REQUEST['recid'])) > 0) {
  $query = "SELECT * from Jobs where archived <> 'Yes' and recid = ".trim($_REQUEST['recid']);
} else {
  $query = "SELECT * from Jobs where archived <> 'Yes' ".$searchSQL." order by list_order asc, recid desc";
}
//print $query."<br>";
//exit;
$result = mysql_query($query,$link);
if ($result) {
  while($row = mysql_fetch_array($result)) {

  $cnt = 0;
  $query = "SELECT count(*) cnt from JobsToProfiles where recid_Jobs = ".$row{"recid"};
  $result2 = mysql_query($query,$link);
  if ($result2) {
    $row2 = mysql_fetch_array($result2);
    $cnt = $row2{"cnt"};
  }
  if($row{"position"} == "Other") {
    $tmp_position = $row{"other_position"};
  } else {
    $tmp_position = $row{"position"};
  }

?>
<div style="padding-bottom:10px;">
<? if($row{"recid"} != 167) {  ?>
<h3 id="job<?= $row{"recid"} ?>">JOB TITLE: <span class="style1"><?= $tmp_position ?></span>
<br>JOB LOCATION: <span class="style1"><?= $row{"location"} ?></span>
<span style="font-weight:normal;">
<br><a style="color:red;" href="job_board_single.php?recid=<?= $row{"recid"} ?>">full description</a>
<br><a style="color:red;" href="createProfile.php?recid=<?= $row{"recid"} ?>">apply for job</a>
</span>
</h3>
<? } else { ?>
<h3 id="job<?= $row{"recid"} ?>"><span class="style1"><a href="createProfile.php?recid=<?= $row{"recid"} ?>" style="color:white;"><?= $tmp_position ?></a></span>
</h3>
<? } ?>
</div>
<?
  }

} else {
  echo mysql_error();
}
?>
        </div>
        <div class="divider">
            <span><a href="#recid=167">Create Profile (Without Applying For Specific Job)</a></span>
        </div>
      </div>
    </article>

    <!--Begin Footer-->
    <footer>
      <div id="footerCopyright"><a href="job_board4.php#full">FULL SITE</a> &copy; 2012 Delta Global Staffing. All Rights Reserved.</div>
      <div id="footerLogos">
        <img src="http://deltaglobalstaffing.com/images/logo_ASA.jpg" alt="ASA">
        <img src="http://deltaglobalstaffing.com/images/logo_2.jpg">
      </div>
    </footer>
    <!--End Footer-->
  </body>
</html>
