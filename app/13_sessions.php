<!-- /* Sessions are a way to story information (in Variables) to be used 
across multiple pages. 
Unlike cookeis , seeeions are stored on the server 
*/ -->
<?php 
session_start();

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
if($username == 'kool' && $password == 'password'){
    $_SESSION['username'] = $username;
    header('Location: app/extrats/dashboard.php');
    exit();
}else{
    echo 'InCorrect Login';
}
}

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="imgcontainer">
   </div>

  <div class="container">
    <label for="username"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">submit</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
