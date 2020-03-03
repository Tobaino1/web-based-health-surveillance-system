<form action="" method="POST">
<label>Enter Order ID:</label><br />
<input type="text" name="order_id" placeholder="Enter Order ID" required/>
<br /><br />
<button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['order_id']) && $_POST['order_id']!="") {
 $order_id = $_POST['order_id'];
 $url = "http://localhost/rest/api/".$order_id;
 
 $client = curl_init($url);
 curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
 $response = curl_exec($client);
 
 $result = json_decode($response);
 
 echo "<table>";
 echo "<tr><td>Order ID:</td><td>$result->order_id</td></tr>";
 echo "<tr><td>Amount:</td><td>$result->amount</td></tr>";
 echo "<tr><td>Response Code:</td><td>$result->response_code</td></tr>";
 echo "<tr><td>Response Desc:</td><td>$result->response_desc</td></tr>";
 echo "</table>";
}
    ?>