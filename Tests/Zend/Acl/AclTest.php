<?php
namespace Tests\Zend\Acl;

class AclTest extends \Tests\TestCase
{
    protected $classes = array(
        '\Zend_Acl',
        '\Zend_Acl_Exception',
        '\Zend_Acl_Resource',
        '\Zend_Acl_Role',
        '\Zend_Acl_Assert_Interface',
        '\Zend_Acl_Resource_Interface',
        '\Zend_Acl_Role_Interface',
        '\Zend_Acl_Role_Registry',
        '\Zend_Acl_Role_Registry_Exception'
    );

    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        foreach ($this->classes as $class) {
            $this->assertTrue(class_exists($class) || interface_exists($class));
        }
    }
}