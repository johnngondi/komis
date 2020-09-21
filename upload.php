<?php

require 'model/dbfunctions.php';

//Just a session exists
if (!isset($_SESSION)) {
    header("Location: restricted.php");
    die('No appropriate rights to access the file');
}


require 'model/datafunctions.php';

$src = "";
$user = $_GET['user'];
if (isset($_GET['src'])) {
    $src=$_GET['src'];
}

$errocode = 4;

$conn = dbconnect();

if ($conn) {
     $idno = $_GET['idno'];
        $target_dir = "images/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;

                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    $errocode = 3;//big file size more than 0.5M
                    $uploadOk = 0;

                        $path = $src.".php?errocode=$errocode&&idno=$idno&&user=$user";
                        header("location:$path");
                }

            } else {
                $errocode = 1;//file not image
                $uploadOk = 0;

                $path = $src.".php?errocode=$errocode&&idno=$idno&&user=$user";
                header("location:$path");
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $errocode = 2;//file Exists
            $uploadOk = 0;

                $path = $src.".php?errocode=$errocode&&idno=$idno&&user=$user";
                header("location:$path");
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $errocode = 3;//big file size more than 0.5M
            $uploadOk = 0;

                $path = $src.".php?errocode=$errocode&&idno=$idno&&user=$user";
               // header("location:$path");
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "JPEG" ) {
            $errocode = 4;//format not ok
            $uploadOk = 0;

            $path = $src.".php?errocode=$errocode&&idno=$idno&&user=$user";
            header("location:$path");
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $filename = basename($_FILES["fileToUpload"]["name"]);
                
                if ($user == "pat") {
                    $table = "pattable";
                }else{
                    $table = "stafftable";
                }
                $set = addImage($conn,$filename,$idno,$table);
                if ($set) {
                    $errocode = 5;
                    $path = $src.".php?errocode=$errocode&&idno=$idno&&ppic=$filename&&user=$user";
                    header("location:$path");
                }
            } else {
                $path = $src.".php?errocode=$errocode&&idno=$idno&&user=$user";
                header("location:$path");
            }
        }   
}

?>