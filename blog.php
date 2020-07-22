<html>
<title> Blog  </title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head>
<?php include 'navigation.php';?>
 <?php include 'includes/header.php'; ?>
<style>
div.ex1 {
  background-color: lightblue;
  width: 40%;
  height: 300px;
  margin:0px;
  padding:20px;
  overflow: scroll;
}
.div1 {
  width: 200px;
  height: 70px;
  position:top-center;
  border:1px solid blue;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}
.open-button {
  background-color: #555;
  color: white;
  margin:5px;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: top;
  bottom: 23px;
  right: 28px;
  width: 150px;
  border-radius:12px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.center {
  text-align: center;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


.row {
  display: flex;
  margin:70px;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding:20%
  margin:20px;
/* Should be removed. Only for demonstration */
}
</style>
</head>
<body>
<div class="row">
<div class="column">
<div class="center">
<button class="open-button" onclick="openForm()">Add Your Blog</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <label for="Date"><b>Date</b></label>
    <input type="text" placeholder="Enter Date" name="Date" required>

    <label for="Name"><b>Name</b></label>
    <input type="Text" placeholder="Enter Your Name" name="Name" required>
	
	<label for="Blog"><b>Blog</b></label>
    <input type="Text" placeholder="Write Your Blog Here" name="Blog" required>


    <button type="submit" class="btn">Post Your Blog</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
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
</div>
</div>

<div class="row">
<div class="column">

<img src="images/blog1.png" alt="" style="display: inline-block; margin-top:00px;width:100%; height:450px;">
	</div>
<div class="column">	
 <div class="ex1" style="background:white; overflow:scroll;padding:20px;width:100%;height:450px;">
			<p style="color:black; font-size:20px;"><strong>How this Kolkata mother-daughter duo built Scoopski, a Rs 30 lakh dessert business</strong></p> <br>
			 <div class="ex3">
			 <p>Kolkata-based Scoopski makes edible cookie dough that can be consumed straight from the jar, baked into cookies, or used as a topping. Millennials are often criticised for a number of things. The most popular myth about these young adults is that they are a bunch of slackers. The older generation endlessly complains about how lazy and impatient they are. 
				Kolkata-based foodtech startup Scoopski is an outcome of one such ‘impatient millennial who couldn’t wait for her dessert’ - says 23-year-old Founder Vedika Tibrewal.</p>
			 <strong>Story so far :</strong>An economics major student from Kolkata’s St Xavier’s College, Vedika travelled to the US in 2017 to attend Harvard Summer School. On a trip to New York City with friends, she visited a cafe, Cookie DO Confections. It was swarming with people, including celebrities, queueing up for its unique offering - edible cookie dough. Vedika was surprised to see the crowd. “I would have never waited that long to try the cookie dough, if my friends hadn’t insisted,” she recalls. After two hours, she discovered something she had never tasted before. “It was super fudgy and indulgent!”
							She started experimenting in her home kitchen, trying to recreate New York’s edible cookie dough. “My inexperience in the kitchen was an advantage as I tried creating a no-frills dessert that could be customised and played with,” she says. After spending endless hours in the kitchen, she finally cracked the recipe and sent out scoops of cookie dough to her friends and family. On receiving positive feedback, with her friends wanting more, Vedika started taking orders for scoops of cookie dough, which she christened Scoopski. Vedika’s mother, Sonal, helped her with sourcing products and 
							preparing the dough. The duo first tested the product at a flea market in Kolkata’s Hindustan Park February 2018. ncouraged by the response to the product, Vedika went in for product and packaging development. She also convinced her mother, Sonal, to join her in the venture. <br>
		  </div> 
		  <form action="/action_page.php">
			<input type="image" src="like.png" alt="Submit" width="48" height="48"> 
		</form>
		
		<form action="/action_page.php">
			<input type="image" src="share.jpg" alt="Submit" width="48" height="48">
		</form>
		
		
</div>
</div>
</div>
<div class="row">
<div class="column">
<img src="images/blog2.jpg" alt="" style="display: inline-block; margin-top:00px;width:100%; height:450px;">
	</div>
<div class="column">
<div class="ex1" style="background:white;padding:20px;width:100%;height:450px;">
			<p style="color:black; font-size:20px;"><strong>How a WhatsApp group metamorphosed into a telemedicine collective to combat COVID-19</strong></p> <br>
			 <div class="ex3">
			 <p>Project StepOne is a telemedicine collective that brings together 21 startups, over 6,000 volunteer doctors, and active citizenry to power state government helpline numbers and take the fight to COVID-19.</p>
		 <p>In March 2020, India announced Lockdown 1.0 to control the spread of the novel coronavirus. By then, a team of telemedicine startups had realised that the only way to stop the spread of the pandemic was to quickly identify COVID-19 suspects, 
			and isolate, test, and quarantine them.  This led to the birth of Project StepOne, a COVID-19 telemedicine collective that brings together the largest number of nationwide volunteer doctors, 21 startups, and active citizenry to power state government helpline numbers to combat the disease.
			Project StepOne is an empanelled partner for telemedicine consultations that enables free teleconsultation for those with COVID-19 symptoms.The COVID triage helpline uses technology to screen every call and segregate COVID and non-COVID callers. People who may be infected are connected to 
			volunteer doctors via phone consultations. The system, which uses cloud telephony, can scale as calls increase so doctors can screen patients for COVID-19 symptoms and direct them to an appropriate government facility.</p>
		  </div> 
		  <form action="/action_page.php">
			<input type="image" src="like.png" alt="Submit" width="48" height="48"> 
		</form>
		
		<form action="/action_page.php">
			<input type="image" src="share.jpg" alt="Submit" width="48" height="48">
		</form>
		</div>
		
</div>
</div>

<div class="row">
<div class="column">
<img src="images/blog3.jpg" alt="" style="display: inline-block; margin-top:00px;width:100%; height:450px;">
	</div>
<div class="column">
<div class="ex1" style="background:white;padding:20px;width:100%;height:450px;">
			<p style="color:black; font-size:20px;"><strong>HWith its green energy solutions, this auto-ancillary company clocks over Rs 70 Cr turnover today</strong></p> <br>
			 <div class="ex3">
			 <p>The future of the automobile industry lies in sustainable mobility. Manufacturing companies like Bosch and Continental predict that by 2030, the world would be focussed entirely on electric mobility, with research on fuel cells making considerable progress.</p>
		 <p>Gurugram-based auto-ancillary company Green Fuel Energy Solutions, founded by Akshay Kashyap, has been building sustainable kits for the automobile industry since 2006. The company started with making CNG kits for auto manufacturers such as Tata Motors and Ashok Leyland. From 2010 onwards, the idea of building a great business around electric vehicles started gathering steam.
			Green Fuel Energy’s business is primarily focussed on B2B customers for its CNG kits and supplies to the likes of Maruti Suzuki, Tata Motors, and Ashok Leyland. Akshay started the business in 2006 with a capital of Rs 40 lakh. Today, he has built a self-funded, zero-debt, profitable, and cash rich company with a turnover of Rs 76 crore.
			When he first started working in the US after graduating from the Florida Institute of Technology in 2001, Akshay was working on components used in natural gas vehicles. When he returned to India, he realised that there was a huge gap in what the world was using, and what India used for natural gas vehicles. He initially started sourcing international standard components at the Indian 
			value price. The company has expertise in mechanical, mechatronics, and electronics fields, and hence, can handle not just mechanical parts but also focus on the software that runs these products. It also focusses on building high pressure, low pressure, and electronics components. Green Fuel Energy has a commercial engagement with Germany-based auto parts supplier WEH GmbH.</p>
		  </div> 
		  <form action="/action_page.php">
			<input type="image" src="like.png" alt="Submit" width="48" height="48"> 
		</form>
		
		<form action="/action_page.php">
			<input type="image" src="share.jpg" alt="Submit" width="48" height="48">
		</form>
		
		</div>
</div>
</div>
<div class="row">
  <div class="column">
  
  <div class="center">
  <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
  </div>
</div>
</div>
</div>
  
<?php include 'includes/footer.php'; ?> 
</body>
</html>
