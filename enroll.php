<?php
require_once 'config.php';
require_once 'auth.php';

// Redirect to login if not logged in
redirectToLogin();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];
    $user_id = $_SESSION['user_id'];

    // Check if user is already enrolled
    $stmt = $conn->prepare("SELECT * FROM enrollments WHERE user_id = ? AND course_id = ?");
    $stmt->bind_param("ii", $user_id, $course_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "You are already enrolled in this course.";
    } else {
        // Enroll user in the course
        $stmt = $conn->prepare("INSERT INTO enrollments (user_id, course_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $user_id, $course_id);

        if ($stmt->execute()) {
            echo "Enrollment successful. <a href='index.php'>Go to Dashboard</a>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}
?>
