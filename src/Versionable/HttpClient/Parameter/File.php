<?php

namespace Versionable\HttpClient\Parameter;

class File extends Parameter implements ParameterInterface, FileInterface
{
  protected $type = '';
  
  public function __construct($name, $value, $type) {
    parent::__construct($name, $value);
    $this->setType($type);
  }

  public function getType() {
    return $this->type;
  }

  public function setType($type) {
    $this->type = $type;
  }
}
