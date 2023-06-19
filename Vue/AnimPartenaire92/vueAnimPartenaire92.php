<style>
    .description{
        position: relative;
    }
    .map-container .leaflet-popup-content-wrapper {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 1px 2px rgba(0,0,0,0.25);
}

.map-container .leaflet-popup-tip {
  background-color: #fff;
}

.map-container .leaflet-popup-content {
  color: #333;
  font-size: 16px;
  line-height: 1.4;
  padding: 10px;
  text-align: center;
}

.map-container .leaflet-popup-content h1 {
  font-size: 20px;
  font-weight: bold;
  margin-top: 0;
}

.map-container .leaflet-popup-content img {
  margin-bottom: 10px;
  max-width: 100%;
}

.map-container .leaflet-popup-content a {
  color: #0078e7;
  text-decoration: none;
}
.map-popup {
  border: none !important;
  position: absolute;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
}
.leaflet-control{
  width: 105%;
text-align: center;
display: flex; 
align-items: center;

}
.leaflet-control-attribution
{
  width: 105%;
  display: flex; 
  align-items: center;
}
span{
  margin: 1%;
}


.container {
  display: flex;
  flex-wrap: wrap;
}

.map-section {
  flex: 0 0 1;
  flex-wrap: nowrap; 
  overflow: hidden;
}
.container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.map-section {
  width: 63%;
}

.content-section {
  width: 37%;
}

.news-section {
  width: 100%;
}

@media (max-width: 1200px) {
  .content-section {
    flex-direction: column;
    gap: 100%;
    width: 100%;
  }
  
  .map-container {
    width: 100%;
    flex-grow: 1;
  }
  .map-section{
    flex-direction: column;
    gap: 100%;
  }
  .description{
    width: 300%;
    margin-top: 70%;
    flex-grow: 1;
  }
  #maCarte
        {
            height: 80%;
            width: 100%;
            position: absolute;
        }
  
 
}
@media (max-width: 991px) {
  .content-section {
    flex-direction: column;
    gap: 100%;
    width: 100%;
  }
  
  .map-container {
    width: 100%;
    flex-grow: 1;
  }
  .map-section{
    flex-direction: column;
    gap: 100%;
  }
  .description{
    width: 300%;
    margin-top: 140%;
    flex-grow: 1;
  }
  #maCarte
        {
            height: 70%;
            width: 100%;
            position: absolute;
        }
}
@media (max-width: 767px) {
  .content-section {
    flex-direction: column;
    gap: 100%;
    width: 100%;
  }
  
  .map-container {
    width: 100%;
    flex-grow: 1;
  }
  .map-section{
    flex-direction: column;
    gap: 100%;
  }
  .description{
    width: 300%;
    margin-top: 105%;
    flex-grow: 1;
  }
  #maCarte
        {
            height: 70%;
            width: 100%;
            position: absolute;
        }
}
@media (max-width: 525px) {
  .content-section {
    flex-direction: column;
    gap: 100%;
    width: 100%;
  }
  
  .map-container {
    width: 100%;
    flex-grow: 1;
  }
  .map-section{
    flex-direction: column;
    gap: 100%;
  }
  .description{
    width: 300%;
    margin-top: 150%;
    flex-grow: 1;
  }
  #maCarte
        {
            height: 70%;
            width: 100%;
            position: absolute;
        }
}
@media (max-width: 450px) {
  .content-section {
    flex-direction: column;
    gap: 100%;
    width: 100%;
  }
  
  .map-container {
    width: 100%;
    flex-grow: 1;
  }
  .map-section{
    flex-direction: column;
    gap: 100%;
  }
  .description{
    width: 300%;
    margin-top: 170%;
    flex-grow: 1;
  }
  #maCarte
        {
            height: 70%;
            width: 100%;
            position: absolute;
        }
}

@media (max-width: 340px) {
  .content-section {
    flex-direction: column;
    gap: 100%;
    width: 100%;
  }
  
  .map-container {
    width: 100%;
    flex-grow: 1;
  }
  .map-section{
    flex-direction: column;
    gap: 100%;
  }
  .description{
    width: 300%;
    margin-top: 200%;
    flex-grow: 1;
  }
  #maCarte
        {
            height: 70%;
            width: 100%;
            position: absolute;
        }
}
</style>
<?php 
//include_once('header1.php'); 
include_once('header2.php');
?>
<br>
<br>
<h1 style="text-align: center; color: #4fbcca; font-size:65px;" class="fw-bold display-1 mb-6">Près de chez vous dans les Hauts-de-Seine</h1>
<br>


<!-- <div id="maCarte" class="map-container">     
</div>
<iframe src="index.php?action=prestataire92"  style="width: 40%;  float:right; margin-right: 5%; " height="800" title="Iframe Example" class="description" scrolling="no" > </iframe>
<iframe src="index.php?action=animPartenaire92News"  height="10000" style=" width: 100%;"  title="Iframe Example" scrolling="no" > </iframe> -->

