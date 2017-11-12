<?php
include("CalFileParser.php");
include("SearchData.php");

if (isset($_POST['search_button'])) {

    include ("Head.php");
    include ("Body.php");
    $selected_house = $_POST["selected_house"];
    StartLogic($selected_house);
    include ("BodyBreak.php");
}


function StartLogic($house_value) {

    switch($house_value) {
        case "novahuset":
            FormatIcalFile($novahuset_rooms_url);
            break;
        case "langhuset":
            FormatIcalFile($langhuset_rooms_url);
            break;
        case "teknikhuset":
            FormatIcalFile($teknikhuset_rooms_url);
            break;
        case "forumhuset":
            FormatIcalFile($forumhuset_rooms_url);
            break;
        case "prismahuset":
            FormatIcalFile($prismahuset_rooms_url);
            break;
        case "prismahuset2":
            FormatIcalFile($prismahuset_2_rooms_url);
            break;
        case "prismahusetg":
            FormatIcalFile($prismahuset_g_rooms_url);
            break;
        case "gymnastikhuset":
            FormatIcalFile($gymnastikhuset_rooms_url);
            break;
        case "bilbergskahuset":
            FormatIcalFile($bilbergskahuset_rooms_url);
            break;
        case "campus_uso":
            FormatIcalFile($campus_uso_rooms_url);
            break;
        case "musikskolan":
            FormatIcalFile($musikskolan_rooms_url);
            break;
        case "bibliotek":
            FormatIcalFile($bibliotek_g_rooms_url);
            break;
        case default:
            echo "Något gick fel, försök igen.";
            break;
    }
    echo $house_value;
}

function FormatIcalFile($url) {
    
    $cal = new CalFileParser();
    $cal->set_timezone("Europe/Berlin");

    $remote_ical = $cal->parse($url);

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
}

?>