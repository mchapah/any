<html>
    <head>
        <title>Student Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
					<div style="color:red;">
					<?php
					$err=$_GET['error'];
					echo $err;
					?>
					</div>
						<div class="row">
							<div class="col-lg-12 wm-modallogin-form wm-login-popup">
                                                            <form id="login-form" action="processlogin.php" method="post" role="form" style="display: block;">
									<div class="form-group">
                                                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" required="required">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="required">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login btn btn-success btn-block btn-lg" value="Log In">
											</div>
										</div>
                                                                            
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </body>
</html>