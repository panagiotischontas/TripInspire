<?php

function getPicture($city){
  $myUrl = "https://api.unsplash.com/search/photos?page=1&query=" . $city . "&client_id=f6aef88a05b0f479eeaf9a633aae06b6cdd49d93cdfb038b08afe2bbf056d9d2";
  define('URL2', $myUrl);
  $c = curl_init ();
  curl_setopt ($c, CURLOPT_URL, URL2);
  curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
  $res = curl_exec ($c);
  curl_close ($c);
  echo htmlentities ($res);
  $res =  json_decode($res, true);
  if(isset($res['results'])){
  $results = $res['results'];
    if(isset($results[0])){
      $firstRes = $results[0];
      if(isset($firstRes['urls'])){
        $urls = $firstRes['urls'];
        if(isset($urls['small'])){
          $arr=$urls['small'];

        }else if(isset($urls['regular'])){
            $arr=$urls['regular'];

          }else if(isset($urls['full'])){
            $arr=$urls['full'];

          }else if(isset($urls['raw'])){
            $arr=$urls['raw'];
              }else{
                echo"nu avem imagine";
              }
            }else{
              echo "nu avem urls";
            }
          }else{
            echo "nu avem nimic in results";
          }
        }else{
          echo "nu are result";
        }

  if(isset($arr)){
    echo "<img src=\"" . $arr . "\">";
  }

}


$json = getPicture("IAS");
// echo strlen("https://images.unsplash.com/photo-1533627634236-4d7ae55ec7b2?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjc1MzkwfQ");
// echo json_encode($json);
//



 ?>
