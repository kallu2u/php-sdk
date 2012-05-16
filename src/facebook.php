< ?php  
  
   include_once "src/facebook.php";  
   $app_id = 'APPID';  
   $application_secret = 'APP SECRET';  
  
   $facebook = new Facebook(array(  
  'appId'  => $app_id,  
  'secret' => $application_secret,  
  'cookie' => true, // enable optional cookie support  
));  
  
    if ($facebook->getSession()) {  
    $user = $facebook->getUser();  
    $uid = $facebook->getUser();  
    $me = $facebook->api('/me/friends');  
    echo "Total friends".sizeof($me['data'])."";  
  
    echo " Friends collage 
 
";  
    foreach($me['data'] as $frns)  
    {  
    echo "<img src="\"https://graph.facebook.com/".$frns['id']."/picture\"" title="\"".$frns['name']."\"/">";  
  
}  
  
    echo " 
 
    By <a href="\"http://facebook.com/mjeyaganesh\""><img src="\"https://graph.facebook.com/1147530774/picture\"" title="\"Jeyaganesh\"/"></a>";  
  
    }  
    else {  
    $loginUrl = "https://graph.facebook.com/oauth/authorize?type=user_agent&display=page&client_id=APPID 
    &redirect_uri=http://apps.facebook.com/CANVAS URL/ 
    &scope=user_photos";  
    echo '<fb:redirect url="' . $loginUrl . '"></fb:redirect>';  
}  
  
?>  