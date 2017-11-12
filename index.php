<?php
include("CalFileParser.php");
include("SearchData.php");

$cal = new CalFileParser();
$cal->set_timezone("Europe/Berlin");

$remote_ical = $cal->parse("http://schema.oru.se/setup/jsp/SchemaICAL.ics?startDatum=2017-11-09&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.L111%2Cl.L118%2Cl.L114%2Cl.L112%2Cl.L107%2Cl.L109%2C");

$search_array = array(
    "L111" => array(),
    "L118" => array(),
    "L114" => array(),
    "L112" => array(),
    "L107" => array(),
    "L109" => array(),
);

$index = 0;
while ($index < count($remote_ical)) {
    
    $start_time = $remote_ical[$index]["DTSTART"]->format('H:i');
    $end_time = $remote_ical[$index]["DTEND"]->format('H:i');
    $location = $remote_ical[$index]["LOCATION"];

    if (strlen($location) > 5) {
        
        $location_array = explode(" ", $location);

        foreach ($location_array as $element) {

            $search_array[$element][] = $start_time;
            $search_array[$element][] = $end_time;
        }
    }
    
    else {
        
        $search_array[$location][] = $start_time;
        $search_array[$location][] = $end_time;
    }
    
    $index++;
}

$i = 0;
$output = "06:00";
while (count($search_array["L111"]) > $i) {

    $output .= "-" . $search_array["L111"][$i] . ", " . $search_array["L111"][$i + 1];
    $i = $i + 2;
}
$output .= "-21:00";
echo $output;
?>