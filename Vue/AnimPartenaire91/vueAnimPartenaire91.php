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
<h1 style="text-align: center; color: #4fbcca; font-size:65px;" class="fw-bold display-1 mb-6">Près de chez vous en Essonne</h1>
<br>

<!-- 
<div id="maCarte" class="map-container">     
</div>
<iframe src="index.php?action=prestataire91"  style=" width: 40%;  float:right; margin-right: 5%;" height="800" title="Iframe Example" class="description" scrolling="no" > </iframe>
<iframe src="index.php?action=animPartenaire91News"  height="20000" style=" width: 100%;"  title="Iframe Example" scrolling="no" > </iframe> -->



<div class="container">
  <section class="map-section">
    <div id="maCarte" class="map-container"></div>
  </section>
  <section class="content-section">
    <iframe src="index.php?action=prestataire91" style="width: 100%;" height="800" title="Iframe Example" class="description" scrolling="no"></iframe>
  </section>
  <section class="news-section">
    <iframe src="index.php?action=animPartenaire91News" height="900" style="width: 100%;" class="iframeNews" title="Iframe Example" scrolling="no"></iframe>
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
    carte = L.map('maCarte').setView([48.5303402, 2.2392918], 10);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
      // Il est toujours bien de laisser le lien vers la source des données
      attribution: ' données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
        L.polygon([
            [48.776101996393,2.2265538842831],
            [48.766192980349,2.2329743918365],
            [48.761102963541,2.2476645497167],
            [48.761011671227,2.2593929492592],
            [48.755288275593,2.275033240625],
            [48.747508493238,2.2853936451259],
            [48.740090859412,2.274821276941],
            [48.733011078618,2.2802904545364],
            [48.738637828397,2.2983820323129],
            [48.72948996497,2.3038400608379],
            [48.730280485815,2.3132939902039],
            [48.74875804931,2.3207207141635],
            [48.738565068167,2.3546796298175],
            [48.746067457624,2.3693515629708],
            [48.720171411205,2.3707040678761],
            [48.719975201473,2.3867469186816],
            [48.726050022829,2.4110164293164],
            [48.717993666318,2.414130346149],
            [48.725433667155,2.4401207414166],
            [48.722660904777,2.4549382750663],
            [48.728713712543,2.4673873361332],
            [48.727641481468,2.4787749913062],
            [48.735213292289,2.5035392718422],
            [48.728940405475,2.5157481028347],
            [48.712797146805,2.5208681543244],
            [48.706797944381,2.5208681543244],
            [48.699783892783,2.5310726121952],
            [48.700126122289,2.5415977449297],
            [48.688326690701,2.5538613239117],
            [48.69201676557,2.5716535034613],
            [48.690249491839,2.5787732945151],
            [48.679395351685,2.5853737107586],
            [48.672390641128,2.5594038933391],
            [48.67118451862,2.5448201812671],
            [48.657334981367,2.5336146170614],
            [48.651544369478,2.5411152047382],
            [48.635473450172,2.5424110527051],
            [48.633371245833,2.527421313864],
            [48.627093611305,2.5182318429154],
            [48.621417058075,2.5268345542116],
            [48.613103319179,2.5258420647199],
            [48.611406555087,2.5406937585523],
            [48.603850686248,2.5437805754235],
            [48.595495914424,2.5407668344973],
            [48.589171157103,2.5333428613649],
            [48.58325330677,2.5182811370135],
            [48.573224776701,2.5217689565415],
            [48.558215669745,2.5135771377389],
            [48.546173070367,2.5009750387696],
            [48.543116722691,2.5108180265073],
            [48.525234550232,2.4995247172499],
            [48.508140380735,2.5090104505562],
            [48.504445668033,2.5153562670148],
            [48.488378773705,2.51013182468],
            [48.484768503419,2.5018876471506],
            [48.461154873319,2.5059355570193],
            [48.439445122154,2.5047511155697],
            [48.429542119039,2.507657612825],
            [48.427459754888,2.5173761430247],
            [48.411251130404,2.5337277804202],
            [48.404237036735,2.5345790748515],
            [48.404932194382,2.5216189750667],
            [48.392912777413,2.5028806697968],
            [48.395570153778,2.482624887353],
            [48.390477944369,2.4738364829183],
            [48.3845692019,2.4831342533299],
            [48.376449111258,2.4692109816408],
            [48.374939569978,2.4514612247762],
            [48.362012190971,2.4298336175359],
            [48.353601096257,2.4353486081157],
            [48.337245759129,2.4255757157654],
            [48.336276224436,2.3931765378081],
            [48.330904514522,2.3936432426131],
            [48.320717653248,2.4026629385658],
            [48.314755298076,2.3968534009104],
            [48.308674310979,2.3698159145392],
            [48.320230117587,2.3401550939779],
            [48.333053330653,2.3276948002521],
            [48.330803657009,2.312593571187],
            [48.30822244035,2.2954192911964],
            [48.314682212687,2.2668923386489],
            [48.300243238173,2.2535700132149],
            [48.298393903395,2.2451518848313],
            [48.314580917036,2.2494360700816],
            [48.316370632568,2.2380428382036],
            [48.329962148865,2.2463103911083],
            [48.329229232055,2.2295923211201],
            [48.336416239958,2.2239137900476],
            [48.344598562828,2.2022520441218],
            [48.337062877906,2.1982097691131],
            [48.32642865382,2.185025102223],
            [48.313746373001,2.1813553737363],
            [48.312695907539,2.1690253806915],
            [48.315910610694,2.1543896262247],
            [48.304493813388,2.1557084788588],
            [48.298436908006,2.1637483268763],
            [48.299247999325,2.1361199958338],
            [48.29694441258,2.1105944678389],
            [48.307245161467,2.1137168991141],
            [48.307635584746,2.1061680366894],
            [48.293603520661,2.0815050149817],
            [48.295470353999,2.0527138226636],
            [48.289753273514,2.0493770399482],
            [48.288080340461,2.0228447716486],
            [48.284688606385,2.007237571012],
            [48.286584124472,1.9940901445311],
            [48.287202034779,1.9752915866555],
            [48.295582043441,1.9666102219583],
            [48.308685064463,1.959225976988],
            [48.314231718094,1.9694413393402],
            [48.323163720082,1.9744919508382],
            [48.328312555088,1.9823432207772],
            [48.335258065972,1.9749473035511],
            [48.352974683353,1.9733953665973],
            [48.362141015776,1.9868237281778],
            [48.380270715947,1.9763108383484],
            [48.38158815854,1.966381938603],
            [48.399385315775,1.9765710225943],
            [48.404321075988,1.9619541453882],
            [48.405651458209,1.9427703207411],
            [48.404126689728,1.9305611178719],
            [48.412741750651,1.925889401548],
            [48.426390003183,1.9378068315128],
            [48.441083787001,1.9428970138616],
            [48.442264032481,1.9331248410711],
            [48.453403326926,1.9304234130097],
            [48.457599361977,1.9221462784913],
            [48.464861099393,1.9163409812792],
            [48.473854999246,1.9149199821626],
            [48.482145535364,1.9333793220099],
            [48.500865304824,1.9368069560798],
            [48.523736261273,1.9532944656762],
            [48.533067716836,1.9674208443859],
            [48.548106841763,1.9340616493117],
            [48.562926567593,1.9378900456787],
            [48.559466252882,1.9527665939994],
            [48.560481876073,1.9630289819786],
            [48.555550526577,1.9818197824217],
            [48.555387687139,1.999843911355],
            [48.557593755935,2.0175700627197],
            [48.569459551945,2.017226962458],
            [48.590748476784,2.0361244190883],
            [48.603502290966,2.0345020728388],
            [48.608729666136,2.0546695680501],
            [48.617597733568,2.0602471726215],
            [48.622732498273,2.0458818260422],
            [48.632456487516,2.034456506865],
            [48.641907744749,2.0359612070725],
            [48.642090643692,2.0200083770792],
            [48.647690003816,2.0129881452639],
            [48.659775158953,2.0112162167678],
            [48.657259334271,2.0281927750027],
            [48.664236731798,2.0290327276387],
            [48.680219226712,2.0376361003153],
            [48.68756805233,2.0456604451446],
            [48.68585446348,2.0822157938708],
            [48.692525773326,2.0857970428575],
            [48.694030740642,2.0978580418958],
            [48.702748042418,2.0969343192737],
            [48.71437841267,2.1103286614936],
            [48.724231347633,2.111168267855],
            [48.73436321985,2.0979976816391],
            [48.73955835886,2.1118838344903],
            [48.737136538566,2.1349745033773],
            [48.74615342302,2.1384211955586],
            [48.753710336104,2.1506777536849],
            [48.752014252613,2.1605126243942],
            [48.756836536461,2.1680122718546],
            [48.757574558863,2.1820123672797],
            [48.763285114137,2.192317263511],
            [48.775122277406,2.1910712604347],
            [48.769192527247,2.2099186754479],
            [48.776101996393,2.2265538842831]
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
                    //     iconUrl: 'image/91Departement.png',
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
                        iconUrl: 'image/91Departement1.png',
                        iconSize: [30, 30],
                        iconAnchor: [15, 30],
                    });
                    marker = L.marker(["; ?><?= $anim['latitude'];?><?php echo ","; ?><?= $anim['longitude']?><?php echo "], { icon: myIcon }).addTo(carte)
                //    var vue = marker.bindPopup('";?> <?= $titre.$image.$description.$pdf ?> <?php echo "', { className: 'map-popup' });
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


