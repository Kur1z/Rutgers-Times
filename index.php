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
<div class= "leftColumn">
    <h2 id='headline'><a href = <?php echo $data['articles'][0]["url"] ?> ><?php echo $data['articles'][0]["title"];?> </a></h2>
    <p id='description'><?php echo $data['articles'][0]["description"];?></p>
    <h5 id='published'>Posted: <?php echo $data['articles'][0]["publishedAt"];?> by <?php echo $data['articles'][0]['source']['name'];?> </h5>
  </div>
  <div class = "middleColumn">
      
      <div class="leftImgs">
      <?php  echo "<a href=" . $data['articles'][0]['url'] . " ><img  src='" . $data['articles'][0]['urlToImage'] . "' alt='" . $data['articles'][0]["title"]. "'> </a>"; ?>
      </div>
  </div>

  <div class= "rightColumn">
  <h2 id ='headline'> <a href = <?php echo $data['articles'][3]["url"] ?> ><?php echo $data['articles'][3]["title"];?> </a></h2>
  
    <div class="rightImgs">
    <?php  echo "<a href=" . $data['articles'][3]['url'] . " ><img  src='" . $data['articles'][3]['urlToImage'] . "' alt='" . $data['articles'][3]["title"]. "'> </a>"; ?>
    </div>
    <p id= 'description'><?php echo $data['articles'][3]["description"];?></p>
    <h5 id='published'>Posted: <?php echo $data['articles'][3]["publishedAt"];?> by <?php echo $data['articles'][3]['source']['name'];?> </h5>
  </div>
</div>




<div class="row">
<div class= "leftColumn">
    <h2 id='headline'><a href = <?php echo $data['articles'][1]["url"] ?> ><?php echo $data['articles'][1]["title"];?> </a></h2>
    <p id='description'><?php echo $data['articles'][1]["description"];?></p>
    <h5 id='published'>Posted: <?php echo $data['articles'][1]["publishedAt"];?> by <?php echo $data['articles'][1]['source']['name'];?> </h5>
  </div>
  <div class = "middleColumn">
      
      <div class="leftImgs">
      <?php  echo "<a href=" . $data['articles'][1]['url'] . " ><img  src='" . $data['articles'][1]['urlToImage'] . "' alt='" . $data['articles'][1]["title"]. "'> </a>"; ?>
      </div>
  </div>

  <div class= "rightColumn">
  <h2 id ='headline'> <a href = <?php echo $data['articles'][2]["url"] ?> ><?php echo $data['articles'][2]["title"];?> </a></h2>
  
    <div class="rightImgs">
    <?php  echo "<a href=" . $data['articles'][2]['url'] . " ><img  src='" . $data['articles'][2]['urlToImage'] . "' alt='" . $data['articles'][2]["title"]. "'> </a>"; ?>
    </div>
    <p id= 'description'><?php echo $data['articles'][2]["description"];?></p>
    <h5 id='published'>Posted: <?php echo $data['articles'][2]["publishedAt"];?> by <?php echo $data['articles'][2]['source']['name'];?> </h5>
  </div>
</div>



<div class="row">
<div class= "leftColumn">
    <h2 id='headline'><a href = <?php echo $data['articles'][8]["url"] ?> ><?php echo $data['articles'][8]["title"];?> </a></h2>
    <p id='description'><?php echo $data['articles'][8]["description"];?></p>
    <h5 id='published'>Posted: <?php echo $data['articles'][8]["publishedAt"];?> by <?php echo $data['articles'][8]['source']['name'];?> </h5>
  </div>
  <div class = "middleColumn">
      
      <div class="leftImgs">
      <?php  echo "<a href=" . $data['articles'][8]['url'] . " ><img  src='" . $data['articles'][8]['urlToImage'] . "' alt='" . $data['articles'][8]["title"]. "'> </a>"; ?>
      </div>
  </div>

  <div class= "rightColumn">
  <h2 id ='headline'> <a href = <?php echo $data['articles'][5]["url"] ?> ><?php echo $data['articles'][5]["title"];?> </a></h2>
  
    <div class="rightImgs">
    <?php  echo "<a href=" . $data['articles'][5]['url'] . " ><img  src='" . $data['articles'][5]['urlToImage'] . "' alt='" . $data['articles'][5]["title"]. "'> </a>"; ?>
    </div>
    <p id= 'description'><?php echo $data['articles'][5]["description"];?></p>
    <h5 id='published'>Posted: <?php echo $data['articles'][5]["publishedAt"];?> by <?php echo $data['articles'][5]['source']['name'];?> </h5>
  </div>
</div>





<div class="row">
<div class= "leftColumn">
    <h2 id='headline'><a href = <?php echo $data['articles'][6]["url"] ?> ><?php echo $data['articles'][6]["title"];?> </a></h2>
    <p id='description'><?php echo $data['articles'][6]["description"];?></p>
    <h5 id='published'>Posted: <?php echo $data['articles'][6]["publishedAt"];?> by <?php echo $data['articles'][6]['source']['name'];?> </h5>
  </div>
  <div class = "middleColumn">
      
      <div class="leftImgs">
      <?php  echo "<a href=" . $data['articles'][6]['url'] . " ><img  src='" . $data['articles'][6]['urlToImage'] . "' alt='" . $data['articles'][0]["title"]. "'> </a>"; ?>
      </div>
  </div>

  <div class= "rightColumn">
  <h2 id ='headline'> <a href = <?php echo $data['articles'][7]["url"] ?> ><?php echo $data['articles'][7]["title"];?> </a></h2>
  
    <div class="rightImgs">
    <?php  echo "<a href=" . $data['articles'][7]['url'] . " ><img  src='" . $data['articles'][7]['urlToImage'] . "' alt='" . $data['articles'][7]["title"]. "'> </a>"; ?>
    </div>
    <p id= 'description'><?php echo $data['articles'][7]["description"];?></p>
    <h5 id='published'>Posted: <?php echo $data['articles'][7]["publishedAt"];?> by <?php echo $data['articles'][7]['source']['name'];?> </h5>
  </div>
</div>

 

  <footer>
  <div class='leftElement'>
     <h2>Thanks for Reading!</h2>
    </div>

  
  
  <div class=titleDiv>
  <img class = 'logo' src="Resources/RU_SHIELD_BLACK.png">
      <h1 class = 'title'> RUTGERS TIMES</h1>
  </div>

   <div class="rightElement">
   <form action="subscription.php">
         <button type="submit">Subscribe!</button>
      </form>
    </div>

  </footer>
</body>
</html>
