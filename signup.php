<!-- This is a Sign up page where user can login with their email and password to access the information of Site (i.e Travel.com) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration page</title>
    <style>
        body{

            background: url("pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg");
        }

        a{
            position: relative;
           bottom: 110px;
           left: 250px;
           font-size: 13px;
           text-decoration: none;
        }

        .bigbox1{

            border: 1px solid rgb(209, 221, 235);
            border-radius: 44px;
            margin-top: 12px;
            padding-bottom: -50px;
            padding-left: 4vw;
            margin-left: 12px;
            margin-right: 65vw;
            background-color: rgb(209, 221, 235);
            opacity: 0.84;
        }

        #btn1{
            position: relative;
            left: 12vw;
            bottom: 15px;
            border: 1px solid white;
            border-radius: 4px;
            background-color: rgb(225, 250, 187);
        }
       


        #email, #pass{
            border: 1px solid white;
            border-radius: 8px;
            width: 280px;
            margin-left: 25px;
        }

        #email{
            margin-left: 55px;
            width: 250px;
        }

   


           #pass{

            width: 250px;
        } 
    </style>
</head>

<body>
   <?php require('_nav.php') ?>
   <div class="bigbox1">

        <form action="load.php" method="post">

            <fieldset class="box1">
                <br><br>
                <h2> Welcome to TravelWorld.Com</h2>
                <br><br>
                <h5>Sign Up here</h5>
                <br><br>
               
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter Email ID">
                   <br><br>
                <label for="pass">Password:</label>
                <input type="password" name="pass" id="pass" placeholder="Enter your password"> 
                <br><br>
               
                <br><br>
                <button type="submit" id="btn1">Log In</button>
                <br><br>
                <a href="index.php">Don't registered yet?</a>


            </fieldset>

        </form>
    


 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>