<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        background-color: lightblue;
        }

    h1 {
            color: black;
            text-align: center;
        }
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    p {
        text-align: center;
    }
</style>
</head>
<body>
    
<?php



// membuka file JSON
/*
$file = file_get_contents("http://localhost/sait_project_case3/students.php");
$json = json_decode($file, true);

foreach ($json as $key) {
    if (is_array($key)) {
        foreach ($key as $key => $value) {
            echo $key . ' : ' . $value . '<br />';
        }
    }
}
*/

$curl= curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// silahkan ditaruh file API ini di window. 
// Silahkan ganti IP address dengan IP address linux
curl_setopt($curl, CURLOPT_URL, 'https://api.nasa.gov/planetary/apod?api_key=auxmY8ER4AzyubdprEyUSq6J1W0sPsdUalSGDljZ&date=2021-01-03');
$res = curl_exec($curl);
$json = json_decode($res, true);


#var_dump($json);
// Loop through the object
#print($json[0]->nama);

/*foreach ($json as $key => $data) {
  echo " NIM: {$data->nim} <br>";
  echo " Nama: {$data->nama} <br>";
  echo " Alamat: {$data->alamat} <br>";
  echo " Jenis Kelamin: {$data->gender} <br>";
  echo " TTL: {$data->ttl} <br>";
  echo"----------<br>";

}*/
print("<h1>Title :  {$json["title"]}</h1>");
print("Date :  {$json["date"]} ");
print("<br>");
print("<img src=https://apod.nasa.gov/apod/image/2101/PhoenixAurora_Helgason_960.jpg>");
print("<br>");
print("<b>Explanation: </b>");
print("<br>");
print("{$json["explanation"]}");
print("<br>");
print("<br>");
print("Copyright :  {$json["copyright"]} ");
?>
 
</body>
</html>