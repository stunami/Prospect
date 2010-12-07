<?php

namespace Versionable\Http\Client;

require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Client/HttpInterface.php';
require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Client/Http.php';

require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Url/UrlInterface.php';
require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Response/ResponseInterface.php';
require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Request/RequestInterface.php';
require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Parameter/CollectionInterface.php';
require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Cookie/CollectionInterface.php';
require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Header/CollectionInterface.php';

require_once dirname(__FILE__) . '/../../../../src/Versionable/Http/Adapter/AdapterInterface.php';

/**
 * Test class for Http.
 * Generated by PHPUnit on 2010-11-06 at 12:33:37.
 */
class HttpTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var Http
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $this->object = new Http;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {

  }

  public function testSetAdapter() {

    $adapter = $this->getMock('Versionable\Http\Adapter\AdapterInterface');
    $this->object->setAdapter($adapter);

    $this->assertEquals($adapter, $this->readAttribute($this->object, 'adapter'));
  }

  public function testGetAdapter() {
    $adapter = $this->getMock('Versionable\Http\Adapter\AdapterInterface');
    $this->object->setAdapter($adapter);

    $this->assertEquals($adapter, $this->object->getAdapter());
  }

  public function testSend() {
/*    $response = $this->getMock('Versionable\Http\Response\ResponseInterface');
    $response->expects($this->any())->method('getCode')->will($this->returnValue(200));
    $response->expects($this->any())->method('getContent')->will($this->returnValue('Test content'));
    $response->expects($this->any())->method('getHeaders')->will($this->returnValue(array()));
*/
    $request = $this->getMock('Versionable\Http\Request\RequestInterface');
/*
    $adapter = $this->getMock('Versionable\Http\Adapter\AdapterInterface');
    $adapter->expects($this->any())->method('call')->will($this->returnValue($response));
    $this->object->setAdapter($adapter);

    $this->assertEquals($response, $this->object->send($request, $response));
 * 
 */
  }

}