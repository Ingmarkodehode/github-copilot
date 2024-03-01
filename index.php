<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //oppgaver ifra github copilot for og lære meg php
    
    //--------------------------------------------------------------------------------------------------------------
    
    // Define a variable $name and assign your name to it.
// Define a variable $age and assign your age to it.
// Define a function introduce_yourself that takes two parameters: $name and $age. This function should return a string that says "Hello, my name is [name] and I am [age] years old."
// Call the function introduce_yourself with the variables $name and $age as arguments and echo the result.
    
    // $name = "Ingmar"; //creates a variable named name and assigns it the value Ingmar
    // $age = 30; //creates a variable named age and assigns it the value 30
    // function intruduce_yourself($name, $age) //creates a function named intruduce_yourself with two parameters. Those parameters are $name and $age
    // {
    //     echo "Hello, my name is $name and I am $age years old."; //echos the string Hello, my name is $name and I am $age years old.
    // }
    // echo intruduce_yourself($name, $age); //echos the function intruduce_yourself with the parameters $name and $age 
    
    //--------------------------------------------------------------------------------------------------------------
    
    // Create an associative array named $student with the following keys: name, age, grade, and favorite_subject. Assign appropriate values to these keys.
    // Create a function named display_student_info that takes an associative array as a parameter. This function should return a string that says "Hello, my name is [name], I am [age] years old, I am in grade [grade] and my favorite subject is [favorite_subject]."
    // Call the function display_student_info with the array $student as an argument and echo the result.
    // $student = [ //creates an associative array named student with the following keys: name, age, kurs, and favorite_subject. Assign appropriate values to these keys.
    //     "name" => "Ingmar",
    //     "age" => 30,
    //     "kurs" => "PHP",
    //     "favorite_subject" => "backend"
    // ];
    // function display_student_info($student) //creates a function named display_student_info that takes an associative array as a parameter.
    // {
    //     return "Hello, my name is " . $student["name"] . ", I am " . $student["age"] . " years old, And I am currently studying " . $student["kurs"] . " and my favorite subject is " . $student["favorite_subject"] . "."; //returns a string that says "Hello, my name is [name], I am [age] years old, I am in grade [grade] and my favorite subject is [favorite_subject]."
    // }
    // echo display_student_info($student);
    
    //--------------------------------------------------------------------------------------------------------------
    
    //     Create a PHP script that reads a file named data.txt from the same directory.
// The script should count the number of lines in the file.
// The script should also count the number of words in the file.
// Finally, the script should echo the number of lines and the number of words.
// This task will help you understand how to work with files in PHP. Remember to create a data.txt file in the same directory and add some text to it before running the script. Good luck!
    
    // $file_content = file_get_contents('data.txt'); //creates a variable named file_content and assigns it the value of the file data.txt
    // $lines = explode("\n", $file_content); //creates a variable named lines and assigns it the value of the variable file_content and explodes it by the new line
    // $numlines = count($lines); //creates a variable named numlines and assigns it the value of the variable lines and counts the number of lines
    // $num_words = str_word_count(($file_content)); //creates a variable named num_words and assigns it the value of the variable file_content and counts the number of words
    // echo "Number of lines: " . $numlines . "<br>"; //echos the string Number of lines: and the variable numlines
    // echo "Number of words: " . $num_words; //echos the string Number of words: and the variable num_words
    // 
    
    //--------------------------------------------------------------------------------------------------------------
    
    //     Create a PHP script that connects to a MySQL database. Use the following details to connect to the database: host is localhost, database name is test_db, username is root, and password is password.
// The script should create a table named students in the test_db database if it doesn't already exist. The students table should have the following columns: id (integer, primary key, auto increment), name (varchar, length 100), age (integer), and grade (varchar, length 50).
// The script should insert a new row into the students table with your name, age, and grade.
// Finally, the script should select all rows from the students table and echo each row's name, age, and grade.
    
    // $conn = mysqli_connect('localhost', 'root', '', 'test_db'); //creates a variable named conn and assigns it the value of the connection to the database
    // $sql = "CREATE TABLE IF NOT EXISTS students (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100) NOT NULL, age INT(6) NOT NULL, grade VARCHAR(50) NOT NULL)"; //creates a variable named sql and assigns it the value of the sql query
    // mysqli_query($conn, $sql); //creates a variable named sql and assigns it the value of the sql query
    // $sql = "INSERT INTO students (name, age, grade) VALUES ('Ingmar', '30', 'PHP')"; //creates a variable named sql and assigns it the value of the sql query
    // mysqli_query($conn, $sql); //creates a variable named sql and assigns it the value of the sql query
    // $sql = "SELECT * FROM students"; //creates a variable named sql and assigns it the value of the sql query
    // $result = mysqli_query($conn, $sql); //creates a variable named result and assigns it the value of the sql query
    // while ($row = mysqli_fetch_assoc($result)) { //creates a while loop that fetches the result and assigns it to the variable row
    //     echo "Name: " . $row["name"] . "<br>" . " Age: " . $row["age"] . "<br>" . " Grade: " . $row["grade"] . "<br>" . "<br>"; //echos the string Name: and the variable name and Age: and the variable age and Grade: and the variable grade
    // }
    
    //--------------------------------------------------------------------------------------------------------------
    
    //     Create a PHP script that reads a CSV file named students.csv.
