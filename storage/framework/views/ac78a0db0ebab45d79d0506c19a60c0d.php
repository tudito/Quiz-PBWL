<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Aplikasi PLN Rantauprapat'); ?></title>
    <!-- Tambahkan link ke file CSS atau framework seperti Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PLN Rantauprapat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('golongan.index')); ?>">Daftar golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('pelanggan.index')); ?>">Daftar Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('users.index')); ?>">Daftar Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; <?php echo e(date('Y')); ?> PLN Rantauprapat. All Rights Reserved.</p>
    </footer>

    <!-- Tambahkan script seperti Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\pbwl-quiz1\resources\views/layouts/app.blade.php ENDPATH**/ ?>