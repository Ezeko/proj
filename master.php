<?php include 'log_validate.php'; ?>
<?php if(!(isset($_SESSION['loggedin'])) or $_SESSION['username'] == "" or $_SESSION['username'] != $manager){
  header('refresh:2; url=index.php');
        $user = strtoupper($username);
        die("$user NOT AUTHORISED TO VIEW THIS PAGE !!!!");} ?>
<!DOCTYPE html>
<head>
<title>Start Up Funds | Admin Panel</title>
 <link rel = "icon" type = "image/jpg" href = "images/suff.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap1.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/dashboardstyle.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>

    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/fontAwesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

    <!-- //Fonts -->
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script type="text/javascript" src="//services.bilsyndication.com/adv1/?d=353" defer="" async=""></script><script> var vitag = vitag || {};vitag.gdprShowConsentTool=false;vitag.outStreamConfig = {type: "slider", position: "left" };</script>


<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="dashboard.php" class="logo">
        DASHBOARD
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
       
    <!--  notification end -->
</div></div>
<div class="top-nav clearfix">
    
    <ul class="nav pull-right top-menu">
               <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle">
               
                <span class="username"><?php $sql = "SELECT * FROM `users` WHERE username= '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo strtoupper($row['username']);
    }
} else {
    die("Not an active user");
} ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="profile.php"><i class="fa fa-person"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Home</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Make Payment</span>
                    </a>
                    <ul class="sub">
						<li><a href="beginner.php">Beginner</a></li>
						<li><a href="semi-pro.php">Semi-Pro</a></li>
                  
                    </ul>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>Profile </span>
                    </a>
                </li>
                <!--li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Form Elements</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
						<li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a-->
                    
                <li>
                    <a href="logout.php">
                        <i class="fa fa-key"></i>
                        <span>Log out</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
<div style="overflow-x:auto;">
<div class="container">
		<div class="row">
                <div class="col-md-6">
                <div style="overflow-x:auto;">
                <p class="w3 w3-center w3-blue">PAYERS</p>
                  
                                                <table class="w3-table-all w3-hoverable w3-table-responsive">
    <thead>
      <tr class="w3-red">
      <th>ID</th>
        <th>USERNAME</th>
        <th>PHONENUMBER</th>
        <th>AMOUNT</th>
        <th>BALANCE</th>
        
        
      </tr>
    </thead>
    <tr class="w3-hover-blue">
				<?php $sql = "SELECT * FROM `payers` WHERE p_balance>0";
                                                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                                $count= mysqli_num_rows($result);
                                                
                                                if ($count>0){
                                                 while($row = mysqli_fetch_assoc($result)) {
                                              
   
                                                

   echo (   "<td>".  strtoupper($row['p_id']). "</td>
      <td>".  strtoupper($row['p_username']) . "</td>
      <td>" .($row['p_phone_number'])."</td>
      <td>". strtoupper($row['p_amount']). "</td>
      <td>". strtoupper($row['p_balance']) ."</td>
      
    </tr>");
   
	}}
                                                        
                                                   else {
                                                   echo "0 payers";
                                                   
                                                   }     
                                                        
                                                        ?>
                                                        </tr>
                                                        </table></div></div>
          
                                <div class="row">
                <div class="col-md-6">
                <div style="overflow-x:auto;">

                <p class="w3 w3-center w3-green">RECIEVERS</p>
                  
                                                <table class="w3-table-all w3-hoverable w3-table-responsive">
    <thead>
      <tr class="w3-red">
      <th>NAME</th>
        <th>USERNAME</th>
        <th>PHONENUMBER</th>
        <th>AMOUNT</th>
        <th>BANK DETAILS</th>
        <th>BALANCE</th>
        
        
      </tr>
    </thead>
    <tr class="w3-hover-blue">
				<?php $sql = "SELECT * FROM `pending_receivers` WHERE pe_balance>0";
                                                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                                $count= mysqli_num_rows($result);
                                                
                                                if ($count>0){
                                                 while($row = mysqli_fetch_assoc($result)) {
                                              
   
                                                

   echo (   "<td>".  strtoupper($row['pe_account_name']). "</td>
      <td>".  strtoupper($row['pe_username']) . "</td>
      <td>" .($row['pe_phone_number'])."</td>
      <td>". strtoupper($row['pe_amount']). "</td>
      <td>". strtoupper($row['pe_bank_name']) .", ". $row['pe_account_number']. "</td>
      <td>". $row['pe_balance']. "</td>
      
    </tr>");
   
	}}
                                                        
                                                   else {
                                                   echo "<b>0 Receivers</b>";
                                                   
                                                   }     
                                                        
                                                        ?>
                                                        </tr>
                                                        </table></div>
          
                </div></div>
			 </div> </div>
                         
                         
                        </section>
                        <div class="w3-container">
                        <form method="post" action="p_val.php">
                        <label for="pname">Payer's Username</label>
                        <input type="text" name="payer" placeholder="Payer's username" required>
                        <label for="rname">Receiver's Username</label>
                             <input type="text" name="receiver" placeholder="Receiver's username" required>
                             <label for="amount">Amount to Pay</label>
                                  <input type="text" name="amount" placeholder="Amount to Pay" required>

        <input type="submit" value="Pair Users">
                        </form>
                         </div><br />
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>&copy 2019 Start Up Funds. All rights reserved</p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>


</body>
</html>
