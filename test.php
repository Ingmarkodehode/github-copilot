<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <p>

        <?php
        $student = [ //creates an associative array named student with the following keys: name, age, kurs, and favorite_subject. Assign appropriate values to these keys.
            "name" => "Ingmar",
            "age" => 30,
            "kurs" => "PHP",
            "favorite_subject" => "backend"

        ];

        function display_student_info($student) //creates a function named display_student_info that takes an associative array as a parameter.
        {
            return "Hello, my name is " . $student["name"] . ", I am " . $student["age"] . " years old, And I am
            currently studying " . $student["kurs"] . " and my favorite subject is " . $student["favorite_subject"] . ".";
            //returns a string that says "Hello, my name is [name], I am [age] years old, I am in grade [grade] and my favorite subject is [favorite_subject]."
        }
        echo display_student_info($student);
        ?>
    </p>
</body>

</html>