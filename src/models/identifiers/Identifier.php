<?php

namespace linuskohl\phpdatacite\models\identifiers;

/**
 * Class Identifier
 *
 * The Identifier is a unique string that identifies a resource. For software, determine whether the
 * identifier is for a specific version of a piece of software, (per the Force11 Software
 * Citation Principles13), or for all versions.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Identifier
{

    const TYPE_IDENTIFIER_DOI = 'DOI';

    /**
     * Identifier
     * @var string
     */
    public $identifier;

    /**
     * Type of the identifier
     * @var string
     */
    public $identifierType;

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getIdentifierType()
    {
        return $this->identifierType;
    }

    /**
     * @param string $identifierType
     */
    public function setIdentifierType($identifierType)
    {
        $this->identifierType = $identifierType;
    }

    /**
     * Validates a DOI
     *
     * @param string $doi
     */
    public function validateDOI($doi)
    {
        $regexp_doi = "/^10.\d{4,9}/[-._;()/:A-Z0-9]+$/i";

        return preg_match($regexp_doi, $doi);
    }

}