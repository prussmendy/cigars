
<?php 
$host     = "localhost";
$user     = "root";
$password = "Bmdgb141220!";
$database = "cigars";
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else {
    //echo "Connected";
}

/*$query = 'SELECT count(username) FROM authorizedusers'; //WHERE username ='.$uname.'and pswd ='.$pswd;
$result = mysqli_query($mysqli,$query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);


	// Close Connection
	mysqli_close($mysqli);

        print_r($posts);
        
      /*  foreach($posts as $x => $value){
        echo $value['username'];
        if ($count==3){
            echo "Hello";
        }
        }*/
        
       /* foreach($posts as $x => $value){
        if ($value['count(username)'] == 4){
            echo "YESSSSSSS";
        }
        }
        
       /* if($posts[0]==4){
            echo "The best";
        }*/