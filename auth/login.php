<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: /index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <title>login</title>
</head>


<body class="bg-gray-200 font-sans text-gray-700">
    <div class="container mx-auto p-8 flex ">
        <div class="max-w-md w-full mx-auto">

            <div class="container flex flex-col justify-center items-center h-screen ">
                <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                    <div class="flex flex-col justify-center items-center mb-10 mt-5">
                        <img src="../assets/images/logokeluhan.png " class=" mr-3 w-1/4 " alt="Logo" />
                        <h1 class="font-bold text-xl">KELUHAN MASYARAKAT</h1>
                    </div>
                    <div class="p-8">
                        <form method="POST" action="../utils/auth.php">
                            <div class="mb-5">
                                <h1 class="mb-2">Username</h1>
                                <input placeholder="Username" type="text" name="username"
                                    class="block w-full p-3 rounded bg-gray-200 border border-transparent focus:outline-none">
                            </div>

                            <div class="mb-5">
                                <h1 class="mb-2">Password</h1>
                                <input placeholder="*********" type="password" name="password"
                                    class="block w-full p-3 rounded bg-gray-200 border border-transparent focus:outline-none">
                            </div>

                            <button type="submit" name="login"
                                class="w-full p-3 mt-4 bg-blue-500 text-white rounded-xl shadow hover:bg-blue-600">Login</button>
                        </form>
                    </div>

                    <?php
                if (isset($_GET['notification'])) {
                    echo $_GET['notification'];
                }
                ?>
                </div>
            </div>
        </div>
</body>

</html>