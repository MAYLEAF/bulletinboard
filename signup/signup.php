<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>지식의 바다 지해</title>
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
                     <a href="./signup.php" class="text-white">회원가입</a>
                     <a href="../login/login.php" class="text-white">로그인</a>
               </div>
             </div>
           </div>

    <main role="main" >
      <section class="jumbotron">

          <form class="col-md-4 mx-auto" action="signup_process.php" method="post">

            <div class="text-center">
              <img class="mb-4" src="../image/wave.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">회원가입</h1>
              <label for="email" class="sr-only">Email</label>
              <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="password" class="sr-only">Password</label>
              <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Enter your Password" required>
              <label for="dname" class="sr-only">name</label>
              <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Enter your Name" required>
              <label for="age" class="sr-only">age</label>
              <input type="number" id="inputAge" name="inputAge" class="form-control" placeholder="20" required>
            </div>

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-secondary active">
                <input type="radio" name="inputSex" id="inputSex" autocomplete="off" value="Male" checked> 남자
              </label>
              <label class="btn btn-secondary">
                <input type="radio" name="inputSex" id="inputSex" autocomplete="off" value="Female"> 여자
              </label>
            </div>

          <button class="btn btn-lg btn-block btn-primary btn-block" type="submit" value="login_process.php">회원가입</button>
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
