<?php if(count($model)): ?>

<?php foreach ($model as $post): ?>
    <div class="content">
        <ul>
            <p style="padding: 0; margin: 0;"><strong>Текст публикации:</strong></p>
            <li style="list-style-type: none;"><?= $post->text ?></li>
             <p style="padding: 0; margin: 0;"><strong>Категория:</strong></p>
            <li style="list-style-type: none;"><?= $post->category ?></li>
        </ul>
    </div>
<?php endforeach;?>
<?php endif;?> 
   
