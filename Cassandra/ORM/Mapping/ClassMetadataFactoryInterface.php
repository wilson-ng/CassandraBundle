<?php

namespace CassandraBundle\Cassandra\ORM\Mapping;

/**
 * Contract for a Doctrine persistence layer ClassMetadata class to implement.
 */
interface ClassMetadataFactoryInterface
{
    /**
     * Forces the factory to load the metadata of all classes known to the underlying
     * mapping driver.
     *
     * @return array The ClassMetadata instances of all mapped classes.
     */
    public function getAllMetadata();

    /**
     * Gets the class metadata descriptor for a class.
     *
     * @param string $className The name of the class.
     *
     * @return ClassMetadata
     */
    public function getMetadataFor($className);

    /**
     * Checks whether the factory has the metadata for a class loaded already.
     *
     * @param string $className
     *
     * @return bool TRUE if the metadata of the class in question is already loaded, FALSE otherwise.
     */
    public function hasMetadataFor($className);

    /**
     * Sets the metadata descriptor for a specific class.
     *
     * @param string        $className
     * @param ClassMetadata $class
     */
    public function setMetadataFor($className, $class);
}