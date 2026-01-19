<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= isset($title) ? $title . 'DevConnect - Réseau social pour développeurs' : 'DevConnect - Réseau social pour développeurs'; ?>
    
    </title>
    <!-- Tailwind CSS + Preline UI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/preline@1.5.0/dist/preline.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    <!-- ICI : le code Tailwind custom -->
    <style type="text/tailwindcss">
        .alert {
            @apply relative rounded-lg border px-4 py-3 mb-4 text-base shadow-sm;
        }

        .alert-success {
            @apply alert border-green-400 bg-green-50 text-green-800;
        }

        .alert-danger {
            @apply alert border-red-400 bg-red-50 text-red-800;
        }

        .alert-warning {
            @apply alert border-yellow-400 bg-yellow-50 text-yellow-800;
        }

        .alert-info {
            @apply alert border-blue-400 bg-blue-50 text-blue-800;
        }
    </style>
</head>
<body class="bg-gray-50">

<?php include('partials/_nav.php') ?>
<?php include('partials/_flash.php') ?>