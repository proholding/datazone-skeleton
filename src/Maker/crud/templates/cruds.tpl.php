<?php foreach($cruds as $crud): ?>
<li><a href="{{ path('<?php $crud['route_name'] ?>_index')"><?php $crud['entity_class_name'] ?></a></li>
<?php endforeach; ?>
