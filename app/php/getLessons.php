<?php

// Математика (допи) ел. рівень<br><hr>Математика (допи) дост. рівень

include("dbconn.php");
$day = $_GET['day'];
$days = [
    "monday",
    "tuesday",
    "wednesday",
    "thursday",
    "friday"
];
$uaDays = [
    "понеділок",
    "вівторок",
    "середа",
    "четвер",
    "п'ятниця"
];

if(array_search($day, $days) >= 0) {
    echo '<p class="title" id="'.ucfirst($day).'">'.mb_convert_case($uaDays[array_search($day, $days)], MB_CASE_TITLE, "UTF-8").'';
    echo array_search("test", $uaDays);
    echo '</p>
    <table>
        <thead>
            <tr>
                <th class="we">#</th> 
                <th class="wr">Предмет</th>
                <th class="we">Кабінет</th>
            </tr>
        </thead> 
        <tbody>';
    
    $rowset = $con->query("SELECT * FROM `s_".$day."`");
    while($row = mysqli_fetch_assoc($rowset)){
        echo "<tr>";
        echo "<td>".$row['lesson_number']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['cabinet']."</td>";
        echo "</tr>";
    }
    echo '</tbody></table>';
}
else {
    echo "false";
}

?>