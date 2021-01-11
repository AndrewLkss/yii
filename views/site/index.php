<?php if(count($model)): ?>

<?php foreach ($model as $post): ?>
    <div class="content">
        <ul>
            <li><?= $post->text ?></li>
            <li><?= $post->category ?></li>
        </ul>
    </div>
<?php endforeach;?>
<?php endif;?> 
   
