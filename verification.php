<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <!-- <?PHP
    echo $_SERVER['PHP_SELF'];
    ?>">
    name: <input type=" text" name="name"><br>
    email: <input type="text" name="email"><br>
    <input type="submit">
    </form>

    welcome
    <?php
    if (isset($_GET["name"])) {
        echo $_GET["name"] . "!";
    } else {
        echo "invalid name";
    }
    ?>
    Your email address is
    <?php
    if (isset($_GET["email"])) {
        if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL) === false) {
            echo $_GET["email"];
        } else {
            echo "invalid email";
        }
    }
    ?> -->

    <!-- correction from githubcopilot -->
    <form method="get" action="
<?PHP
echo $_SERVER['PHP_SELF'];
?>">
        name: <input type=" text" name="name"><br>
        email: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_GET["name"]) && !empty(trim($_GET["name"]))) /*checks if the name is valid*/ {
        $name = $_GET["name"]; //creates a variable named name and assigns it the value of the variable name
    } else /*if the name is not valid*/ {
        echo "Invalid name"; //echos the string Invalid name
        exit;
    }

    if (isset($_GET["email"]) && filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) /*checks if the email is valid*/ {
        $email = $_GET["email"]; //creates a variable named email and assigns it the value of the variable email
    } else /*if the email is not valid*/ {
        echo "Invalid email"; //echos the string Invalid email
        exit;
    }

    echo "Welcome, " . $name . "! Your email address is " . $email . ".";
    ?>
</body>


</html>