<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method= "POST" action="" enctype= "multipart/form-data">
            <h3>Subir Archivo</h3>
            <input type="file" name="archivo" id=""><br>
            <input type="submit" value="Subir Archivo" name="boton">
        </form>
        <?php
$formatos = array('.jpg', '.png', '.bmp');
$directorio = 'upload/';
if (isset($_POST['boton'])){
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
	$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
	if (in_array($ext, $formatos)){
		if (move_uploaded_file($nombreTmpArchivo, "upload/$nombreArchivo")){
			echo "<h4>Archivo Subido Exitosamente</h4><br>";
		}
	}else{
		echo "Tipo de archivo equivocado<br>";
    }
}
?>

</body>
</html>
<?php
$folder_path = 'upload/'; 
$num_files = glob($folder_path . "*.{JPG,jpeg,gif,png,bmp}", GLOB_BRACE);
$folder = opendir($folder_path); 
if($num_files > 0){
 while(false !== ($file = readdir($folder)))  {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') {
    ?>
 <a href="<?php echo $file_path; ?>" target="_blank"><img class="lazy" src="<?php echo $file_path; ?>" alt="" title=""></a>

     <?php 
  }}}
?>   