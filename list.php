
<div class="list-group">
  <a href="#" class="list-group-item active">
    List Mission
  </a> 
  <?php include '../conf/conf.php';
   $level = mysql_query("select level from kmisi");
   $jlevel = mysql_num_rows(mysql_query("select level from kmisi"));
   
   while ($plevel = mysql_fetch_array($level)) {
   $q[] = $plevel['level'];

   }
   for ($pl=0; $pl < $jlevel ; $pl++) { 
  
    ?>

      <h4 class="panel-title">
        <a data-toggle="collapse" class="list-group-item" data-parent="#accordion" href="#c<?php echo $pl ?>">
          <?php echo $q[$pl]; ?>

      <span class="badge"><?php 
      $kmisi = mysql_num_rows(mysql_query("select level from misi where level='$q[$pl]'"));
      echo $kmisi; ?></span></a>
      </h4>
    <div id="c<?php echo $pl ?>" class="panel-collapse collapse">

  <div class="panel panel-default">
      <div class="panel-body">
    
<?php 
 $kmisiwe = mysql_query("select clue,point from misi where level='$q[$pl]'");
     while ($kl = mysql_fetch_array($kmisiwe)) {
      ?>
  <h4 class="panel-title">
        <a data-toggle="collapse" class="list-group-item" data-parent="#accordion" href="#c<?php echo $pl ?>">
          <?php echo $kl['clue']; ?>

      <span class="badge"><?php 
     echo $kl['point']; ?></span></a>
      </h4>

      <?php
     }
 ?>
     </div></div>
  </div>
<?php } ?>