<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<title>Tour & Guide Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">

<!--guider files-->

<link rel="stylesheet" href="slidestyle.css">
<!--/guider files-->

<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>


		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

    </head>
    <body>
       <!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="font-family: 'Fredoka One', cursive;" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"><font style="font-size: 60px">The Guider</font></h1>
	</div>
</div>

<!-- /top-header -->


<!-- RegisterButton -->

<div style="background-color: #083e08;
background-image: linear-gradient(225deg, #083e08 0%, #1a754b 50%, #062337 100%); margin-top: 10px; margin-bottom: 30px; padding: 50px;">
    <h3 style="font-family: aero; font-size: 40px; text-align: center; margin-bottom: 20px; text-align: center; font-family: 'Bebas Neue', cursive; font-weight: 900; letter-spacing: 5px; color: white;">Guiders Can Register Here..!</h3>
    <center>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Signup</button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5">Login</button>
    </center>
</div>


<div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="model-title">Guider Registration Form</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

			<form action="insertcodeguider.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Your name">
					</div>
					<div class="form-group">
						<input type="email" name="emailid" class="form-control" placeholder="Your E-mail">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Your password">
					</div>
					
				</div>

				<div class="modal-footer">
					<button type="submit" name="insertdata" class="btn btn-success">Register</button>
				</div>
			</form>

        </div>
    </div>
</div>
<!-- /RegisterButton -->
	



<div class="container">
            <div class="row" style="margin-top: 40px">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="images/muffid.jpeg" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% ); height: 350px;">
                                                <p style="font-size: 30px; font-weight: bold; margin-bottom: 10px;">MUFFID</p>
                                                <p style="line-height: 18px;"> Great public speaking skills.</br>
                                                    Outgoing personality.</br>
                                                    Punctual.</br>
                                                    Previous experience with some kind of performance-based art.</br>
                                                    Flexible schedule to work on weekends..
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="images/mithu.jpg" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% ); height: 350px;">
                                                <p style="font-size: 30px; font-weight: bold; margin-bottom: 10px;">MITHUSHAN</p>
                                                <p style="line-height: 18px;"> High school diploma or equivalent.</br>
                                                    Passionate about traveling.</br>
                                                    Ability to work during evenings and on weekends.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="images/Dilsani.jpeg"  alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% ); height: 350px;">
                                                <p style="font-size: 30px; font-weight: bold; margin-bottom: 10px;">DILSANI</p>
                                                <p style="line-height: 18px;"> Excellent conversational skills with a knack for storytelling.</br>
                                                    Personable, humorous disposition.</br>
                                                    Outstanding organizational, time management, and improvisational skills.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="images/harshi.jpeg" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% ); height: 350px;">
                                                <p style="font-size: 30px; font-weight: bold; margin-bottom: 10px;">HARSHI</p>
                                                <p style="line-height: 18px;"> High school diploma or equivalent.</br>
                                                    Experience working as a tour guide.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="images/person-icon-png.png" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% ); height: 350px;">
                                                <p style="font-size: 30px; font-weight: bold; margin-bottom: 10px;">GUIDER5</p>
                                                <p style="line-height: 18px;"> High school diploma or equivalent.</br>
                                                    Experience working as a tour guide.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="images/person-icon-png.png" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% ); height: 350px;">
                                                <p style="font-size: 30px; font-weight: bold; margin-bottom: 10px;">GUIDER6</p>
                                                <p style="line-height: 18px;"> High school diploma or equivalent.</br>
                                                    Experience working as a tour guide.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>           
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>






<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>

<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
    </body>
</html>