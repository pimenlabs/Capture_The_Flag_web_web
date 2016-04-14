<!--misi-->
 <form role="form" action="" method="post">
  
   <div class="form-group ">
    <label for="Username"><?php echo $po['soal']; ?></label>
  </div> 

  <div class="form-group ">
    <input type="text" class="form-control" name="pmn<?php echo $po['no'];?>"  required placeholder="Input Your Answers !!">
  </div>
  <button type="submit" class="btn btn-primary">Cek</button>
</form>
<!-- batas misi -->
<?php 
 include 'conf/conf.php';
 $sql100 = mysql_query("SELECT * from misi where idmisi='$idmisi[$i]'");
 while ($lol =mysql_fetch_array($sql100)) {
  $sqk = $lol['answer'];
 
$pmn = "pmn";
$asw=$pmn.$po['no'];
$lo= $po['point'];
$idmisi = $po['no'];
$waktu  = date("Y-m-d H:i:s");

if (isset($_POST[$asw])) {
 $jwbn = $_POST[$asw];
 }
 if (($sqk == $_POST[$asw])) {
    $sql0= mysql_query("UPDATE misi set status='off' where idmisi='$idmisi' and answer='$jwbn'");
          $misi = mysql_query("UPDATE score set point=point+'$lo',idmisi='$idmisi', waktu='$waktu' where user='$user'");
      
      if ($sql0) {
          echo "<script>alert('Mantab Bro !!');</script>"; 
         echo "<script>document.location.href='index.php';</script>"; 
           
      }else{ 
           echo "<script>alert('kampret Bro !!');</script>"; 
         echo "<script>document.location.href='index.php';</script>"; 
           }

    
 }
}      

 ?>  