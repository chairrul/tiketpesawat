<?php

//CREDENTIALS FOR DB
define ('DBSERVER', 'localhost');
define ('DBUSER', 'root');
define ('DBPASS','');
define ('DBNAME','logindulu');

//LET'S INITIATE CONNECT TO DB
$connection = mysql_connect(DBSERVER, DBUSER, DBPASS) or die("Can't connect to server. Please check credentials and try again");
$result = mysql_select_db(DBNAME) or die("Can't select database. Please check DB name and try again");

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT dari FROM rute WHERE dari LIKE '{$query}%'");
    $array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['dari'].', '.$row['dari'],
            'value' => $row['dari'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}
if (isset($_REQUEST['querya'])) {
    $querya = $_REQUEST['querya'];
    $sql = mysql_query ("SELECT tujuan FROM rute WHERE tujuan LIKE '{$querya}%'");
    $array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['tujuan'].', '.$row['tujuan'],
            'value' => $row['tujuan'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>