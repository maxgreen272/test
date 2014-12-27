<?php

$id = isset($_GET['id']) ? $_GET['id'] : 1;

$pdo = new \PDO("mysql:host=localhost;", "max", "maxpass");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM website.pages WHERE id = ?");

$stmt->execute(array($id));

$page = $stmt->fetch();

echo $page['page_name'];
echo "<br/><br/>";
echo $page['content'];
echo $page['date_created'];
