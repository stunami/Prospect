<?php

namespace Versionable\HttpClient\Header;

class Accept extends Header
{
  protected $name = 'Accept';

  protected $value = 'text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5';
}
