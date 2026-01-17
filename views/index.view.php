<?php $title = ''; ?>

<?php include('partials/_header.php') ?>
   

    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Section texte -->
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Connectez-vous avec la 
                    <span class="text-blue-600">communauté développeur</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Partagez vos projets, collaborez sur du code, trouvez des partenaires et restez à jour avec les dernières technologies.
                    Rejoignez des milliers de développeurs à travers le monde.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button onclick="window.location.href='register.php'"  
                     class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium flex items-center justify-center">
                    <i class="ri-user-add-line mr-2"></i> Créer un compte gratuit
                    </button>
                    <button class="border border-gray-300 hover:border-blue-600 text-gray-800 hover:text-blue-600 px-6 py-3 rounded-lg font-medium flex items-center justify-center">
                        <i class="ri-github-fill mr-2"></i> Continuer avec GitHub
                    </button>
                </div>
                <div class="mt-8 flex items-center text-gray-500">
                    <i class="ri-shield-check-line text-green-500 mr-2"></i>
                    <span>Rejoignez-nous gratuitement • Aucune carte de crédit requise</span>
                </div>
            </div>

            <!-- Section illustration/image -->
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 shadow-xl">
                    <!-- Image d'illustration -->
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl h-64 flex items-center justify-center mb-6">
                        <i class="ri-code-box-line text-white text-8xl opacity-80"></i>
                    </div>
                    
                    <!-- Cartes utilisateurs -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                            <div class="flex items-center mb-2">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-2">
                                    <i class="ri-reactjs-line text-blue-600"></i>
                                </div>
                                <span class="font-medium">React</span>
                            </div>
                            <p class="text-sm text-gray-500">12k développeurs</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                            <div class="flex items-center mb-2">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-2">
                                    <i class="ri-nodejs-line text-green-600"></i>
                                </div>
                                <span class="font-medium">Node.js</span>
                            </div>
                            <p class="text-sm text-gray-500">8.5k développeurs</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                            <div class="flex items-center mb-2">
                                <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-2">
                                    <i class="ri-python-line text-yellow-600"></i>
                                </div>
                                <span class="font-medium">Python</span>
                            </div>
                            <p class="text-sm text-gray-500">10.2k développeurs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include('partials/_footer.php') ?>
    