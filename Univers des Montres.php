<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet"href="sty.css">
		<link rel="icon" type="image/jpeg" size="30x30" href="uni.jpg" align="left">
		
		<title>Univers des Montres</title>
	</head>
	<body background="img fond.jpg" >
	
			<header><img class="photo" src="uni.jpg" alt="logo" />
					
			
			<h1>Univers des Montres</h1> 
			<h3> Renforcez votre style ! </h3>
			<nav class="menu">
			<a href="Nos offres.html" style="color:#efdb74e8;">Nos offres</a>
			</nav>
		<h2 align="center">COLLECTION DANIEL WELLINGTON</h2>
				
				<div class ="global" >
				
				<div><img class="m" src="image2.jpeg" alt="Montres" /></div>
			
				<div><img class="m" src="image3.jpeg" alt="Montres" /></div>
		
				<div><img class="m" src="image4.jpeg" alt="Montres" /></div> 
				</div>
				<div class ="global">
				
				<div><img class="m" src="image1.jpeg" alt="Montres" /></div>
				
				<div><img class="m" src="Daniel wellington.jpg" alt="Montres" /></div>
			
				<div><img class="m" src="daniel.jpg" alt="Montres" /></div>
				</div>
				<div class ="global" >
				<div><img class="m" src="n.jpg" alt="Montres" /></div>
				
				<div><img class="m" src="image3.jpeg" alt="Montres" /></div>
				
				<div><img class="m" src="image2.jpeg" alt="Montres" /></div>
				</div>
				
				
		<h2 align="center"> COLLECTION CASIO VINTAGE </h2>	
		
				<div class ="global" align="center-left" >
				
				<div><img class="m" src="Casio Army.jpg" alt="Montres" /></div>
			
				<div><img class="m" src="Casio edifice.jpg" alt="Montres" /></div>
		
				<div><img class="m" src="Casio grisatre.jpg" alt="Montres" /></div>   
				</div>
				<div class ="global" >
				<div><img class="m" src="Casio Noir.jpg" alt="Montres" /></div>
				
				<div><img class="m" src="Casio Tactile.jpg" alt="Montres" /></div>
			
				<div><img class="m" src="Casio.jpg" alt="Montres" /></div>
				</div>
		        <div class ="global" >
				<div><img class="m" src="Casioo.jpg" alt="Montres" /></div>  
				
				<div><img class="m" src="Casiooo.jpg" alt="Montres" /></div>
			
				<div><img class="m" src="Casioooo.jpg" alt="Montres" /></div>
		        </div>
				<div class="pied">
				
				<nav class="info">
				
							<br><strong>Nous Contacter :</strong>
							
							<ul>
				<li> 
				<p><strong style ="text-decoration:underline;"> Pour plus d'informations: </strong>
				<br>78 173 15 16
				<br>77 388 58 15</p>
								
									          
								</a>
											</li>
									<li>
									<a href="https://www.instagram.com/univers_des_montres_" style = "color:#efdb74e8"  >
										<img class="rs" src="instagram.jpg" alt="instagram" style = " width:40px;"> 
										Univers des Montres	
									</a>	
								</li>
							</ul>
				</nav>
				<div class = "wrapper" >
				<div class="icon" href="uni.jpg" align="left" > <i class = "far fa-envelope"></i></div>
				<div class="content">
					<p><head align = "left" >Newsletter</head></p>
					     
				</div>
				<p><form action="Univers des Montres.php" method= "POST">
					<?php
					 $userEmail=" " ; //first we leave this field blank
					if(isset($_POST['S'incrire'])){  //if S'incrire btn clicked
							$userEmail= $POST['Email']; // getting user Email
					if(filter_var($userEmail,FILTER_VALIDATE_EMAIL)){ // validating user entered Email
						$subject = " Merci de vous etre inscrit sur Univers des Montres";
						$message=" Merci pour votre inscrpition nous allons vous transmettre tous les nouveautés"
						$sender="From : Tygajunior95@gmail.com/univers_des_montres_"
						
					}else{
						?>
						<div class =" alert">Email incorrect</div>
						<?php
						}
					}
					?>
						 
					<div class="field">
						<input type="text" name = "Email" placeholder="Adresse Email" required value ="<?php echo $userEmail >" style ="height : 25px;width : 200px;">
					</div>
				<div class = "field btn">
					<input type="submit" value= "S'inscrire " ></p>
				</div>
				</form>
				<div class ="text"> Vos informations ne seront pas prises . </div>
</body>
</html>
