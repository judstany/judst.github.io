<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formecss.css">
</head>

<body>
	<?php
		include("entete.php");
	?>
	<br><br><br><br>
	<section>

		<form action="" method="POST">
			<fieldset id="mainform" style="margin-top: 1.8%;">
				<legend>CONNEXION</legend>
<?php
                
        #session_start();

            if(isset($_POST['connexion'])){

            $mail = $_POST['email'];
            $passw = $_POST['password'];

            if($mail&& $passw){

                $connect = mysqli_connect('localhost','root','') or die('Error');
                mysqli_select_db($connect,'hangivc');


                $sql = mysqli_query($connect,"SELECT * FROM abonnes WHERE email = '".$mail."' and motdepasse='".$passw."'");
                 $rows = mysqli_num_rows($sql);

                if($rows!= 0){

                while ($donnees = $sql -> fetch_assoc()){


                	$_SESSION['nom'] = $donnees['nom'];
                	$_SESSION['prenom'] = $donnees['prenom'];
                	$_SESSION['email'] = $donnees['email'];
                	$_SESSION['profession'] = $donnees['profession'];
                	$_SESSION['special'] = $donnees['specialite'];
                	$_SESSION['photo'] = $donnees['photo'];
	                #$prenom = $donnees['prenom'];
	                #$mail = $donnees['email'];

	                #echo '<p>'.$_SESSION['nom'].'</p>';
	                #echo '<p>'.$prenom.'</p>';

	                header("Location:profil.php");
                	
                }

                    


                }else{
                   echo "<h4 style='background-color:red; text-align: left;'>"."Probleme d'authentification"."</h4>";
                }

            }   
            else{
                    echo "Remplir toutes les cases";
            }
        }
 ?>


				<fieldset class="biographie">
					<legend>Identifiants</legend>
						<label><br>
							<div style="float: right; margin-right: 150px;">
								<img src="image/logo.png">
							</div><br>
							E-mail :<br>
							<input type='email' name="email" class="a" placeholder="exemple@mail.com" minlength="5" maxlength="25" required=""> <br><br>
						</label>
						<label>
							Mot de Passe :<br>
							<input type="password" name="password" class="a" minlength="" maxlength="" required=""> <br><br>
						</label>
						<input type="submit" name="connexion" value='CONNEXION' class="btn" style="background-color: orange;">
				</fieldset><br>
					

			</fieldset>

		</form>
		
	</section>
</body>
</html>