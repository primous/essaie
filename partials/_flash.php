<?php if (isset($_SESSION['notification']['message'])): ?>
    
<!-- Conteneur pour centrer et limiter la largeur -->
    <div class="max-w-md mx-auto mt-4 px-4 sm:px-0">

        <div id="alert-success" 
             class="alert alert-<?= htmlspecialchars($_SESSION['notification']['type']) ?> relative">
            
            <strong><?= htmlspecialchars(ucfirst($_SESSION['notification']['type'])) ?> !</strong>
            
            <?= htmlspecialchars($_SESSION['notification']['message'] ?? '') ?>
            
            <button
                type="button"
                onclick="document.getElementById('alert-success').style.display='none'"
                class="absolute top-2 right-3 text-green-700 hover:text-green-900 text-2xl font-bold focus:outline-none"
            >
                ×
            </button>
        </div>

    </div>

    <?php 
    // Optionnel : on supprime la notification après affichage (très courant)
    unset($_SESSION['notification']);
    ?>
<?php endif; ?>