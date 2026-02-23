<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Modern Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/jpeg" href="saitama.jpg">
</head>
<body class="bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center p-6"
      style="background-image: url('background2.png');">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Welcome Back</h1>
            <p class="text-gray-500 mt-2 text-sm">Please enter your account details</p>
        </div>

        <form action="server.php" method="post" class="space-y-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Username</label>
                <input type="text" name="username" required
                       class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition duration-200" 
                       placeholder="Enter your username">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Password</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition duration-200" 
                       placeholder="••••••••">
            </div>

            <div class="pt-4 space-y-4">
                <button type="submit" name="Login" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition duration-300 shadow-lg shadow-blue-200">
                    Sign In
                </button>
                
                <div class="flex items-center justify-center space-x-2">
                    <span class="h-px w-12 bg-gray-200"></span>
                    <span class="text-gray-400 text-xs">NO ACCOUNT YET?</span>
                    <span class="h-px w-12 bg-gray-200"></span>
                </div>

                <a href="register.php" 
                   class="block w-full text-center bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 font-semibold py-3 rounded-xl transition duration-200">
                    Create Account
                </a>
            </div>
        </form>
    </div>

</body>
</html>