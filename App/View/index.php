<html>
<head>

</head>
<body>
<div>Index page</div>
<?php
if (!isset($params['start']) || !isset($params['end']))
{
    return;
}

$start = $params['start'];
$end = $params['end'];

for($i = $start; $i < $end; $i++) {
    print
<<<ITEM
                Hello {$i} <br>
ITEM;
}
?>
</body>
</html>
