<? 
session_start();

if (isset($_POST['login']))
{
    try{
        $data = json_encode(array('userId' => $_POST['userId'],'password' => $_POST['password']));
        //$data = json_encode(array('password' => $_POST['password']));
        $opt = array
        (
            'http' => array
            (
                'method' => "POST",
                'header'=> array("Content-type:application/json", "token:1234509876"),
                'content' => $data
            )    
        );
        $context = stream_context_create($opt);

        $resp = json_decode(file_get_contents('https://t1-dgrnk.allsolutionsets.com/users-api/login/connecter', false, $context));
        if($resp->responseCode == "00"){
            $_SESSION['message'] = $resp->responseMessage;
            $_SESSION['data'] = $resp->data;

           // To see one specific variable 
            // echo $_SESSION['data']->nom;

            // To see all data in an array 
            // echo '<pre>';
            // var_dump($_SESSION['data']);
            // echo '</pre>';

            header('location: ../assujetti.php');

            
        }
        else{
            //echo $resp->responseMessage;
            $_SESSION['message'] = $resp->responseMessage;
            header('location: ../index.php?message=incorect');

            
        }
        //echo $resp->responseCode;
            
    }
    catch(PDOException $e){
        //$_SESSION['message']= $e->getMessage();
        header('location: ../index.php?message=incorect');

        //echo $e->getMessage();
    }
}


?>
