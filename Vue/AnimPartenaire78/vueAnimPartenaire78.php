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
<h1 style="text-align: center; color: #4fbcca; font-size:65px;" class="fw-bold display-1 mb-6">Près de chez vous dans les Yvelines</h1>
<br>


<!-- <div id="maCarte" class="map-container">     
</div>
<iframe src="index.php?action=prestataire78"  style=" width: 40%;  float:right; margin-right: 5%; " height="800" title="Iframe Example" class="description" scrolling="no" > </iframe>
<iframe src="index.php?action=animPartenaire78News"  height="10000" style=" width: 100%;"  title="Iframe Example" scrolling="no" > </iframe> -->

<div class="container">
  <section class="map-section">
    <div id="maCarte" class="map-container"></div>
  </section>
  <section class="content-section">
    <iframe src="index.php?action=prestataire78" style="width: 100%;" height="800" title="Iframe Example" class="description" scrolling="no"></iframe>
  </section>
  <section class="news-section">
    <iframe src="index.php?action=animPartenaire78News" height="900" style="width: 100%;" class="iframeNews" title="Iframe Example" scrolling="no"></iframe>
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
    carte = L.map('maCarte').setView([48.7620373, 1.8871376], 10);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
      // Il est toujours bien de laisser le lien vers la source des données
      attribution: ' données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
        L.polygon([
            [48.908679329899,2.2005910092695],
            [48.900349435762,2.1765183808683],
            [48.894417281801,2.1677833601069],
            [48.873338063287,2.1528705339192],
            [48.848852456588,2.1532113486874],
            [48.836022751826,2.1458760215967],
            [48.817021316976,2.1515805126399],
            [48.813043649008,2.1605570086469],
            [48.813808667803,2.1766702709493],
            [48.797237542236,2.1836952927536],
            [48.798400652391,2.2026391702069],
            [48.788138691837,2.2115088216259],
            [48.785943206962,2.223319655228],
            [48.776101996393,2.2265538842831],
            [48.769192527247,2.2099186754479],
            [48.775122277406,2.1910712604347],
            [48.763285114137,2.192317263511],
            [48.757574558863,2.1820123672797],
            [48.756836536461,2.1680122718546],
            [48.752014252613,2.1605126243942],
            [48.753710336104,2.1506777536849],
            [48.74615342302,2.1384211955586],
            [48.737136538566,2.1349745033773],
            [48.73955835886,2.1118838344903],
            [48.73436321985,2.0979976816391],
            [48.724231347633,2.111168267855],
            [48.71437841267,2.1103286614936],
            [48.702748042418,2.0969343192737],
            [48.694030740642,2.0978580418958],
            [48.692525773326,2.0857970428575],
            [48.68585446348,2.0822157938708],
            [48.68756805233,2.0456604451446],
            [48.680219226712,2.0376361003153],
            [48.664236731798,2.0290327276387],
            [48.657259334271,2.0281927750027],
            [48.659775158953,2.0112162167678],
            [48.647690003816,2.0129881452639],
            [48.642090643692,2.0200083770792],
            [48.641907744749,2.0359612070725],
            [48.632456487516,2.034456506865],
            [48.622732498273,2.0458818260422],
            [48.617597733568,2.0602471726215],
            [48.608729666136,2.0546695680501],
            [48.603502290966,2.0345020728388],
            [48.590748476784,2.0361244190883],
            [48.569459551945,2.017226962458],
            [48.557593755935,2.0175700627197],
            [48.555387687139,1.999843911355],
            [48.555550526577,1.9818197824217],
            [48.560481876073,1.9630289819786],
            [48.559466252882,1.9527665939994],
            [48.562926567593,1.9378900456787],
            [48.548106841763,1.9340616493117],
            [48.533067716836,1.9674208443859],
            [48.523736261273,1.9532944656762],
            [48.500865304824,1.9368069560798],
            [48.482145535364,1.9333793220099],
            [48.473854999246,1.9149199821626],
            [48.464861099393,1.9163409812792],
            [48.457599361977,1.9221462784913],
            [48.447750046159,1.9207376717625],
            [48.445672344539,1.9065549813045],
            [48.440146719021,1.9064076592587],
            [48.440613561663,1.8774887068591],
            [48.449360706547,1.8448630603718],
            [48.466477806902,1.8363839553347],
            [48.466086215218,1.8014512893542],
            [48.484187938277,1.7963309289573],
            [48.489936911612,1.7857092863217],
            [48.497377315443,1.7906352036641],
            [48.508131705459,1.7786170432038],
            [48.527702827198,1.7757543018107],
            [48.553746336139,1.7872423006556],
            [48.559405546059,1.7674104287362],
            [48.569374568412,1.765322855183],
            [48.576137031624,1.7458629248393],
            [48.572280930629,1.7368302606076],
            [48.578026100992,1.7092486767776],
            [48.584999462088,1.701983609829],
            [48.606851120102,1.7178604312421],
            [48.614392276576,1.7148984609516],
            [48.611536250362,1.689422105099],
            [48.618488989615,1.6793591385148],
            [48.613704063337,1.6662229993646],
            [48.622053121145,1.656339110342],
            [48.627645882726,1.6582325680054],
            [48.63227092599,1.6495606586096],
            [48.638125076138,1.6515719070139],
            [48.643389970225,1.64099001993],
            [48.651291198129,1.6431906740267],
            [48.648875085504,1.6298476379809],
            [48.652789464959,1.6156160327829],
            [48.663765432374,1.6024917313048],
            [48.678762670696,1.6058633277913],
            [48.689473861848,1.611774872468],
            [48.696368116243,1.5823151457709],
            [48.701811808781,1.5795403954022],
            [48.709310708948,1.5948810579854],
            [48.712468154974,1.5895382120501],
            [48.735942039093,1.617804540369],
            [48.748091646614,1.6264035004424],
            [48.760486506237,1.6026875153092],
            [48.763296867942,1.5849045861802],
            [48.77360593191,1.5875973267999],
            [48.777559499888,1.5803992974877],
            [48.790504096814,1.5756742997058],
            [48.807168828475,1.5834240899801],
            [48.814866973865,1.5912058811372],
            [48.832130726577,1.5837280523171],
            [48.834218536506,1.5941817842602],
            [48.839707334891,1.5951919881928],
            [48.844358116549,1.5772727483959],
            [48.854999853184,1.5815974879282],
            [48.860864409827,1.5780393102494],
            [48.866183647932,1.5666395741734],
            [48.865075717505,1.5552126063723],
            [48.872431616391,1.5462328761118],
            [48.882055273516,1.5595079054893],
            [48.891575743208,1.5572530066459],
            [48.906685854091,1.5385235335514],
            [48.91547990669,1.5417973746939],
            [48.921794692396,1.5386177797921],
            [48.924752145617,1.5241021875366],
            [48.922585369837,1.5128954188837],
            [48.936627464834,1.5090139983632],
            [48.941051842112,1.5015266013113],
            [48.952678048634,1.5010590902862],
            [48.969344788938,1.4966058957223],
            [48.976406187821,1.5155485568584],
            [48.98376724437,1.5079088220123],
            [48.979551284823,1.497416022081],
            [48.978791319268,1.4770931932159],
            [48.975306435494,1.4706099672547],
            [48.986433838647,1.4609202371105],
            [48.998884682872,1.4787512905862],
            [49.018490972378,1.4721822976397],
            [49.026294572016,1.4577570076778],
            [49.03483279821,1.4579533584639],
            [49.04518889808,1.4474286969633],
            [49.053509472828,1.4472851104304],
            [49.062739598254,1.4608012364168],
            [49.0515451317,1.4848766880401],
            [49.059098256736,1.5032944474047],
            [49.074136193201,1.5116006058281],
            [49.068546693163,1.5217716034178],
            [49.072557881924,1.5494725491086],
            [49.069620586462,1.5570743762242],
            [49.078437534581,1.5747375500157],
            [49.08303659502,1.6044866350314],
            [49.077894185227,1.608798807603],
            [49.071448021972,1.6141564760593],
            [49.078286632616,1.6292577222733],
            [49.081251769387,1.6429103427093],
            [49.081089987836,1.6602322098294],
            [49.078154769223,1.6736890350523],
            [49.065962446366,1.6971091015472],
            [49.056327234914,1.6949167927313],
            [49.04903025476,1.7171010524139],
            [49.044974719281,1.7234517354795],
            [49.048684595888,1.7356433379106],
            [49.048223015203,1.7511782974558],
            [49.05410421169,1.7502240292765],
            [49.063324634192,1.7596223758831],
            [49.05658172354,1.7777603243167],
            [49.058508218145,1.7941625055309],
            [49.064555011994,1.7998422239972],
            [49.072232211602,1.7965480580586],
            [49.076360256056,1.8239435408566],
            [49.069332222477,1.8406440398067],
            [49.064654564598,1.8417831494014],
            [49.05747165429,1.8654659990427],
            [49.046346047943,1.8606119952712],
            [49.035204042747,1.8520019385024],
            [49.01823441815,1.8691165460014],
            [49.019542051399,1.8818941990409],
            [49.033529797441,1.8832054260904],
            [49.048019307838,1.9085198609511],
            [49.021772717877,1.9378008717251],
            [49.024533707311,1.9549423612736],
            [49.019426174588,1.974053010825],
            [49.021006179043,1.9918871076265],
            [49.00106609648,2.0144337197287],
            [48.998756705331,2.0247730275828],
            [49.003200683684,2.0498584568979],
            [49.008208904929,2.0644261289366],
            [49.002257622875,2.0754526810069],
            [49.014674188012,2.0849108992224],
            [49.008729959034,2.1102443408749],
            [49.018332284915,2.1212540749308],
            [49.009679391237,2.127121298296],
            [48.993300321431,2.1207126382788],
            [48.989140165715,2.1269716643348],
            [48.985726242203,2.1549353971038],
            [48.975633867858,2.1732779441741],
            [48.964137829678,2.1782956060357],
            [48.953158232311,2.1735533368231],
            [48.949738062716,2.205861118488],
            [48.94051776568,2.2060210022656],
            [48.935252831528,2.1989282039477],
            [48.914390956152,2.2037015884478],
            [48.908679329899,2.2005910092695]
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
                    //     iconUrl: 'image/78Departement1.png',
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
                        iconUrl: 'image/78Departement1.png',
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


