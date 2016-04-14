
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container"><br>
         <div class="panel-primary col-sm-11">
            <div class="panel-heading">
              <h3 class="panel-title">Form Registrasi</h3>
            </div>
            <div class="panel-body ">
              <form id="myForm" role="form" action="" method="post">
  <div class="form-group ">
    <label for="Username">Username</label>
    <input type="text" class="form-control" name="user" id="Username" required placeholder="Enter Username">
  </div>  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="pass" id="Password" required placeholder="Enter Password">
  </div>
<div class="form-group">
    <label for="cPassword">Confirm Password</label>
    <input type="password" class="form-control" name="cpass" id="cPassword" required placeholder="Enter Confirm Password">
  </div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" id="email" required placeholder="Enter E-mail">
  </div>
<div class="form-group">
    <label for="hp">Handphone</label>
    <input type="hp" class="form-control" name="hp" id="hp" required placeholder="Enter Number Hp">
  </div>
<div class="form-group">
    <label for="hp">Code Verfikasi : 
   <img src="cap.php">  
    <input type="hp" class="form-control" name="chap" id="chap" required placeholder="Enter code verification">
  </div>
  <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin data anda benar?')">Daftar</button>

 <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
</form>
<?php 
include 'conf/conf.php';
if (isset($_POST['user'])) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];
  $email = $_POST['email'];
  $hp = $_POST['hp'];
  $Verfikasi = $_POST['chap'];
   $waktu  = date("Y-m-d H:i:s");

  if ($pass == $cpass) {
    $cek = mysql_num_rows(mysql_query("SELECT username from reg where username='".mysql_real_escape_string($user)."'"));
      if ($cek > 0 ) {
           echo "<script>alert('Duplicate Username');</script>"; 
            echo "<script>document.location.href='index.php';</script>"; 
                        
      }else{
        if ($Verfikasi == $_SESSION['captcha_session'] ) {
          
          $pwd = $pass;
         //  $mysi = mysql_query("INSERT into status values ('$user','1','on')");       
      $sql  = mysql_query("INSERT INTO reg VALUES ('".mysql_real_escape_string($user)."','".mysql_real_escape_string($pwd)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($hp)."',1)");
      $score = mysql_query("INSERT into score values ('','".mysql_real_escape_string($user)."','0','$waktu','1')");

$cekbro = mysql_num_rows(mysql_query("SELECT * from status where username='".mysql_real_escape_string($user)."' and status='on'"));
$cekbro1 = mysql_num_rows(mysql_query("SELECT idmisi from misi"));

          if ($cekbro < 1) {
              for ($mn=1; $mn <= $cekbro1 ; $mn++) { 
                    $mysi = mysql_query("INSERT into status values ('".mysql_real_escape_string($user)."','$mn','on')");        
              }
            }

            if ($sql) {
              echo "<script>alert('You successfully Registrasion');</script>";
                  echo "<script>document.location.href='index.php';</script>"; 
                              
            }else{
                echo "<script>alert('Please Try Again !!');</script>";
                    echo "<script>document.location.href='index.php';</script>"; 
                              
            }
        }else{
                echo "<script>alert('SIlahkan massukkan Code verifikasi yang benar  !!');</script>";
          
        }
      }
  }else{
   echo "<script>alert('Please Check !! Password Combination');</script>
    ";
        echo "<script>document.location.href='index.php';</script>"; 
                        
 
}
}
 ?>


            </div>
          </div>
       </div>

    </div>
  </div>
</div>
