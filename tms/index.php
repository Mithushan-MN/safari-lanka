<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<!--guider files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="slidestyle.css">
<!--/guider files-->
<title>Tour & Guide Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
<style type="text/css">
    .card-text{font-family: 'Dancing Script', cursive; font-size: 20px; color: black}


    .head-title{
        font-family: 'Dancing Script', cursive;
    }

    .head-title2{
        font-family: 'Fredoka One', cursive;
    }

    .package-type{
        font-family: 'Cookie', cursive;
    }

    body{
        background-image: linear-gradient(to top, #4fb576 0%, #44c489 30%, #28a9ae 46%, #28a2b7 59%, #4c7788 71%, #6c4f63 86%, #432c39 100%);
</style>




<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container" style="height: 500px;">
		<h1 class="wow zoomIn animated animated" style="font-family: 'Fredoka One', cursive;" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"><font style="font-size: 60px"> Welcome to Safari Lanka</font></h1>
	</div>
</div>

<!--package card-->

	<section id="card-packages" style="background-image: linear-gradient(to right, #141e30, #243b55);
">
            <div class="container">
                <div class="title">
                    <h1><span style="font-family: 'Bebas Neue', cursive; font-size: 60PX; letter-spacing: 5px;">PACKAGE TYPES</span></h1>
                    <p>we are providing three types of packages..</p>
                </div>
                <div class="row">
                    <div class="col-md-4 fadeInDown animated" data-wow-delay=".5s">
                        <div class="card text-center" style="background: #e65c00;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #F9D423, #e65c00);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F9D423, #e65c00); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
; border-radius: 20px; height: 750px;">
                            <img src="images/gold_badges.png" class="card-img-top" style="width: 90%; padding-left: 20px">
                            <div class="card-body" >
                                <h5 class="card-title" style="font-family: 'Libre Baskerville', serif;
font-family: 'Lobster', cursive; font-size: 40px; color: black">Gold Package</h5>
                                <p>
                                <ul style="list-style-type:square; text-align:left; padding-left: 20px;">
                                    <li class="card-text">Route and  map details</li>
                                    <li class="card-text";>We will provide Well experienced guider.</li>
                                    <li class="card-text";>Hotel Details  -  most closely  hotels details and other Hotel details.
                                     We only provide Hotel details as pdf view. No bookings and other responsibilities.</li>
                                     <li class="card-text";>Pickup-Drop</li>   
                                     <li class="card-text";>Offer 10% Discount</li>
                                    </ul>
                                   </p>
                                

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 fadeInUp animated" data-wow-delay=".10s">
                        <div class="card text-center" style="background: #616161;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #9bc5c3, #616161);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #9bc5c3, #616161); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
border-radius: 20px; height: 750px;">
                            <img src="images/silver_badges.png" class="card-img-top" style="width: 90%; padding-left: 20px">
                            <div class="card-body">
                                <h5 class="card-title"  style="font-family: 'Libre Baskerville', serif;
font-family: 'Lobster', cursive; font-size: 40px; color: black">Silver Package</h5>
                                <p>
                                <ul style="list-style-type:square; text-align:left; padding-left:20px;">
                                <li class="card-text">Route and  map details</li>
                                <li class="card-text">Well experienced guider</li>
                                <li class="card-text">Hotel Details  -  most closely  hotels details and other Hotel details. We only provide Hotel details as pdf view. 
                                    No bookings and other responsibilities.</li>
                                    <li class="card-text">No vehicle facilities</li>
                                    <li class="card-text">Offer 5% Discount</li>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 fadeInDown animated" data-wow-delay=".15s">
                        <div class="card text-center" style="background-image: linear-gradient(to left bottom, #321503, #5e4631, #8c7d63, #bbb89d, #eef5dd); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 border-radius: 20px; height: 750px;">
                            <img src="images/bronze_badges.png" class="card-img-top" style="width: 90%; padding-left: 20px">
                            <div class="card-body">
                                <h5 class="card-title"  style="font-family: 'Libre Baskerville', serif;
font-family: 'Lobster', cursive; font-size: 40px; color: black">Bronze Package</h5>
                                <p class="card-text">
                                <ul style="list-style-type:square; text-align:left; padding-left: 20px">
                                <li class="card-text">Provide route and  map details</li>
                                <li class="card-text">Hotel Details  -  most closely  hotels details and other Hotel details. We only provide Hotel details as pdf view. 
                                No bookings and other responsibilities.</li>
                                    <li class="card-text">No guiders</li>
                                    <li class="card-text">No Vehicles </li>
                                    <li class="card-text">This package specially designed for local travelers.</li>
                                    </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--//package card-->




<div>
    <h1 style="text-align: center; margin-top: 0px; padding-top: 50px; padding-bottom: 50px; font-family: 'Bebas Neue', cursive; font-weight: 900; margin-bottom: 50px; background-color: white; font-size: 60px; letter-spacing: 5px; ">Package List</h1>
</div>

<!---holiday---->
<div class="container">
	<div class="holiday">
	
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm" style="background-color: white; padding-top: 30px; padding-bottom: 30px; border-radius: 20px;">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h3 style="font-family: 'Secular One', sans-serif; color: black;">Location Name: <?php echo htmlentities($result->PackageName);?></h3>
					<h6 style="font-family: 'Secular One', sans-serif; color: black;"><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></h6>
					<p style="font-family: 'Secular One', sans-serif; color: black;"><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p style="font-family: 'Secular One', sans-serif; color: black;"><b>Features :</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5 style="font-family: 'Patua One', cursive; color: maroon; letter-spacing: 2px;">USD <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>
<!---/holiday---->

<!--Guider-->
<div>
    <h1 style="text-align: center; margin-top: 0px; padding-top: 50px; padding-bottom: 50px; font-family: 'Bebas Neue', cursive; font-weight: 900; margin-bottom: 50px; background-color: white; font-size: 60px; letter-spacing: 5px; ">Guiders</h1>
</div>  
<div style="background-color: #FF3CAC;
background-image: -webkit-linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
background-image: -moz-linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
background-image: -o-linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
 margin-top: -50px; margin-bottom: -50px; padding-top: 30px; padding-bottom: 30px;">
<div class="containstl">
<div class="container" >
            <div class="row" >
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box" style="padding-top: 50px;">
                                            <div class="img-area"><img src="images/muffid.jpeg" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );">
                                                <p style="margin-top: -60px; font-size: 30px; font-weight: bold; margin-bottom: 10px;">MUFFID</p>
                                                <p> Great public speaking skills.</br>
                                                    Outgoing personality.</br>
                                                    Punctual.</br>
                                                    Previous experience with some kind of performance-based art.</br>
                                                    Flexible schedule to work on weekends..
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box" style="padding-top: 50px">
                                            <div class="img-area"><img src="images/mithu.jpg" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );">
                                                <p style="margin-top: -60px; font-size: 30px; font-weight: bold; margin-bottom: 10px;">MITHUSHAN</p>
                                                <p> High school diploma or equivalent.</br>
                                                    Passionate about traveling.</br>
                                                    Ability to work during evenings and on weekends.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box" style="padding-top: 50px">
                                            <div class="img-area"><img src="images/Dilsani.jpeg" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );">
                                                <p style="margin-top: -60px; font-size: 30px; font-weight: bold; margin-bottom: 10px;">DILSANI</p>
                                                <p> Excellent conversational skills with a knack for storytelling.</br>
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
                                        <div class="single-box" style="padding-top: 50px">
                                            <div class="img-area"><img src="images/harshi.jpeg" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );">
                                                <p style="margin-top: -60px; font-size: 30px; font-weight: bold; margin-bottom: 10px;">HARSHI</p>
                                                <p> High school diploma or equivalent.</br>
                                                    Experience working as a tour guide.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box" style="padding-top: 50px">
                                            <div class="img-area"><img src="images/person-icon-png.png" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );">
                                                <p style="margin-top: -60px; font-size: 30px; font-weight: bold; margin-bottom: 10px;">GUIDER5</p>
                                                <p> High school diploma or equivalent.</br>
                                                    Experience working as a tour guide.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box" style="padding-top: 50px">
                                            <div class="img-area"><img src="images/person-icon-png.png" alt=""></div>
                                            <div class="img-text" style="font-family: 'Ubuntu', sans-serif; letter-spacing: 1px; background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );">
                                                <p style="margin-top: -60px; font-size: 30px; font-weight: bold; margin-bottom: 10px;">GUIDER6</p>
                                                <p> High school diploma or equivalent.</br>
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
    </div>
</div>
<!--/Guider-->


<!--- 
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>7000</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1500</h3>
				<p>Regestered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,000+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div> ---->

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>



</body>
</html>