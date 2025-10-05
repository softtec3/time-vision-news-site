<?php
// process_news.php
ob_clean();
header('Content-Type: application/json; charset=UTF-8');

// For development: display all errors to help with debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include your database connection file
// Make sure 'db_connect.php' exists and establishes a $conn mysqli connection
require_once 'db_connect.php';


// --- Part 3: Handle form submission and data insertion ---
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the target directory for image uploads
    // This path is relative to the process_news.php file.
    // If process_news.php is in 'php/' folder, and 'uploads' is in the root,
    // then it should be '../uploads/news_images/'.
    $target_dir = '../uploads/news_images/'; // Adjusted path based on typical structure

    // Create the uploads directory if it doesn't exist
    if (!is_dir($target_dir)) {
        // Attempt to create the directory with full permissions (0777)
        // Ensure your web server user has permissions to create directories here.
        if (!mkdir($target_dir, 0777, true)) {
            echo json_encode(["success" => false, "message" => "Failed to create uploads directory. Check folder permissions."]);
            $conn->close();
            exit();
        }
    }

    $image_path = ''; // Initialize image path for database storage

    // Handle image upload
    // The name of the file input in HTML is 'news_image', so use $_FILES['news_image']
    if (isset($_FILES["news_image"]) && $_FILES["news_image"]["error"] !== UPLOAD_ERR_NO_FILE) {

        if (isset($_FILES["news_image"]) && $_FILES["news_image"]["error"] == UPLOAD_ERR_OK) {
            $original_filename = basename($_FILES["news_image"]["name"]);
            $imageFileType = strtolower(pathinfo($original_filename, PATHINFO_EXTENSION));

            // Generate a unique filename to prevent overwriting
            $unique_filename = uniqid('img_', true) . '.' . $imageFileType;
            $target_file = $target_dir . $unique_filename;

            // Check if image file is an actual image or fake image
            $check = getimagesize($_FILES["news_image"]["tmp_name"]);
            if ($check === false) {
                echo json_encode(["success" => false, "message" => "File is not an image or is corrupted."]);
                $conn->close();
                exit();
            }

            // Allow certain file formats
            $allowed_types = ["jpg", "png", "jpeg", "gif"];
            if (!in_array($imageFileType, $allowed_types)) {
                echo json_encode(["success" => false, "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed."]);
                $conn->close();
                exit();
            }

            // Check file size (e.g., 5MB limit)
            if ($_FILES["news_image"]["size"] > 5000000) { // 5MB
                echo json_encode(["success" => false, "message" => "Sorry, your file is too large (max 5MB)."]);
                $conn->close();
                exit();
            }

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["news_image"]["tmp_name"], $target_file)) {
                // Store the path relative to your web accessible directory (e.g., '/uploads/news_images/unique_filename.jpg')
                // This is the path you'll use to display the image in HTML later.
                $image_path = 'uploads/news_images/' . $unique_filename; // Relative path for database
            } else {
                echo json_encode(["success" => false, "message" => "Sorry, there was an error uploading your file. Error: " . error_get_last()['message']]);
                $conn->close();
                exit();
            }
        } else {
            // If no image is uploaded or an error occurred during upload
            $error_message = "No image uploaded or an upload error occurred.";
            if (isset($_FILES["news_image"])) {
                switch ($_FILES["news_image"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_message = "Uploaded file exceeds maximum size.";
                        break;
                    case UPLOAD_ERR_PARTIAL:
                        $error_message = "File was only partially uploaded.";
                        break;
                    case UPLOAD_ERR_NO_TMP_DIR:
                        $error_message = "Missing a temporary folder for uploads.";
                        break;
                    case UPLOAD_ERR_CANT_WRITE:
                        $error_message = "Failed to write file to disk.";
                        break;
                    case UPLOAD_ERR_EXTENSION:
                        $error_message = "A PHP extension stopped the file upload.";
                        break;
                    default:
                        $error_message .= " Error code: " . $_FILES["news_image"]["error"];
                }
            }
            echo json_encode(["success" => false, "message" => $error_message]);
            $conn->close();
            exit();
        }
    }
    // Sanitize and retrieve other form data
    // Use the 'name' attributes from the HTML form
    $heading = isset($_POST['news_heading']) ? trim($_POST['news_heading']) : '';
    $description = isset($_POST['news_description']) ? trim($_POST['news_description']) : '';
    $category = isset($_POST['news_category']) ? trim($_POST['news_category']) : '';
    // The JavaScript sends the formatted Bangla date/time string with name 'news_datetime'
    $newsDateTime = isset($_POST['news_datetime']) ? trim($_POST['news_datetime']) : '';

    // Validate required fields (basic validation)
    if (empty($heading) || empty($description) || empty($category) || empty($newsDateTime)) {
        echo json_encode(["success" => false, "message" => "All form fields are required"]);
        $conn->close();
        exit();
    }

    // Prepare an SQL INSERT statement for 'new_news' table using prepared statements for security
    $stmt_query_string = "";
    $news_id = isset($_POST["news_id"]) ? trim($_POST["news_id"]) : '';
    if (isset($_FILES["news_image"]) && $_FILES["news_image"]["error"] == UPLOAD_ERR_OK) {
        $stmt_query_string = "UPDATE new_news 
        SET news_heading='$heading', news_description='$description', news_category='$category', news_image='$image_path' 
        WHERE id='$news_id'";
    } else {
        $stmt_query_string = "UPDATE new_news 
        SET news_heading='$heading', news_description='$description', news_category='$category' 
        WHERE id='$news_id'";
    }

    $stmt_news = $conn->query($stmt_query_string);

    if ($stmt_news) {
        echo json_encode(["success" => true, "message" => "News updated successfully!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error updating data: " . $conn->error]);
    }
} else {
    // If not a POST request (e.g., direct access to process_news.php)
    echo json_encode(["success" => false, "message" => "Invalid request method. This script only accepts POST requests."]);
}

// Close the database connection
$conn->close();
