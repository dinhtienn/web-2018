<div class="content-post">
    <div class="list-post">
        <div class="tab-heading">
            <div class="tab-title f-regular-30">
                <?php echo $_GET['subject'] ?>
            </div>
            <div class="view-all">
                <a class="f-regular-13" href="">
                    Xem tất cả
                    <i class="fas fa-caret-right"></i>
                </a>
            </div>
        </div>
        <div class="line-orange"></div>
        <div class="tab-post">
            <?php for ($i = 0; $i < sizeof($data_content); $i++) {?>
                <div class="post-model" data-location="/miny/detail.php?post=<?php echo $data_content[$i]->id ?>">
                    <div class="post-title">
                        <a href="/miny/detail.php?post=<?php echo $data_content[$i]->id ?>" class="f-medium-17"><?php echo $data_content[$i]->title ?></a>
                    </div>
                    <div class="post-heading d-flex">
                        <div class="post-author f-medium-12">
                            <?php echo $data_content[$i]->fullname ?>
                        </div>
                        <div class="post-info f-regular-13">
                            <div><img src="./images/homepage/icon-view.png" alt="icon-view"><?php echo $data_content[$i]->view_num ?></div>
                            <div><img src="./images/homepage/icon-heart.png" alt="icon-like"><?php echo $data_content[$i]->like_num ?></div>
                        </div>
                    </div>
                    <div class="post-content f-regular-13">
                        <?php echo $data_content[$i]->content ?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>