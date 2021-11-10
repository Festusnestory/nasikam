<?php // RAY_curl_post_example.php
error_reporting(E_ALL);

    function curl_post($url, $post_array, $timeout=2, $error_report=FALSE)
    {
        // PREPARE THE POST STRING
        $post_string = '';
        foreach ($post_array as $key => $val)
        {
            $post_string .= urlencode($key) . '=' . urlencode($val) . '&';
        }
        $post_string = rtrim($post_string, '&');

        // PREPARE THE CURL CALL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,            $url);
        curl_setopt($curl, CURLOPT_HEADER,         FALSE);
        curl_setopt($curl, CURLOPT_POST,           TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS,     $post_string);
        curl_setopt($curl, CURLOPT_TIMEOUT,        $timeout);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    //echo $url.$post_string;
        // EXECUTE THE CURL CALL
        $htm = curl_exec($curl);
        $err = curl_errno($curl);
        $inf = curl_getinfo($curl);
        curl_close($curl);

        // ON FAILURE
        if (!$htm)
        {
            // PROCESS ERRORS HERE
            if ($error_report)
            {
                echo "CURL FAIL: $url TIMEOUT=$timeout, CURL_ERRNO=$err";
                echo "<pre>\n";
                var_dump($inf);
                echo "</pre>\n";
            }
            return FALSE;
        }

        // ON SUCCESS
        return $htm;
    }

    function DownloadTextFile($file="Z:/home/nsea.na/www/test/source.txt", $Localfilename="Z:/home/nsea.na/www/test/test.txt")
    {
            header('Content-type: text/plain');
            header('Content-Length: '.filesize($file));
            //header('Content-Disposition: attachment; filename='.$file);
            $content = file_get_contents($file, true);
            file_put_contents($Localfilename, $content);
            //echo $content;
            /*//readfile($file);
            header("X-Sendfile: $file");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$Localfilename\"");*/
    }

    /* 
    * Returns string status information. 
    * Can be changed to int or bool return types. 
    */ 
    function cURLdownload($url, $file) 
    { 
      //if( !cURLcheckBasicFunctions() ) return "UNAVAILABLE: cURL Basic Functions"; 
      $ch = curl_init(); 
      if($ch) 
      { 
        $fp = fopen($file, "w"); 
        if($fp) 
        { 
          if( !curl_setopt($ch, CURLOPT_URL, $url) ) 
          { 
            fclose($fp); // to match fopen() 
            curl_close($ch); // to match curl_init() 
            return "FAIL: curl_setopt(CURLOPT_URL)"; 
          } 
          if( !curl_setopt($ch, CURLOPT_FILE, $fp) ) return "FAIL: curl_setopt(CURLOPT_FILE)"; 
          if( !curl_setopt($ch, CURLOPT_HEADER, 0) ) return "FAIL: curl_setopt(CURLOPT_HEADER)"; 
          if( !curl_exec($ch) ) return "FAIL: curl_exec()"; 
          curl_close($ch); 
          fclose($fp); 
          return "SUCCESS: $file [$url]"; 
        } 
        else return "FAIL: fopen()"; 
      } 
      else return "FAIL: curl_init()"; 
    } 

    // USAGE EXAMPLE CREATES ASSOCIATIVE ARRAY OF KEY=>VALUE PAIRS
    $args["app"] = 'ws';
    $args["h"]  = 'e88cc4e924f682afc3700a01171ec03a';
    $args["u"]  = 'firstcapital';
    $args["op"]  = 'pv';
    $args["msg"]  = $sendBackMsg;
    // $args["type"]  = 'text';
    $args["to"]  = $sender;

    // ACTIVATE THIS TO SEE THE ARRAY OF ARGS
    // var_dump($args);

    // SET THE URL
    $url = "http://portal.it.na/index.php";
    // $url = "http://portal.it.na/index.php?app=webservices&u=natsoftacademy&h=&op=pv&to=CELL-NUMBER&msg=MESSAGE";

    // CALL CURL TO POST THE EATA
    $htm = curl_post($url, $args, 8, TRUE);
    if (!$htm) echo("NO $url");
    // SHOW WHAT CAME BACK
    // echo "<pre>";
    // echo htmlentities($htm);
    //DownloadTextFile();