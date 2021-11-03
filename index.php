<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Webpage </title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navigationBar.css">
    <style>
    .header{
        width:100%;
        height:100px;
        background-color:#c4fffa;
    }
    .logo{
        color:#000000;
        font-size:40px;
        font-family:'Trebuchet MS';
        text-align:left;
        float:left;
        line-height:50px;
        padding-left:10px;
    }
    .column1{
        float:left;
        font-family: 'Merriweather', serif;
        width:30%;
        text-align:center
    }
    .column2{
        float:left;
        font-family:sans-serif;
        width:65%;
    }
    .row:after{
        content:"";
        display:table;
        clear:both;
    }
    table, th, td {
        border: 1px;
        border-collapse:collapse;
        padding: 5px;
    }
    .heading{
        font-family: 'Roboto Mono', monospace;
        font-size:20px;
    }
    .projectname{
        font-family: 'Fira Sans', sans-serif;
        font-size:30px;
    }
    .body{
        font-family: 'Karla', sans-serif;
    }
    .footer {
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: rgb(166, 159, 201);
        color: white;
        text-align: center;
    }
    </style>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<span><div class="navbar">
    <a class="nav-list nav-list__Home" href="index.html">Home</a>
    <a class="nav-list" href="team_members.html">Team Members</a>
    <a class="nav-list" href="proj_overview.html">Project Overview</a>
    <a class="nav-list" href="screenshots.html">Project Screenshots</a>
    <a class="nav-list" href="https://whitelisted2.github.io/VaxiNO-Pandemic/">Go To VaxiNO'Pandemic!</a>
</div> </span>
<br> <br> <br> <br>
<div class="row">
    <div class="column1">
        <img src="images/sid.jfif" width=200px>
        <h2>B. Siddharth Prabhu</h2>
        <h4>CSE Student at IIT Dharwad</h4>
        <h5>Github: <a href= "https://github.com/Whitelisted2">@Whitelisted2 </a></h5>
        <h5>LinkedIn: <a href= "https://www.linkedin.com/in/b-siddharth-prabhu-5992a8200/">Click here.</a></h5>
        <h5>College E-Mail: <a href="mailto:200010003@iitdh.ac.in"> 200010003@iitdh.ac.in </a></h5>
    </div>
    <div class="column2">
        <p> I am currently a student of Computer Science at IIT-Dharwad. Courses that I am taking this semester include:
            <ul>
                <li> Discrete Structures </li>
                <li> Data Structures And Algorithms </li>
                <li> Economics </li>
                <li> Data Analysis </li>
                <li> Software Systems Lab </li>
            </ul>
            Classes are currently online, so I'm not on campus. However, I am exploring various
            subjects in the field of CSE, as sophomores do. My interests are in DSA, Math and Logic.
            I've been learning more about the field of Cryptography as well!
        </p>
        <hr>
        <div class="heading"><h2>Current Projects</h2></div>
        <div class="container">
            <div class="projectname"> VaxiNO'Pandemic </div>
            A portal for registering and managing your COVID-19 Vaccine appointment,
            and to get the latest news and updates! It uses various tools of Software Systems, 
            like: HTML/CSS, LaTeX, JS, PHP... and many more!
        </div>
        <br>
        <div class="container">
            <div class="projectname"> LumberJack </div>
            A project to find the best algorithm to cut down trees in a forest, with the help 
            of Structures, Vectors, and Iterators. Coded in C++.
        </div>
        <br>
        <div class="container">
            <div class="projectname"> Rudimentary E-Commerce </div>
            We used C programming to manage an e-commerce database using file handling. This was 
            set up to allow buyers and sellers to sell/purchase and have separate login/signups.
        </div>
    </div>
</div>
<br>
<br>
    <div class="footer">
        &copy; 2021 Siddharth
    </div>
</body>
</html>