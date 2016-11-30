<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.php', $args);
});
$app->get('/id/{id}', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/' route");
        $sth = $this->db->prepare("SELECT * FROM pic_users");
        $sth->execute();
        $todos = $sth->fetchAll();
       // $response->some=$todos;
     //   echo "<Pre>";print_r($response->some);die; ;
    $data =  array('sub'=>$todos,'id'=>'343423','baseurl'=>$this->get("local"));

   return $this->renderer->render($response, 'id.php', $data);
});
