<?php
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$calender=$_POST["calender"];
$gender=$_POST["gender"];
$file=$_FILES["Document"]["name"];
$filesize=$_FILES["Document"]["size"];
$filetype=pathinfo($file,PATHINFO_EXTENSION);
$file_tmp=$_FILES["Document"]["tmp_name"];

if(isset($_FILES["Document"]))
{
    if($filesize>=100)
    {
        echo "Filesize is:-".$filesize."<br>";
    }
    else
    { 
        echo "Chose the correct file size<br>";
    }
    if(move_uploaded_file($file_tmp,"docx/".$file))
    {
    echo "File uploaded Succesfully<br>";
    }
    else
    {
        echo "File are not uploaded<br>";
    }
}
$file_name=$_FILES["uploadfile"]["name"];
$file_size=$_FILES["uploadfile"]["size"];
$file_type=pathinfo($file_name,PATHINFO_EXTENSION);
$tmp=$_FILES["uploadfile"]["tmp_name"];
if(isset($_FILES["uploadfile"]))
{
    if($file_size>=100)
    {
        echo "Your file size:-".$file_size."<br>";
    }
    else{
    echo "Chose the correct Image file<br>";
    }

    if(move_uploaded_file($tmp,"pic/".$file_name))
    {
    echo "Image file uploaded succesfully<br>";
    }
    else
    echo "Image file are not uploaded<br>";
}
$select=$_POST["select"];
// $f=$_FILES["Document"]["name"];
// $temp=$_FILES["Document"]["tmp_name"];
move_uploaded_file($filetype,"docx/".$file);
echo "First Name is:-".$name."<br>";
echo "Last Name is:-".$lastname."<br>";
echo "Your Date of Birth:-".$calender."<br>";
echo "Gender is:-".$gender."<br>";
echo "Files name:-".$file."<br>";
echo "your file type :-".$filetype."</br>";
echo "Files name:-".$file_name."<br>";
echo "your file type :-".$file_type."</br>";
//echo "Your idproof file name:-".$f."<br>";
echo "select the id Proof :-".$select."</br>";
?>
