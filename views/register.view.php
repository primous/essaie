<?php $title = "Inscription"; ?>

<?php include('partials/_header.php') ?>






<!-- Contenu principal - Page d'inscription simplifiée -->
<main class="min-h-[calc(100vh-200px)] flex items-center justify-center py-8">
    <div class="max-w-md w-full mx-auto px-4">
        <!-- Carte formulaire -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <!-- En-tête -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <i class="ri-code-s-slash-line text-3xl text-blue-600"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900">Rejoindre DevConnect</h2>
                <p class="text-gray-600 mt-2">Créez votre compte développeur</p>
            </div>
<?php if(!empty($errors)): ?>
    <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
        <ul>
            <?php foreach($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

            <!-- Formulaire -->
            <form data-parsley-validate  method="post"  class="space-y-5">
                <!-- Nom complet -->
                <div>
                    <label for="name"  class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="ri-user-line mr-2"></i>Nom complet
                    </label>
                    <input type="text" id="name" name="name" value="<?= get_input('name') ?>"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           placeholder="Ex: Marie Dupont" required>
                </div>

                <!-- Pseudo -->
                <div>
                    <label for="pseudo"  class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="ri-at-line mr-2"></i>Pseudo
                    </label>
                    <input type="text" id="pseudo" name="pseudo" value="<?= get_input('pseudo') ?>"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           data-parsley-minlength="3"  placeholder="dev_master" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="ri-mail-line mr-2"></i>Email
                    </label>
                    <input type="email" id="email" name="email"  value="<?= get_input('email') ?>"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           data-parsley-trigger="keypress" placeholder="vous@exemple.com" required>
                </div>

                <!-- Mot de passe -->
                <div>
                    <label for="password"  class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="ri-lock-line mr-2"></i>Mot de passe
                    </label>
                    <input type="password" id="password" name="password"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           placeholder="●●●●●●●●" required>
                </div>

                <!-- Confirmation mot de passe -->
                <div>
                    <label for="password_confirm" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="ri-lock-unlock-line mr-2"></i>Confirmer le mot de passe
                    </label>
                    <input type="password" id="password_confirm" name="password_confirm"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           placeholder="●●●●●●●●" required  data-parsley-equalto="#password">
                </div>

                <!-- Bouton d'inscription -->
                <input type="submit" name="register" value="Créer mon compte"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300 mt-2">
                    
                
            </form>

            <!-- Séparateur -->
            <div class="my-6 flex items-center">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="px-4 text-gray-500 text-sm">ou</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Bouton GitHub -->
            <button type="button" 
                    class="w-full border border-gray-300 hover:bg-gray-50 text-gray-800 font-medium py-3 px-4 rounded-lg transition duration-300 flex items-center justify-center">
                <i class="ri-github-fill mr-2 text-lg"></i>
                Continuer avec GitHub
            </button>

            <!-- Lien connexion -->
            <div class="mt-6 text-center">
                <p class="text-gray-600 text-sm">
                    Vous avez déjà un compte ? 
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Se connecter</a>
                </p>
            </div>
        </div>

        <!-- Message info -->
        <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-100">
            <div class="flex items-start">
                <i class="ri-information-line text-blue-500 mt-0.5 mr-3"></i>
                <p class="text-sm text-blue-800">
                    Votre compte vous donne accès à toute la communauté DevConnect, vos projets et vos connexions.
                </p>
            </div>
        </div>
    </div>
</main>




<?php include('partials/_footer.php') ?>