<?php

namespace Versionable\Tests\Prospect\Parameter;

use Versionable\Prospect\Parameter\Parameter;

/**
 * Test class for Parameter.
 * Generated by PHPUnit on 2011-04-06 at 11:54:30.
 */
class ParameterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Parameter
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Parameter('foo', 'bar');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement test__toString().
     */
    public function test__toString()
    {
        $this->assertEquals($this->object->toString(), $this->object->__toString());
    }

    /**
     * @todo Implement testToString().
     */
    public function testToString()
    {
        $this->assertEquals('foo=bar', $this->object->toString());
    }

    /**
     * @todo Implement testGetName().
     */
    public function testGetName()
    {
        $this->assertEquals('foo', $this->object->getName());
    }

    /**
     * @todo Implement testSetName().
     */
    public function testSetName()
    {
        $name = 'prospect';
        $this->object->setName($name);
        $this->assertEquals($name, $this->readAttribute($this->object, 'name'));
    }

    /**
     * @todo Implement testGetValue().
     */
    public function testGetValue()
    {
        $this->assertEquals('bar', $this->object->getValue());
    }

    /**
     * @todo Implement testSetValue().
     */
    public function testSetValue()
    {
        $value = 'http';
        $this->object->setValue($value);
        $this->assertEquals($value, $this->readAttribute($this->object, 'value'));
    }
}
?>
