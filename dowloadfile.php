
<?php
$nameFile = "hinh1.jpg"; // thay đổi tên file từ csdl tại đây
$FileExtension = explode(".",$nameFile)[count(explode(".",$nameFile))-1];
$file_url = $_SERVER['DOCUMENT_ROOT'].'/downloadfile/files/'.$nameFile;
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=file-".md5(rand(0,1000)).".".$FileExtension); 
readfile($file_url);
?>