// The CSV file contains student data with three columns: name, age, and grade.
// The script should read the CSV file and store each row as an associative array with keys corresponding to the column names.
// Finally, the script should print out each student's name, age, and grade in the format: "Name: [name], Age: [age], Grade: [grade]".
// This task will help you understand how to work with CSV files in PHP. Remember to create a students.csv file with some sample data before running the script. Good luck!
    
    // $file = fopen("students.csv", "r");
    // while (($data = fgetcsv($file)) !== FALSE) {
    //     echo "Name:" . $data[0] /*returns the first row */. "<br>" . "Age: " . $data[1] /*returns the secound row */. "<br>" . "Grade: " . $data[2] /*returns the third row */. "<br>" . "<br>";
    
    // }
    
    //correction from github copilot
    
    // $file = fopen("students.csv", "r");
    // $firstRow = true;
    // while (($data = fgetcsv($file)) !== FALSE) {
    //     if ($firstRow) /*skips the first row */{
    //         $firstRow = false;
    //         continue;
    //     }
    //     echo "Name:" . $data[0] /*returns the first column of the first row */. "<br>" . "Age: " . $data[1] /*returns the secound column of the secound row */. "<br>" . "Grade: " . $data[2] /*returns the third column of the third row */. "<br>" . "<br>";
    
    // }
    // fclose($file);
    
    //--------------------------------------------------------------------------------------------------------------
    
    //     Create a PHP script that accepts two parameters via a GET request: name and email.
// The script should validate that both parameters are present and that the email parameter is a valid email address.
// If the validation passes, the script should print a message saying "Welcome, [name]! Your email address is [email]."
// If the validation fails, the script should print an appropriate error message.
// This task will help you understand how to handle GET requests and validate input in PHP. Good luck!
    ?>

    <!-- <form method="get" action="
    <?PHP
    // echo $_SERVER['PHP_SELF']; 
    ?>">
    name: <input type=" text" name="name"><br>
    email: <input type="text" name="email"><br>
    <input type="submit">
</form>

    welcome
    <?php
    // if (isset($_GET["name"])) {
    //     echo $_GET["name"] . "!";
    // } else {
    //     echo "invalid name";
    // }
    //             ?>
    // Your email address is
    // <?php
    // if (isset($_GET["email"])) {
    //     if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL) === false) {
    //         echo $_GET["email"];
    //     } else {
    //         echo "invalid email";
    //     }
    // } 
    ?> -->

    <!-- correction from githubcopilot -->
    <!-- <form method="get" action="
    <?PHP
    // echo $_SERVER['PHP_SELF']; 
    ?>">
        name: <input type=" text" name="name"><br>
        email: <input type="text" name="email"><br>
        <input type="submit">
    </form> -->
    <?php
    // if (isset($_GET["name"]) && !empty(trim($_GET["name"]))) /*checks if the name is valid*/{
    //     $name = $_GET["name"]; //creates a variable named name and assigns it the value of the variable name
    // } else /*if the name is not valid*/{
    //     echo "Invalid name"; //echos the string Invalid name
    //     exit;
    // }
    
    // if (isset($_GET["email"]) && filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) /*checks if the email is valid*/{
    //     $email = $_GET["email"]; //creates a variable named email and assigns it the value of the variable email
    // } else /*if the email is not valid*/{
    //     echo "Invalid email"; //echos the string Invalid email
    //     exit;
    // }
    
    // echo "Welcome, " . $name . "! Your email address is " . $email . ".";
    ?>

    <!-- -------------------------------------------- -->

    <?php
    // include 'test.php';
    
    // echo display_student_info($student)
    ?>

    <?php
    include 'verification.php'
        ?>

</body>

</html>