<head>
  
  <!-- <div class="header">
 <button class="toggle-button">Toggle Navigation</button>  -->
    <!-- <nav class="navbar topnav" id="myTopnav">
     <img src="image/Logo_delta7.png" id="logo" alt="Delta7 logo">
      <a href="index.php" class="<?= (!isset($_GET['action']) || $_GET['action'] == '' || $_GET['action'] == 'accueil') ? 'active' : ''; ?>">Accueil</a>
<a href="#">
<div class="dropdown">
  <a href="#" class="<?= (isset($_GET['action']) && in_array($_GET['action'], ['videotheque', 'documentheque'])) ? 'active' : ''; ?>">Le numérique</a>
  <div class="dropdown-content">
    <a href="index.php?action=videotheque" class="<?= (isset($_GET['action']) && $_GET['action'] == 'videotheque') ? 'active' : ''; ?>">Toutes nos Videos</a>
    <a href="index.php?action=documentheque" class="<?= (isset($_GET['action']) && $_GET['action'] == 'documentheque') ? 'active' : ''; ?>">Tous nos Documents</a>
  </div>
</div>
</a>
<a href="#">
    <div class="dropdown">
      <a href="#" class="<?= (isset($_GET['action']) && in_array($_GET['action'], ['listeNewsletters', 'listeBenevole', 'listeDonateur'])) ? 'active' : ''; ?>"> Pour s'inscrire</a>
      <div class="dropdown-content">
        <a href="index.php?action=listeNewsletters">Pour s'inscrire à notre Newsletters</a>
        <a href="index.php?action=listeBenevole">Pour devenir bénévole</a>
        <a href="index.php?action=listeDonateur">Pour faire partie de nos donateurs</a>
      </div>
    </div>
    </a>
    <a href="index.php?action=rechercherAccueil" class="<?= (isset($_GET['action']) && $_GET['action'] == 'rechercherAccueil') ? 'active' : ''; ?>">Rechercher</a>
    <a href="index.php?action=rechercherAccueilVideo" class="<?= (isset($_GET['action']) && $_GET['action'] == 'rechercherAccueilVideo') ? 'active' : ''; ?>">rechercher 2 eme proposition</a>
    <a href="index.php?action=presDeChezVous" class="<?= (isset($_GET['action']) && $_GET['action'] == 'presDeChezVous') ? 'active' : ''; ?>">Près de chez vous</a>
    <a href="index.php?action=listeDictionnaire#"  id="open-modal-Dic" onclick="openModal(); return false;" class="<?= (isset($_GET['action']) && $_GET['action'] == 'listeDictionnaire') ? 'active' : ''; ?>">Dictionnaire</a>
    <a href="index.php?action=BenevoleMssion" class="<?= (isset($_GET['action']) && $_GET['action'] == 'BenevoleMssion') ? 'active' : ''; ?>">Mission</a>


    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </nav>
 
  </div>
  <?php //include 'Vue/Dictionnaire/vueDictionnaire.php'; ?>
 
  <script>
    document.getElementById("logo").addEventListener("click", function(){
  window.location.href = "https://www.delta7.org/fr";
});
    

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar topnav") {
    x.className += " responsive";
  } else {
    x.className = "navbar topnav";
  }
}
</script>

</body> --> 



