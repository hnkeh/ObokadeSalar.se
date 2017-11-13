<?php
include("CalFileParser.php");

//Button Events.
if (isset($_POST['search_button'])) {
    
    include ("Head.php");
    include ("Body.php");
    $selected_house = $_POST["selected_house"];
    StartLogic($selected_house);
    include ("BodyBreak.php");
}

//Mainlogic delegater.
function StartLogic($house_value) {

    include("SearchData.php");
    
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
        default:
            echo "Något gick fel, försök igen.";
            break;
    }
}

//Icalparser.
function FormatIcalFile($url) {
    
    $cal = new CalFileParser();
    $cal->set_timezone("Europe/Berlin");

    $remote_ical = $cal->parse($url);

    //Gather data from Ical.
    $index = 0;
    while ($index < count($remote_ical)) {
    
        $start_time = $remote_ical[$index]["DTSTART"]->format('H:i');
        $end_time = $remote_ical[$index]["DTEND"]->format('H:i');
        $location = $remote_ical[$index]["LOCATION"];

        //If multiple classrooms in booking time.
        if (strlen($location) > 5) {
        
            $location_array = explode(" ", $location);

            foreach ($location_array as $element) {

                $search_array[$element][] = $start_time;
                $search_array[$element][] = $end_time;
            }
        }

        //Single classroom in booking time.
        else {

            $search_array[$location][] = $start_time;
            $search_array[$location][] = $end_time;
        }
    
    $index++;
    }

    //HTML element.
    $output .= "<table class='table table-striped' style='text-align: center;'>
    <thead>
      <tr>
        <th style='text-align: center;'>Sal</th>
        <th style='text-align: center;'>Obokade tider</th>
      </tr>
    </thead>
    <tbody>
      <tr>";
    
    //HTML creater.
    foreach ($search_array as $key => $item) {

        $output .= "<td>" . $key . "</td><td>06:00";
        $i = 0;
        while (count($search_array[$key]) > $i) {

            $output .= "-" . $search_array[$key][$i] . ", " . $search_array[$key][$i + 1];
            $i = $i + 2;
        }
        
        $output .= "-21:00 </td></tr>";
    }

    $output = str_replace("06:00-00:00, 23:59-21:00", "Obokad", $output);
    $output .= "</tbody></table>";
    echo $output;
}

?>