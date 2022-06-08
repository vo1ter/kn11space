<?php

// Математика (допи) ел. рівень<br><hr>Математика (допи) дост. рівень

include("dbconn.php");
$day = $_GET['day'];
$lang = $_GET['lang'];
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

if($lang == "ua") {
    if(array_search($day, $uaDays) >= 0) {
        $data = [
            "day" => mb_convert_case($uaDays[array_search($day, $days)], MB_CASE_TITLE, "UTF-8"),
        ];
    
        $rowset = $con->query("SELECT * FROM `s_".$days[array_search($day, $uaDays)]."`");
        while($row = mysqli_fetch_assoc($rowset)){
            $data = array_merge($data, [ "lessonNumber_".$row['lesson_number'] => $row['lesson_number'] ]);
            $data = array_merge($data, [ "subjectName_".$row['lesson_number'] => $row['name'] ]);
            $data = array_merge($data, [ "cabinet_".$row['lesson_number'] => $row['cabinet'] ]);
        }
    
        header('Content-type: application/json');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    else {
        echo "false";
    }
}
else {
    if(array_search($day, $days) >= 0) {
        $data = [
            "day" => mb_convert_case($uaDays[array_search($day, $days)], MB_CASE_TITLE, "UTF-8"),
        ];
    
        $rowset = $con->query("SELECT * FROM `s_".$day."`");
        while($row = mysqli_fetch_assoc($rowset)){
            $data = array_merge($data, [ "lessonNumber_".$row['lesson_number'] => $row['lesson_number'] ]);
            $data = array_merge($data, [ "subjectName_".$row['lesson_number'] => $row['name'] ]);
            $data = array_merge($data, [ "cabinet_".$row['lesson_number'] => $row['cabinet'] ]);
        }
    
        header('Content-type: application/json');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    else {
        echo "false";
    }
}

?>