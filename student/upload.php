<?php

$db=mysqli_connect('localhost','root');
mysqli_select_db($db,'vitcourselle');
if(isset($_POST['submit'])){
 $username=$_POST['username'];
 $file= $_FILES['file'];
 
 $fileName=$_FILES['file']['name'];
 $fileTmpName=$_FILES['file']['tmp_name'];
 $fileSize=$_FILES['file']['size'];
 $fileError=$_FILES['file']['error'];
 $fileType=$_FILES['file']['type'];
 
 $fileExt=explode('.',$fileName);
 $fileActualExt=strtolower(end($fileExt));
 
 $allowed=array('pdf','docx');
 if(in_array($fileActualExt,$allowed))
 {
  if($fileError === 0){
   if($fileSize<1000000)
   {
    $fileNameNew = uniqid('',true).".".$fileActualExt;
    $fileDestination = '../faculty/upload/'.$fileNameNew;
    move_uploaded_file($fileTmpName,$fileDestination);
   ?>
   <script>
alert("File uploaded successfully");
    window.open("assignmentupload.php");
</script>
   <?php
    
    $q="INSERT INTO `uploads`(`username`, `upload`) VALUES ('$username','$fileDestination')";
    $query = mysqli_query($db,$q);
    ?>
     
    
  
   <?php
  
   }
  
 }

}?>


<?php
}
?>
 
