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

      <main role="main" class="jumbotron">

        <section class="text-center">
          <form class="col-md-4 mx-auto" action="login_process.php" method="post">
            <img class="mb-4" src="../../image/wave.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal text-info">로그인</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="inputEmail"  class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="login_process.php">로그인</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
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
