<?php

class ReadingsPage extends Page 
{
  public function currentlyReading() {
    return $this->children()->listed()->filter(function ($reading) {
      return $reading->current()->bool();
    });
  }

}