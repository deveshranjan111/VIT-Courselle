<?php
$db=mysqli_connect('localhost','root');
mysqli_select_db($db,'vitcourselle');
 $id = $_GET['id'];
$if(isset($id)){
  $q ="select * from uploads where id=?";
 $q->bindParam(1,$id);
 $stat->execute();
 $data = $stat->fetch();
 
 $file ='upload/'.$data['upload'];
 
 if(file_exists($file)){
  header('Content-Description:'. $data['description']);
  header('Content-Type:'. $data['type']);
  header('Content-Disposition:'. $data['disposition'].';upload="'.basename($file).'"');
  header('Expires: '. $data['expires']);
  header('Cache-Control:'. $data['cache']);
  header('Pragma:'. $data['pragma']);
  header('Content-Length:'.filesize($file));
  readfile($file);
  exit;
 }
}
?>
