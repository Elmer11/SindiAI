<!-- Uploads image of user in server and gives a special ID -->
<?php
# TODO
# Set up python script for face recognition in image

	function random_str(
       int $length = 64,
       string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
   ): string {
       if ($length < 1) {
           throw new \RangeException("Length must be a positive integer");
       }
       $pieces = [];
       $max = mb_strlen($keyspace, '8bit') - 1;
       for ($i = 0; $i < $length; ++$i) {
           $pieces []= $keyspace[random_int(0, $max)];
       }
       return implode('', $pieces);
   }
   $uploaded = 0;
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $temp = explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($temp));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $faceHash = random_str(5);
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"users/faces/".$faceHash.'.'.$file_ext);
         #if(){ # Run python script
          echo "Please wait while I recognise your face!";
         }
         $uploaded = 1;
         ?>
         <p>This is your FaceHash: <span><?php echo $faceHash; ?></span><br>This will be used when you activate the face-recognition functions.</p>

         <?php
      #}
      else{
         print_r($errors);
      }
   }
?>
	
