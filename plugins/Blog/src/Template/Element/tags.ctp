<?php
$lifetsyleController = new Blog\Controller\ArticlesController();
foreach ($tags as $tag):
            echo ' <a class="tag" href="#">';
            echo '<span class="txt">' . $tag['tags'] . '</span>';
            echo '<span class="num">' . $lifetsyleController->numberofTimeTagisUsed($tag['tag_id']) . '</span>';
            echo '</a>';

        endforeach;
?>