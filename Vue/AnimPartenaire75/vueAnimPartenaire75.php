<style>
    .description{
        position: relative;
    }
    /* .leaflet-popup-content-wrapper{
        background-color: black;
        color: white;
        /* float: left; */
    /* } 
    .leaflet-popup-pane{
        float: left;
    }
    .leaflet-zoom-animated{
        float: left; 
    }
    .leaflet-popup-tip
    {
        background-color: black;
    }
    .leaflet-zoom-animated{
     float:left;
    } 
    .leaflet-popup{
        float:left;
    } 
    .leaflet-popup-pane{
        float: left;
    }
    .leaflet-pane{
        float: left;
    }
    .leaflet-popup {
    left: 100%;
    right: auto;
    /* right: 100% !important; */
    /* margin-right: 100%; */
  /* }
    .leaflet-popup-content-wrapper {
  height: auto !important;
  width: auto !important;
  max-height: calc(100vh - 82px) !important;
  max-width: calc(100vw - 82px) !important;
  overflow-y: auto;
  overflow-x: hidden;
  margin-left: 0 !important;
  margin-right: 0 !important;
}
.leaflet-popup-tip-container {
  display: none !important;
}
.leaflet-popup-content {
  margin: 0 !important;
  padding: 0 !important;
}
.leaflet-popup-container {
        float: left;
    }
    .leaflet-pane{
        float: left;
    }
    .leaflet-popup-pane{
        float: left;
    } */ 
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
 include_once('header2.php'); ?>
<br>
<br>
<h1 style="text-align: center; color: #4fbcca; font-size:65px;" class="fw-bold display-1 mb-6">Près de chez vous à Paris</h1>
<br>

<!-- <h1 style="font-size: 50px;"><b>aaaaazertyui</b></h1> -->
<!-- <div id="maCarte" class="map-container">     
</div>
<iframe src="index.php?action=prestataire75"  style="width: 40%;  float:right; margin-right: 5%;" height="800" title="Iframe Example" class="description" scrolling="no" > </iframe>
<iframe src="index.php?action=animPartenaire75News"  height="10000" style=" width: 100%;"   title="Iframe Example" scrolling="no" > </iframe> -->

<div class="container">
  <section class="map-section">
    <div id="maCarte" class="map-container"></div>
  </section>
  <section class="content-section">
    <iframe src="index.php?action=prestataire75" style="width: 100%;" height="800" title="Iframe Example" class="description" scrolling="no"></iframe>
  </section>
  <section class="news-section">
    <iframe src="index.php?action=animPartenaire75News" height="900" style="width: 100%;" class="iframeNews" title="Iframe Example" scrolling="no"></iframe>
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
var iconBase = 'http://localhost:8888/testCampusMvcSeniorBddMissionCopieMapDesign/image/';
    carte = L.map('maCarte').setView([48.866667, 2.333333], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
      // Il est toujours bien de laisser le lien vers la source des données
      attribution: ' données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
        L.polygon([
            [48.90045978209,2.3198871747441],
            [48.902007785215,2.3851496429397],
            [48.898444039523,2.394906293421],
            [48.887109095072,2.3988455271816],
            [48.872892145992,2.4132702557262],
            [48.849233783552,2.4163411302989],
            [48.834538914673,2.4122456125626],
            [48.835797660955,2.4221386362435],
            [48.841528392473,2.4281301699852],
            [48.844818443355,2.447699326814],
            [48.842089485269,2.4634383121686],
            [48.833133318793,2.4675819883673],
            [48.819059770564,2.4626960627524],
            [48.818232447877,2.4384475102742],
            [48.827615470779,2.406031823401],
            [48.826078980076,2.3909392530738],
            [48.816314210034,2.363946550191],
            [48.817010929642,2.3318980606376],
            [48.82714160912,2.2921959226619],
            [48.832489952145,2.2790519306533],
            [48.827920084226,2.2727931901868],
            [48.834809549369,2.2551442384175],
            [48.845554851211,2.2506124417162],
            [48.853516917557,2.2242191058804],
            [48.86906858161,2.2317363597469],
            [48.880387263086,2.2584671711142],
            [48.877968320853,2.2774870298138],
            [48.8894718708,2.2915068524977],
            [48.90045978209,2.3198871747441]
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
                        iconUrl: 'image/75Departement2.png',
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