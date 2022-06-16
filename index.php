<!-- Started at 1:30 6-16-2022 -->

<?php
  class Account {

    private $errorArray


    public function __constructor() {
      $this->
    }

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmail($em, $em2);
        $this->validatePasswords($pw, $pw2);
    }
    
    private function validateUsername($un) {

      if(strlen($un) > 25 || strlen($un) < 5) {
        
      }
      
    }
    
    private function validateFirstName($fn) {
      
    }
    
    private function validateLastName($ln) {
      
    }
    
    private function validateEmail($em, $em2) {
      
    }
    
    private function validatePasswords($pw, $pw2) {
      
    }

    
  }
?>

<?php

function sanitizeFormPassword($inputText) {
  $inputText = strip_tags($inputText);
  return $inputText;
}

function sanitizeFormUsername($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}

function sanitizeFormString($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}


if(isset($_POST['registerButton'])) {
  // Login button was pressed
  $username = sanitizeFormUsername($_POST['username']);
  $firstName = sanitizeFormString($_POST['firstName']);
  $lastName = sanitizeFormString($_POST['lastName']);
  $email = sanitizeFormString($_POST['email']);
  $email2 = sanitizeFormString($_POST['email2']);
  $password = sanitizeFormPassword($_POST['password']);
  $password2 = sanitizeFormPassword($_POST['password2']);

  $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
  
}


?>

<?php
  include("includes/classes/Account.php");

  $account = new Account();

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");
?>

<html>
<head>
  <title>Welcome to Slotify</title>
</head>
<body>

  <div id="inputContainer">
    <form id="loginForm" action="register.php" method="POST">
      <h2>Login to your account</h2>
      <p>
        <label for="loginUsername">Username</label>
        <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
      </p>
      <p>
        <label for="loginPassword">Password</label>
      <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
      </p>

      <button type="submit" name="loginButton">LOG IN</button>
      
    </form>



    <form id="registerForm" action="register.php" method="POST">
      <h2>Create your free account</h2>
      <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
      </p>

      <p>
        <label for="firstName">firstName</label>
        <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" required>
      </p>

      <p>
        <label for="lastName">lastName</label>
        <input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" required>
      </p>

      <p>
        <label for="email">email</label>
        <input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" required>
      </p>

      <p>
        <label for="email2">Confirm email</label>
        <input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" required>
      </p>

      <p>
        <label for="password">Password</label>
      <input id="password" name="password" type="password" placeholder="Your password" required>
      </p>
      
      <p>
        <label for="password2">Confrim password</label>
      <input id="password2" name="password2" type="password" placeholder="Your password" required>
      </p>

      <button type="submit" name="registerButton">SIGN UP</button>
      
    </form>

    
  </div>

</body>
</html>

<html>
<head>
    <title>Welcome to Slotify</title>
</head>
  
<body>
    Hello!
</body>
  
</html>

<!-- Ended at 5:45 6-14-2022 -->
