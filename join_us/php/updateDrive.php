<?php
  session_start();
  $name = $_SESSOIN['name'];

  $userFile = fopen("../../members.json", 'w+') or die("Can not open members.json");
    $jsonContetnt = file_get_contents("../../../members.json") or die("Can't open file");
      $jsonDB = json_decode($jsonContetnt, true);
        $members = &$jsonDB['members'];
          $nameArray = &$members[$name];
            $members[$name] = array();
              $userInfo = array(
                'email' => $email,
                'websiteAdmin' => 'FALSE'
              );
 ?>
