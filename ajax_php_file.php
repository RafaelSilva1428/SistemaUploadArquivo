<?php
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png", "txt", "pdf", "doc", "zip", "rar");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);

if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") ||
($_FILES["file"]["type"] == "text/plain") || ($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/msword") ||
($_FILES["file"]["type"] == "application/x-rar-compressed") || ($_FILES["file"]["type"] == "application/zip") ||
($_FILES["file"]["type"] == "application/octet-stream")) && ($_FILES["file"]["size"] < 104857600)//Approx. 100Mb files can be uploaded.

&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <span id='invalid'><b>Arquivo existente na base.</b></span> ";
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
echo "<span id='success'>Upload de arquivo com Sucesso...!!</span><br/>";
echo "<br/><b>Nome do Arquivo:</b> " . $_FILES["file"]["name"] . "<br>";
echo "<b>Tipo:</b> " . $_FILES["file"]["type"] . "<br>";
echo "<b>Tamanho:</b> " . ($_FILES["file"]["size"] / 10240) . " Megabytes<br>";
echo "<a href='index.php'>Novo upload <img src='image/emoji1.png'/><img src='image/emoji2.png'/><img src='image/emoji3.png'/></a> ";
}
}
}
else
{
echo "<span id='invalid'>***Invalido o tamanho ou tipo de arquivo***<span>";
}
}
?>
