<?php

namespace Versionable\HttpClient\Header;

class Header implements HeaderInterface {
  protected $name;

  protected $value;

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getValue() {
    return $this->value;
  }

  public function setValue($value) {
    $this->value = $value;
  }

  public function toString() {
    return sprintf('%s: %s', $this->name, $this->value);
  }

  public function  __toString() {
    return $this->toString();
  }
}
