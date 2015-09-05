<?php foreach($metas as $index): ?>
<meta <?=$index['item']?>="<?=$index['itemValue']?>" content="<?=$index['content']?>">
<?php endforeach; ?>
