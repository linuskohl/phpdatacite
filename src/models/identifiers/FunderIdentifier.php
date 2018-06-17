<?php

namespace linuskohl\phpdatacite\models\identifiers;

/**
 * Class FunderIdentifier
 *
 * Uniquely identifies a funding entity, according to various types.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class FunderIdentifier
{

    const TYPE_IDENTIFIER_ISNI = 'ISNI';
    const TYPE_IDENTIFIER_GRID = 'GRID';
    const TYPE_IDENTIFIER_CrossrefFunder = 'Crossref';
    const TYPE_IDENTIFIER_Other = 'Other';

    /**
     * Funder Identifier
     * @var string
     */
    public $funderIdentifier;

    /**
     * The type of the funderIdentifier.
     * @var string|null
     */
    public $funderIdentifierType;

    /**
     * @return string
     */
    public function getFunderIdentifier()
    {
        return $this->funderIdentifier;
    }

    /**
     * @param string $funderIdentifier string
     */
    public function setFunderIdentifier($funderIdentifier)
    {
        $this->funderIdentifier = $funderIdentifier;
    }

    /**
     * @return null|string
     */
    public function getFunderIdentifierType()
    {
        return $this->funderIdentifierType;
    }

    /**
     * @param string $funderIdentifierType
     */
    public function setFunderIdentifierType($funderIdentifierType)
    {
        $this->funderIdentifierType = $funderIdentifierType;
    }

}