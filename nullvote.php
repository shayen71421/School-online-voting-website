<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// rest of your code here

if (isset($_POST['next'])) {
    echo "Next button was pressed"; // debugging statement
    if (file_exists("nullvote.txt")) {
        echo "nullvote.txt file exists"; // debugging statement
        // rest of your code here
        // Open file for reading and writing
        $file = fopen("nullvote.txt", "r+");
        // Read current vote count from file
        $vote_count = fgets($file);
        // Increment vote count by 1
        $vote_count++;
        // Write updated vote count to file
        fseek($file, 0);
        fwrite($file, $vote_count);
        // Close file
        fclose($file);
    } else {
        // If nullvote.txt file does not exist, create it with a count of 1
        $file = fopen("nullvote.txt", "w");
        fwrite($file, "1");
        fclose($file);
    }
    // Redirect to thank you page
    header("Location: thank_you.php");
    exit();
}
?>
