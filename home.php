<!DOCTYPE html>
<html>
<title> HOME  </title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head>

<?php include 'navigation.php';

if($_SESSION['loggedin']=="yes")
{
$email = $_SESSION['email'];}
else
{
	$email = " ";
}

 ?>
<?php include 'includes/header.php'; ?>
  
<h1>FSP CONSULTANTS</h1>
<h2>Helping you become successfull</h2>
</head>
<body style=" 	background-repeat: no-repeat; 	 
	font-family:Arial, Helvetica, sans-serif;	    line-height: 24px; font-size: 120%;  background: #F8F8FF;
        
      margin-top: 0px;
  margin-bottom: 0px;
  margin-right: 0px;
  margin-left: 0px;
  padding: 0px 0px 0px 0px;">

<h3>
<marquee direction="right" align="centre" behavior="alternate" bgcolor="" scrolldelay="100" scrollamount="4" width="100%">
<br>!! Welcome To FSP CONSULTANTS  <?php echo $email; ?>!!!<br>&nbsp</marquee>

<!-- imgslider -->

    <div class="img-slider">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="static/images/campus.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Campus Hiring</h5>
              <p style="font-size: 2em;color: black;">
                "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="static/images/percall.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Percall</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="static/images/intern.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Internship</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="static/images/freelancer.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Freelance</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>


          <div class="carousel-item">
            <img src="static/images/recruiter.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Recruiter's MarketPlace</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="static/images/hr.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Human Resources</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>

        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- imgslider -->
 <div class="container">
            <div class="row" >
                <div class="abt-head" >
                   <!-- <h2 style=" color:#111 	font-weight:bold;font-weight: 800 ;text-align: center; margin-top: 40px;">OUR VISION</h2>-->
                </div>
                <br><br>
                <div class="abt-discr" style=" box-shadow: 0px 3px 3px 2px gray;
                 border-radius: 2%; border: 2px solid grey; padding-top: 2%; padding-bottom: 2%; padding-left: 5%;">
                    <p style="font-size: 20px; "><b><i>"Our vision is to provide  a platform where people can easily find their requirements. " </i> </b></p>
        
                </div>
            </div>
<fieldset class="container-fluid" style=" overflow: hidden; color:black; background: url(images/distributor.jpeg)no-repeat ;-webkit-background-size: cover; 
-moz-background-size: cover; 
-o-background-size: cover; margin-top: 5em; height: 300px ">
<div>
<br>
<b>Your Success Begins With Us</b></div><br><br>
<div class="row">

	<div class="col-sm-3" style="float: left;"> 			 
		<span> 
		Distributor
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/warehouse.jpg" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
		
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Manufacturer
		<br>
		<a href="distributor.php"><img class="rounded-circle" src="img/labourer.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
	
	<div class="col-sm-3" style="float: left; "> 
		<span> 
		Super Stockist
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/retailer.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
	
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Service Provider
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/institutional trade.jpg" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Retailer
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/brand oem.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
	
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Buy/Sell
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/super stockist.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
	
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Trader
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/buysell.jpg" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
		
	<div class="col-sm-3" style="float: left; "> 
		<span> 
		Institutional Partner
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/service provider.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
</div>
	</div>
<br><br>
</fieldset>
<!--SOME CONTENT -->
<fieldset class="container-fluid" style=" overflow: hidden; color:white; background: #111 ;-webkit-background-size: cover; 
-moz-background-size: cover;  
-o-background-size: cover; height: 200px ">

FSP Consultants is the pioneer of organised recruitment in India. Our roots in management consulting enable us to bring a unique approach to recruitment.
We provide a range of talent acquisition services by leveraging our domain knowledge built over four decades.
</fieldset>
<br><br>
<!-- comment section -->
<fieldset class="container-fluid" style=" overflow: hidden; color:black; background: #faf2e4 ;-webkit-background-size: cover; 
-moz-background-size: cover; 
-o-background-size: cover; height: 250px ">
<br>
CLIENT TESTIMONIALS<br> 
(What Our Customer Says...)
<br><br>
<div class="row">
<div class="col-sm-1"></div>
	<div class="col-sm-2" style="float: left;
	background: black;
color: white;
	text-align: left"> 
	
	<b>Maggi Khan</b><br>
	Marketing VP<br><br>
	text text text<br><br>
	</div>
<div class="col-sm-2"></div>
	<div class="col-sm-2" style="float: left;
	background: black;
color: white;
	text-align: left"> 
	
	<b>Maggi Khan</b><br>
	Marketing VP<br><br>
	text text text<br><br>
	</div>
<div class="col-sm-2"></div>
	<div class="col-sm-2" style="float: left;
	background: black;
color: white;
	text-align: left"> 
	
	<b>Maggi Khan</b><br>
	Marketing VP<br><br>
	text text text<br><br>
	</div>
<div class="col-sm-1"></div>
</div>
<br>
</fieldset>	
<div class="container-fluid" style=" color:black; background: #faf2e4 ;-webkit-background-size: cover; 
-moz-background-size: cover; 
-o-background-size: cover;">
		<button class="open-button" class="btn" onclick="openForm()">Add Your Comment</button>

		<!-- form for adding comment -->
<div class="form-popup" id="myForm" style="display:none; text-align: justify">
  <form action="/action_page.php" class="form-container">
    <h1>ADD YOUR COMMENTS</h1><br>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>
	<br>
    <label for="Profession"><b>Profession</b></label>
    <input type="Text" placeholder="Enter Profession" name="Profession" required>
	<br>
	<label for="COMMENTS"><b>COMMENTS</b></label>
    <input type="Text" placeholder="Share your views" name="comment" required>
	<br><br>
    <button type="submit" class="open-button" class="btn">Submit</button>
    <button type="button" class="open-button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</div>
<br><br>	
<fieldset class="container-fluid" style=" overflow: hidden; color:white; background:#000000 ;-webkit-background-size: cover; 
-moz-background-size: cover;  
-o-background-size: cover; height: 300px ">


  <div class="row padding0">
    <div class="col-md-12 padding0">
      <h1>Creating impact</h1>
    </div>
  </div>
  <div class="row padding0">
<div class="col-md-3 bdr-ryt">
<div class="usp-box">
<h3>50+</h3>
<p>Years of market leadership</p>
</div>
</div>
<div class="col-md-3 bdr-ryt">
<div class="usp-box">
<h3>165K</h3>
<p>Careers made till date</p>
</div>
</div>
<div class="col-md-3 bdr-ryt">
<div class="usp-box">
<h3>465+</h3>
<p>Consultants</p>
</div>
</div>
<div class="col-md-3">
<div class="usp-box">
<h3>24</h3>
<p>Industries covered</p>
</div>
</div>
  <div class="clear"></div>
</div>
</fieldset>
<br><br>
</body>
<?php include 'includes/footer.php'; ?>

</html>