
<?php
  require("configure/bulletinboard.php");
  require("library/bulletinboard.php");
  //get configuration file
  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
  $result = mysqli_query($conn, "SELECT * FROM card");
  //connect to mysqldb and make query for showing card
  session_start();
  //make session

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
         <div class="row">
           <div class="col-md-10">
             <img src="../image/logo.png" alt="">
           </div>
           <div class="col-sm-1">
             <?php  if(!isset($_SESSION['is_login'])){?>
               <div class="btn-group">
                 <a class="btn btn-outline-secondary btn-sm my-2" href="./auth/login.php" class="text-white">로그인</a>
                 <a class="btn btn-outline-secondary btn-sm my-2" href="./auth/signup.php" class="text-white">회원가입</a>
               </div>
             <?php } else {?>
               <div class="btn-group">
                 <a class="btn btn-outline-secondary btn-sm my-2" href="./auth/logout.php" class="text-white">로그아웃</a>
                 <a class="btn btn-outline-secondary btn-sm my-2" href="./userPage/userPage.php" class="text-white">개인정보</a>
               </div>
             <?php } ?>
           </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">지해는 잘하는 것을 다른 사람에게 알려주고, 그 대가로 그 사람이 잘하는 것을 배울 수 있는 커뮤니티입니다.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
     </header>

         <main role="main">

          <section class="jumbotron text-center" style="margin-bottom: 0px;">
            <div class="container">
              <h1 class="jumbotron-heading text-white">재능 검색하기</h1>
              <form class="" action="index.php" method="get">
                <label for="Search"></label>
                <div class="row">
                  <input type="text" id="Search" name="Search" class="form-control col-10 col-sm-8 offset-sm-2 " placeholder="배우고 싶은 것을 검색하세요!">
                  <button type="button" id="Searchbutton" name="serbutton" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#article">검색</button>
                </div>
              </form>
              <p>
                <a href="./cardcreate/cardcreate.php" class="btn btn-primary my-2">내 재능카드 만들기</a>
                <a href="./bulletinboard.php" class="btn btn-secondary my-2">내가 원하는 재능 찾기</a>
              </p>
            </div>
          </section>


          <div class="album py-5 bg-light">
            <div class="container">
              <div class="row">
                <?php
                  while( $row = mysqli_fetch_assoc($result)){
                ?>
               <div class="col-md-4">
                 <div class="card mb-4 box-shadow">
                   <div class="card-body">
                     <p class="card-text"> 잘하는 것:<br/><?php echo htmlspecialchars($row['begood']); ?><br/> 배우고 싶은 것:<br/><?php echo htmlspecialchars($row['wannagood']);?></p>
                     <div class="d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#article" data-id="<?php echo $row['cardid']; ?>" id="getcard">View</button>
                         <form class="" action="./cardedit/editcard.php" method="get">
                           <input type="hidden" name="editcard" class="form-control" value="<?php echo $row['cardid']; ?>" >
                           <input class="btn btn-sm btn-outline-secondary" type="submit" value="Edit">
                         </form>
                       </div>
                       <small class="text-muted"></small>
                     </div>
                   </div>
                 </div>
               </div>
                <?php }  ?>
              </div>
            </div>
          </div>

              <div class="col-md-9">
                <article>
                  <div class="modal fade" id="article" tabindex="-1" role="dialog" aria-labelledby="articleLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="articleLabel"></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div id="modal-loader" style="display: none; text-align: center;">
                           <img src="ajax-loader.gif">
                          </div>

                          <!-- content will be load here -->
                          <div id="dynamic-content"></div>

                        </div>
                        <div class="modal-footer">
                          <div class="btn-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form class="" action="./carddelete/deletecard_process.php" method="post">
                              <input type="hidden" name="deletecard" class="form-control" id="deletecard" value="">
                              <input type="submit" class="btn btn-danger" value="Delete"></button>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

            <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
              <div class="col-md-5 p-lg-5 mx-auto my-5">
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="../image/acousticguitar.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../image/piano.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../image/드럼.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>

         </main>

         <footer class="text-muted">
           <div class="container">
           </div>
         </footer>


     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     <script src="http://cdn.jsdelivr.net/mojs/latest/mo.min.js"></script>
     <script src="./js/modal.js"></script>

   </body>
 </html>
