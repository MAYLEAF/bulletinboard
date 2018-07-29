
        <div class="modal fade" id="article" tabindex="-1" role="dialog" aria-labelledby="articleLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="articleLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php
                  if(empty($_GET['cardid']) === false ) {
                    $sql = "SELECT user,begood,wannagood,day,`time`,homepage,region,memo,created FROM card WHERE cardid=1";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                ?>
                <h2><?php echo htmlspecialchars($row['begood'])?></h2>
                <p><?php echo htmlspecialchars($row['wannagood'])?></p>
                <?php
                    echo strip_tags($row['day'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                    echo strip_tags($row['time'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                    echo strip_tags($row['homepage'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                    echo strip_tags($row['region'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                    echo strip_tags($row['memo'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                    echo strip_tags($row['created'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                  }
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>





      	if (isset($_REQUEST['id'])) {

      		$id = intval($_REQUEST['id']);
      		$sql = "SELECT * FROM card WHERE cardid=".$id;
      		$result = mysqli_query($conn, $sql);
      		$row = mysqli_fetch_assoc($result);
      		extract($row);
      		?>

          <h2><?php echo htmlspecialchars($row['begood'])?></h2>
          <p><?php echo htmlspecialchars($row['wannagood'])?></p>
          <?php
              echo strip_tags($row['day'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
              echo strip_tags($row['time'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
              echo strip_tags($row['homepage'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
              echo strip_tags($row['region'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
              echo strip_tags($row['memo'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
              echo strip_tags($row['created'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
            }
