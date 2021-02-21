<?php

return function($page) {
  $limit = 5;
  $readings = $page->children()->listed();
  $past_readings = $readings->flip()->filter(function($rdg) {
    return $rdg->date()->toDate() < time() || $rdg->date()->isEmpty();
  })->paginate($limit);
  $upcoming_readings = $readings->filter(function($rdg) {
    return $rdg->date()->toDate() > time() || $rdg->current()->bool();
  });

  return [
    'limit'             => $limit,
    'past_readings'     => $past_readings,  
    'pagination'        => $past_readings->pagination(),  
    'upcoming_readings' => $upcoming_readings,
  ];
};