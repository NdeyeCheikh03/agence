<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="eligibilité.css">
</head>
<body>
<nav class="menu">
        <h1><a href="accueil.html"><img class="logo" src="img/Capture d'écran 2023-09-20 164241.png" widht=40 height=70px></a></h1>
            <ul>
                
                <li class="noir">
                   <a href="accueil.html">Accueil</a>
                </li>
                <li class="noir">
                    <a href="formations.html">formations</a> 
                </li>
                <li class="noir">
                    <a href="Evenements.html">Evenements</a>
                </li>
                <li class="noir">
                    <a href="eligibilite.html">Espace</a>
                </li>
                <li class="noir">
                    <a href="offres d'emploi">Nos offres</a>
                </li>
            </ul>
        </nav>
       <?php
       $nom=$_POST['nom'];
       $prenom=$_POST['prenom'];
       $anniversaire=$_POST['date_naissance'];
       $adresse=$_POST['adresse'];
       $casier_judiciaire=$_POST['casier_judiciaire'];
    
       try 
{
       $bdd= new PDO ('mysql:host=localhost;dbname=agence', 'root' , '');
        //echo "envoyé";
} catch (PDOException $e) {
    //echo "Erreur !: ". $e->getMessage() . "<br/>" ;
}
$agence_insert=$bdd->prepare("INSERT INTO prison(nom,prenom,anniversaire,adresse,casier_judiciaire) VALUES(?,?,?,?,?)");
$agence_insert->execute([$nom,$prenom,$anniversaire,$adresse,$casier_judiciaire]);

if ($agence_insert->execute([$nom,$prenom,$anniversaire,$adresse,$casier_judiciaire])) 

{
       
        echo "vous êtes éligible";
        echo "<br>";
        echo "<a href='inscription.html'>s'inscrire</a>";
}
else 
{
        echo "VOUS N'ETES PAS ELIGIBLE" ; 
}

?> 
 <footer>
        <div class="footter">
            <div class="container">
                <div class="row">
                    <div class="footter-col">
                        <h4>Association</h4>
                        <ul>
                            <li><a href="#"></a>A propos de nous</li>
                           
        
                        
                    </div>
                    
                    <div class="footter-col">
                        <h4>Contact</h4>
                        <ul>
                            <li><a href="#"></a>07 43 65 22 13</li>
                            <li><a href="#"></a>e-reinsertion@gmail.com</li>
                            <li><a href="#"></a>20 Jardins Boieldieu 92800 <br>
                                Puteaux</li>
                        </ul>
                    </div>
                 
                
                
                
            
                
            </div>
            
        
        
            
            
                    
        
            
        </div>
    </footer>



    
    
    
    
    

</body>
</html>
