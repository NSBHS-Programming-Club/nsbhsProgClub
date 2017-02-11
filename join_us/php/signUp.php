<?php

  $name = $_POST['name'];
  $email = $_POST['email'];

  $userFile = fopen("../../members.json", 'w+') or die("Can not open members.json");
    $jsonContetnt = file_get_contents("../../../members.json") or die("Can't open file");

      $jsonDB = json_decode($jsonContetnt, true);
        $members = $jsonDB['members'];

      $name = array(
        'email' => $email,
        'websiteAdmin' => 'FALSE'
      );

      array_push($members, $name);

    file_put_contents("../../members.json", " ") or die("Could not erase file");
      file_put_contents("../../members.json" ,json_encode($jsonDB));
        fclose($userFile);
 ?>
