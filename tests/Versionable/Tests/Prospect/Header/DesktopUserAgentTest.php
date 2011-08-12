<?php

namespace Versionable\Tests\Prospect\Header;

use Versionable\Prospect\Header\DesktopUserAgent;

/**
 * Test class for DesktopUserAgent.
 * Generated by PHPUnit on 2011-04-08 at 08:43:07.
 */
class DesktopUserAgentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DesktopUserAgent
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new DesktopUserAgent;
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
        $this->assertEquals('User-Agent', $this->object->getName());
        $this->assertEquals('Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)', $this->object->getValue());
    }

}
