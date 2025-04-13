<?php include 'includes/header.php'; ?>

<h2 class="page-title">Enroll in a Course</h2>

<?php
// Check if the form was submitted and display message
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo '<div class="alert alert-success">Course enrollment successful!</div>';
} else if (isset($_GET['error']) && $_GET['error'] == 'student_not_found') {
    echo '<div class="alert alert-danger">Student ID not found. Please check and try again.</div>';
}
?>

<form action="process_enroll.php" method="post" id="enroll-form" class="form-container">
    <div class="form-group">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
    </div>
    
    <div class="form-group">
        <label for="course_code">Course Code:</label>
        <input type="text" id="course_code" name="course_code" required>
    </div>
    
    <div class="form-group">
        <label for="course_title">Course Title:</label>
        <input type="text" id="course_title" name="course_title" required>
    </div>
    
    <div class="form-group">
        <label for="semester">Semester:</label>
        <select id="semester" name="semester" required>
            <option value="">Select Semester</option>
            <option value="Fall 2024">Fall 2024</option>
            <option value="Spring 2025">Spring 2025</option>
            <option value="Fall 2025">Fall 2025</option>
            <option value="Spring 2026">Spring 2026</option>
        </select>
    </div>
    
    <button type="submit">Enroll</button>
</form>

<?php include 'includes/footer.php'; ?>