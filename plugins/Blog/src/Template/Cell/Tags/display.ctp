
<?php

if(count($tags) > 0 ):
echo  '<h5 class="hidden-xs mt-4 mt-2">Fliter By Tags <hr/></h5>';
endif;
$lifetsyleController = new Blog\Controller\ArticlesController();
foreach ($tags as $tag):
	echo $this->Html->link('<span class="txt">' . $tag['tag'] . '</span><span class="num">' . $lifetsyleController->numberofTimeTagisUsed($tag['tag_id']) . '</span>',
['controller'=>'articles', 'action'=>'tags', $tag['tag']],['escape'=>false, 'class'=>'tag']);
            // echo ' <a class="tag" href="#">';
            // echo '<span class="txt">' . $tag['tag'] . '</span>';
            // echo '<span class="num">' . $lifetsyleController->numberofTimeTagisUsed($tag['tag_id']) . '</span>';
            // echo '</a>';

        endforeach;
?>