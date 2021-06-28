<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
    <form action="" method="post">
       <h2>Sign-Up Form</h2>
       <!-- Username  Field-->
       <div class="form-control">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter Username" />
            <small>Error Message</small>
       </div>
        <!-- Email -->
       <div class="form-control">
            <label for="email">Eamil</label>
            <input type="text" name="email" id="email" placeholder="Enter Email" />
            <small>Error Message</small>
       </div>
        <!-- Password -->
       <div class="form-control">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Enter Password" />
            <small>Error Message</small>
       </div>
        <!-- Confirm Password -->
       <div class="form-control">
            <label for="password2">Confirm Password</label>
            <input type="text" name="password2" id="password2" placeholder="Re-Enter Password to Confirm" />
            <small>Error Message</small>
       </div>
    </form>
    </div>
</body>
</html>