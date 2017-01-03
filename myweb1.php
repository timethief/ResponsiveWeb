<?php
header('Access-Control-Allow-Origin: *');  
$apikey = "";
$type = $_REQUEST['type'];
if ($type == 'legislators') {
    $respLegi = file_get_contents("http://congress.api.sunlightfoundation.com/legislators?apikey=ccc59148d3b5487589a01c96d13525d2&per_page=all");
    echo $respLegi;
} else if ($type == 'billsActive') {
    $respBillActive = file_get_contents("http://congress.api.sunlightfoundation.com/bills?apikey=ccc59148d3b5487589a01c96d13525d2&per_page=50&history.active=true");
    echo $respBillActive;
} else if ($type == 'billsNew') {
    $respBillNew = file_get_contents("http://congress.api.sunlightfoundation.com/bills?apikey=ccc59148d3b5487589a01c96d13525d2&per_page=50&history.active=false");
    echo $respBillNew;
} else if ($type == 'committees') {
    $respCommittees = file_get_contents("http://congress.api.sunlightfoundation.com/committees?apikey=ccc59148d3b5487589a01c96d13525d2&per_page=all");
    echo $respCommittees;
} else if ($type == 'legiCommittees') {
    $id = $_REQUEST['id'];
    $resplegiComm = file_get_contents("http://congress.api.sunlightfoundation.com/committees?apikey=ccc59148d3b5487589a01c96d13525d2&per_page=5&member_ids=" . $id);
    echo $resplegiComm;
} else if ($type == 'legiBills') {
    $id = $_REQUEST['id'];
    $resplegiBill = file_get_contents("http://congress.api.sunlightfoundation.com/bills?apikey=ccc59148d3b5487589a01c96d13525d2&per_page=5&sponsor.bioguide_id=" . $id);
    echo $resplegiBill;
} else if ($type == 'test') {
    echo "Test OK !";
} else {
    echo "Welcome !";
}
?>