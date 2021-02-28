<?php

class ReadingsPage extends Page 
{
  public function currentlyReading() {
    return $this->children()->listed()->findBy('current', 'true');
  }

}