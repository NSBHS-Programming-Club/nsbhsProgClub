<?php
  $fileId = "0B1euS_2ZQSvtMDRQaW43SklyQmM";


  $url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  $url = $url_array[0];

    require_once '../google-api-php-client/src/Google/autoload.php';
    require_once '../google-api-php-client/src/Google/Client.php';
    require_once '../google-api-php-client/src/Google/Service/Drive.php';


      $client = new Google_Client();
        $client->setClientId('1097190673467-vlmug6ffpl22r88qsv38ubi9rprvmqvh.apps.googleusercontent.com');
        $client->setClientSecret("8j55g6fCkUYOOinytcRPPrJm");
        $client->setRedirectUri($url);
        $client->setScopes("nsbhs.progclub@gmail.com");
        $client->addScope("https://www.googleapis.com/auth/drive");

        $driveService = new Google_Service_Drive($client);

        if (isset($_GET['code'])) {
          $client->authenticate($_GET['code']);
          $_SESSION['upload_token'] = $client->getAccessToken();
          $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
          header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }

        $driveService->getClient()->setUseBatch(true);

        try {
          $batch = $driveService->createBatch();

            $userPermission = new Google_Service_Drive_Permission(array(
              'type' => 'user',
              'role' => 'writer',
              'emailAddress' => 'example@appsrocks.com'
            ));
                $request = $driveService->permissions->create(
                  $fileId, $userPermission, array('fields' => 'id'));
                  $batch->add($request, 'user');

        $domainPermission = new Google_Service_Drive_Permission(array(
          'type' => 'domain',
          'role' => 'reader',
          'domain' => 'appsrocks.com'
        ));
          $request = $driveService->permissions->create(
            $fileId, $domainPermission, array('fields' => 'id'));
              $batch->add($request, 'domain');
                $results = $batch->execute();

  foreach ($results as $result) {
    if ($result instanceof Google_Service_Exception) {
      printf($result);
    } else {
      printf("Permission ID: %s\n", $result->id);
    }
  }
} finally {
  $driveService->getClient()->setUseBatch(false);
}

?>
