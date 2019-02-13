<nav class="navbar">
  <div class="collapse navbar-collapse">
    <p class="navbar-text navbar-right">
      <?= $this->Html->link('新規投稿', ['action'=>'add'], ['class'=>'btn btn-default']) ?>
    </p>
  </div>
</nav>
<?php foreach ($posts as $post): ?>
  <section>
    <h1><?= h($post['Post']['title']) ?></h1>
    <?= h($post['Post']['body']) ?>
  </section>
<?php endforeach; ?>
<ul class="pagination">
  <?php
    echo $this->Paginator->prev('&laquo;', ['escape'=>false, 'tag'=>'li'], null,
      ['class'=>'prev disabled', 'escape'=>false, 'tag'=>'li',
        'disabledTag'=>'a']);
    echo $this->Paginator->numbers(['separator'=>'', 'tag'=>'li', 'currentTag'=>'a',
      'currentClass'=>'active']);
    echo $this->Paginator->next('&raquo;', ['escape'=>false, 'tag'=>'li'], null,
      ['class'=>'next disabled', 'escape'=>false, 'tag'=>'li',
      'disabledTag'=>'a']);
  ?>
</ul>