<div class="container">
  <section class="map-section">
    <div id="maCarte" class="map-container"></div>
  </section>
  <section class="content-section">
    <iframe src="index.php?action=prestataire92" style="width: 100%;" height="800" title="Iframe Example" class="description" scrolling="no"></iframe>
  </section>
  <section class="news-section">
    <iframe src="index.php?action=animPartenaire92News" height="900" style="width: 100%;" class="iframeNews" title="Iframe Example" scrolling="no"></iframe>
  </section>
</div>


<?php
    include 'footer.php';
    ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<?php echo"
<script>
    carte = L.map('maCarte').setView([48.8401859, 2.19863], 11);
   L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
  // Il est toujours bien de laisser le lien vers la source des données
  attribution: ' données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
    minZoom: 1,
    maxZoom: 20
}).addTo(carte);
        L.polygon([
            [48.950965864655,2.2909694895753],
            [48.945361349484,2.3269728001661],
            [48.940679976956,2.3355682105858],
            [48.932347933816,2.3363529889891],
            [48.915937453257,2.3198186224138],
            [48.914015216252,2.3137528853936],
            [48.90045978209,2.3198871747441],
            [48.8894718708,2.2915068524977],
            [48.877968320853,2.2774870298138],
            [48.880387263086,2.2584671711142],
            [48.86906858161,2.2317363597469],
            [48.853516917557,2.2242191058804],
            [48.845554851211,2.2506124417162],
            [48.834809549369,2.2551442384175],
            [48.827920084226,2.2727931901868],
            [48.832489952145,2.2790519306533],
            [48.82714160912,2.2921959226619],
            [48.817010929642,2.3318980606376],
            [48.787997409568,2.3186962648686],
            [48.781908297526,2.3258147798433],
            [48.75695290327,2.3102224901101],
            [48.74875804931,2.3207207141635],
            [48.730280485815,2.3132939902039],
            [48.72948996497,2.3038400608379],
            [48.738637828397,2.2983820323129],
            [48.733011078618,2.2802904545364],
            [48.740090859412,2.274821276941],
            [48.747508493238,2.2853936451259],
            [48.755288275593,2.275033240625],
            [48.761011671227,2.2593929492592],
            [48.761102963541,2.2476645497167],
            [48.766192980349,2.2329743918365],
            [48.776101996393,2.2265538842831],
            [48.785943206962,2.223319655228],
            [48.788138691837,2.2115088216259],
            [48.798400652391,2.2026391702069],
            [48.797237542236,2.1836952927536],
            [48.813808667803,2.1766702709493],
            [48.813043649008,2.1605570086469],
            [48.817021316976,2.1515805126399],
            [48.836022751826,2.1458760215967],
            [48.848852456588,2.1532113486874],
            [48.873338063287,2.1528705339192],
            [48.894417281801,2.1677833601069],
            [48.900349435762,2.1765183808683],
            [48.908679329899,2.2005910092695],
            [48.927732507513,2.231140371461],
            [48.946575058002,2.2687285425666],
            [48.950965864655,2.2909694895753]
         ]).setStyle({ color: '#00008B', strokeOpacity: 1,
            strokeWidth: 3,
            strokeLinecap: 'round',
            strokeLinejoin: 'round',
            fillOpacity: 0,
            fillRule: 'evenodd' }).addTo(carte);


        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = () =>
        {
            if(xmlhttp.readyState == 4)
            {
                if(xmlhttp.status == 200)
                {
                    //console.log(xmlhttp.responseText)
                  
                      try{   
                        let marker = ''; 
                      ";
                           ?>
                        <?php foreach($animPartenaire as $anim):?>

                           <?php $description ='<br><p>'.str_replace("'", "\'", htmlspecialchars_decode($anim['descriptif'])).'</p>'; ?>
                           
                           <?php $image = '<img width="50%" class="img-top" src="'.$anim['img'].'" />';?>
                           <?php $titre = '<h1 style="font-size: 20px;"><b>'.$anim['nom'].'</b></h1>';?>
                        <?php echo "
                        var myIcon = L.icon({
                           iconUrl: 'image/92Departement3.png',
                           iconSize: [30, 30],
                           iconAnchor: [15, 30],
                       });
                       marker = L.marker(["; ?><?= $anim['latitude'];?><?php echo ","; ?><?= $anim['longitude']?><?php echo "], { icon: myIcon }).addTo(carte)
                   //    var vue = marker.bindPopup('";?> <?= $titre.$image.$description ?> <?php echo "', { className: 'map-popup' });
                   //    var popper = Popper.createPopper(vue,document.getElementById('pop-up'), {
                   //     placement: 'right-start',
                   //     });
                   var content3 = '";?> <?= $titre.$image.$description ?> <?php echo "';
                   var myPopup = L.popup({
                    maxWidth: 600, 
                    maxHeight: 600, 
                       })
                       .setContent(content3);
                       marker.bindPopup(myPopup);
                       ";?><?php endforeach;?><?php echo "
                       }
                       catch(err)
                       {
                           console.log('error', err);
                       }
   
                }
                else{
                    console.log(xmlhttp.statusText);
                }
            }
        }
        xmlhttp.open('GET', 'Modele/Modele.php', true);
        xmlhttp.send(null);

</script>";?>


