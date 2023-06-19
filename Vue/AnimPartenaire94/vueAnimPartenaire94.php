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
include_once('header2.php');?>
<br>
<br>
<h1 style="text-align: center; color: #4fbcca; font-size:65px;" class="fw-bold display-1 mb-6">Près de chez vous dans le Val-de-Marne</h1>
<br>


<!-- <div id="maCarte" class="map-container">     
</div>
<iframe src="index.php?action=prestataire94"  style="width: 40%;  float:right; margin-right: 5%; " height="800" title="Iframe Example" class="description" scrolling="no" > </iframe>
<iframe src="index.php?action=animPartenaire94News"  height="10000" style=" width: 100%;"  title="Iframe Example" scrolling="no" > </iframe> -->
<div class="container">
  <section class="map-section">
    <div id="maCarte" class="map-container"></div>
  </section>
  <section class="content-section">
    <iframe src="index.php?action=prestataire94" style="width: 100%;" height="800" title="Iframe Example" class="description" scrolling="no"></iframe>
  </section>
  <section class="news-section">
    <iframe src="index.php?action=animPartenaire94News" height="900" style="width: 100%;" class="iframeNews" title="Iframe Example" scrolling="no"></iframe>
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
    carte = L.map('maCarte').setView([48.7744893, 2.4543321], 11);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
      // Il est toujours bien de laisser le lien vers la source des données
      attribution: ' données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
        L.polygon([
                [48.817010929642,2.3318980606376],
                [48.816314210034,2.363946550191],
                [48.826078980076,2.3909392530738],
                [48.827615470779,2.406031823401],
                [48.818232447877,2.4384475102742],
                [48.819059770564,2.4626960627524],
                [48.833133318793,2.4675819883673],
                [48.842089485269,2.4634383121686],
                [48.844818443355,2.447699326814],
                [48.841528392473,2.4281301699852],
                [48.835797660955,2.4221386362435],
                [48.834538914673,2.4122456125626],
                [48.849233783552,2.4163411302989],
                [48.852094875028,2.4476549109644],
                [48.861405371284,2.4815382130314],
                [48.860848724102,2.4956483361361],
                [48.844429712931,2.5313232159076],
                [48.8226801571,2.5709791871159],
                [48.8129126037,2.574124871997],
                [48.807437551952,2.5922736733656],
                [48.798135558654,2.5918208872821],
                [48.794974135979,2.5997697108259],
                [48.778627130829,2.5856046173972],
                [48.77140075822,2.5919605754401],
                [48.774401216878,2.6070020497727],
                [48.76102540673,2.6136517425679],
                [48.760480074814,2.5982969429908],
                [48.753730034287,2.6023411143901],
                [48.741487637605,2.5858204453665],
                [48.73180600135,2.5946737376888],
                [48.727242137595,2.5852087623188],
                [48.707221723749,2.5688027048808],
                [48.700368420834,2.5752212918029],
                [48.69201676557,2.5716535034613],
                [48.688326690701,2.5538613239117],
                [48.700126122289,2.5415977449297],
                [48.699783892783,2.5310726121952],
                [48.706797944381,2.5292660759678],
                [48.712797146805,2.5208681543244],
                [48.728940405475,2.5157481028347],
                [48.735213292289,2.5035392718422],
                [48.727641481468,2.4787749913062],
                [48.728713712543,2.4673873361332],
                [48.722660904777,2.4549382750663],
                [48.725433667155,2.4401207414166],
                [48.717993666318,2.414130346149],
                [48.726050022829,2.4110164293164],
                [48.719975201473,2.3867469186816],
                [48.720171411205,2.3707040678761],
                [48.746067457624,2.3693515629708],
                [48.738565068167,2.3546796298175],
                [48.74875804931,2.3207207141635],
                [48.75695290327,2.3102224901101],
                [48.781908297526,2.3258147798433],
                [48.787997409568,2.3186962648686],
                [48.817010929642,2.3318980606376]
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
                            //let donnees = JSON.parse(xmlhttp.responseText)
                            //console.log(donnees);
                             let marker = ''; 
                            //  var myIcon = L.icon({
                            //     iconUrl: 'image/94Departement.png',
                            //     iconSize: [30, 30],
                            //     iconAnchor: [15, 30],
                            // });
                           ";
                                ?>
        
        <?php foreach($animPartenaire as $anim):?>
                        <?php $description ='<br><p>'.str_replace("'", "\'", htmlspecialchars_decode($anim['descriptif'])).'</p>'; ?>
                        <?php $image = '<img width="50%" class="img-top" src="'.$anim['img'].'" />';?>
                        <?php $titre = '<h1 style="font-size: 20px;"><b>'.$anim['nom'].'</b></h1>';?>
                     <?php echo "
                     var myIcon = L.icon({
                        iconUrl: 'image/94Departement1.png',
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
        
        
        