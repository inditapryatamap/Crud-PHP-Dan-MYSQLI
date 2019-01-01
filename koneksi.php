<?php
// host, user, password, nama database
$conn = mysqli_connect('localhost', 'root', '', 'andaglos_sekolah'); 

if (!$conn) {
    # code...
    die('ada eror' . mysqli_connect_error()); 
}
?>