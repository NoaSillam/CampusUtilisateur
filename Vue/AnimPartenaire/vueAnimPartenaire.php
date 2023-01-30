<?php include_once('header1.php'); ?>
<br>
<br>
<h1>Pres de chez vous</h1>

<div id="maCarte">
       
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<?php echo"
<script>
    carte = L.map('maCarte').setView([48.852969, 2.349903], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            
            attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
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
                   ";
                        ?>

                    <?php foreach($animPartenaire as $anim):?>
                        <?php $description =str_replace("'", "\'", $anim['descriptif']); ?>
                     <?php echo "

                    
                    marker = L.marker(["; ?><?= $anim['latitude'];?><?php echo ","; ?><?= $anim['longitude']?><?php echo "]).addTo(carte)
                    marker.bindPopup('";?><?= $anim['nom']." , ".$description ?> <?php echo "')
                   
                    // marker.bindPopup(animationPartenaire[1].descriptif)
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

 