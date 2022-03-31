<?php 
    session_start();  
    $_SESSION["confirmation"] = "random";
?>
<html>
<head>
  <title>csfr</title>
</head>
<body>
  <form name="loginForm">
     <input type="hidden" name="username" value="host">
     <input type="hidden" name="password" value="pass">
     <input type="hidden" name="confirmation" value="<?php echo 
$_SESSION["confirmation"] ?>">
  </form>
  <script>
      window.onload = function (){
          document.loginForm.action = "/csfr.php";
          document.loginForm.submit();
      }
    
  </script>
</body>
</html>
