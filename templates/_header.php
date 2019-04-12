<!-- header -->
<div class="header">
    <div class="row">
        <div class="col-sm-6">
            <a href="index.php" class="site-logo">
                <span>техно</span>Store
            </a>
        </div>
        <div class="col-sm-6">
            <div class="admin-link">
                <!-- <i class="fas fa-unlock-alt"></i> -->
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'on') { ?>
                    <a class="decoration-none" href="../logout.php">
                        <img width="38" src="img/icons/logout.svg" alt="">
                    </a>
                    <a href="admin.php" class="btn btn-secondary">Добавить товар</a>
                <?php } else { ?>
                    <a href="../login.php">
                        <img width="38" src="img/icons/padlock.svg" alt="">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- // header -->