<?php

namespace Versionable\HttpClient\Header;

class Accept extends Header
{
  protected $name = 'Cache-Control';

  protected $value = 'max-age=0';
}
