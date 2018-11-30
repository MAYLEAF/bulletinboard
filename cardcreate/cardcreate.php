
<?php
require("../configure/bulletinboard.php");
require("../library/bulletinboard.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM user");
session_start();
if(!isset($_SESSION['is_login'])){
    header('Location: ../login/login.php');
}
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
          <div class="col-sm-1 offset-md-10">
            <div class="btn-group">
              <a class="btn btn-outline-secondary btn-sm my-2" href="../login/login.php" class="text-white">로그인</a>
              <a class="btn btn-outline-secondary btn-sm my-2" href="../signup/signup.php" class="text-white">회원가입</a>
            </div>
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


    <main role="main" >
      <section class="jumbotron">

          <form class="col-md-4 mx-auto" action="cardcreate_process.php" method="post">

            <div class="text-center">
              <img class="mb-4" src="../../image/wave.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal text-info">내 재능카드 만들기</h1>

              <label for="inputBegood" class="sr-only">inputBegood</label> <input type="text"  id="inputBegood" name="inputBegood" class="form-control" placeholder="본인이 다른 사람에게 가르쳐줄 수 있는 것을 적어주세요." required>
              <label for="inputWannagood" class="sr-only">Wannagood</label> <input type="text"  id="Wannagood" name="Wannagood" class="form-control" placeholder="본인이 다른 사람으로부터 배우고 싶은 것을 적어주세요." required>

              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active"> <input type="checkbox" name="inputDay0" id="inputDay0" autocomplete="off" value="월" checked> 월요일 </label>
                <label class="btn btn-secondary"> <input type="checkbox" name="inputDay1" id="inputDay1" autocomplete="off" value="화"> 화요일 </label>
                <label class="btn btn-secondary"> <input type="checkbox" name="inputDay2" id="inputDay2" autocomplete="off" value="수"> 수요일 </label>
                <label class="btn btn-secondary"> <input type="checkbox" name="inputDay3" id="inputDay3" autocomplete="off" value="목"> 목요일 </label> <label class="btn btn-secondary"> <input type="checkbox" name="inputDay4" id="inputDay4" autocomplete="off" value="금"> 금요일 </label> <label class="btn btn-secondary"> <input type="checkbox" name="inputDay5" id="inputDay5" autocomplete="off" value="토"> 토요일 </label>
                <label class="btn btn-secondary"> <input type="checkbox" name="inputDay6" id="inputDay6" autocomplete="off" value="일"> 일요일 </label>
              </div>

              <label for="inputTime" class="sr-only">inputTime</label> <input type="text"  id="inputTime" name="inputTime" class="form-control" placeholder="그 요일에 괜찮은 시간대를 적어주세요." required>
              <label for="inputHomepage" class="sr-only">inputHomepage</label> <input type="text"  id="inputHomepage" name="inputHomepage" class="form-control" placeholder="강연 예시 영상이 담긴 주소를 적어주세요." >
              <label for="inputRegion" class="sr-only">inputRegion</label> <input type="text"  id="inputRegion" name="inputRegion" class="form-control" placeholder="본인 선호하는 지역을 적어주세요." required>
              <label for="inputMemo" class="sr-only">inputMemo</label> <input type="text"  id="inputMemo" name="inputMemo" class="form-control" placeholder="메모하고 싶은 내용을 적어주세요.ex) 개인기타 구비하셔야합니다." >

            </div>

          <button class="btn btn-lg btn-block btn-primary btn-block" type="submit" value="login_process.php">내 카드 등록</button>
          <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
      </form>

      </section>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
