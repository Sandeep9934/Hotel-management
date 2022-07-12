<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration  form</title>
    <link href="registration.css" rel="stylesheet">
</head>

<body>
    <div class="slide">
        <img src="image\9.jpg">
    </div>
    <form method="POST" action="config.php" class="form">
        <div class="front">
            <label for="customer">Dear customer!!!!</label>
            <label for="welcome"> We are delighted that you have selected our hotel. On behalf of the entire team at the MY HOTEL </label>
            <label for="Question"> extend you a very warm welcome and trust your stay with us will be both enjoyable and comfortable</label>
        </div>
        <fieldset class="down">
            <label>Name</label>
            <div class="name">
                <input type="text" name="name" required="required" placeholder="enter your name">
            </div>
            <label>EMail</label>
            <div class="email">
                <input type="email" name="email" required="required" placeholder="enter your email address">
            </div>
            <label>Phone</label>
            <div class="phone">
                <input type="num" name="phone" required="required" placeholder="enter your phone number">
            </div>
            <div class="gender">
                <label for="gender">Gender</label>
                <select name="gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <label>Password</label>
            <div class="password">
                <input type="password" name="password"   required="required"  placeholder="enter your password">
            </div>
            <div class="CPassword">
                <label for="cPassword">Conform password</label>
                <input type="password" name="cPassword" required="required"  placeholder="enter your conform password">
            </div>
            <div class="submit">
                <button type="submit" onclick="valid()" name="submit">Submit </button>
            </div>
        </fieldset>
    </form>
    <script  type="text/javascript" src="registration.js">
      
    </script>
</body>

</html>