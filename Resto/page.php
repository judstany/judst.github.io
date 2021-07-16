<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="form.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>SAF Job</title>
<body>
<header>
    <a href="#" class="logo"><span>SAF</span> Job</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Nos Domaines</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
        <li><a href="#temoignage" onclick="toggleMenu();">Temoignage</a></li>
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
        <a href="page.html" class="btn-reserve"onclick="toggleMenu();">Inscription</a>

    </ul>
</header>
<section class="banniere" id="banniere">
        <section class="contact" id="contact">
            <div class="titre noir">
            </div>
            <div class="contactform">
                <h2>Inscription</h2>

                    <form action="Connect.php" method="post">
                        <p>
                    <tr>
                        <td>Noms</td>
                        <td><input type="text" name="Noms"></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
        
                        <td>Prenoms</td>
                        <td><input type="text" name="Prenoms"></td>
                    </tr>
                    </p>
                <p>
                    <tr>
                        <td>Entrer votre adresse</td>
                        <td><input type="email"></td>
                    </tr>
                </p>
                <p>
                    <tr>
                        <td>Entrer un mot de passe</td>
                        <td><input type="password" name="Pass"></td>
                    </tr>
                </p>
                <p>
                    <tr>
                        <td>Confirmer le mot de passe</td>
                        <td><input type="password" name="Pass"></td>
                    </tr>
                </p>
                <p>
                    <tr>
                        <td>Sexe</td>
                        <td>
                           Homme:<input type="radio" name="Sexe" value="M">
                           Femme:<input type="radio" name="Sexe" value="F">
                        </td>
                    </tr>
                </p>
                <p>
                    <tr>
                        <td>Quel est votre metier?</td>
                        <td>
                            <select name="Metier">
                                <option value="Aucun">Aucun</option>
                                <option value="Client">Client</option>
                                <option value="Architecte">Architecte</option>
                                <option value="Electricien">Electricien</option>
                                <option value="Macon">Macon</option>
                                <option value="Peintre">Peintre</option>
                                <option value="Plombier">Plombier</option>
                                <option value="Cordonnier">Cordonnier</option>
                                <option value="Menuisier">Menuisier</option> 
                            </select>
                        </td>
                    </tr>
                </p>
                <p>
                    <tr>
                        <td>Commentaires</td>
                        <textarea>taper ici votre commentaire</textarea>
                        <td colspan="2">
                            <input type="submit" name="S'inscrire">
                        </td>
                    </tr>
                </p>
                <div class="inputboite">

            </div>
        </section>
        <div class="contenu">
        </div>
</section>




 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
          <footer>
            <h1>Nos services</h1>

            <div class="services">
                <div class="service">
                  <h3>Tout travaux à bas prix</h3>
                  <p>refcircryfe gvyrgc zgc zgcygy vzjzgctfe ctzgy zg vvpfyvg zfgcyzgzcgf eu zhcgy gczfd cdycgzcv tzvgtc</p>
                </div>
                <div class="service">
                  <h3>Paiement en ligne</h3>
                  <p>refcircryfe gvyrgc zgc zgcygy vzjzgctfe ctzgy zg vvpfyvg zfgcyzgzcgf eu zhcgy gczfd cdycgzcv tzvgtc</p>
                </div>
                <div class="service">
                <h3>bénéficierez d'un bonus</h3>
                <p>refcircryfe gvyrgc zgc zgcygy vzjzgctfe ctzgy zg vvpfyvg zfgcyzgzcgf eu zhcgy gczfd cdycgzcv tzvgtc</p>
                </div>
            </div>
            <p id="contacts">Contacts : +237 653 35 35 52 / +242 875 41 57         <div class="copyright">
                <p>&copy; 2021 <a href="#">Jud-Stany</a> Tous droits reservé</p>
            </div></p>
        </footer>

</body>
</html>