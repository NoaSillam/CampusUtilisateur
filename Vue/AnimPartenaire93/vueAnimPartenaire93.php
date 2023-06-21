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
<h1 style="text-align: center; color: #4fbcca; font-size:65px;" class="fw-bold display-1 mb-6">Près de chez vous en Seine-Saint-Denis</h1>
<br>


<!-- <div id="maCarte" class="map-container">     
</div>
<iframe src="index.php?action=prestataire93"  style="width: 40%;  float:right; margin-right: 5%; " height="800" title="Iframe Example" class="description" scrolling="no" > </iframe>
<iframe src="index.php?action=animPartenaire93News"  height="10000" style=" width: 100%;"  title="Iframe Example" scrolling="no" > </iframe> -->

<div class="container">
  <section class="map-section">
    <div id="maCarte" class="map-container"></div>
  </section>
  <section class="content-section">
    <iframe src="index.php?action=prestataire93" style="width: 100%;" height="800" title="Iframe Example" class="description" scrolling="no"></iframe>
  </section>
  <section class="news-section">
    <iframe src="index.php?action=animPartenaire93News" height="900" style="width: 100%;" class="iframeNews" title="Iframe Example" scrolling="no"></iframe>
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
    carte = L.map('maCarte').setView([48.9098125, 2.4528635], 11);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
      // Il est toujours bien de laisser le lien vers la source des données
      attribution: ' données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
        L.polygon([
            [49.009816202999,2.5530565519414],
            [49.012397786393,2.5657856607901],
            [48.999841685023,2.5716715859606],
            [48.991593137352,2.5803194899487],
            [48.984984703781,2.5797962900593],
            [48.977732430334,2.5634346213721],
            [48.953758253881,2.5893050070876],
            [48.929356607315,2.6025997962059],
            [48.923361520931,2.5906912334031],
            [48.906830121884,2.5912646006622],
            [48.895410384217,2.5838172328399],
            [48.888883251177,2.5626276286343],
            [48.885336254164,2.5594064582352],
            [48.876463404921,2.5702348571309],
            [48.865942675094,2.568109258403],
            [48.865005030869,2.5873261857605],
            [48.857208607635,2.5831356251086],
            [48.853385173417,2.5738417937528],
            [48.825870860417,2.5925149932073],
            [48.810889137262,2.5964557305467],
            [48.807437551952,2.5922736733656],
            [48.8129126037,2.574124871997],
            [48.8226801571,2.5709791871159],
            [48.844429712931,2.5313232159076],
            [48.860848724102,2.4956483361361],
            [48.861405371284,2.4815382130314],
            [48.852094875028,2.4476549109644],
            [48.849233783552,2.4163411302989],
            [48.872892145992,2.4132702557262],
            [48.887109095072,2.3988455271816],
            [48.898444039523,2.394906293421],
            [48.902007785215,2.3851496429397],
            [48.90045978209,2.3198871747441],
            [48.914015216252,2.3137528853936],
            [48.915937453257,2.3198186224138],
            [48.932347933816,2.3363529889891],
            [48.940679976956,2.3355682105858],
            [48.945361349484,2.3269728001661],
            [48.950965864655,2.2909694895753],
            [48.958347222268,2.2882536989787],
            [48.966304083093,2.2989606605183],
            [48.96262002844,2.3061147975372],
            [48.959659512979,2.3277204556376],
            [48.965815537603,2.3536647251325],
            [48.974178481395,2.3664463375656],
            [48.970995811739,2.3845399502938],
            [48.962558403369,2.3943172032158],
            [48.956124752826,2.4073892851778],
            [48.959221267075,2.427263253996],
            [48.955049018342,2.4594885661379],
            [48.964338344645,2.4673269472292],
            [48.972719183153,2.4960054328348],
            [48.97770409094,2.5004037138928],
            [48.982255621303,2.514763879623],
            [48.9894603436,2.5183558101117],
            [49.005223735412,2.5322372193717],
            [49.004873251062,2.5477767707755],
            [49.009816202999,2.5530565519414]
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
                    //     iconUrl: 'image/93Departement.png',
                    //     iconSize: [30, 30],
                    //     iconAnchor: [15, 30],
                    // });
                   ";
                        ?>

<?php foreach($animPartenaire as $anim):?>
                        <?php $description ='<br><p>'.str_replace("'", "\'", htmlspecialchars_decode($anim['descriptif'])).'</p>'; ?>
                        <?php $image = '<img width="50%" class="img-top" src="'.$anim['img'].'" />';?>
                        <?php $titre = '<h1 style="font-size: 20px;"><b>'.$anim['nom'].'</b></h1>';?>
                        <?php
                          if($anim['lienPdf'] != null)
                          {
                            $pdf = '</br><p> <a href ="'.$anim['lienPdf'].'" target="_blank" >En savoir plus</a></p>';
                          }else{
                            $pdf = "";
                          }
                          ?>
                     <?php echo "
                     var myIcon = L.icon({
                        iconUrl: 'image/93Departement1.png',
                        iconSize: [30, 30],
                        iconAnchor: [15, 30],
                    });
                    marker = L.marker(["; ?><?= $anim['latitude'];?><?php echo ","; ?><?= $anim['longitude']?><?php echo "], { icon: myIcon }).addTo(carte)
                //    var vue = marker.bindPopup('";?> <?= $titre.$image.$description ?> <?php echo "', { className: 'map-popup' });
                //    var popper = Popper.createPopper(vue,document.getElementById('pop-up'), {
                //     placement: 'right-start',
                //     });
                var content3 = '";?> <?= $titre.$image.$description.$pdf ?> <?php echo "';
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


