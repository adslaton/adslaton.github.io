<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Employers - Delta Global Staffing</title>
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/form.js"></script>
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
      <h2 class="page-title">EMPLOYERS</h2>
      <h3>What we do?</h3>
      <p>We offer customized and cost efficient staffing solutions to local, regional and national customers. We're problem solvers. Our support includes:</p>
      <ul>
        <li>- Short and Long Term Assignments 
        <li>- VMS Partnering and Support 
        <li>- VOP Management 
        <li>- Temp-to-Hire & Direct Placement Recruitment 
        <li>- Payrolling, via Our P*A*S*S Payrolling Program 
        <li>- Value Added Business Alliances
      </ul>
      <h4>
        <div class="promo-image">
          <img src="/images/elements/BPTWLogo_Top25.jpg"/>
        </div>
        <div class="promo-text">Named one of Atlanta's Top 25 Temporary Employment Agencies for 9 straight years.</div>
      </h4>
      <h3>What are our Service Competencies?</h3>
      <ul>
        <li>- Call Centers 
        <li>- Customer Service 
        <li>- Administrative 
        <li>- IT 
        <li>- Mechanics 
        <li>- Engineers 
        <li>- Professional 
        <li>- Logistics 
        <li>- Aviation/Airline 
        <li>- Hospitality 
        <li>- Convention/Event Support
      </ul>
      <h3>Who is our customer?</h3>
      <p>Any business or organization who has or needs employees is a potential customer, regardless of industry. We're about people. Our clients are as diverse as our solutions.</p>
      <h3><span class="hightlight-red">Are you looking for a job? Search available positions and apply via our <a>Job Board</a>.</span></h3>
      <h3>Owners and Employers, let us help you find the right candidate for your open positions!</h3>
      <form action="http://deltaglobalstaffing.com/clientservices_email.php" method="post" name="frm" id="frm">
        <ul>
          <li><label>Name:</label></li>
          <li><input name="name"></li>
          <li><label>Email Address:</label></li>
          <li><input name="email"></li>
          <li><label>Company You Represent:</label></li>
          <li><input name="company" required displayname="Company You Represent"></li>
          <li><label>Phone:</label></li>
          <li><input name="phone"></li>
          <li><label>How did you hear about Delta Global Staffing?</label></li>
          <li><select name="how_did_you_hear">
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
          </select></li>
          <li class="head">We will be happy to contact you with more information about any of our services. Please select your areas of interest:</li>
          <li class="radio"><input name="areas_of_interest1" value="Administrative Services" type="checkbox"> Administrative Services</li>
          <li class="radio"><input name="areas_of_interest2" value="Managed Service Provider" type="checkbox"> Managed Service Provider</li>
          <li class="radio"><input name="areas_of_interest3" value="Project Hiring" type="checkbox"> Project Hiring</li>
          <li class="radio"><input name="areas_of_interest4" value="Recruiting" type="checkbox"> Recruiting</li>
          <li class="radio"><input name="areas_of_interest5" value="Screening &amp; Assessment" type="checkbox"> Screening &amp; Assessment</li>
          <li class="head">What type of employee are you looking for?:</li>
          <li class="radio"><input type="checkbox" name="type_of_employee1" value="Direct Hire"> Direct Hire</li>
          <li class="radio"><input type="checkbox" name="type_of_employee2" value="Temporary"> Temporary</li>
          <li class="radio"><input type="checkbox" name="type_of_employee3" value="Temp To Hire"> Temp To Hire</li>
          <li><input type="button" value="submit" style="color:black;background-color:white;width:150px;" onclick="checkRequired()"></li>
        </ul>
      </form>
    </article>

    <!--Begin Footer-->
    <footer>
      <div id="footerCopyright"><a href="clientservices.php#full">FULL SITE</a> &copy; 2012 Delta Global Staffing. All Rights Reserved.</div>
      <div id="footerLogos">
        <img src="http://deltaglobalstaffing.com/images/logo_ASA.jpg" alt="ASA">
        <img src="http://deltaglobalstaffing.com/images/logo_2.jpg">
      </div>
    </footer>
    <!--End Footer-->
  </body>
</html>
