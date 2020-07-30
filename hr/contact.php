<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Konoba Kolona | Cavtat</title>

    <meta name="description" content="Restaurant, Cavtat, Seafood">
    <meta name="author" content="Dejan Lukic">
    <meta name="keywords" content="Restaurant, Cavtat, Fish, Food">
    <meta name="robots" content="index, follow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" href="../css/normalize.css">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/ccf2869940.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
	<?php include('../templates/header_hr.php'); ?>

	<div class="container">
		<div class="contwrap">
			<div class="contcontact">
				<div id="reservation">				  			
					<div class="reservation">
						<div class="h2"><h2>Rezervacije</h2></div>   					
							<h4 class="sent-notification"></h4>							
						<form  class="form-class" id="myForm" >			
							<div class="form">
								<div class="input">
									<input type="text"  class="formcontrol" id="name"  placeholder="Vaše ime" required>
								</div>
							</div>
							<div class="form">
								<div class="input">
									<input type="email"  class="formcontrol" id="email"  placeholder="Vaša email adresa" required>
								</div>
							</div>
							<div class="form">
								<div class="input">
									<input type="text"  class="formcontrol" id="dateandtime"  placeholder="Datum i vreme" required>
								</div>
							</div>
							<div class="form">
								<div class="input">
									<textarea id="message" class="formcontrol"  rows="6" maxlength="3000" placeholder="Vaša poruka" required></textarea>
								</div>
							</div>
							<div class="form">
								<button type="button" onclick="sendEmail()" value="Send an Email" class="btn">Pošalji poruku</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="contcontact">
				<div class="map">					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2937.7838501240494!2d18.21708851564605!3d42.58111012910536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134c0d9966308f19%3A0x10d324fa99d10520!2sKonoba%20Kolona!5e0!3m2!1sen!2sua!4v1592667755829!5m2!1sen!2sua"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>				
				</div>			
			</div>
			<div class="contcontact">
				<div id="reservation">
					<div class="adress">
						<i class="fas fa-directions"></i><p>Put Tihe 2, 20210 Cavtat</p>
						<i class="fas fa-phone"></i><a href="tel:+38520478787">&nbsp;+385 20 478 787</a>
						<i class="far fa-envelope"></i><a href="mailto:konobakolona@gmail.com">konobakolona@gmail.com</a>
						<i class="fab fa-instagram"></i><a href="https://instagram.com/kolona_cavtat?igshid=18s8z2tie8a5l">Instagram</a>
						<i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/konobaKolona">Facebook</a>
					</div>
				</div>
			</div>
		</div>

		<?php include('../templates/footer.php'); ?>
	</div>
	
	<script src="../script/main.js"></script>
	<script src="../script/validation.js"></script>
</body>
</html>