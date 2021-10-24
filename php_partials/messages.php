<?php
if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
        <i class="fa fa-plus-circle" aria-hidden="true"></i>
        <?php 
            echo $_SESSION['error']; 
            unset($_SESSION['error']);
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
elseif (isset($_SESSION['message'])) {?>
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        <i class="fa fa-check-circle" aria-hidden="true"></i>
        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>