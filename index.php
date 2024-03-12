<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Results</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            height: 100px;
            width: auto;
        }
        .title {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .card img {
            max-width: 100%;
            height: auto;
        }
        .view-button {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .view-button:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #000;
            padding: 20px 0;
            color: #fff;
            font-size: 14px;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer a:hover {
            color: #ddd;
        }
        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="pics/aru-logo.png" alt="logo">
    </div>
    <div class="title">
        Ardhi Timetable
    </div>
    <?php

$cards = [
    [
        'title' => 'Semester one',
        'description' => 'Teaching timetable',
        
    ],
    [
        'title' => 'Semester two',
        'description' => 'Examination timetable',
     
    ],
    [
        'title' => 'Semester one',
        'description' => 'Teaching timetable',
        
    ],
    [
        'title' => 'Semester two',
        'description' => 'Examination timetable',
    ],
];

echo '<div class="card">';
echo '<h2>Semester one</h2>';
echo '<p style="margin-bottom: 30px;">Teaching timetable</p>';
echo '<a href="n1.php" class="view-button">View</a>';
echo '</div>';

echo '<div class="card">';
echo '<h2>Semester two</h2>';
echo '<p style="margin-bottom: 30px;">Examination timetable</p>';
echo '<a href="n2.php" class="view-button">View</a>';
echo '</div>';

echo '<div class="card">';
echo '<h2>Semester one</h2>';
echo '<p style="margin-bottom: 30px;">Teaching timetable</p>';
echo '<a href="n2.php" class="view-button">View</a>';
echo '</div>';

echo '<div class="card">';
echo '<h2>Semester two</h2>';
echo '<p style="margin-bottom: 30px;">Examination timetable</p>';
echo '<a href="n4.php" class="view-button">View</a>';
echo '</div>';
?>


</div>

<div class="footer">
    <p>&copy; <?php echo date("Y"); ?> Ardhi Timetable. All rights reserved.</p>
    <p>Contact us: <a href="mailto:info@example.com">info@example.com</a></p>
</div>

</body>
</html>
