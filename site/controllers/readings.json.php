<?php

return function ($page) {

  $limit          = 5;
  $past_readings  = $page->children()->listed()->flip()->filter(function($rdg) {
    return $rdg->date()->toDate() < time() && !$rdg->current()->bool() || $rdg->date()->isEmpty();
  })->paginate($limit);
  $pagination     = $past_readings->pagination();
  $more           = $pagination->hasNextPage();

  return [
      'past_readings' => $past_readings,
      'more'     => $more,
      'html'     => '',
      'json'     => [],
    ];
};