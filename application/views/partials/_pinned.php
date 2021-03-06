<!-- # one thread # -->
<div class="col-m col-12 thread v-middle">
    <div class="col-6 v-col">
        <div class="col-12">
            <h3 class="inline-b middle thread-title">
                <a href="thread/<?=$thread->id;?>"><?=$thread->title;?></a>
            </h3>
        </div>
        <div class="col-12">
            <small><?=Language::invokeOutput('by');?> <a href="profile/<?=isset_get($thread->author, 'id');?>"><?=isset_get($thread->author, 'username');?></a></small>
        </div>
    </div>
    <div class="col-1 v-col hide-sm"><?=$thread->replies;?></div>
    <div class="col-1 v-col hide-sm"><?=$thread->views;?></div>
    <div class="col-2 v-col"><?=$thread->create;?></div>
    <div class="col-2 v-col hide-sm">
        <a href="create/reply/<?=$thread->id;?>"><?=Language::invokeOutput('op/reply');?></a>
        <?php
        if (accessAPI::getInstance()->checkAccessToPin())
            echo ' - <a href="#unpin" class="reloadAJAX" data-url="ajax/unpinThread" data-content="id='.$thread->id.'&token='.$global['token'].'">'. Language::invokeOutput('op/unpin') .'</a>';
        if (accessAPI::getInstance()->checkAccessToDeleteThread($thread->author_id))
            echo " - <a href='#delete-thread' class='deleteThreadFF' data-url='ajax/deleteThreadFromForums' data-content='id=".$thread->id."&token=".$global['token']."'>". Language::invokeOutput('op/delete') ."</a>";
        ?>
    </div>
    <div class="show-sm small-counters">
        <?=$thread->replies;?> <i class="icon-comment"></i> -
        <?=$thread->views;?> <i class="icon-eye"></i> -
        <small><a href="addReply/<?=$thread->id;?>"><?=Language::invokeOutput('operation/reply');?></a></small>
        <?php
        if (accessAPI::getInstance()->checkAccessToPin())
            echo ' - <small><a href="#unpin" class="reloadAJAX" data-url="ajax/unpinThread" data-content="id='.$thread->id.'&token='.$global['token'].'">'. Language::invokeOutput('op/unpin') .'</a></small>';
        if (accessAPI::getInstance()->checkAccessToDeleteThread($thread->author_id))
            echo " - <small><a href='#delete-thread' class='deleteThreadFF' data-url='ajax/deleteThreadFromForums' data-content='id=".$thread->id."&token=".$global['token']."'>". Language::invokeOutput('op/delete') ."</a></small>";
        ?>
    </div>
</div>
<!-- # end - one thread # -->
