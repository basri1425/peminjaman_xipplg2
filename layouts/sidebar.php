<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-dark text-white min-vh-100 p-0">
            <div class="p-3">
                <h5 class="text-center mb-4">MENU</h5>
                <div class="list-group list-group-flush">
                    <?php if ($_SESSION['level'] == 'Administrator') { ?>
                        <a href="<?= BASE_URL ?>/administrator/dashboard/index.php" class="list-group-item list-group-item-action">
                            <i class="bi bi-house-door"></i>
                            Dashboard
                        </a>
                        <a href="<?= BASE_URL ?>/administrator/user/index.php" class="list-group-item list-group-item-action">
                            <i class="bi bi-people"></i>
                            Data user
                        </a>
                        <a href="<?= BASE_URL ?>/administrator/kategori/index.php" class="list-group-item list-group-item-action">
                            <i class="bi bi-tags"></i>
                            Kategori
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-10 p4">

        <!-- </div> -->
    <!-- </div>
</div> -->