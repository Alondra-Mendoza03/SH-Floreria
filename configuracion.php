<?php
  require_once 'vendor/autoload.php';

  $clientID = '762948826165-rfm5s9kjhp0ejn63cr90nkp05ska6r8j.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/sh_petalos/perfil.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>