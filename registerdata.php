<?php
$con = mysqli_connect('localhost', 'root');
if($con){
    echo "Connection Successfully established";
}else{
    echo "No connection";
}
mysqli_select_db($con, 'itpdata');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cid = $_POST['cid'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];
$dob = $_POST['dob'];
$sem = $_POST['sem'];
$doc = $_POST['doc'];

$query = " insert into registerdata (fname, lname, cid, mob, email, pswd, dob, sem, doc) value('$fname','$lname','$cid', '$mob', '$email', '$pswd', '$dob', '$sem', '$doc')";
mysqli_query($con, $query);

header('location:index.php')
?>