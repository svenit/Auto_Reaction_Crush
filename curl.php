<?php
 set_time_limit(0);
 error_reporting(0);

 define('ACCESS_TOKEN','');
 define('CRUSH_USER_ID','');
 define('GRAPH_URL', 'https://graph.fb.me/');

 $list_reaction = ['LIKE','LOVE','WOW','HAHA','ANGRY'];
 $rand_reaction = $list_reaction[array_rand($list_reaction)];

 $post = json_decode(request(GRAPH_URL.CRUSH_USER_ID.'/posts?fields=id&limit=1&access_token='.ACCESS_TOKEN),true);
 $first_post_id = $post['data'][0]['id'];

 $logpost = file_get_contents('log.txt');
 if(strpos($logpost, $first_post_id) === FALSE){
 	$run_curl = request(GRAPH_URL.$first_post_id."/reactions?type=".$rand_reaction."&method=POST&access_token=".ACCESS_TOKEN);
 	$log = fopen('log.txt', 'a');
 	fwrite($log, "POSTID : $first_post_id - REACTION TYPE : $rand_reaction");
 	fclose($log);
 	$check_data = json_decode($run_curl,true);
 	if($check_data['success'] == 'true'){
 		echo "SUCCESS !!! <br> POST ID : $first_post_id - REACTION TYPE : $rand_reaction ";
   echo "<p>LINK REVIEW : <a href='https://facebook.com/$first_post_id' target='_blank'> HTTPS://FACEBOOK.COM/$first_post_id</a></p>";
 	}
 	else{
 		echo "FAIL !!! <br> POST ID : $first_post_id - REACTION TYPE : $rand_reaction ";
 	}
 }
 else{
 	echo "REACTED !!!";
 }
 exec("php curl.php");

 function request($url){
 	$ch = curl_init();
 	CURL_SETOPT($ch, CURLOPT_URL, $url);
 	CURL_SETOPT($ch,CURLOPT_HEADER,0);
 	CURL_SETOPT($ch,CURLOPT_FOLLOWLOCATION,1);
 	CURL_SETOPT($ch,CURLOPT_ENCODING,'');
 	CURL_SETOPT($ch,CURLOPT_TIMEOUT,15);
 	CURL_SETOPT($ch,CURLOPT_MAXREDIRS,5);
 	CURL_SETOPT($ch, CURLOPT_RETURNTRANSFER, 1);
 	CURL_SETOPT($ch, CURLOPT_SSL_VERIFYPEER, 0);
 	CURL_SETOPT($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.87 Safari/537.36');
 	CURL_SETOPT($ch,CURLOPT_SSL_VERIFYHOST,2);
 	$response = curl_exec($ch);
 	return($response);
 	curl_close($ch);
 }
?>
