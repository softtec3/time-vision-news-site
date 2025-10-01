<?php
// fetch_posts.php

// Include your database connection file
require_once 'db_connect.php';

header('Content-Type: application/json'); // Set header to indicate JSON response

$response = [
    'success' => false,
    'message' => 'An unknown error occurred.',
    'data' => []
];

try {
    // Prepare a SQL query to select all data from the 'post' table
    // Assuming 'content' is the column you want to display
    $sql = "SELECT content, id FROM posts ORDER BY created_at DESC"; // Order by creation date, adjust as needed
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $posts = [];
            while ($row = $result->fetch_assoc()) {
                // Add each post's title and ID to the posts array
                $posts[] = [
                    'title' => htmlspecialchars($row['content']), // Sanitize output
                    'id' => (int)$row['id'] // Ensure ID is an integer
                ];
            }
            $response['success'] = true;
            $response['message'] = 'Posts fetched successfully.';
            $response['data'] = $posts;
        } else {
            $response['success'] = true; // Still a success, just no data
            $response['message'] = 'No posts found in the database.';
        }
    } else {
        // Query failed
        $response['message'] = 'Database query failed: ' . $conn->error;
    }

} catch (Exception $e) {
    $response['message'] = 'Server error: ' . $e->getMessage();
} finally {
    // Close the database connection
    if ($conn) {
        $conn->close();
    }
    echo json_encode($response);
}
?>
