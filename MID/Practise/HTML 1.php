<!DOCTYPE html>
<html>
<head>
<title>Amina's Personal Webpage</title>
<meta chatset="UTF-8">
<meta name="title" content="Personal Webpage">
<meta name="author" content="Amina">
<meta name="description" content="This is Amina's personal webpage.">
<meta name="keywords" content="Amina, Personal, Webpage">  
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
    table, tr, th, td{
border: 2px solid black;
    }
    </style>
</head>

<body>
<header>
<h1>Amina Ferdous</h1>
<nav>
    <ul>
        <li><a href="#about">About Me</a></li>
        <li><a href="#educational qualification">Educational Qualification</a></li>
        </ul>
</nav>
</header>
<main>
<section id="about">
    <h2>Biography</h2>
    <p style="font-size:20px">My name is Amina Ferdous. I am a student of Computer Science and Engineering at American International University-Bangladesh (AIUB). I am passionate about web development and data science. In my free time, I enjoy reading books and exploring new technologies.</p>
</section>

<section id="educational qualification">
    <h2>Educational Qualification</h2>
    <table>
        <caption>My Educational Background</caption>
        <tr >
            <th>Degree</th>
            <th>Institution</th>
            <th>Year of Completion</th>
        </tr>
        <tr >
            <td>HSC</td>
            <td>Viqarunnnisa Noon College</td>
            <td>2021</td>
        </tr>
        <tr >
            <td>BSC in CSE</td>
            <td>AIUB</td>
            <td>Expected 2026</td>
        </tr>
    </table>
</section>

<h2>Contact Me</h2>
<form action="/submit form.php" method="post">
    <label for="name">Enter your name: </label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Enter your email: </label>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" value="Submit">
</form>
</main>
<footer>
    <p>Built with HTML5</p>
</footer>
</body>
</html>