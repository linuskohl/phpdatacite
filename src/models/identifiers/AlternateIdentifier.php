<?php

namespace linuskohl\phpdatacite\models\identifiers;

/**
 * Class AlternateIdentifier
 *
 * An identifier or identifiers other than the primary Identifier applied to the resource being
 * registered. This may be any alphanumeric string which is unique within its domain of issue.
 * May be used for local identifiers. AlternateIdentifier should be used for another
 * identifier of the same instance (same location, same file).
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class AlternateIdentifier
{

    /**
     * Alternate Identifier
     * @var string
     */
    public $alternateIdentifier;

    /**
     * Alternate Identifier Type
     * @var string
     */
    public $alternateIdentifierType;

    /**
     * @return string|null
     */
    public function getAlternateIdentifier()
    {
        return $this->alternateIdentifier;
    }

    /**
     * @param string $alternateIdentifier
     */
    public function setAlternateIdentifier($alternateIdentifier)
    {
        $this->alternateIdentifier = $alternateIdentifier;
    }

    /**
     * @return string
     */
    public function getAlternateIdentifierType()
    {
        return $this->alternateIdentifierType;
    }

    /**
     * @param string $alternateIdentifierType
     */
    public function setAlternateIdentifierType($alternateIdentifierType)
    {
        $this->alternateIdentifierType = $alternateIdentifierType;
    }

}