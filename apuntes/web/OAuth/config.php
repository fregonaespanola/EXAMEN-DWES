<?php 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'dani2'); 
define('DB_PASSWORD', '1234'); 
define('DB_NAME', 'github'); 
define('DB_USER_TBL', 'users'); 
 
// GitHub API configuration 
define('CLIENT_ID', '4754e47d42ff5b78ef31'); 
define('CLIENT_SECRET', '686b2206f4761bec1fc22c02ab9bd293189094ae'); 
define('REDIRECT_URL', 'http://localhost:8000/github_login_with_php/'); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Include Github client library 
require_once 'Github_OAuth_Client.php'; 
 
// Initialize Github OAuth client class 
$gitClient = new Github_OAuth_Client(array( 
    'client_id' => CLIENT_ID, 
    'client_secret' => CLIENT_SECRET, 
    'redirect_uri' => REDIRECT_URL 
)); 
 
// Try to get the access token 
if(isset($_SESSION['access_token'])){ 
    $accessToken = $_SESSION['access_token']; 
}