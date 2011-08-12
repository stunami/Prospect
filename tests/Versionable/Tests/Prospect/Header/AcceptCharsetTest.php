<?php

namespace Versionable\Tests\Prospect\Header;

use Versionable\Prospect\Header\AcceptCharset;

/**
 * Test class for AcceptCharset.
 * Generated by PHPUnit on 2011-04-08 at 08:43:06.
 */
class AcceptCharsetTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @var AcceptCharset
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new AcceptCharset;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {

  }

  public function testToString()
  {
    $string = sprintf('%s: %s', $this->object->getName(), $this->object->getValue());

    $this->assertEquals($string, $this->object->toString());
  }

  public function test__toString()
  {
    $this->assertEquals($this->object->toString(), (string)$this->object);
  }
}

