<!DOCTYPE html>
<head>
    <title>AIUB Mid Term Grades</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .pass {
            color: green;
            font-weight: bold;
        }

        .fail {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $course_name = "Object-Oriented Programming 2 (OOP2)";
    $section_name = "Section A";

    echo "<h1>Midterm Grades: " . $course_name . "</h1>";
    echo "<h2>" . $section_name . "</h2>";

    $student_marks = [
        "Amina" => 45,
        "Jim" => 67,
        "Shehan" => 80,
        "Nadia" => 42,
    ];

    echo "<table>";
    echo "<tr><th>Student Name</th><th>Marks</th><th>Result</th></tr>";

    foreach ($student_marks as $name => $marks) {

        if ($marks >= 50) {
        $result = "<span class='pass'>PASS</span>";
    } else {
        $result = "<span class='fail'>FAIL</span>";
    }
        echo "<tr>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $marks . "</td>";
        echo "<td>" . $result . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>