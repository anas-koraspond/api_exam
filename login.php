<?php
// start session
  session_start();

    // get username and password from index page

    $username = $_POST['username'];
    $password = $_POST['password'];

    // api link
    $api = 'https://api.voltup.sa/beta/voltup_core/apis/api.login.php';

    // arrage post values
    $postValue = array(
        'input_username' => $username,
        'input_password' => $password
    );        

    // using curl to use the api connection
    $curl = curl_init($api);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postValue)); // submit the values collected from index page
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); // use the post method
    curl_setopt($curl, CURLOPT_VERBOSE, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION,true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1);
    $Response = curl_exec($curl); // run the curl
    curl_close($curl); // close curl
    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);   // get the response code 404,200

      //// 200- success
      if($http_code==200)
      {
        if ($Response === false) {
          header("location:index.php?error");
        }
        else
        {
          // conver the response to json decode
          $ResponseJson = json_decode($Response, true);       

          // check the reponse note is found// found means success
          if($ResponseJson['note']=="found")
         {
            /// get the response and save to session variables
            $_SESSION['id']=$ResponseJson['id'];
            $_SESSION['f_name']=$ResponseJson['f_name'];
            $_SESSION['l_name']=$ResponseJson['l_name'];
            $_SESSION['username']=$ResponseJson['username'];
            $_SESSION['session_key']=$ResponseJson['session_key'];
            $_SESSION['note']=$ResponseJson['note'];
            header("location:home.php"); // redirect to home page
          }
          else   // response 'note' not success
          {
            session_destroy();
            header("location:index.php?error"); // redirect to index page
          }
        }      
      }
      // http response faile
      else
      {
        header("location:index.php?error"); // redirect to index page
      }
      ?>
?>