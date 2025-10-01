
document.addEventListener('DOMContentLoaded', function () {
    const newsList = document.getElementById('newsList');

    // Function to fetch and display posts
    async function fetchAndDisplayPosts() {
        try {
            // Clear existing content and show loading message
            newsList.innerHTML = '<li class="loading-message">Loading news updates...</li>';

            // Make a fetch request to your PHP script.
            // IMPORTANT: Ensure 'fetch_posts.php' is accessible via a web server URL.
            // If you are opening this HTML file directly from your computer (e.g., file://),
            // the fetch call will fail as it cannot resolve relative paths to a web server.
            // Both your HTML and PHP files must be served by a web server (e.g., Apache, Nginx, or PHP's built-in server).
            const response = await fetch('php/fetch_posts.php');

            // Check if the HTTP response was successful
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            // Parse the JSON response
            const result = await response.json();

            if (result.success) {
                if (result.data.length > 0) {
                    // Clear loading message
                    newsList.innerHTML = '';
                    // Iterate over the fetched posts and create list items
                    result.data.forEach(post => {
                        const listItem = document.createElement('li');
                        listItem.className = 'mb-3 pb-3 border-b border-gray-200 last:mb-0 last:pb-0 last:border-b-0'; // Tailwind classes for styling

                        const h3 = document.createElement('h3');
                        h3.className = 'h3 text-lg font-semibold text-gray-900'; // Tailwind classes for styling

                        const anchor = document.createElement('a');
                        // You might want to link to a specific post page, e.g., `post.php?id=${post.id}`
                        anchor.href = `#post-${post.id}`; // Placeholder link
                        anchor.textContent = post.title;
                        anchor.className = 'text-blue-600 hover:text-blue-700 transition-colors duration-200'; // Tailwind classes for styling

                        h3.appendChild(anchor);
                        listItem.appendChild(h3);
                        newsList.appendChild(listItem);
                    });
                } else {
                    // Display message if no posts are found
                    newsList.innerHTML = '<li class="no-posts-message">' + result.message + '</li>';
                }
            } else {
                // Display error message from PHP script
                newsList.innerHTML = '<li class="error-message">Error: ' + result.message + '</li>';
            }
        } catch (error) {
            // Catch any network or parsing errors
            console.error('Failed to fetch posts:', error);
            let errorMessage = 'Could not load news updates. Please ensure "php/fetch-posts.php" is running on a web server and accessible from this page.';
            if (error.message.includes("Failed to parse URL")) {
                errorMessage += ' This error often occurs when the HTML file is opened directly from your computer (e.g., file://) instead of being served by a web server (e.g., http://localhost).';
            }
            newsList.innerHTML = '<li class="error-message">' + errorMessage + '</li>';
        }
    }

    // Call the function to fetch and display posts when the page loads
    fetchAndDisplayPosts();
});
