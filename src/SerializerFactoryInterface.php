<?php

/**
 * TechDivision\Import\Serializer\SerializerFactoryInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Serializer;

use TechDivision\Import\Serializer\Configuration\SerializerConfigurationInterface;

/**
 * The factory implementation for serializer instances.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */
interface SerializerFactoryInterface
{

    /**
     * Creates and returns the serializer instance.
     *
     * @param \TechDivision\Import\Serializer\Configuration\SerializerConfigurationInterface $serializerConfiguration The serializer configuration
     *
     * @return \TechDivision\Import\Serializer\ConfigurationAwareSerializerInterface The serializer instance
     */
    public function createSerializer(SerializerConfigurationInterface $serializerConfiguration);
}
