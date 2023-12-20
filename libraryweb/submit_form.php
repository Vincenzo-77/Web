<?php
include 'dbcon.php';

if(isset($_POST["submit"])){
    $barcode = $_POST['barcode'];
    $studentNo = $_POST['studentNo'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $dateRequested = $_POST['dateRequested'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    $insert = "INSERT INTO request (book_ref, studentNo, student_Name, book_title, dateRequested, course, email)
               VALUES ('$barcode', '$studentNo', '$name', '$title', '$dateRequested', '$course', '$email')";

    if(mysqli_query($conn, $insert)) {
        ?>
        <script>
            alert('We Received your details, kindly check your email to receive the details of the project.');
            window.location="userside.php";
        </script>
        <?php
    } else {
        echo "Sorry, there was an error: " . mysqli_error($conn);
    }
} 
?>
