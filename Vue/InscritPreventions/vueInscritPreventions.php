<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>

<?php 
//include_once('header1.php'); 
include_once('header2.php');?>

<h2 style="text-align: center;">S'inscrire a notre newsletter action prevention</h2>
<br>
<br>
<form action="index.php?action=ajoutPrevention" method="post">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1" value="Madame">
        <label class="form-check-label" for="inlineRadio1">Madame</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2" value="Monsieur">
        <label class="form-check-label" for="inlineRadio2">Monsieur</label>
    </div>
    <input type="text" style="text-align: center;" width="50%" class="form-control"  name="id" placeholder="id" required>
    <br>
    <input class="form-control" style="text-align: center;"  type="text" name="nom" placeholder="nom" required>
    <br>
    <input type="text" class="form-control" style="text-align: center;"  name="prenom" placeholder="prenom" required>
    <br>
    <input type="text" class="form-control" style="text-align: center;"  name="mail" placeholder="mail" required>
    <br>
    <input type="text" class="form-control" style="text-align: center;"  name="numTelephone" placeholder="numTelephone" required>
    <br>
    <input type="text" class="form-control" style="text-align: center;"  name="adresse" placeholder="adresse" required>
    <br>
    <input type="text" class="form-control" style="text-align: center;"  name="codePostal" placeholder="code Postal" required>
    <br>
    <!-- <input type="date" class="form-control" style="text-align: center;"  name="anneeNaissance" placeholder="anneeNaissance" required> -->
    <select class="form-select" aria-label="Default select example"  style="text-align: center;" name="anneeNaissance">
    <option value="1922">1922</option>
    <option value="1923">1923</option>
    <option value="1924">1924</option>
    <option value="1925">1925</option>
    <option value="1926">1926</option>
    <option value="1927">1927</option>
    <option value="1928">1928</option>
    <option value="1929">1929</option>
    <option value="1930">1930</option>
    <option value="1931">1931</option>
    <option value="1932">1932</option>
    <option value="1933">1933</option>
    <option value="1934">1934</option>
    <option value="1935">1935</option>
    <option value="1936">1936</option>
    <option value="1937">1937</option>
    <option value="1938">1938</option>
    <option value="1939">1939</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950" selected>1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
    <option value="2032">2032</option>
</select>
<br>
<br>
    <input class="btn btn-primary container" style="margin-left: 25%;" type="submit" value="Valider">
    
</form>