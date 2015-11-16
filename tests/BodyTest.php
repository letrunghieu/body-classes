<?php

class BodyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \HieuLe\BodyClasses\Body
     */
    private $_obj;

    public function setUp()
    {
        parent::setUp();

        $this->_obj = new \HieuLe\BodyClasses\Body();
    }

    public function testAddClassesAsString()
    {
        $this->_obj->addClasses('foo');
        $this->assertEquals(array('foo'), $this->_obj->getClassArray());
        $this->assertEquals('foo', $this->_obj->getClasses());
    }

    public function testAddClassesAsArray()
    {
        $this->_obj->addClasses(array('bar', 'baz'));
        $this->assertEquals(array('bar', 'baz'), $this->_obj->getClassArray());
        $this->assertEquals('bar baz', $this->_obj->getClasses());
    }

    public function testAddDuplicatedClasses()
    {
        $this->_obj->addClasses('foo');
        $this->_obj->addClasses('bar');
        $this->_obj->addClasses(array('foo'));

        $this->assertEquals(array('foo', 'bar'), $this->_obj->getClassArray());
        $this->assertEquals('foo bar', $this->_obj->getClasses());
    }
}