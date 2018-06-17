<?php

namespace linuskohl\phpdatacite\models\identifiers;

/**
 * Class NameIdentifier
 *
 * Uniquely identifies an individual or legal entity, according to various schemas.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class NameIdentifier
{

    /**
     * Name Identifier
     * @var string
     */
    public $nameIdentifier;

    /**
     * The name of the name identifier schema
     * @var string
     */
    public $nameIdentifierScheme;

    /**
     * The URI of the name identifier schema.
     * @var string|null
     */
    public $schemeURI;

    /**
     * @return string
     */
    public function getNameIdentifier()
    {
        return $this->nameIdentifier;
    }

    /**
     * @param string $nameIdentifier
     */
    public function setNameIdentifier($nameIdentifier)
    {
        $this->nameIdentifier = $nameIdentifier;
    }

    /**
     * @return string
     */
    public function getNameIdentifierScheme()
    {
        return $this->nameIdentifierScheme;
    }

    /**
     * @param string $nameIdentifierScheme
     */
    public function setNameIdentifierScheme($nameIdentifierScheme)
    {
        $this->nameIdentifierScheme = $nameIdentifierScheme;
    }

    /**
     * @return null|string
     */
    public function getSchemeURI()
    {
        return $this->schemeURI;
    }

    /**
     * @param string $schemeURI
     */
    public function setSchemeURI($schemeURI)
    {
        $this->schemeURI = $schemeURI;
    }
}