<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            font-family: Arial, sans-serif;
            background-color: white;
            background:url("https://wallpaperset.com/w/full/6/b/3/432452.jpg");
            background-position:center;
            background-size:cover;
            background-repeat:no_repeat;

        }
       .container {
            width: 300px;
            margin: 0 auto;
            background: #0eb7e6;
            padding: 20px;
            margin-top: 50px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px #888888;
       }
    </style>
</head>
<body>
<div class="container">
    <h2>Registration form </h2>
<form action="/create" method="post">
    @csrf
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="phone_number">Phone number</label>
    <input type="phone_number" id="phone_number" name="phone" required><br><br>
    
    <label for="gender">Gender</label>
    <label>
    <input type="radio" name="gender" value="male">
    Male
  </label>
  <label>
    <input type="radio" name="gender" value="female">
    Female
  </label>
    <br><br>

    <label for="language">Language</label>
    <select type="text"  name="language" required>
    <option value="ta">Tamil</option>
    <option value="ma">Malayalam</option>
    <option value="fr">French</option>
    <option value="en">English</option>
    </select>
    <br><br><br>


    <label for="zipc">Zip Code</label>
    <input type="zipc" id="zipc" name="zipc" required><br><br>

    <label for="about">About</label>
    <input type="about" id="about" name="about" required><br><br>

    <input type="submit" value="Register">
</form>
</div>
</body>
</html>

