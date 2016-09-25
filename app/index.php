<?php
require_once 'src/init.php';

//die(phpinfo());

//echo 'is it working?';
/*
$itemsQuery = $db->prepare(
	"SELECT id, name, done
	FROM items
	WHERE user = :user"
);

echo 'test';

$itemsQuery->execute([
	'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];
*/
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Simple PHP ToDo</title>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="list">
	<header>
		<h1 class="header">To do.</h1>
	</header>
	<ul class="items">
		<li class="items__item">
			<span>Pick up shopping</span>
			<a href="#" class="item--mark-done">Mark as done</a>
		</li>
		<li class="items__item item--done">
			<span>Learn php</span>
		</li>
	</ul>

	<form class="item__add" action="add.php" method="post">
		<input type="text" name="name" placeholder="Type a new item here." class="item__input">
		<input type="submit" value="Add" class="item__submit">
	</form>
</div>
</body>
</html>