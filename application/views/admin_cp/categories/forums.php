<div class="cp-index-page categories-page">
    <div class="sub-wrapper">
        <div class="grid-section">
            <div class="flexbox">
                <?php include(__DIR__.DIRECTORY_SEPARATOR.'../_sidebar.php');?>
                <!-- ###### -->
                <!-- start display -->
                <div class="col-m col-10 cp-display no-margin breads">
                    <div class="col-m col-12">
                        <a href="admin_cp"><?=language::invokeOutput('breads/cp');?></a>
                        <i class="icon-angle-<?=DIRECTION;?>"></i>
                        <a href="admin_cp/categories"><?=language::invokeOutput('breads/categories');?></a>
                        <i class="icon-angle-<?=DIRECTION;?>"></i>
                        <a href="admin_cp/categories?section=categories"><?=language::invokeOutput('breads/mForums');?></a>
                    </div>
                    <div class="col-m col-12 content-wrapper">
                        <div class="col-m col-12">
                            <h3><?=Language::invokeOutput('heading-forums');?></h3>
                        </div>
                        <div class="col-m col-12">
                            <?=language::invokeOutput('sel-forum') . ' : ';?>
                            <select class="page-swapper">
                                <option value="admin_cp/categories?section=forums&cat_id=<?=$data['curr_cat']->id;?>"><?=$data['curr_cat']->$data['Ctitle'];?></option>
                                <?php
                                foreach ($data['categories'] as $cat)
                                    if ($cat->id != $data['curr_cat']->id)
                                        echo '<option value="admin_cp/categories?section=forums&cat_id='. $cat->id .'">'. $cat->$data['Ctitle']. '</option>';
                                ?>
                            </select>
                        </div>
                        <!-- ########## -->
                        <!-- forums / categories wrapper -->
                        <div class="col-m col-12 categories-wrapper">
                            <!-- end - forums / categories heading -->
                            <!-- #### -->
                            <?php
                            if (empty($data['forums']))
                            {
                                echo '<div class="no-data">'. Language::invokeOutput('no-forums') .'</div>';
                            }else{
                                foreach($data['forums'] as $forum)
                                    include('_forums.php');
                            }
                            ?>
                            <!-- #### -->
                        </div>
                        <!-- end - forums / categories wrapper -->
                        <!-- ###### -->
                        <!-- add new forum -->
                        <div class="col-m col-12">
                            <h4><a href="admin_cp/categories?section=addForum&cat_id=<?=$data['curr_cat']->id;?>"><?=Language::invokeOutput('newForum');?></a></h4>
                        </div>
                    </div>
                </div>
                <!-- end display -->
                <!-- ###### -->