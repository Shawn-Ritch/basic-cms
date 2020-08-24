<?php
require('inc/init.php');
if ($page){
  $template_name = preg_replace('[^a-zA-Z0-9-_]', '', $page['template']);
  if (empty($template_name))
      $template_name = 'default';
    $template_file = 'inc/templates/'.$template_name.'.php';
  if (file_exists($template_file)){
    require($template_file);
  } else {
    header("LOCATION: $rootUrl/404");
  }
} else {
  header("LOCATION: $rootUrl/404");
}
?>