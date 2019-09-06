<?php
session_start();
$domain = 'a-cms';
require('assets/db_conn.php');

if (!$_GET['pid']) {
	$pageid = '1';
} else {
	$pageid = ($_GET['pid']);
}

$sql = "SELECT pagebody FROM pages WHERE id='$pageid' LIMIT 1";
$result = mysqli_query($dbConn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $body = $row["pagebody"];
}

//--------
// $sql = "SELECT id, linklabel FROM pages WHERE showing='1' ORDER BY id ASC";
// $query = mysqli_query($dbConn, $sql) or die (mysqli_error());
//
// $menuDisplay = '';
// while ($row = mysqli_fetch_array($query)) {
//     $pid = $row["id"];
//     $linklabel = $row["linklabel"];
//
// 	$menuDisplay .= '<a href="index.php?pid=' . $pid . '">' . $linklabel . '</a><br />';
//---------

$menu = '';
$sql = "SELECT id, linklabel FROM pages WHERE id='$pageid' ORDER BY id ASC";
$result = mysqli_query($dbConn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $pid = $row["id"];
    $linklabel = $row["linklabel"];
		$menu .= '<a href="index.php?pid=' . $pid . '">' . $linklabel . '</a><br />';
}
mysqli_close($dbConn);
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>WebDevz CMS</title>
<?php require('page/style/index.php'); ?>
<?php require('assets/js/body.js'); ?>
</head>
<body>
<?php require('page/header/index.php') ?>
	<main>
		<section class="atf ctxt">
			<?php echo $body; ?>
		</section>
		<footer class="ctxt">
			<?php //echo $footer; ?>
			<h6>&copy; 2017-2019 WebDeveloprz</h6>
		</footer>
	</main>
<?php require('assets/js/body.js'); ?>
</body>
</html>
