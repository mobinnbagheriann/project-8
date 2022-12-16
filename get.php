<?php
if(isset($_POST['fname'])){
$name = "Name:".$_POST['fname']."
";
$email = "Email:".$_POST['email']."
";
$message = "Message:".$_POST['massage']."
";
$fileCount = count (glob ('file*.txt'));
$newName = 'file' . ( $fileCount + 1) . '.txt';
$file=fopen($newName, "a");
fwrite($file, $name);
fwrite($file, $email);
fwrite($file, $message);
fclose($file);
}
?>