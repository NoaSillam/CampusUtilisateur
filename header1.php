<head>
  <style>
    /* Modal styles */
    .modal-Dic {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }
    .modal-content-Dic {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      width: 80%;
      height: 80%;
    }
    .close-button {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close-button:hover,
    .close-button:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
<link rel="stylesheet" href="style.css">
     
 
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  
</head>
<body>
<div class="header">
  <nav class="navbar">
    <img src="image/Logo_delta7.png" alt="Delta7 logo">
    <a href="index.php?action=accueil">Accueil</a>
    <!-- <a href="index.php?action=themeRechercher">Thème Rechercher</a> -->
    <div class="dropdown">
      <a href="#"> Le numérique</a>
      <div class="dropdown-content">
        <a href="index.php?action=videotheque">Toutes nos Videos</a>
        <a href="index.php?action=documentheque">Tous nos Documents</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="#"> Pour s'inscrire</a>
      <div class="dropdown-content">
        <a href="index.php?action=listeNewsletters">Pour s'inscrire à notre Newsletters</a>
        <a href="index.php?action=listeBenevole">Pour devenir bénévole</a>
        <a href="index.php?action=listeDonateur">Pour faire partie de nos donateurs</a>
      </div>
    </div>
    <!-- <a href="index.php?action=actualite">video filtre par actualite</a>
    <a href="index.php?action=calendrier">video filtre par calendrier</a>
    <a href="index.php?action=direct">video du direct</a> -->
    <a href="index.php?action=rechercherAccueil">Rechercher</a>
    <a href="index.php?action=presDeChezVous">Près de chez vous</a>
    <!-- <a href="index.php?action=listeDictionnaire" id="open-modal-Dic">Dictionnaire</a> -->
    <a href="#" id="open-modal-Dic">Dictionnaire</a>
    <a href="index.php?action=BenevoleMssion">Mission</a>
    <!-- <a href="index.php?action=rechercher">RechercherVideo</a> -->
    <!-- <a href="index.php?action=animPartenaire">animPartenaire</a> -->
  





   <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Pour s'inscrire
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?action=listeNewsletters">Pour s'inscrire à notre Newsletters</a></li>
            <li><a class="dropdown-item" href="index.php?action=listeBenevole">Pour devenir bénévole</a></li>
            <li><a class="dropdown-item" href="index.php?action=listeDonateur">Pour faire partie de nos donateurs</a></li>
          </ul>
        </li> -->
      <!--  <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=actualite">video filtre par actualite</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=calendrier">video filtre par calendrier</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php?action=direct">video du direct</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=listeDictionnaire">Dictionnaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=BenevoleMssion">Mission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=rechercher">RechercherVideo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=animPartenaire">animPartenaire</a>
        </li>-->
  </nav>
  </div>
</body>
<!-- <script>
  // Get the modal
  let modal = document.getElementById("modal-Dic");

  // Get the button that opens the modal
  let btn = document.getElementById("open-modal-Dic");

  // When the user clicks the button, open the modal
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script> -->

