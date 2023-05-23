<?php

$url = explode("/", $_SERVER['REQUEST_URI']);

if ($url[1] == "gallery") {
  $content = file_get_contents("gallery.html");
} else {
  $content = file_get_contents("index.html");
}
if (!empty($content))
  require_once("index.html");
