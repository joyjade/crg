<?php
  return function($site) {
    return $site
      ->find('events')
      ->children()
      ->listed()
      ->filter(function ($child) {return $child->day()->toDate() > time(); }); 
  }
?>