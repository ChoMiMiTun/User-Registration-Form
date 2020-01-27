<?php
require_once('config.php');
?>

<?php
 
 if(isset($_POST)){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $phonenumber = $_POST['phonenumber'];

    $sql = "INSERT INTO users (username, email, password, phonenumber) VALUE (?,?,?,?)";
    $stmtinsert = $dbh->prepare($sql);
    $result = $stmtinsert->execute([$username, $email, $password, $phonenumber]);
    if($result){
        echo "Successfully saved.";
    }else{
        echo "There was error while saving the data.";
    }

 }else{
     echo 'no data';
 }