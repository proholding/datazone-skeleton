<?php foreach($cruds as $crud): ?>
<li><a href="{{ path('<?=  $crud['route_name'] ?>_index') }}"><?= $crud['entity_class_name'] ?></a></li>
<?php endforeach; ?>
