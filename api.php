<?php
header("Content-Type:application/json");
if (isset($_GET['outbreak_id']) && $_GET['outbreak_id']!="") {
 include('dbcon.php');
 $outbreak_id = $_GET['outbreak_id'];
 $result = mysqli_query(
 $con,
 "SELECT * FROM `outbreak` WHERE outbreak_id=$outbreak_id");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
 $outbreak = $row['outbreak'];
 $cases_spread_mortalityrate = $row['cases_spread_mortalityrate'];
 $areas_affected = $row['areas_affected'];
 $signal_value = $row['signal_value'];
 response($outbreak_id, $outbreak, $cases_spread_mortalityrate,$areas_affected,$signal_value);
 mysqli_close($con);
 }else{
 response(NULL, NULL, 200,"No Record Found");
 }
}else{
 response(NULL, NULL, 400,"Invalid Request");
 }
 
function response($outbreak_id,$outbreak,$cases_spread_mortalityrate,$areas_affected,$signal_value){
 $response['outbreak_id'] = $outbreak_id;
 $response['outbreak'] = $outbreak;
 $response['cases_spread_mortalityrate'] = $cases_spread_mortalityrate;
 $response['areas_affected'] = $areas_affected;
 $response['signal_value'] = $signal_value;

 
 $json_response = json_encode($response);
 echo $json_response;
}
?>