<!-- # category # -->
<div class="col-m col-12 category">
    <!-- # category heading # -->
    <div class="col-m col-12 a-left cat-heading">
        <div class="col-m col-12">
            <h3 class="inline-b"><a href="<?="category/{$cat->id}"?>"><?=$cat->$global['curr_title'];?></a></h3>
            <div class="f-right"><a href="#" class="icon-angle-up trigger-fs"></a></div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- # end category heading # -->
    <!-- # ### # -->
    <!-- # forums # -->
    <div class="col-m col-12 forums">
    <?php
    if (isset($data['forums'][$cat->id]))
    {
        foreach ($data['forums'][$cat->id] as $forum) {  ?>
            <!-- # one forum # -->
            <div class="col-m col-12 forum v-middle">
                <div class="v-col col-8 scale-sm">
                    <img src="<?=$forum->logo;?>" alt="forum icon" height="75" width="75" class="middle hide-sm">
                    <span class="middle inline-b">
                        <a href="forum/<?=$forum->id;?>" class="forum-title"><h4 class="inline-b middle"><?=$forum->$global['curr_title'];?></h4></a><br />
                        <small><?=$forum->$global['curr_desc'];?></small><br />
                        <span class="forum-stats">
                            <div class="label label-with-icon middle">
                                <i class="icon-eye middle"></i><?=$forum->views;?>
                            </div> -
                            <div class="label label-with-icon middle">
                                <i class="icon-doc-text"></i><?=$forum->threads;?>
                            </div> -
                            <div class="label label-with-icon middle">
                                <i class="icon-comment"></i><?=$forum->replies;?>
                            </div>
                        </span>
                    </span>
                </div>
                <div class="v-col col-4 scale-sm last-topic v-middle center-md left-sm">
                    <?php
                    if (isset_get( $forum, 'noThreads' ) === true){
                        echo '<div class="no-data">' . Language::invokeOutput('no-threads') .'</div>';
                    } else { ?>
                        <div class="hide-sm v-col"><img src="<?=$forum->LastThread->profile_picture;?>" alt="user icon" class="img img-circel x-50" /></div>
                        <p class="v-col scale-sm">
                            <a href="thread/<?=$forum->LastThread->id;?>"><?=$forum->LastThread->title;?></a>
                            <br />
                            <small><?=language::invokeOutput('frequent/by');?> <a href="profile/<?=$forum->LastThread->UID;?>"><?=$forum->LastThread->username;?></a></small>
                        </p>
                        <div class="clear"></div>
                    <?php } ?>
                </div>
            </div>
            <!-- # end one forum # -->
        <?php
        } // - end foreach
    }else{  echo '<div class="no-data">' . Language::invokeOutput('no-forums') .'</div>'; }  ?>
    </div><!-- # end forums section# -->
</div><!-- # end one category # -->