<a href="" data-toggle="modal" data-target=".bs-score-modal-lg">Scoreboard</a>
<div class="modal fade bs-score-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container"><br>
         <div class="panel-info col-sm-11">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Scorebord</h3>
            </div>
            <div class="panel-body ">
              <div class="table-responsive">
  <table class="table">
<tr class="success">
<td>Rank</td>
<td>Player</td>
<td>waktu</td>
<td>Point</td>
</tr>
<?php include 'conf/conf.php';
$sql = mysql_query("SELECT user,point,waktu from score order by point + 0 desc");
$r=0;
while ($w = mysql_fetch_array($sql)) {
 $r++;
 ?>
<tr class="info">

<td><?php echo $r; ?></td>
<td><?php echo $w['user']; ?></td>
<td><?php echo $w['waktu']; ?></td>
<td><?php echo $w['point']; ?></td>

</tr>
<?php } ?>  
  </table>
</div>
            </div>
          </div></div>
       </div>

    </div>
  </div>
</div>