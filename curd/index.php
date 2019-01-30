<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	 <!-------------------------------------meta tag-------------------------------------->
    <meta name="viewport" content="widthdevice-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">  
    <!--------------------------- link css file------------------------------------------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bcc.css">
    <!---------------------------font awesome link-------------------------------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-----------------------------------link js file------------------------------------>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 
</head>
<body class="bg-info" >

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><br><br>
			<div class="card bg-success">
					<div class="card-title" >
						 <center><h3>Registration Form</h3> </center><br>
     
        <form method="post" action="insert.php">
          <div class="form-group">
            <i class="fa fa-user icon fa-2x"></i>
            <label class="inputFullname">Full name</label>
            <input type="text"  class="form-control" name="fnm" 
             placeholder="fullname">
          </div>

          <div class="form-group">
            <i class="fa fa-envelope icon fa-2x"></i>
            <label class="inputEmail">Email</label>
            <input type="email"  class="form-control" name="email" 
             placeholder="email">
          </div>
          <div class="form-group">
            <i class="fa fa-key icon fa-2x"></i>
            <label class="inputPassword">Password</label>
            <input type="password"  class="form-control" name="pwd" 
             placeholder="password">
          </div>

          <div class="form-group">
            <i class="fa fa-contact icon fa-2x"></i>
            <label class="inputcontact">Contact</label>
            <input type="number"  class="form-control" name="contact" 
             placeholder="contact">
          </div>


          <div class="form-group">
          	<i class="fa fa-calendar icon fa-2x"></i>
            <label class="inputDob">DOB</label>
            <input type="date"  class="form-control" name="dob" 
             placeholder="Phonenumber">
          </div>
          <div class="form-group">
            <label class="inputGender">Gender</label><br>
            <input type="radio" name="gender" value="male"> Male
              <input type="radio" name="gender" value="female">Female 
          </div>      
           <button class="btn btn-block btn-lg btn-primary">Submit</button>
           
            
        </form>
					</div>
					

				
			</div>
			
		</div>
		
	</div>

</body>
</html>