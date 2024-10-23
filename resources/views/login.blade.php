<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
S
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="relative container mx-auto flex items-center justify-center">
        
        <!-- Login Box -->
        <div class="login-box bg-white p-8 rounded-lg shadow-lg w-96 text-center z-10">
            <div class="login-title text-3xl font-bold mb-6">LOG IN</div>
            <div class="input-box mb-4">
                <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" placeholder="Username">
            </div>
            <div class="input-box mb-4">
                <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" placeholder="Email Address">
            </div>
        </div>

        <!-- Decorative Images -->
        <img class="img-left absolute left-0 bottom-0 w-24" src="assets/container_5_x2.svg" alt="Decorative Image">
        <img class="img-right absolute right-0 top-0 w-24" src="assets/star_31_x2.svg" alt="Decorative Image">

    </div>

</body>
</html>
