<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>

<?php if ($city > 0): ?> Москва
<?php elseif ($city === 1): ?> 0
<?php else: ?> меньше нуля
<?php endif; ?>


</body>
</html>