<?php

/**
 * TechDivision\Import\Serializers\CategorySerializerInterface
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

/**
 * Serializer implementation that un-/serializes the categories found in the CSV file
 * in the row 'path'.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */
interface CategorySerializerInterface extends SerializerInterface
{

    /**
     * Denormalizes the passed path.
     *
     * @param string $path The path that has to be normalized
     *
     * @return string The denormalized path
     * @throws \Exception Is thrown, because the method has not yet been implemented
     */
    public function denormalize(string $path) : string;

    /**
     * Normalizes the category path in a standard representation.
     *
     * For example this means, that a category  path `Default Category/Gear`
     * will be normalized into `"Default Category"/Gear`.
     *
     * @param string $path The category path that has to be normalized
     *
     * @return string The normalized category path
     */
    public function normalize(string $path) : string;
}
