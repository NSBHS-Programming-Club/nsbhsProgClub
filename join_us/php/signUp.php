<?php

function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$overide == false;
  if(isset($_POST['name']) && isset($_POST['email']) && $overide == false){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    
      $jsonContetnt = file_get_contents_curl("https://nsbhs-prog-club-vurnator-1.c9users.io/members.json");
        $jsonDecoded = json_decode($jsonContetnt, true);
          $members = &$jsonDecoded['members'];
          
          $members[$name] = array();
            $userArray = array(
              'email' => $email,
              'websiteAdmin' => 'FALSE',
              'driveStatu' => 'Read/Write'
            );
            
          array_push($members[$name], $userArray);
             file_put_contents("../../members.json", json_encode($jsonDecoded)) or die("Could not write to file");
              header('Location: ../completesignup');
    }else{
      die(header('Location: ../completesignup'));
    }
 ?>
