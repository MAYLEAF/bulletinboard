
<?php
  require("configure/bulletinboard.php");
  require("library/bulletinboard.php");
  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
  $result = mysqli_query($conn, "SELECT * FROM user");
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

         <main role="main">

           <section class="jumbotron text-center" style="margin-bottom: 0px;">
             <div class="container">
               <h1 class="jumbotron-heading">재능 검색하기</h1>

                 <form class="" action="index.php" method="get">
                   <label for="Search"></label>
                   <div class="row">
                       <input type="text" id="Search" name="Search" class="form-control col-10 col-sm-8 offset-sm-2 " placeholder="배우고 싶은 것을 검색하세요!">
                       <button type="submit" id="Searchbutton" name="button" class="btn btn-outline-secondary">검색</button>
                   </div>
                 </form>
              <p>
                 <a href="./cardcreate.php" class="btn btn-primary my-2">내 재능카드 만들기</a>
                 <a href="./bulletinboard.php" class="btn btn-secondary my-2">내가 원하는 재능 찾기</a>
               </p>
             </div>
           </section>

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
                   <div id="carousel2" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                       <div class="carousel-item active">
                         <img class="d-block w-100" src="../image/acousticguitar.jpg" alt="First slide">
                       </div>
                       <div class="carousel-item">
                         <img class="d-block w-100" src="../image/piano.jpg" alt="Second slide">
                       </div>
                       <div class="carousel-item">
                         <img class="d-block w-100 rounded img-thumbnail" src="../image/드럼.jpg" alt="Third slide" >
                       </div>
                     </div>
                     <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
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
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
   </body>
 </html>
