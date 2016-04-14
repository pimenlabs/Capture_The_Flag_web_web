<a href="" data-toggle="modal" data-target=".bs-prices-modal-lg">Prices</a>
<div class="modal fade bs-prices-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container"><br>
         <div class="panel-primary col-sm-11">
            <div class="panel-heading">
              <h3 class="panel-title">Prices</h3>
            </div>
            <div class="panel-body ">
               <?php include 'conf/conf.php';
              $sql = mysql_query("SELECT * from prices ");
              while ($qq = mysql_fetch_array($sql)) {
                ?>
                <?php echo nl2br(stripslashes($qq['prices']));
               ?>

                <?php
                 } ?> 
            </div>
          </div>
       </div>

    </div>
  </div>
</div>