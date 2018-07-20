
<?php
require("configure/bulletinboard.php");
require("library/bulletinboard.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM card");
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>지식의 바다, 지해</title>
  </head>
  <body>
     <header>
       <div class="bg-dark" >
         <div class="container">
           <div class="row">
             <div class="col-sm-8 col-md-7 py-4">
               <h4 class="text-white">About</h4>
               <p class="text-muted">지해는 잘하는 것을 다른 사람에게 알려주고, 그 대가로 그 사람이 잘하는 것을 배울 수 있는 커뮤니티입니다.</p>
             </div>
             <div class="col-sm-4 offset-md-1 py-4">
               <h4 class="text-white">Contact</h4>
               <ul class="list-unstyled">
                 <li><a href="#" class="text-white">Follow on Twitter</li>
                 <li><a href="#" class="text-white">Like on Facebook</li>
                 <li><a href="#" class="text-white">Email me</li>
               </ul>
             </div>
           </div>
         </div>
           <div class="row">
             <div class="col-1 col-md-2 offset-md-10 py-4">
               <a href="./login.php" class="text-white">Signin</a>
               <a href="./signup.php" class="text-white">Signup</a>
           </div>
         </div>
       </div>
     </header>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
             <?php
               while( $row = mysqli_fetch_assoc($result)){

                  echo '<div class="col-md-4"><div class="card mb-4 box-shadow"><div class="card-body">';
                  echo '<p class="card-text"> 잘하는 것:<br/>'.htmlspecialchars($row['begood']).'<br/>배우고 싶은 것:<br/>'.htmlspecialchars($row['wannagood']).'</p>'."\n";
                  echo ' <div class="d-flex justify-content-between align-items-center"><div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#article">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                  </div>
                                  <small class="text-muted">9mins</small>
                                </div>
                              </div>
                            </div>
                          </div>';
                  $card=$row['cardid'];
                        }
                ?>
              </div>
            </div>
          </div>

    <div class="col-md-9">

      <article>
      <?php
    echo'  <div class="modal fade" id="article" tabindex="-1" role="dialog" aria-labelledby="articleLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="articleLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">';

                  if(empty($_GET['cardid']) === false ) {
                      $sql = "SELECT user,begood,wannagood,day,`time`,homepage,region,memo,created FROM card WHERE cardid=".$card;
                      $result = mysqli_query($conn, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo '<h2>'.htmlspecialchars($row['begood']).'</h2>';
                      echo '<p>'.htmlspecialchars($row['wannagood'
                      ]).'</p>';
                      echo strip_tags($row['day'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                      echo strip_tags($row['time'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                      echo strip_tags($row['homepage'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                      echo strip_tags($row['region'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                      echo strip_tags($row['memo'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
                      echo strip_tags($row['created'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');

                  }
                  echo '  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>';


      ?>
      </article>
      <hr>

     </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
