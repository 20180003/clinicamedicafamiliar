<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>CLINICA MEDICA FAMILIAR</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
		<a href="index.html" style="font-size: 30px;">CLINICA MEDICA FAMILIAR</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">


					<ul>
						<li><a href="index.html">INICIO</a></li>
					
						<li class="active"><a href="contact.php">INFORMACIÓN</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Dirección de Clínica:</h2>

                    <p>Pueblo Nuevos Viñas, Santa Rosa, Guatemala</p>
                    <p>Horario de atención: De lunes a Sabado de 9:00am a 12:00pm</p>
                    <p>Doctora: Cindy Solorzano</p>
                    <p>Teléfono para Información: </p>




				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">

					    <form name="contactus" method="post">

					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">INICIO</a></li>
						
						<li><a href="contact.php">INFORMACIÓN</a></li>
					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

