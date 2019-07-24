
<!DOCTYPE html>
<head>
<title> START UP FUNDS | REGISTER</title>
 <link rel = "icon" type = "image/jpg" href = "images/suff.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Custom CSS -->
<link href="css/registercss.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<!--font CSS-->
<script src="js/jquery2.0.3.min.js"></script>


</head>
<body class="dashboard-page">

<body>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
                                
				<div class="grids"><br>
                               <button style="background-color:gold"> <a href="index.php">HOME</a></button>
					<div class="progressbar-heading grids-heading">
					<!---728x90--->

						<!--h2 style="color:red">registration form</h2>
					<!---728x90--->

					</div>
					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Register Form :</h3>
                                                                                <h4 class="w3 w3-panel">Make sure all fields are correct, as there is no room for editing profile</h4>
									</div>
						<div class="form-body form-body-info">
						<form name="reg_form" id="reg_form" novalidate="" action="reg_validate.php" method="post">
	<div class="form-group valid-form">
                                <input type="text" class="form-control" id="inputName" name="Username" placeholder="Username" required="">
					</div>
							<div class="form-group has-feedback">
               <input type="email" class="form-control inputEmail" name="Email" placeholder="Enter a valid email address" data-error="That email address is invalid" required="">
	<span class="help-block with-errors"></span>
								</div>
                                                                
                                                                  	<div class="form-group">
	 <input type="number" data-toggle="validator" data-maxlength="11" class="form-control " name="phone_number" placeholder="Enter a valid Phone Number" required="">
							<br /></div>
                                                                
                                                                <div class="form-group valid-form">
               <input type="text" class="form-control inputName" name="AccountNAme" placeholder="Enter your  account name"  required="">
	<span class="help-block with-errors"></span>
	</div>
        <div class="form-group valid-form">
                                <input type="text" class="form-control" id="BankName" name="BankName" placeholder="Bank e.g first bank, GTB" required="">
         
					</div>
                                                                	<div class="form-group">
	 <input type="text" data-toggle="validator" data-maxlength="10" class="form-control " name="AccountNumber" placeholder="Input Your Account Number" required="">
							</div>
									<div class="form-group">
	 <input type="password" data-toggle="validator" data-minlength="6" class="form-control inputPassword" name="Password" placeholder="Input password" required="">
							</div>
					<div class="form-group">
	<input type="password" class="form-control" id="ConfirmPassword" data-match=".inputPassword" data-match-error="Whoops, these don't match" name="ConfirmPassword" placeholder="Confirm Password" required="">
			  <div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
										<div class="radio">											<label>
					  <input type="radio" name="gender" value="female" required="">									  Female
													</label>
												</div>
												<div class="radio">
									<label>
									<input type="radio" name="gender" value="male" required="">
											Male
													</label>
												</div>
											</div>
											<div class="form-group">
												<div class="checkbox">
													<label>
						<input type="checkbox" value="Accepted"  name="Terms" data-error="Before you wreck yourself" required="">
										Clicking on Register means you have accepted the terms of use.
													</label>
								<div class="help-block with-errors"></div>
							</div>
							</div>
											<div class="form-group">
							<button type="submit" class="btn btn-primary ">REGISTER</button>										</div>
							</form>
									</div>
								</div>
							</div>
							
												</div>
						<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
		<!---728x90--->

		<!-- footer -->
		<div class="footer">
			
		</div>
		<!-- //footer -->
		<!-- input-forms -->
		
		
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="js/validator.min.js"></script>
		<!--//validator js-->
</body>
</html>
