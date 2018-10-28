<?php

namespace SoftCreatR\Tests\MimeDetector;

use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use SoftCreatR\MimeDetector\MimeDetector;

/**
 * Utility methods for MimeDetectorTest
 */
class MimeDetectorTestUtil
{
    /**
     * Returns a private method for testing purposes.
     *
     * @param   MimeDetector    $obj
     * @param   string          $methodName
     * @return  ReflectionMethod
     * @throws  ReflectionException
     */
    public static function getPrivateMethod($obj, $methodName)
    {
        if (!$obj instanceof MimeDetector) {
            throw new ReflectionException('No MimeDetector object provided.');
        }
        
        $class = new ReflectionClass($obj);

        if (!$class->hasMethod($methodName)) {
            throw new ReflectionException('Method ' . $methodName . ' is not defined.');
        }

        $method = $class->getMethod($methodName);

        if (!$method->isPrivate()) {
            throw new ReflectionException('Method ' . $methodName . ' is not private.');
        }

        $method->setAccessible(true);

        return $method;
    }

    /**
     * Returns a protected method for testing purposes.
     *
     * @param   MimeDetector    $obj
     * @param   string          $methodName
     * @return  ReflectionMethod
     * @throws  ReflectionException
     */
    public static function getProtectedMethod($obj, $methodName)
    {
        if (!$obj instanceof MimeDetector) {
            throw new ReflectionException('No MimeDetector object provided.');
        }
        
        $class = new ReflectionClass($obj);

        if (!$class->hasMethod($methodName)) {
            throw new ReflectionException('Method ' . $methodName . ' is not defined.');
        }

        $method = $class->getMethod($methodName);

        if (!$method->isProtected()) {
            throw new ReflectionException('Method ' . $methodName . ' is not protected.');
        }

        $method->setAccessible(true);

        return $method;
    }

    /**
     * Updates a protected property for testing purposes.
     *
     * @param   MimeDetector    $obj
     * @param   string          $propertyName
     * @param   mixed           $value
     * @return  void
     * @throws  ReflectionException
     */
    public static function setProtectedProperty($obj, $propertyName, $value = null)
    {
        if (!$obj instanceof MimeDetector) {
            throw new ReflectionException('No MimeDetector object provided.');
        }
        
        $class = new ReflectionClass($obj);

        if (!$class->hasProperty($propertyName)) {
            throw new ReflectionException('Property ' . $propertyName . ' is not defined.');
        }

        $property = $class->getProperty($propertyName);

        if (!$property->isProtected()) {
            throw new ReflectionException('Property ' . $propertyName . ' is not protected.');
        }

        $property->setAccessible(true);
        $property->setValue($obj, $value);
        $property->setAccessible(false);
    }

    /**
     * Updates a protected property for testing purposes.
     *
     * @param   MimeDetector    $obj
     * @param   string          $propertyName
     * @param   mixed           $value
     * @return  void
     * @throws  ReflectionException
     */
    public static function setPrivateProperty($obj, $propertyName, $value = null)
    {
        if (!$obj instanceof MimeDetector) {
            throw new ReflectionException('No MimeDetector object provided.');
        }
        
        $class = new ReflectionClass($obj);

        if (!$class->hasProperty($propertyName)) {
            throw new ReflectionException('Property ' . $propertyName . ' is not defined.');
        }

        $property = $class->getProperty($propertyName);

        if (!$property->isPrivate()) {
            throw new ReflectionException('Property ' . $propertyName . ' is not private.');
        }

        $property->setAccessible(true);
        $property->setValue($obj, $value);
        $property->setAccessible(false);
    }
}
