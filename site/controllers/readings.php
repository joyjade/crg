<?php

return function($page) {
  $limit = 5;
  $past_readings = $page->children()->listed()->flip()->filter(function($rdg) {
    return $rdg->date()->toDate() < time() || $rdg->date()->isEmpty();
  })->paginate($limit);

  return [
    'limit'           => $limit,
    'past_readings'   => $past_readings,  
    'pagination'      => $past_readings->pagination(),  
  ];
};