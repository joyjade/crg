<?php

class ReadingPage extends Page
{
  public function cover() {
    return $this->images()->findBy("template", "cover");
  }

  public function meme() {
    return $this->images()->findBy("template", "meme");
  }

}