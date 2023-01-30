<style>
    [aria-disabled="true"] {
  opacity: 0.5;
  pointer-events: none;
}
.video-responsive { 
overflow:hidden; 
padding-bottom:56.25%; 
position:relative; 
height:0;
}

.video-responsive iframe {
left:0; 
top:0; 
height:100%;
width:100%;
position:absolute;
}
#titreCal{
    width: 500px;
    height: 70px;
    text-align: center;
}
</style>

<?php

$day = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
$month = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");?>

<h1> Prochainement...</h1>

<table class="table table-borderless">
    <tbody>
     <tr> 
        
    <?php
    foreach($cals as $cal):
        ?>
<td> <div id="titreCal">
   

<h5> <?= $cal['libelle'] ?></h5></div></br> <iframe width="250" height="220" src=" <?= $cal['lien']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" aria-disabled="true" allowfullscreen></iframe> 
    </br>
<?php echo $day[date("w", strtotime($cal['dateParution']))] . " " . date("d", strtotime($cal['dateParution'])) . " " . $month[date("n", strtotime($cal['dateParution']))-1] . " " . date("Y", strtotime($cal['dateParution'])) . ", à " . date("H:i:s", strtotime($cal['dateParution'])); ?> </td>

<?php
//  setlocale(LC_TIME, 'fr_FR');

// public static function dateToFrench($datebdd, $format) 
//     {
//     $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
//     $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
//     $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
//     $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
//     return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($datebdd) ) ) );
//     }
// date_default_timezone_set('Europe/Paris'); $datebdd = $cal['dateParution'];  $date = ucfirst(strftime('%A, le %d %B %Y', strtotime($datebdd))); $date = utf8_encode(ucfirst(strftime('%A, le %d %B %Y', strtotime($datebdd)))); 
// echo dateToFrench($datebdd,'l j F Y');
// date_default_timezone_set('UTC');
// echo date($cal['dateParution']);



// import time

// current_time = time.localtime()
// formatted_time = time.strftime("%A %d %B %Y, %H:%M:%S", current_time)
// print(formatted_time)
// setlocale(LC_TIME, 'fr_FR.utf8','fra');
// $formatted_time = strftime("%A %d %B %Y, %H:%M:%S");
// echo $formatted_time;

// $date = new DateTime();
// $formatted_time = $date->format('D j M Y, H:i:s.');
// echo $formatted_time.'</br>';

// setlocale(LC_TIME, 'fr_FR.UTF-8');
//     $dateA = $cal['dateParution'];
//     $date = strftime("%A %d %B %Y, %H:%M:%S.", strtotime($dateA) );

// setlocale(LC_TIME, 'fr_FR.utf8');
// echo strftime("%A %d %B %Y, %H:%M:%S.").'</br>';

// $day = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
// $month = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");

// echo $day[date("w")] . " " . date("d") . " " . $month[date("n")-1] . " " . date("Y") . ", " . date("H:i:s");

// $day = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
// $month = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");



    // $dateA = $cal['dateParution'];
    // $date = date("Y-m-d H:i:s", strtotime($dateA));

    // $dateBdd = str_replace("Monday", "Lundi", $date);
    // $dateBdd = str_replace("Tuesday", "Mardi", $date);
    // $dateBdd = str_replace("Wednesday", "Mercredi", $date);
    // // $dateBdd = str_replace("Thursday", "Jeudi", $date);
    // // $dateBdd = str_replace("Friday", "Vendredi", $date);
    // // $dateBdd = str_replace("Saturday", "Samedi", $date);
    // $dateBdd = str_replace("Sunday", "Dimanche", $date);
    // echo $dateBdd;

// echo date("d/m/Y");
?>






  <!--<tr>
    <td>-->
 <!-- <td width="500" heght="400"> <h2> <?= $cal['libelle'] ?></h2></td>-->
     
  <!--  </tr>-->
   <!-- <tr>
    <td width="500" heght="400">  <iframe width="250" height="220" src=" <?= $cal['lien']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" aria-disabled="true" allowfullscreen></iframe>  </td>
    </tr>-->


    <!-- <tr>
      <th scope="row">1</th>
      <td><h2>azza</h2></td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>  -->

        <?php endforeach;?>
        </td>
     </tr>
    </tbody>
</table>