<style>

  .custom-navbar {
    background: linear-gradient(to right, #a9045d, #a9045d);
  background-color: transparent;
  color: white;
  font-size: 20px;

}
/* .navbar {
  height: 200% !important;
}

  .navbar {
    display: flex;
  align-items: flex-start;
  background-color: #333;
  color: white;
  padding: 0;
  margin: 0;
  position: relative;
  height: 10%;
   /* Hauteur fixe de la navbar */
/* } */

/* .navbar-brand {
  position: absolute;
  top: 0;
  left: 0;
  margin: 0;
  padding: 0;
  height: 120%; Ajustement de la hauteur du logo
} */

/* .navbar img {
  height: 80%; /* Ajustement de la hauteur du logo */
  /* width: auto; Largeur automatique
  max-width: 100%; Largeur maximale de 100%
} */ 

/* .custom-navbar .navbar-collapse {
  justify-content: flex-end;
}

.custom-navbar .navbar-nav {
  margin-left: auto;
  margin-top: auto;
}
.navbar-toggler {
  position: absolute; */
  /* top: 10px; Ajustement de la position verticale
  right: 10px; Ajustement de la position horizontale
}
.custom-navbar .navbar-nav {
  height: 300%;
}

.custom-navbar .nav-link {
  line-height: 300%;
} */

  /* .navbar{
    height: 100%;
  } */
  /* @media (max-width: 1100px) {
    .custom-navbar .navbar-nav {
  height: 300%;
}
.navbar img { */
  /* height: 15%; Ajustement de la hauteur du logo
  width: auto; Largeur automatique
  max-width: 90%; Largeur maximale de 100%
}
.custom-navbar .navbar-nav {
  height: 600%;
}

.custom-navbar .nav-link {
  line-height: 600%;
} */

/* .navbar {
    display: flex;
  align-items: flex-start;
  background-color: #333;
  color: white;
  padding: 0;
  margin: 0;
  position: relative; */
  
   /* Hauteur fixe de la navbar */
/* } */
/* .navbar {
    height: 20vh !important;
    align-items: center !important;
  } */
  /* .navbar-collapse {
    justify-content: center !important;
    position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
  } */

/* .custom-navbar .nav-link {
  line-height: 300%;
}
.navbar {
    display: flex;
    align-items: flex-start;
    background-color: #333;
    color: white;
    padding: 0;
    margin: 0;
    position: relative; */
     /* Hauteur en pourcentage */
  /* }
  .custom-navbar .navbar {
    height: 600%;  */
    /* Hauteur de la navbar en mode responsive */
  /* }

}  */
.d-inline-block{
  left: 0;
  top: 0;
  margin-left: -10%;
  margin-top: -8%;
}


</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<nav class="navbar navbar-dark navbar-expand-lg bg-transparent custom-navbar" >
  <div class="container-fluid">
    <a class="navbar-brand ms-0" href="https://www.delta7.org/fr" target="_blank">
      <img src="image/logoDelta7Site.png" id="logo" alt="Delta7 logo" width="255" height="80" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler show" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item mx-2">
        <a href="index.php" class="nav-link <?= (!isset($_GET['action']) || $_GET['action'] == '' || $_GET['action'] == 'accueil') ? 'active' : ''; ?>">Accueil</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle <?= (isset($_GET['action']) && in_array($_GET['action'], ['videotheque', 'documentheque', 'rechercherAccueil'])) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Nos ressources</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?action=videotheque">Nos vidéos</a></li>
            <li><a class="dropdown-item" href="index.php?action=documentheque">Nos documents</a></li>
            <li><a class="dropdown-item" href="index.php?action=themeRechercher">Recherche par thème</a></li>
            <li><a class="dropdown-item" href="index.php?action=rechercherAccueil">Rechercher</a></li>

          </ul>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'presDeChezVous') ? 'active' : ''; ?>" href="index.php?action=presDeChezVous">Près de chez vous</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle <?= (isset($_GET['action']) && in_array($_GET['action'], ['listeNewsletters', 'listeBenevole', 'listeDonateur'])) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Pour aller plus loin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?action=listeNewsletters"> S'inscrire à notre newsletter</a></li>
            <li><a class="dropdown-item" href="index.php?action=listeBenevole">Devenir bénévole</a></li>
            <li><a class="dropdown-item" href="index.php?action=listeDonateur">Nous soutenir</a></li>
            
          </ul>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'BenevoleMssion') ? 'active' : ''; ?>" href="index.php?action=BenevoleMssion">Découvrir nos missions de bénévolat </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'listeDictionnaire') ? 'active' : ''; ?>" id="open-modal-Dic" onclick="openModal(); return false;" href="index.php?action=listeDictionnaire">Dictionnaire</a>
        </li>
      
      
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
      </ul>
     
    </div>
  </div>
</nav>
 <?php include 'Vue/Dictionnaire/vueDictionnaire.php'; ?> 
 
 <script>
function myFunction() {
 var x = document.getElementById("myTopnav");
 if (x.className === "navbar topnav") {
   x.className += " responsive";
 } else {
   x.className = "navbar topnav";
 }
}
</script>

