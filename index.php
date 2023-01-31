<!DOCTYPE html>
<html lang="en">
<head>
<title>Rutgers Times</title>
<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="Resources/favicon-32x32.png" />

</head>

<body>

<h1 class = title><img src="Resources/RU_SHIELD_RED.png"> RUTGERS TIMES</h1>

<div class="header">
  <h3>  <span id ='date'></span></h3>
  <h4>Today's Paper</h4>
  <script src="script.js"></script>
</div>



<?php

$curl = curl_init();
$city = "Newark";
$university = "Rutgers";
$Scarlet_Knights = "Scarlet Knights";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://newsapi.org/v2/everything?q=$university&searchin=title,description&sortBy=popularity&pageSize=10&apiKey=80c02f9ac08849c5a132b707f338fcb4",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "User-Agent: RutgersTimes/Version"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$data = json_decode($response, true);

if (isset($data['articles'])) {
  echo "<h2>Headlines</h2>";
  echo "<ul>";
  foreach ($data['articles'] as $article) {
    echo "<li>";
    echo "<h3>" . $article['title'] . "</h3>";
    echo "<img src='" . $article['urlToImage'] . "' alt='" . $article['title'] . "'>";
    echo "<p>" . $article['description'] . "</p>";
    echo "<p>" . $article['publishedAt'] . "</p>";
    echo "<p>" . $article['url'] . "</p>";
    echo "</li>";
  }
  echo "</ul>";
} else {
  echo "Error: Could not retrieve data.";
}



print_r($data['articles'][5]);
?>


</body>
</html>
