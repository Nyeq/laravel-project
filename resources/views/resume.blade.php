<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
            color: #4e54c8;
            text-align: center;
        }

        h2 {
            color: #4e54c8;
            border-left: 4px solid #4e54c8;
            padding-left: 10px;
            font-size: 1.6rem;
            margin-top: 30px;
        }

        p, li {
            font-size: 1rem;
            color: #333;
        }

        .section {
            margin-bottom: 25px;
        }

        ul {
            margin-top: 10px;
            padding-left: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header p {
            font-size: 1.1rem;
            color: #555;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            background: #4e54c8;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 10px;
            transition: .3s;
        }

        .back-btn:hover {
            background: #3c41a4;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="header">
            <h1>Alejandro's Resume</h1>
            <p>Final Project • Web Development</p>
        </div>

        <div class="section">
            <h2>About Me</h2>
            <p>
                Hi! I'm Alejandro, a passionate student developer who loves building clean, modern, and functional websites.
                I enjoy learning new technologies and creating projects that solve real problems.
            </p>
        </div>

        <div class="section">
            <h2>Skills</h2>
            <ul>
                <li>HTML, CSS, JavaScript</li>
                <li>Laravel Framework</li>
                <li>MySQL Database</li>
                <li>Git & GitHub</li>
                <li>Basic Python</li>
            </ul>
        </div>

        <div class="section">
            <h2>Education</h2>
            <p><strong>BSCS (Bachelor of Science in Computer Science)</strong><br>
           City College of Angeles</p>
        </div>

        <div class="section">
            <h2>Projects</h2>
            <ul>
                <li>Web-Based Student Management System</li>
                <li>Personal Portfolio Website</li>
                <li>Simple Login & Registration System</li>
            </ul>
        </div>

        <a class="back-btn" href="/">Back to Home</a>

    </div>

</body>
</html>