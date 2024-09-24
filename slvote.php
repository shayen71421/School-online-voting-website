<?php
// Check if slvoter.txt file exists
if (file_exists("file1.txt")) {
    // Open file for reading
    $file = fopen("file1.txt", "r");
    // Read name from file
    $name = fgets($file);
    // Close file
    fclose($file);

    // Check if name is not empty
    if (!empty($name)) {
        // Check if candidate number is set in the URL parameters
        if (isset($_GET['candidate_num'])) {
            // Get candidate number from URL parameters
            $candidate_num = $_GET['candidate_num'];
            // Define filename for candidate vote count
            $filename = "sl" . $candidate_num . ".txt";
            // Open file for reading and writing
            $file = fopen($filename, "r+");
            // Read current vote count from file
            $vote_count = fgets($file);
            // Increment vote count by 1
            $vote_count++;
            // Write updated vote count to file
            fseek($file, 0);
            fwrite($file, $vote_count);
            // Close file
            fclose($file);
            // Clear name from slvoter.txt file
            $file = fopen("file1.txt", "w");
            fwrite($file, "");
            fclose($file);
            // Redirect to thank you page
            header("Location: 4-1.php");
            exit();
        } else {
            // If candidate number is not set, redirect to error page
            header("Location: error.php");
            exit();
        }
    } else {
        // If name is empty, redirect to error page
        header("Location: error.php");
        exit();
    }
} else {
    // If slvoter.txt file does not exist, redirect to error page
    header("Location: error.php");
    exit();
}
?>
