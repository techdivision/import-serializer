<?php

/**
 * TechDivision\Import\Serializer\ConfigurationAwareSerializerInterface
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

use TechDivision\Import\Serializer\Configuration\ConfigurationInterface;

/**
 * Interface for configuration aware serializer implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */
interface ConfigurationAwareSerializerInterface extends SerializerInterface
{

    /**
     * Passes the configuration and initializes the serializer.
     *
     * @param \TechDivision\Import\Serializer\Configuration\ConfigurationInterface $configuration The configuration
     *
     * @return void
     */
    public function init(ConfigurationInterface $configuration);
}
