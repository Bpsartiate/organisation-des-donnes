<?php
// Create a stream
$options = array(
  'http'=>array(
    'method'=>"GET"
  )
);

$context = stream_context_create($options);

// decode to json
$resp = json_decode(file_get_contents('https://t1-dgrnk.allsolutionsets.com/dgrnkapis/recettes/note/49076041', false, $context));
echo $resp->responseCode . '<br/>';

$data = $resp->data;
$_SESSION['note'] = $resp->data;
?>
