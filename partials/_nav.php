 <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <i class="ri-code-s-slash-line text-2xl text-blue-600 mr-2"></i>
                    <span class="text-xl font-bold text-gray-900">DevConnect</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="index.php" 
                    class="font-medium hover:text-blue-600 <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'text-blue-600' : 'text-gray-700'; ?>">
                    Accueil
                    </a>

                    <a href="reseau.php" 
                    class="font-medium hover:text-blue-600 <?php echo (basename($_SERVER['PHP_SELF']) == 'reseau.php') ? 'text-blue-600' : 'text-gray-700'; ?>">
                    Réseau
                    </a>

                    <a href="register.php" 
                    class="font-medium hover:text-blue-600 <?php echo (basename($_SERVER['PHP_SELF']) == 'register.php') ? 'text-blue-600' : 'text-gray-700'; ?>">
                    Inscription
                    </a>


                    <button onclick="window.location.href='login.php'"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium">
                        Connexion
                    </button>
                </div>
            </div>
        </div>
    </nav>