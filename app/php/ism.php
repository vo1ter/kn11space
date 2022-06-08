<p class="title" id="fum">Важливі освітні матеріали</p>
<p>
    Захист України 10 клас - <a href="https://kn11.space/files/2_5462897812930826654.pdf" id="changeColors">https://kn11.space/files/2_5462...</a><br>
    Захист України 11 клас - <a href="https://kn11.space/files/2_5462897812930826969.pdf" id="changeColors">https://kn11.space/files/2_5462...</a><br>
    Граматика (Верба, англ. мова) - <a href="https://kn11.space/files/2_5462897812930826653.pdf" id="changeColors">https://kn11.space/files/2_5462...</a>
</p>
<?php  

if($_SESSION && $_SESSION["PROFILE_STATUS"] == "1") {
    include("dbconn.php");
    $rowset = $con->query("SELECT * FROM `ism`");
    echo '<p class="title" id="fum">Секретик ;)</p>';
    while($row = mysqli_fetch_assoc($rowset)){
        if(strlen($row['link']) > 32) {
            $shortLink = substr($row['link'], 0, 32)."...";
        }
        echo '<p>'.$row['name'].' - <a href="'.$row['link'].'" id="changeColors">'.$shortLink.'</a>';
    }
}

?>