<?php
$overide == true;
  if(isset($_POST['name']) && isset($_POST['email']) && $overide == $false){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $userFile = fopen("../../members.json", 'w+') or die("Can not open file");
      ini_set('allow_url_fopen', '1');
      $jsonContetnt = file_get_contents("../../members.json") or die(header('Location: ../completesignup'));
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
      die(header('Location: ../completesignup'));
    }
 ?>
