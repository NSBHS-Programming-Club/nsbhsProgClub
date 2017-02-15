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

  if(isset($_POST['name']) && isset($_POST['email'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    
      $jsonContetnt = file_get_contents_curl("https://vast-mesa-54350.herokuapp.com/members.json");
        $jsonDecoded = json_decode($jsonContetnt, true);
          $members = &$jsonDecoded['members'];
          
          $members[$name] = array();
            $userArray = array(
              'email' => $email,
              'websiteAdmin' => 'FALSE',
              'driveStatus' => 'Not Connected'
            );
            
          array_push($members[$name], $userArray);
             file_put_contents("../../members.json", json_encode($jsonDecoded)) or die("Could not write to file");
              header('Location: http://vast-mesa-54350.herokuapp.com');
    }else{
      die(header('Location: ../index.php'));
    }
 ?>
