<?php

  $jsonArray = array(
    'members' => array(

    ),
    'admins' => array(

    )
  );

$file = fopen("../../members.json", "w+") or die("Couldn't open file");
  fwrite($file, json_encode($jsonArray));
    fclose($file);

 ?>
