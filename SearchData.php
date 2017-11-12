<?php

//Arrays of daily rooms.
$novahuset_rooms = array(
    "N2035" => array(),
    "N2037" => array(),
    "N2043" => array(),
    "N2045" => array(),
);

$langhuset_rooms = array(
    "L103" => array(),
    "L107" => array(),
    "L109" => array(),
    "L111" => array(),
    "L112" => array(),
    "L114" => array(),
    "L118" => array(),
    "L132" => array(),
    "L134" => array(),
    "L142" => array(),
    "L144" => array(),
    "L146" => array(),
    "L149" => array(),
    "L151" => array(),
    "L153" => array(),
    "L156" => array(),
    "L158" => array(),
    "L159" => array(),
);

$teknikhuset_rooms = array(
    "T101" => array(),
    "T103" => array(),
    "T127" => array(),
    "T129" => array(),
    "T131" => array(),
    "T133" => array(),
    "T135" => array(),
    "T141" => array(),
    "T205" => array(),
    "T207" => array(),
    "T209" => array(),
    "T211" => array(),
    "T213" => array(),
    "T215" => array(),
    "T219" => array(),
    "T221" => array(),
    "T225" => array(),
    "T227" => array(),
);

$forumhuset_rooms = array(
    "F103" => array(),
    "F105" => array(),
    "F115" => array(),
    "F120" => array(),
    "F128" => array(),
    "F139" => array(),
    "F147" => array(),
);

$prismahuset_rooms = array(
    "P103" => array(),
    "P104" => array(),
    "P105" => array(),
    "P107" => array(),
    "P114" => array(),
    "P137" => array(),
    "P138" => array(),
    "P139" => array(),
    "P200" => array(),
    "P201" => array(),
    "P203" => array(),
    "P204" => array(),
    "P206" => array(),
    "P215" => array(),
    "P216" => array(),
    "P217" => array(),
    "P218" => array(),
    "P219" => array(),
);

$prismahuset_rooms_2 = array(
    "P220" => array(),
    "P221" => array(),
    "P229" => array(),
    "P236" => array(),
    "P243" => array(),
    "P245" => array(),
    "P247" => array(),
    "P254" => array(),
    "P257" => array(),
    "P258" => array(),
    "P259" => array(),
    "P260" => array(),
    "P261" => array(),
    "P262" => array(),
    "P267" => array(),
    "P276" => array(),
);

$prismahuset_g_rooms = array(
    "P228" => array(),
    "P232" => array(),
    "P234" => array(),
    "P242" => array(),
    "P244" => array(),
    "P246" => array(),
    "P248" => array(),
    "P250" => array(),
);

$gymnastikhuset_rooms = array(
    "G101" => array(),
    "G102" => array(),
    "G108" => array(),
    "G117" => array(),
);

$bilbergskahuset_rooms = array(
    "B1211" => array(),
    "B219" => array(),
    "B311" => array(),
);

$campus_uso_rooms = array(
    "C1209" => array(),
    "C1304" => array(),
    "C2121" => array(),
    "C2123" => array(),
    "C2202" => array(),
    "C2209" => array(),
    "C2407" => array(),
    "C2409" => array(),
    "C2411" => array(),
    "C2413" => array(),
    "C2415" => array(),
    "C2417" => array(),
    "C2419" => array(),
    "C3102" => array(),
);

$musikskolanff_rooms = array(
    "M208" => array(),
    "M213" => array(),
    "M214" => array(),
    "M219" => array(),
    "M220" => array(),
    "M354" => array(),
    "M356" => array(),
    "M357" => array(),
);

$bibliotek_g_rooms = array(
    "U1169" => array(),
    "U1171" => array(),
    "U1183" => array(),
    "U1185" => array(),
    "U1187" => array(),
    "U1189" => array(),
);

//URLs for daily times.
$novahuset_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.N2035%2Cl.N2037%2Cl.N2043%2Cl.N2045%2C";

$langhuset_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.L158%2Cl.L159%2Cl.L149%2Cl.L151%2Cl.L156%2Cl.L109%2Cl.L144%2Cl.L132%2Cl.L146%2Cl.L134%2Cl.L153%2Cl.L118%2Cl.L142%2Cl.L103%2Cl.L112%2Cl.L114%2Cl.L107%2Cl.L111%2C";

$teknikhuset_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.T215%2Cl.T129%2Cl.T211%2Cl.T213%2Cl.T131%2Cl.T133%2Cl.T127%2Cl.T135%2Cl.T221%2Cl.T101%2Cl.T103%2Cl.T209%2Cl.T141%2Cl.T225%2Cl.T219%2Cl.T227%2Cl.T207%2Cl.T205%2C";

$forumhuset_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.F147%2Cl.F120%2Cl.F128%2Cl.F139%2Cl.F115%2Cl.F105%2Cl.F103%2C";

$prismahuset_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.P137%2Cl.P217%2Cl.P114%2Cl.P105%2Cl.P104%2Cl.P107%2Cl.P216%2Cl.P138%2Cl.P139%2Cl.P103%2Cl.P206%2Cl.P204%2Cl.P215%2Cl.P203%2Cl.P200%2Cl.P201%2Cl.P219%2Cl.P218%2C";

$prismahuset_2_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.P229%2Cl.P261%2Cl.P259%2Cl.P247%2Cl.P262%2Cl.P243%2Cl.P220%2Cl.P221%2Cl.P257%2Cl.P245%2Cl.P236%2Cl.P267%2Cl.P254%2Cl.P260%2Cl.P276%2Cl.P258%2C";

$prismahuset_g_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.P228%2Cl.P242%2Cl.P246%2Cl.P244%2Cl.P232%2Cl.P248%2Cl.P250%2Cl.P234%2C";

$gymnastikhuset_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.G108%2Cl.G101%2Cl.G102%2Cl.G117%2C";

$bilbergskahuset_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.B1211%2Cl.B219%2Cl.B311%2C";

$campus_uso_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.C2409%2Cl.C1209%2Cl.C2417%2Cl.C2415%2Cl.C2413%2Cl.C2411%2Cl.C2407%2Cl.C1304%2Cl.C2209%2Cl.C2202%2Cl.C2123%2Cl.C2121%2Cl.C2419%2Cl.C3102%2C";

$musikskolan_rooms_url = "http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.M208%2Cl.M220%2Cl.M219%2Cl.M357%2Cl.M356%2Cl.M214%2Cl.M354%2Cl.M213%2C";

$bibliotek_g_rooms_url ="http://schema.oru.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=d&intervallAntal=1&sokMedAND=false&sprak=SV&resurser=l.U1171%2Cl.U1189%2Cl.U1169%2Cl.U1185%2Cl.U1183%2Cl.U1187%2C";

?>