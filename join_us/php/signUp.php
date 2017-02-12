<?php
  if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $userFile = fopen("../../members.json", 'w+') or die("Can not open members.json");
      $jsonContetnt = file_get_contents("../members.json") or die("Can't open file");
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
      header('Location: ../completesignup.php');
    }else{
      die(header('Location: ../index.php'));
    }
 ?>
