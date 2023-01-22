<?php
$con = mysqli_connect('localhost', 'root');
if($con){
    echo "Connection Successfully established";
}else{
    echo "No connection";
}
mysqli_select_db($con, 'itpdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into uidata (user, email, mobile, comment) value('$user','$email','$mobile','$comment')";
mysqli_query($con, $query);

header('location:index.php')
?>