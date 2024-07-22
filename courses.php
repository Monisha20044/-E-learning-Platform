<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="courses-list">
        <h2>Available Courses</h2>
        <ul>
            <li>
                <h3>Course Title 1</h3>
                <p>Description of Course 1</p>
                <a href="enroll.php?course_id=1">Enroll Now</a>
            </li>
            <li>
                <h3>Course Title 2</h3>
                <p>Description of Course 2</p>
                <a href="enroll.php?course_id=2">Enroll Now</a>
            </li>
            <!-- Repeat for other courses -->
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 E-learning Platform. All rights reserved.</p>
    </footer>
</body>
</html>
