  <li><a href="" data-toggle="modal" data-target=".bs-profile-modal-lg">Profile</a>
<div class="modal fade bs-profile-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container"><br>
         <div class="panel-primary col-sm-11">
            
             <?php 
                $user = $hasil['username'];

  $ceknam = mysql_query("select email,hp from reg where username='$user'");
             
               ?>
               <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Mission Complete</h3>
      </div>
       <div class="panel-body">
  <?php         while ($pp =mysql_fetch_array($ceknam)) {
                ?>
                <table>
                  <tr><td>Nama : </td><td><?php   echo $hasil['username'];?></td></tr>
                  <tr><td>email :</td><td><?php   echo $pp['email'];?></td></tr>
                  <tr><td>hp :</td><td><?php   echo $pp['hp'];?></td></tr>
                </table>
                <?php
                }
         ?>
   </div>
        <ul class="list-group">
<?php    $klevelp = mysql_num_rows(mysql_query("select level from misi"));
              for ($asd=0; $asd < $klevelp ; $asd++) { 
               
               $cmplt =mysql_query("select clue,level,status.idmisi,point from status,misi where username='$user' and status='off' and misi.idmisi='$asd' and status.idmisi='$asd' order by idmisi asc") or die(mysql_error());
                while ($pos = mysql_fetch_array($cmplt)) {
                ?>

  <a href="#" class="list-group-item"><?php echo "Mission <b>".$pos['clue']."</b> point <b>".$pos['point']."</b> Level <b>".$pos['level']."</b>"; ?></a> 
                <?php  
                } 
           }
              ?>

</ul>
    </div>
            </div>
          </div>
       </div>

  </div>
</div></li>