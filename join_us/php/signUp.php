<?php
  if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $userFile = fopen("../../members.json", 'w+') or die("Can not open file");
      ini_set('allow_url_fopen', '1');
      ini_alter('allow_url_include', '1');
      $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL, "../../members.json");
            curl_setopt($ch,CURLOPT_POST, 1);                 
            curl_setopt($ch,CURLOPT_POSTFIELDS,'');
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,200);
            curl_setopt($ch,CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json'
    ));
  $jsonContetnt = curl_exec($ch);
        $jsonDB = json_decode($jsonContetnt, true);
          $members = &$jsonDB['members'];
            $members[$name] = array();
              $userInfo = array(
                'email' => $email,
                'websiteAdmin' => 'FALSE',
                'driveStatu' => 'Read/Write'
              );
              array_push($members[$name], $userInfo);
                echo(json_encode($jsonDB));
    file_put_contents("../../members.json", " ") or die("Could not erase file");
      file_put_contents("../../members.json", json_encode($jsonDB)) or die("Could not write to file");
        fclose($userFile);
      header('Location: ../completesignup');
    }else{
      die(header('Location: ../index.php'));
    }
 ?>
