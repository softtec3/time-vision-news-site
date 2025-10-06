<?php
session_start();
require_once("./php/fetch_update_news.php");
if (empty($_SESSION["user"])) {
    header("Location: /login-boxed.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Web Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ["Inter", "sans-serif"],
                    },
                },
            },
        };
    </script>

    <!-- Quill.js CSS -->
    <link
        href="https://cdn.quilljs.com/1.3.6/quill.snow.css"
        rel="stylesheet" />
    <!-- fontawesome cdn -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <style>
        /* Custom styles to complement Tailwind and handle Quill.js */
        body {
            font-family: "Inter", sans-serif;
            /* Ensure body takes full viewport height and centers content */
            /* Added flex-col to allow content to stack, and pt-24 for fixed header */
            @apply bg-gray-100 flex flex-col min-h-screen p-4 box-border pt-24;
            /* Added pt-24 */
        }

        /* Image preview specific styles */
        .image-preview {
            @apply max-w-full h-auto max-h-52 object-contain hidden mx-auto rounded-md;
            /* max-h-200px equivalent */
        }

        .image-preview.visible {
            @apply block;
        }

        /* Placeholder text for image upload */
        .image-placeholder-text {
            @apply text-gray-500 text-sm;
        }

        /* Date/Time display styling */
        .datetime-display {
            @apply text-base text-gray-700 bg-gray-200 p-3 rounded-md text-center mt-2;
        }

        /* Quill editor specific styling */
        #editor-container {
            @apply min-h-40 border border-gray-300 rounded-md mt-1 bg-white;
            /* min-h-10rem equivalent */
        }

        #editor-container .ql-editor {
            @apply min-h-28 text-sm leading-normal;
            /* h-28 equivalent */
        }

        /* Custom styles for file input button (Tailwind doesn't directly style this well) */
        input[type="file"]::-webkit-file-upload-button {
            @apply mr-4 py-2 px-4 rounded-full border-0 text-sm font-semibold bg-blue-50 text-blue-700 transition duration-300 ease-in-out;
        }

        input[type="file"]::file-selector-button {
            @apply mr-4 py-2 px-4 rounded-full border-0 text-sm font-semibold bg-blue-50 text-blue-700 transition duration-300 ease-in-out;
        }

        input[type="file"]::-webkit-file-upload-button:hover,
        input[type="file"]::file-selector-button:hover {
            @apply bg-blue-100;
        }

        /* Message display styles */
        .message-display {
            @apply p-3 rounded-md text-center text-sm font-medium hidden;
        }

        .message-display.success {
            @apply bg-green-100 text-green-700;
        }

        .message-display.error {
            @apply bg-red-100 text-red-700;
        }

        .message-display.visible {
            @apply block;
        }
    </style>
</head>

