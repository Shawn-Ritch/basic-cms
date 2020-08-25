<?php
declare(strict_types = 1);
ob_start();
// Sets The Protocol & Domain = Root URL
$protocol = "http://";
$domain = "localhost/basic-cms";
$rootUrl = $protocol . $domain;
// Database Connection
$server = "127.0.0.1";
$username = "root";
$password = "";
$databaseName = "basic_cms";
$conn = mysqli_connect("$server", "$username", "$password", "$databaseName");
mysqli_set_charset($conn, "utf8");  // Restricts Charsets To UTF8 Only (For Security)
// Url Parser
if (!isset($_GET['pid'])) {
  $link = '/';  // Sets The Default Link(Home Page)
} else {  // Replaces The pid With A Clean, Search Engine Friendly URL
  $link = '/'.mysqli_real_escape_string($conn, $_GET['pid']);
}
// Sets Dynamic Pages, Info & Metadata
$sql = "SELECT * FROM pages WHERE link='$link' LIMIT 1";
$result = mysqli_query($conn, $sql);
$page = false;  // <-- Sets Page / Template
while ($row = mysqli_fetch_array($result)) {
  $page = $row;
  $robots = $row['robots'];
  $metaTitle = $row['meta_title'];
  $metaDescription = $row['meta_description'];
}
// Dynamic Rendering Of Pages That Are Set To view ='1' In The Database
$siteMap = '';
$sql = "SELECT link, linklabel FROM pages WHERE view='1' ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
  $siteMap .= '<a href="'.$rootUrl.''.$row['link'].'">'.$row['linklabel'].'</a><br>';
}
?>
<!--   Basic CMS Version1.0.1
A Product Of Shawn Ritch @WebDeveloprz
And Subject To MIT License Attribution
https://github.com/Shawn-Ritch/basic-cms
Need Help Developing This Further?
Email: WebMaster@WebDeveloprz.com
-->
<?php
require_once('inc/functions.php');
require_once('inc/meta.php');
require_once('inc/style.php');
?>
