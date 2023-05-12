<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container" style="margin-top: 75pt;">
    <div class="row">
      <div class="col">
        <div class="card w-50 mx-auto">
          <h5 class="card-header">Halaman login</h5>
          <div class="card-body">
            <form method="POST" action="auth_login.php">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="txtUsername">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="txtPassword">
              </div>
              <button type="submit" class="btn btn-primary w-50" style="display:block; margin:auto;">Login</button>
            </form>
            <div class="mb-3 mt-3">
              <center>
                <a class="form-label" href="lupa_password.php" style="color:blue;">Lupa Password</a>
              </center>
            </div>
            <div class="mb-3 mt-5">
              <center>
                <p class="form-label">Belum memiliki akun? <a class="form-label" href="daftar.php" style="color:blue;">Daftar</a></p>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>