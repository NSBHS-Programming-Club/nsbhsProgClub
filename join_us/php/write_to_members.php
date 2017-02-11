<?php

  $jsonArray = array(
    'members' => array(
      'Edwin' => array(
        'email' => 'edwin.lam@gmail.com',
        'github' => 'https://github.com/Eddyboy12',
        'driveStatus' => 'Read/Write only',
        'websiteAdmin' => 'TRUE'
      )
    ),
    'admins' => array(
      'Varun' => array(
        'email' => 'varun.sethu@outlook.com',
        'github' => 'https://github.com/Varun-Sethu',
        'driveStatus' => 'admin',
        'websiteAdmin' => 'TRUE'
      )
    )
  );

$file = fopen("../../members.json", "w+") or die("Couldn't open file");
  fwrite($file, json_encode($jsonArray));
    fclose($file);

 ?>
