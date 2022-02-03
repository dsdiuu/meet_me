<?PHP
$login=$_POST['login'];
$password=$_POST['password'];
$passwords=$_POST['passwords'];

//registration of account
$servername = "localhost";
     $username = "root";
     $password = "";
     $db="meet_me_db";
 
     $conn = mysqli_connect($servername, $username, $password, $db);
     if($result=$conn->query("SELECT * FROM users WHERE login='$login'")){
        $i=mysqli_num_rows($result);
        if($i>0){
            echo"This login allready exist, please choose another one.";
        }else{         
            $conn->query("INSERT INTO `users`(`id`, `login`, `password`) VALUES (NULL,'$login','$passwords')");
            echo"We've created an account, now you can make your first sign in!";
        }
     }else{
        echo"Server error, pleas try again later.";
     }

 /*
*/
?>