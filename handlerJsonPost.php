<?php
$user = $_POST["user"];
$data = $_POST["data"];

//TODO: add a timestamp or something
$myfile = fopen("uploads/testfile-$user.txt","w");
fwrite($myfile,$data);
fclose($myfile);

echo "Saved";
?>
