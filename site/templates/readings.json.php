<?php

foreach($past_readings as $past) {
  $html .= snippet('past_reading', ['reading' => $past], true);
}

$json['html'] = $html;
$json['more'] = $more;

echo json_encode($json);