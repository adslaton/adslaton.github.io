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
    <?php
    // Connect to database
    $hostname = "sql5c38a.carrierzone.com";
    $username = "empdata";
    $password = "DLL2030dgs";
    $dbname = "empdata";

    $link = mysql_connect($hostname, $username, $password) or DIE("Unable to connect to MySQL server $hostname");
    $selected = mysql_select_db($dbname) or DIE("Could not select requested db $dbname");
    $recid = trim($_REQUEST['recid']);

    if(strlen(trim($_REQUEST['recid'])) > 0) {
      $query = "SELECT * from Jobs where archived <> 'Yes' and recid = ".trim($_REQUEST['recid']);
    } else {
      $query = "SELECT * from Jobs where archived <> 'Yes' order by list_order asc, recid desc";
    }
    //print $query."<br>";
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
        }
    } else {
      echo mysql_error();
    }
    if(strlen(trim($_REQUEST['recid'])) > 0) {
      $query = "SELECT * from Jobs where archived <> 'Yes' and recid = ".trim($_REQUEST['recid']);
    } else {
      $query = "SELECT * from Jobs where archived <> 'Yes' order by list_order asc, recid desc";
    }

    $result = mysql_query($query,$link);
    if ($result) {
      while($row = mysql_fetch_array($result)) {
        $job_id = $row{"recid"};
      if($row{"position"} == "Other") {
        $tmp_position = $row{"other_position"};
      } else {
        $tmp_position = $row{"position"};
      }

    ?>
     <article>
      <h2 class="page-title">JOB SEARCH</h2>
      <ul class="details">
        <li>TITLE: <span id="js-title"><?= $tmp_position ?></span></li>
        <li><a href="/m.job_board.php#job<?= $row{"recid"} ?>"><div class="button bk-darkred center">back to listings</div></a></li>
        <li>LOCATION: <span id="js-location"><?= $row{"location"} ?></span></li>
        <li class="head">SUMMARY</li>
        <li><span id="js-summary"><? /*showApos(nl2br($row{"generaldescription"}))*/ ?></span></li>
        <? if(strlen($row{"details"}) > 0) { ?>
            <li><ul id="js-details"><?= showApos($row{"details"}) ?></ul></li>
        <? } ?>
        <? if(strlen($row{"miscellaneous"}) > 0) { ?>
            <li><?= showApos($row{"miscellaneous"}) ?></li>
        <? } ?>

        <?
        $query = "SELECT * from JobsResponsibilities where job_id = ".$job_id." order by recid asc";
        $result0 = mysql_query($query,$link);
        if ($result0) {
          $num_rows = mysql_num_rows($result0);
          if($num_rows > 0) {
            //$num_rows = mysql_num_rows($result0);
            while($row0 = mysql_fetch_array($result0)) {
        ?>
                <li><?= showApos(nl2br($row0{"responsibility"})) ?></li>
        <?
            }
          }
        }
        $query = "SELECT * from JobsQualifications where job_id = ".$job_id." order by recid asc";
        $result0 = mysql_query($query,$link);
        if ($result0) {
          $num_rows = mysql_num_rows($result0);
          if($num_rows > 0) {
        ?>
        <li class="head">QUAILIFICATIONS</li>
        <li>
            <ul id="js-qualifications">
        <?
            //$num_rows = mysql_num_rows($result0);
            while($row0 = mysql_fetch_array($result0)) {
        ?>
                <li><?= showApos(nl2br($row0{"qualification"})) ?></li>
        <?
            }
        ?>
            </ul>
        </li>
        <?
          }
        }
        $query = "SELECT * from JobsMisc where job_id = ".$job_id." order by recid asc";
        $result0 = mysql_query($query,$link);
        if ($result0) {
            $num_rows = mysql_num_rows($result0);
            if($num_rows > 0) {
        ?>
            <li class="head">MISCELLANEOUS</li>
            <ul>
        <?
            //$num_rows = mysql_num_rows($result0);
            while($row0 = mysql_fetch_array($result0)) {
        ?>
                <li><?= showApos(nl2br($row0{"misc"})) ?></li>
        <?
            }
        ?>
            </ul>
        <?
            }
        }
        if ((strlen($row{"term_package"}) > 0) && ($job_id != 85) && ($job_id != 86) && ($job_id != 84) && ($job_id != 171) && ($job_id != 174) && ($job_id != 187) && ($job_id != 183) && ($job_id != 182) && ($job_id != 181) && ($job_id != 180)) { ?>
        <li class="head">BENEFITS</li>
        <li><?= showApos($row{"term_package"}) ?></li>
        <? }
        }

    } else {
      echo mysql_error();
    }
    ?>
        <li><span id="js-legal">Equal Opportunity/Affirmative Action Employer M/F/D/V</span></li>
        <li><a href="createProfile.php?recid=<?= $recid ?>"><div class="button bk-darkred center">apply for job</div></a></li>
        <li><a href="/m.job_board.php#job<?= $recid ?>"><div class="button bk-darkred center">back to listings</div></a></li>
      </ul>
    </article>

    <!--Begin Footer-->
    <footer>
      <div id="footerCopyright"><a href="job_board.php#full">FULL SITE</a> &copy; 2012 Delta Global Staffing. All Rights Reserved.</div>
      <div id="footerLogos">
        <img src="http://deltaglobalstaffing.com/images/logo_ASA.jpg" alt="ASA">
        <img src="http://deltaglobalstaffing.com/images/logo_2.jpg">
      </div>
    </footer>
    <!--End Footer-->
  </body>
</html>
