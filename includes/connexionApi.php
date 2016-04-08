<?php
  $key = '51b7062f4be5a94401af561de5300327b4bf4d17';
  $user = 'fifouak';
  $projFollow = 'https://api.ulule.com/v1/users/1026073/projects?filter=followed';
  $request = 'curl -H "Authorization: Apikey '.$user.':'.$key.'" '.$projFollow;

try {
    $connexion = shell_exec($request);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

  // $connexionV2 = file_get_contents(https://api.ulule.com/v1/);
?>