<body>
    <!-- Responsive Header -->
    <header
        class="fixed top-0 left-0 right-0 bg-white shadow-md p-4 flex justify-between items-center z-10">
        <div class="flex items-center">
            <a href="#" class="text-xl font-bold text-gray-800 flex items-center">
                <img
                    src="./images/favicon.png"
                    alt="Logo"
                    class="h-10 w-10 mr-2 rounded-full" />
                <span>News Portal</span>
            </a>
        </div>
        <nav>
            <ul class="flex space-x-4">
                <li>
                    <form action="./php/user_logout.php">
                        <button type="submit" class="bg-red-600 text-white py-1 px-2 rounded text-sm">Logout</button>
                    </form>
                </li>
                <!-- <li><a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Logout</a></li> -->
            </ul>
        </nav>
    </header>

    <!-- Main content wrapper to center the form -->
    <div id="mainContainer" class="mt-[70px] flex">
        <!-- Side bar -->
        <div
            id="sideBar"
            class="lg:w-[250px] lg:border-r lg:border-r-gray-400 lg:pt-10 lg:h-screen lg:relative fixed bottom-0 left-0 bg-white lg:z-0 z-50 w-full border-t-2 border-t-red-500 lg:border-t-[0]">
            <div class="hidden lg:flex items-center justify-center flex-col gap-1">
                <img
                    class="h-[100px] w-[100px] rounded-full"
                    src="./placeholder.jpg"
                    alt="" />
                <span class="font-bold text-2xl">এডমিন</span>
            </div>
            <ul class="flex lg:flex-col gap-2 p-3 justify-center lg:justify-normal">
                <a href="./">
                    <li
                        class="p-2 shadow-sm border border-slate-200 rounded-sm cursor-pointer">
                        <i class="fa-solid fa-home"></i> ফিরে যান
                    </li>
                </a>
            </ul>
        </div>
        <div id="mainContainerWraper" class="flex-1 lg:max-h-[100vh] lg:overflow-y-auto">
            <!-- Add news -->
            <div
                id="addNews"
                class="flex-grow flex justify-center items-center w-full"
                style="margin-top: 0px">
                <div
                    class="form-container bg-white p-6 md:p-8 lg:p-10 rounded-xl shadow-lg w-full max-w-md md:max-w-lg lg:max-w-2xl my-12">
                    <h2
                        class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-6">
                        নিউজ আপডেট করুন
                    </h2>

                    <!-- Message Display Area -->
                    <div id="messageDisplay" class="message-display mb-4"></div>

                    <form
                        id="myForm"
                        action="php/update_update_news.php"
                        method="post"
                        enctype="multipart/form-data"
                        class="flex flex-col space-y-5 pb-[50px] lg:pb-0">
                        <div class="form-group">
                            <label
                                for="imageUpload"
                                class="block text-gray-700 text-sm font-medium mb-2">ছবি আপলোড করুন:</label>
                            <input
                                type="file"
                                id="imageUpload"
                                name="news_image"
                                accept="image/*"
                                class="block w-full text-sm text-gray-500 cursor-pointer" />
                            <div
                                class="image-preview-container mt-4 p-4 border border-dashed border-gray-300 rounded-lg bg-gray-50 text-center">
                                <img
                                    src="<?php
                                            if ($specific_news["news_image"]) {
                                                echo $specific_news["news_image"];
                                            }
                                            ?>"
                                    alt="Image Preview"
                                    class="image-preview"
                                    id="imagePreview" />
                                <p id="imagePlaceholderText" class="image-placeholder-text">
                                    <!-- এখানে আপনার ছবি দেখা যাবে। -->
                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label
                                for="heading"
                                class="block text-gray-700 text-sm font-medium mb-2">শিরোনাম:</label>
                            <input
                                type="text"
                                id="heading"
                                name="news_heading"
                                value="<?php if ($specific_news["news_heading"]) {
                                            echo $specific_news["news_heading"];
                                        } else {
                                            echo "";
                                        } ?>"
                                placeholder="শিরোনাম লিখুন"
                                required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm outline-none text-sm mt-1 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" />
                        </div>

                        <div class="form-group">
                            <label
                                for="description"
                                class="block text-gray-700 text-sm font-medium mb-2">বিবরণ:</label>
                            <!-- Quill.js editor will be initialized here -->
                            <div id="editor-container">
                                <?php
                                if ($specific_news["news_description"]) {
                                    echo $specific_news["news_description"];
                                } else {
                                    echo "";
                                }
                                ?>
                            </div>
                            <!-- Hidden input to store Quill.js content -->
                            <input
                                type="hidden"
                                id="hiddenDescription"
                                name="news_description" />
                        </div>

                        <div class="form-group">
                            <label
                                for="category"
                                class="block text-gray-700 text-sm font-medium mb-2">বিভাগ:</label>
                            <select
                                id="category"
                                name="news_category"
                                required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm outline-none text-sm mt-1 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                <option value="">একটি বিভাগ নির্বাচন করুন</option>
                                <option value="national" <?php
                                                            if ($specific_news["news_category"] == "national") {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>জাতীয়</option>
                                <option value="international" <?php
                                                                if ($specific_news["news_category"] == "international") {
                                                                    echo "selected";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                ?>>আন্তর্জাতিক</option>
                                <option value="finance" <?php
                                                        if ($specific_news["news_category"] == "finance") {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        }
                                                        ?>>অর্থনৈতিক</option>
                                <option value="politics" <?php
                                                            if ($specific_news["news_category"] == "politics") {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>রাজনীতি</option>
                                <option value="entertainment" <?php
                                                                if ($specific_news["news_category"] == "entertainment") {
                                                                    echo "selected";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                ?>>বিনোদন</option>
                                <option value="lifestyle" <?php
                                                            if ($specific_news["news_category"] == "lifestyle") {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>লাইফস্টাইল</option>
                                <option value="technology" <?php
                                                            if ($specific_news["news_category"] == "technology") {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>প্রযুক্তি</option>
                                <option value="sports" <?php
                                                        if ($specific_news["news_category"] == "sports") {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        }
                                                        ?>>খেলাধুলা</option>
                                <option value="health" <?php
                                                        if ($specific_news["news_category"] == "health") {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        }
                                                        ?>>স্বাস্থ্য্য</option>
                                <option value="education" <?php
                                                            if ($specific_news["news_category"] == "education") {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>শিক্ষা</option>
                                <option value="religion" <?php
                                                            if ($specific_news["news_category"] == "religion") {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>ধর্ম</option>
                                <option value="poem" <?php
                                                        if ($specific_news["news_category"] == "poem") {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        }
                                                        ?>>কবি ও কবিতা</option>
                                <option value="all_bangla" <?php
                                                            if ($specific_news["news_category"] == "all_bangla") {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>সারা বাংলা</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="block text-gray-700 text-sm font-medium mb-2">সময় ও তারিখ:</label>
                            <div class="datetime-display" id="currentDateTime"></div>
                            <input type="hidden" id="hiddenDateTime" name="news_datetime" />
                            <input type="hidden" name="news_id"
                                value="<?php echo $specific_news["id"] ?>">
                        </div>

                        <div
                            class="button-group flex flex-col sm:flex-row justify-between gap-4 mt-6">
                            <button
                                type="submit"
                                class="submit-btn flex-1 font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 outline-none border-none cursor-pointer bg-green-600 text-white hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                                আপডেট করুন
                            </button>
                            <a href="./" class="block">
                                <button
                                    type="button"
                                    class="reset-btn w-[100%] flex-1 font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 outline-none border-none cursor-pointer bg-red-600 text-white hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                                    বাতিল
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Quill.js library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        // Initialize Quill editor
        const quill = new Quill("#editor-container", {
            theme: "snow", // 'snow' or 'bubble'
            placeholder: "বিস্তারিত বিবরণ লিখুন...",
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, 3, false]
                    }],
                    ["bold", "italic", "underline", "strike"],
                    [{
                        list: "ordered"
                    }, {
                        list: "bullet"
                    }],
                    [{
                        script: "sub"
                    }, {
                        script: "super"
                    }],
                    [{
                        indent: "-1"
                    }, {
                        indent: "+1"
                    }],
                    [{
                        direction: "rtl"
                    }],
                    [{
                        color: []
                    }, {
                        background: []
                    }],
                    [{
                        align: []
                    }],
                    ["link", "image"],
                    ["clean"],
                ],
            },
        });

        // Get the message display element
        const messageDisplay = document.getElementById("messageDisplay");

        // Function to show messages
        function showMessage(message, type) {
            messageDisplay.textContent = message;
            messageDisplay.className = "message-display mb-4 visible"; // Reset classes and make visible
            if (type === "success") {
                messageDisplay.classList.add("success");
            } else if (type === "error") {
                messageDisplay.classList.add("error");
            }
            // Automatically hide the message after 5 seconds
            setTimeout(() => {
                messageDisplay.classList.remove("visible");
                messageDisplay.textContent = ""; // Clear text
            }, 5000);
        }

        // JavaScript for Image Preview functionality
        document
            .getElementById("imageUpload")
            .addEventListener("change", function(event) {
                const [file] = event.target.files; // Get the selected file
                const imagePreview = document.getElementById("imagePreview");
                const imagePlaceholderText = document.getElementById(
                    "imagePlaceholderText"
                );

                if (file) {
                    // Create a URL for the selected image file
                    imagePreview.src = URL.createObjectURL(file);
                    // Make the image visible
                    imagePreview.classList.add("visible");
                    // Hide the placeholder text
                    imagePlaceholderText.style.display = "none";
                } else {
                    // If no file is selected, reset the image source
                    imagePreview.src = "#";
                    // Hide the image
                    imagePreview.classList.remove("visible");
                    // Show the placeholder text
                    imagePlaceholderText.style.display = "block";
                }
            });

        // JavaScript for displaying current Bangla Date and Time
        function updateBanglaDateTime() {
            const now = new Date(); // Get current date and time

            // Options for formatting the date and time in Bengali (bn-BD locale)
            const options = {
                year: "numeric",
                month: "long",
                day: "numeric",
                hour: "numeric",
                minute: "numeric",
                second: "numeric",
                hour12: true,
                timeZone: "Asia/Dhaka", // Set time zone to Bangladesh Standard Time
            };

            // Format the date and time using toLocaleString with Bengali locale
            const banglaDateTime = now.toLocaleString("bn-BD", options);
            // Update the content of the datetime-display div
            document.getElementById("currentDateTime").textContent = banglaDateTime;
            // Update the hidden input field with the current date/time for submission
            document.getElementById("hiddenDateTime").value = banglaDateTime;
        }

        // Call the function initially to display the time immediately
        updateBanglaDateTime();
        // Update the time every second to keep it current
        setInterval(updateBanglaDateTime, 1000);

        // JavaScript for Form Submission Handling
        document
            .getElementById("myForm")
            .addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission behavior (page reload)

                // Get the HTML content from Quill editor and set it to the hidden input
                document.getElementById("hiddenDescription").value =
                    quill.root.innerHTML;

                const formData = new FormData(this); // 'this' refers to the form element

                // Log the form data to the console for demonstration purposes
                for (let pair of formData.entries()) {
                    console.log(pair[0] + ": " + pair[1]);
                }

                // Send the data to the PHP script using fetch API
                fetch("php/update_update_news.php", {
                        method: "POST",
                        body: formData,
                        headers: {
                            Accept: "application/json", // We expect a JSON response from the server
                        },
                    })
                    .then((response) => {
                        if (!response.ok) {
                            // Try to get more details from the response body if possible
                            return response.text().then((text) => {
                                throw new Error(
                                    "Network response was not ok: " +
                                    response.statusText +
                                    " | Server response: " +
                                    text
                                );
                            });
                        }
                        return response.json(); // Parse the response as JSON
                    })
                    .then((data) => {
                        console.log("Server response:", data);
                        // Check the 'success' flag from the JSON response
                        if (data.success) {
                            // Display the success message on the page
                            showMessage(data.message, "success");
                            alert("নিউজটি আপডেট হয়েছে");
                            // Optionally, reset the form after successful submission
                            // this.reset(); // 'this' refers to the form element
                        } else {
                            // Display the error message on the page
                            showMessage("Error: " + data.message, "error");
                        }
                    })
                    .catch((error) => {
                        console.error("Error submitting form:", error);
                        showMessage(
                            "An error occurred while submitting the form. Please check the console for details.",
                            "error"
                        );
                    });
            });

        // JavaScript for Form Reset Handling
        document.getElementById("myForm").addEventListener("reset", function() {
            // When the form is reset, also reset the image preview
            const imagePreview = document.getElementById("imagePreview");
            const imagePlaceholderText = document.getElementById(
                "imagePlaceholderText"
            );
            imagePreview.src = "#"; // Clear the image source
            imagePreview.classList.remove("visible"); // Hide the image
            imagePlaceholderText.style.display = "block"; // Show the placeholder text
            console.log("Form Reset!");

            // Clear the Quill editor content
            quill.setContents([]);

            // Hide any displayed messages
            messageDisplay.classList.remove("visible", "success", "error");
            messageDisplay.textContent = "";
        });
    </script>
</body>

</html>