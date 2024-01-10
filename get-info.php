welcome
<?php echo $_GET["name"]; ?><br>
Your email address is:
<?php $email = $_GET["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $email;
} else {
    echo "invalid email";
} ?>