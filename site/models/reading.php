<?php

class ReadingPage extends Page
{
  public function cover() {
    return $this->images()->findBy("template", "cover");
  }

  public function memes() {
    return $this->images()->filter("template", "meme");
  }

  public function meme() {
    return $this->images()->findBy("template", "meme");
  }

  public function fullTitle() {
    $title = $this-> title();
    $subtitle = $this->subtitle()->isNotEmpty() ? ': ' . $this->subtitle() : '';

    return $title . $subtitle;
  }

}