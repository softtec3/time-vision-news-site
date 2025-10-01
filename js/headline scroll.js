$(document).ready(function() {
    const newsList = $('#newsList');
    const loadingMessage = newsList.find('.loading-message');
    const newsTicker = $('#newsTicker');

    // Sample news data. In a real application, you would fetch this from an API.
    const headlines = [
        { text: "", url: "#" },
        // { text: "Education to popular belief Lorem Ipsum is not simply", url: "#" },
        // { text: "Lorem ipsum dolor sit amet consectetur adipisicing elit.", url: "#" },
        // { text: "Corporis repellendus perspiciatis reprehenderit.", url: "#" },
        // { text: "Deleniti consequatur laudantium sit aspernatur?", url: "#" }
    ];

    function displayHeadlines(data) {
        if (data && data.length > 0) {
            loadingMessage.remove(); // Remove the 'Loading...' message

            data.forEach(item => {
                newsList.append(`<li><h3 class="h3"><a href="${item.url}">${item.text}</a></h3></li>`);
            });

            // Initialize the marquee plugin on our specific ticker
            if (newsTicker.length) {
                newsTicker.marquee({
                    // The animation speed in milliseconds
                    duration: 30000,
                    // The gap in pixels between the tickers
                    gap: 50,
                    // The delay in milliseconds before the marquee starts
                    delayBeforeStart: 0,
                    // The direction of the marquee
                    direction: 'left',
                    // Set to true to create a continuous loop
                    duplicated: true,
                    // Pause the marquee on hover
                    pauseOnHover: true
                });
            }
        } else {
            loadingMessage.text('No news updates found.').addClass('no-posts-message').removeClass('loading-message');
        }
    }

    // For demonstration, we'll use the sample data directly after a short delay.
    setTimeout(function() {
        displayHeadlines(headlines);
    }, 500);

    // Example of fetching from an API (you can replace the timeout above with this)
    /*
    fetch('https://your-news-api.com/headlines')
        .then(response => response.json())
        .then(data => displayHeadlines(data))
        .catch(error => {
            console.error('Error fetching headlines:', error);
            loadingMessage.text('Failed to load news updates.').addClass('error-message').removeClass('loading-message');
        });
    */
});