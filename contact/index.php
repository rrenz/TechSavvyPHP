<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            /* Remove background-image */
            background-color: black; /* Fallback color */
            overflow: hidden; /* Hide scrollbars */
        }
        #bgVideo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cover the entire area */
            z-index: -1; /* Behind all content */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#contactForm").submit(function(e) {
                e.preventDefault();
                var name = $("#name").val();
                var email = $("#email").val();
                var contact = $("#contact").val();

                $.ajax({
                    type: "POST",
                    url: "input_process.php",
                    data: {name: name, email: email, contact: contact},
                    success: function(response) {
                        alert(response);
                        loadContacts();
                        $("#name").val('');
                        $("#email").val('');
                        $("#contact").val('');
                    }
                });
            });

            function loadContacts() {
                $.ajax({
                    url: "load_contacts.php",
                    success: function(data) {
                        $("#contactList").html(data);
                    }
                });
            }

            loadContacts();
        });
    </script>
</head>
<body class="bg-gray-100">
    <video autoplay loop muted playsinline id="bgVideo">
        <source src="assets/ml-bg1.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4 font-mono text-white">My Contacts</h1>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <form id="contactForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Your Name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Your Email">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
                            Contact Number
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contact" placeholder="Your Contact Number"></input>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Save
                        </button>
                    </div>
                </form>
            </div>
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-xl font-bold mb-4">Contact List</h2>
                <div id="contactList" class="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>