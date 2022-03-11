<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container bg-white ">
  <h4 class="pt-3"> <span>|</span> E-classe</h4> 
  <h5 class="text-center">SIGN IN</h5>
  <p class="text-muted text-center">Enter your credentials to acces your account</p>
  <form>
    <div class="mb-3 mt-3">
      <label class="text-secondary" for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="d-grid"><a href="dashboard.php" class="mb-3 btn w-100 rounded-3 text-white fs-6" style="background:#00C1FE;">SIGN IN</a></div>
  </form>
  <p class="text-muted text-center pb-3">Forgot your password?<span>Reset password</span></p>
</div>



</body>
</html>