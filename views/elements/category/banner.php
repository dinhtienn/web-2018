<div id="banner">
    <div class="container">
        <div class="breadcrumb f-regular-13">
            <?php for ($i = 0; $i < sizeof($breadcrumb) - 1; $i++) {?>
                <div><a href=""><?php echo $breadcrumb[$i] ?></a></div>
            <?php }?>
            <div><?php echo $breadcrumb[sizeof($breadcrumb) - 1] ?></div>
        </div>
        <div class="banner-heading f-bold-30">
            <?php echo $_GET['class'] ?> - GIẢI BÀI TẬP <?php echo $_GET['class'] ?>
        </div>
    </div>
</div>