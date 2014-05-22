<?php
for($i=1;$i<=10;$i++){


for($k=10;$k >=$i+1;$k--){

echo '&nbsp;';

}

for($l=1;$l<=$i;$l++){

echo $l;
}

//echo $i;
echo '<br>';



}

die;











$url = "http://www.api.printaura.com/api.php";
//jGIL8p6FB6l9yS9Nt60V73E9oIcOk9P1

$postfields["key"] = 'jGIL8p6FB6l9yS9Nt60V73E9oIcOk9P1';
$postfields["hash"] ='BFrnN4yOvUl4H76lH9QFi2dau9h96z5R31pYx7KE73vWQ5K4rzma9BzpYGrSe6j9';
$postfields["method"] = 'listbrands';

// Send the query to PrintAura API using CURL

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
$data = curl_exec($ch);
curl_close($ch);
echo '<pre>';
print_r($data);

?>
