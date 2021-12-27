<?php

    $city="Jaipur";
    $url="http://api.openweathermap.org/data/2.5/weather?q=$city&appid=1c375fe533c7a805a5df4d72a009b1f9";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
   
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="icon" href="/lgo.jpeg" type="image/x-icon">

  <title>CDI College</title>
</head>

<body>


  <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.twitter.com/2/users/310679156/tweets',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAPX6VgEAAAAAO79eTP1ruiVDb5DPpkpigNQ7gRc%3D4ig3I5gccyj3Aef35xuQJIk4CUDNUKWvq16dNKjrToxMseGBbL',
    'Cookie: guest_id=v1%3A163679906975838073; personalization_id="v1_oEc3Z/ZCS816VGase+ZTZQ=="'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$data=json_decode($response);

?>

  <div class="contaier-fluid">
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="lgo.jpeg" width="180" height="70" alt="">
      </a>
    </nav>
  </div>

  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-6">
        <div class="jumbotron">
          <h4 class=""><i><span >Twitter Tweets with id of <em>"DILJITDOSANJH"</em>  </span></i></span></h4>
<hr>
<hr>
           <?php
           foreach($data as $p){
            
              foreach($p as $q){
                $l =(array) $q;
                foreach ($l as $t => $value) {
                  ?>
                  <p>
                  <?php
                  echo $value;
                  ?>
                  </p>
                  <?php
                }
              }
           }
           ?>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="jumbotron">
          <h4 class=""><i><span >Current wether report of <span style="color:red"><?php echo $result['name']?></span></i></span></h4>
<hr>
<hr>
      <article class="widget">
         <div class="weatherInfo">
           <h3> <div class="temperature">
             <i><b>Temperature :- </b>   <span><?php echo round($result['main']['temp']-273.15)?>°</span></i>
            </div>
            <div class="description mr45">
              <hr>
            <i><div class="weatherCondition"><b>PPI :-</b> <?php echo $result['weather'][0]['main']?></div></i>
            </div>
            <hr>
            <div class="description">
            <i><div class="place"> <b>Wind Speed :-</b> <?php echo $result['wind']['speed']?> M/H</div></i>
            </div></h3>
         </div>
      </article>
      </div>
      </div>
    </div>
  </div>

  <nav class="fixed-bottom navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Brysonreed</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"></a>
            </li>
         </ul>
         <span class="navbar-text">
            Student-ID @Bry12345
         </span>
      </div>
   </nav>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

</body>

</html>