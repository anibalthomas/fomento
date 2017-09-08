<?php
//
// $consumer_key = "J9sOXDjplw5GLT2A3QnAdHpSx";
// $consumer_secret = "sxxWKR4BsP2L3Syprot4ytcdUrQcXPdOPCpFYpMNmGzzH3wDSD";
// $access_token = "2180871517-Nigd9yzXVXtxLSrOOHkKVaeagZ0jMewYLghZ5MP";
// $access_token_secret = "LBuK3W4gxdbocF0eKMySIXkcVI0a5bpf6WLzv701TFsIo";
//
// require "vendor/autoload.php";
// use Abraham\TwitterOAuth\TwitterOAuth;
//
// $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
// $content = $connection->get("account/verify_credentials");
//
//
// $statuses = $connection->get("statuses/home_timeline",["count" => 25, "exclude_replies" => true]);
//
// print_r($statuses);

 ?>

 <?php

  require "vendor/autoload.php";

 use Abraham\TwitterOAuth\TwitterOAuth;
 // require_once "tmhOAuth-master/tmhOAuth.php";
 // require_once("twitteroauth/twitteroauth.php");


 $consumer_key = "J9sOXDjplw5GLT2A3QnAdHpSx";
 $consumer_secret = "sxxWKR4BsP2L3Syprot4ytcdUrQcXPdOPCpFYpMNmGzzH3wDSD";
 $token = "2180871517-Nigd9yzXVXtxLSrOOHkKVaeagZ0jMewYLghZ5MP";
 $token_secret = "LBuK3W4gxdbocF0eKMySIXkcVI0a5bpf6WLzv701TFsIo";
 $conexion = new TwitterOAuth($consumer_key, $consumer_secret, $token, $token_secret);
 #$contenido = $conexion->get("followers/list");
 $contenido = $conexion->get("statuses/user_timeline", ["screen_name" => "Inecol_mx", "count" => 3]);

 ?>
            <script>var arreglo = [];</script>
            <script>var arreglo2 = [];</script>
            <script>var arreglo3 = [];</script>

            <?php foreach ($contenido as $tweet) {

                  echo "<script>arreglo.push(\"".$tweet->text."\");</script>";
                  echo "<script>arreglo2.push(\"".$tweet->id."\");</script>";
                  echo "<script>arreglo3.push(\"".$tweet->user->profile_image_url."\");</script>";

                } ?>


                <!-- <script>document.write(arreglo3[0])</script> -->
