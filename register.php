<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Join Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-6">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Create Account</h1>
            <p class="text-gray-500 mt-2 text-sm">Fill in the form to get started</p>
        </div>

        <form action="server.php" method="post" class="space-y-5">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Full Name</label>
                <input type="text" name="name" required
                       class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:bg-white outline-none transition duration-200" 
                       placeholder="Juan Dela Cruz">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Username</label>
                <input type="text" name="username" required
                       class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:bg-white outline-none transition duration-200" 
                       placeholder="choose_username">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Password</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:bg-white outline-none transition duration-200" 
                       placeholder="••••••••">
            </div>

            <div class="pt-4 flex items-center space-x-4">
                <a href="login.php" 
                   class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-600 font-bold py-3 rounded-xl transition duration-200">
                    Cancel
                </a>
                <button type="submit" name="Submit" 
                        class="flex-[2] bg-blue-700 hover:bg-blue-500 text-white font-bold py-3 rounded-xl transition duration-300 shadow-lg cyan-200">
                    Register Now
                </button>
            </div>
            
            <p class="text-center text-sm text-gray-500 mt-4">
                Already have an account? <a href="login.php" class="text-emerald-600 font-bold hover:underline">Log in</a>
            </p>
        </form>
    </div>

</body>
</html>