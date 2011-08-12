<?php

namespace Versionable\Tests\Prospect\Header;

use Versionable\Prospect\Header\Ajax;

/**
 * Test class for Ajax.
 * Generated by PHPUnit on 2011-04-08 at 08:43:05.
 */
class AjaxTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @var Ajax
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Ajax;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {

  }

  public function testConstruct()
  {
    $this->assertEquals('X-Requested-With', $this->object->getName());
    $this->assertEquals('XMLHttpRequest', $this->object->getValue());
  }

}
