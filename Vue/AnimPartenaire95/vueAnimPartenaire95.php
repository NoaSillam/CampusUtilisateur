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
<h1 style="text-align: center; color: #4fbcca; font-size:65px;" class="fw-bold display-1 mb-6">Près de chez vous dans le Val-d'Oise</h1>
<br>


<!-- <div id="maCarte" class="map-container">     
</div>
<iframe src="index.php?action=prestataire95"  style="width: 40%;  float:right; margin-right: 5%; " height="800" title="Iframe Example" class="description" scrolling="no" > </iframe>
<iframe src="index.php?action=animPartenaire95News"  height="10000" style=" width: 100%;"  title="Iframe Example" scrolling="no" > </iframe> -->


<div class="container">
  <section class="map-section">
    <div id="maCarte" class="map-container"></div>
  </section>
  <section class="content-section">
    <iframe src="index.php?action=prestataire95" style="width: 100%;" height="800" title="Iframe Example" class="description" scrolling="no"></iframe>
  </section>
  <section class="news-section">
    <iframe src="index.php?action=animPartenaire95News" height="900" style="width: 100%;" class="iframeNews" title="Iframe Example" scrolling="no"></iframe>
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

    carte = L.map('maCarte').setView([49.02595, 2.14898], 9);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
      // Il est toujours bien de laisser le lien vers la source des données
      attribution: ' données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
    L.polygon([
       [49.232197221792,1.7043588288241],
       [49.22919730317,1.729662120604],
       [49.221277890399,1.7341091784733],
       [49.210958623685,1.7336823766846],
       [49.20967924589,1.7230394537953],
       [49.203118037941,1.7155761288215],
       [49.195712707137,1.7258249045161],
       [49.194603115202,1.7374357068856],
       [49.180151725276,1.7421415990654],
       [49.174545969477,1.7551705903258],
       [49.184104883007,1.7775554860529],
       [49.179854330047,1.7909791787819],
       [49.18526277584,1.7954740881562],
       [49.176162362964,1.8143979645085],
       [49.179516758866,1.8265758315348],
       [49.171698986367,1.8370818782543],
       [49.169896687357,1.8455433838221],
       [49.171448857663,1.877042152092],
       [49.162636028533,1.8852348791181],
       [49.166040538631,1.894536229716],
       [49.17416772145,1.931476176782],
       [49.170749195544,1.9480171420872],
       [49.173517298241,1.9607171629873],
       [49.18389441504,1.9734431640564],
       [49.176453415327,1.996823915181],
       [49.177609556506,2.0045021739488],
       [49.188671770161,2.0217858750717],
       [49.192136044555,2.0380917348167],
       [49.202860855132,2.066842351201],
       [49.209773929407,2.0808850919985],
       [49.204360444701,2.0915398506152],
       [49.189757147704,2.0968798927064],
       [49.186543761789,2.1133369040576],
       [49.191379169415,2.1327402600127],
       [49.179671393215,2.1645707336419],
       [49.172599185593,2.157743439339],
       [49.166004802028,2.1642743368285],
       [49.173675958457,2.1819527991076],
       [49.174316445929,2.204958905762],
       [49.180685270888,2.2186458815721],
       [49.167035850124,2.2354095182703],
       [49.154378017348,2.2163546658105],
       [49.151869445673,2.2230049777895],
       [49.152881479913,2.2524813607229],
       [49.158297463054,2.2622091200851],
       [49.156306628677,2.2695453788487],
       [49.160277559835,2.2862682227562],
       [49.170710377425,2.2888064839605],
       [49.17583535835,2.2994229533516],
       [49.183887047533,2.3011998615285],
       [49.186404768181,2.3109304401404],
       [49.180859736345,2.3222626753655],
       [49.161815854345,2.3462625342946],
       [49.147343950086,2.3592998527471],
       [49.159173609651,2.370937678429],
       [49.155913004846,2.383003341928],
       [49.1493504084,2.3912847262891],
       [49.151762413963,2.4153544805398],
       [49.14580411257,2.4409039786288],
       [49.133939040206,2.4354018020913],
       [49.135936921998,2.4615068862157],
       [49.126919463544,2.4817070713716],
       [49.122269747269,2.4992321189629],
       [49.118887475459,2.5020961933805],
       [49.106359373937,2.4899295573932],
       [49.099597191318,2.5310585957685],
       [49.119245162084,2.5329944482474],
       [49.122242313794,2.5408087122315],
       [49.118627938332,2.5561550654469],
       [49.113947081753,2.5520149054273],
       [49.098381756011,2.5581755098966],
       [49.091952842127,2.5786858654184],
       [49.080706309944,2.5833038141204],
       [49.079653961607,2.5905283926735],
       [49.059825274601,2.5715472662178],
       [49.054149235821,2.5741880306468],
       [49.052600876728,2.5847224172596],
       [49.046956449876,2.5882844530991],
       [49.043134042541,2.573590385495],
       [49.030110020073,2.5662405882259],
       [49.023448531806,2.5476478248421],
       [49.023809402045,2.5350135962143],
       [49.016609544367,2.5378177402082],
       [49.014720763277,2.5490471496408],
       [49.009816202999,2.5530565519414],
       [49.004873251062,2.5477767707755],
       [49.005223735412,2.5322372193717],
       [48.9894603436,2.5183558101117],
       [48.982255621303,2.514763879623],
       [48.97770409094,2.5004037138928],
       [48.972719183153,2.4960054328348],
       [48.964338344645,2.4673269472292],
       [48.955049018342,2.4594885661379],
       [48.959221267075,2.427263253996],
       [48.956124752826,2.4073892851778],
       [48.962558403369,2.3943172032158],
       [48.970995811739,2.3845399502938],
       [48.974178481395,2.3664463375656],
       [48.965815537603,2.3536647251325],
       [48.959659512979,2.3277204556376],
       [48.96262002844,2.3061147975372],
       [48.966304083093,2.2989606605183],
       [48.958347222268,2.2882536989787],
       [48.950965864655,2.2909694895753],
       [48.946575058002,2.2687285425666],
       [48.927732507513,2.231140371461],
       [48.908679329899,2.2005910092695],
       [48.914390956152,2.2037015884478],
       [48.935252831528,2.1989282039477],
       [48.94051776568,2.2060210022656],
       [48.949738062716,2.205861118488],
       [48.953158232311,2.1735533368231],
       [48.964137829678,2.1782956060357],
       [48.975633867858,2.1732779441741],
       [48.985726242203,2.1549353971038],
       [48.989140165715,2.1269716643348],
       [48.993300321431,2.1207126382788],
       [49.009679391237,2.127121298296],
       [49.018332284915,2.1212540749308],
       [49.008729959034,2.1102443408749],
       [49.014674188012,2.0849108992224],
       [49.002257622875,2.0754526810069],
       [49.008208904929,2.0644261289366],
       [49.003200683684,2.0498584568979],
       [48.998756705331,2.0247730275828],
       [49.00106609648,2.0144337197287],
       [49.021006179043,1.9918871076265],
       [49.019426174588,1.974053010825],
       [49.024533707311,1.9549423612736],
       [49.021772717877,1.9378008717251],
       [49.048019307838,1.9085198609511],
       [49.033529797441,1.8832054260904],
       [49.019542051399,1.8818941990409],
       [49.01823441815,1.8691165460014],
       [49.035204042747,1.8520019385024],
       [49.046346047943,1.8606119952712],
       [49.05747165429,1.8654659990427],
       [49.064654564598,1.8417831494014],
       [49.069332222477,1.8406440398067],
       [49.076360256056,1.8239435408566],
       [49.072232211602,1.7965480580586],
       [49.064555011994,1.7998422239972],
       [49.058508218145,1.7941625055309],
       [49.05658172354,1.7777603243167],
       [49.063324634192,1.7596223758831],
       [49.05410421169,1.7502240292765],
       [49.048223015203,1.7511782974558],
       [49.048684595888,1.7356433379106],
       [49.044974719281,1.7234517354795],
       [49.04903025476,1.7171010524139],
       [49.056327234914,1.6949167927313],
       [49.065962446366,1.6971091015472],
       [49.078154769223,1.6736890350523],
       [49.081089987836,1.6602322098294],
       [49.081251769387,1.6429103427093],
       [49.078286632616,1.6292577222733],
       [49.071448021972,1.6141564760593],
       [49.077894185227,1.608798807603],
       [49.086078404348,1.6233233619235],
       [49.093996514155,1.6175344667245],
       [49.124713530921,1.6470910019222],
       [49.130164014177,1.655781502711],
       [49.145440634177,1.6539225302112],
       [49.153368483471,1.6643792614171],
       [49.178613559023,1.6670168601861],
       [49.202542812736,1.6769552220057],
       [49.21186711807,1.6757423007191],
       [49.229320472612,1.7040643483737],
       [49.232197221792,1.7043588288241]
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
                    //     iconUrl: 'image/95Departement.png',
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
                        iconUrl: 'image/95Departement1.png',
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


