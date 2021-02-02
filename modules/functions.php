<?php
function redirect($url)
{
  header('Location: https://writersocean.com/' . $url);
  exit();
}
?>
