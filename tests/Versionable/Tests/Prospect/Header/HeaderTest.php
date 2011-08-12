<?php

namespace Versionable\Tests\Prospect\Header;

/**
 * Test class for Header.
 * Generated by PHPUnit on 2011-04-08 at 08:43:04.
 */
class HeaderTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @var Header
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = $this->getMockForAbstractClass('Versionable\Prospect\Header\Header', array(), '', array(), false, true);
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
