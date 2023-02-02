<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rutgers Times</title>
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="Resources/favicon-32x32.png" />
 
</head>
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


echo '<pre>'; print_r($data); echo '</pre>';

 
?>


<body>

  <div class="container">

    <div class='leftElement'>
      <h4>Today's Paper</h4>
      <h4>  <span id ='date'></span></h4>

      <script src="script.js"></script>
    </div>

  
  
  <div class=titleDiv>
  <img class = 'logo' src="Resources/RU_SHIELD_RED.png">
      <h1 class = 'title'> RUTGERS TIMES</h1>
  </div>

   <div class="rightElement">
   <form action="subscription.php">
         <button type="submit">Subscribe!</button>
      </form>
    </div>


  </div>




<div class="row">
<div class= "rightColumn">
    <h2><?php echo $data['articles'][0]["title"];?></h2>
    <h5>Posted: <?php echo $data['articles'][0]["publishedAt"];?></h5>
    <p><?php echo $data['articles'][0]["description"];?></p>
  </div>
  <div class = "middleColumn">
      
      <div class="leftImgs">
    <?php  echo "<img  src='" . $data['articles'][0]["urlToImage"] . "' alt='" . $data['articles'][1]["title"]. "'>"; ?>
      </div>
  </div>

  <div class= "leftColumn">
  <h2><?php echo $data['articles'][3]["title"];?></h2>
    <h5><?php echo $data['articles'][3]["publishedAt"];?></h5>
    <div class="rightImgs">
    <?php  echo "<img  src='" . $data['articles'][3]["urlToImage"] . "' alt='" . $data['articles'][1]["title"]. "'>"; ?>
      </div>
    <p><?php echo $data['articles'][3]["description"];?></p>
  </div>
</div>


 

  <footer>
    <h2>FOOTER</h2>
  </footer>
</body>
</html>
