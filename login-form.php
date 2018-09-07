<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body,
        html {
            height: 90%;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .bg-img {
            /* The image used */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img_nature.jpg");

            min-height: 380px;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        /* Add styles to the form container */

        .container {
            position: absolute;
            right:0px;
            margin: 20px;
            max-width: 300px;
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit button */

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <h1> Login Form </h1>
    <div class="bg-img">
        <form action="action_page.php" method="post" class="container">
            <h2>Login</h2>

            <label for="email">
                <b>Email</b>
            </label>
            <input type="text" placeholder="Enter Email" name="em" required>

            <label for="psw">
                <b>Password</b>
            </label>
            <input type="password" placeholder="Enter Password" name="pass" required>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>

</html>