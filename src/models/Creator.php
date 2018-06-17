<?php

namespace linuskohl\phpdatacite\models;

use linuskohl\phpdatacite\models\identifiers\NameIdentifier;

/**
 * Class Creator
 *
 * The main researchers involved in producing the data, or the authors of the publication, in
 * priority order. To supply multiple creators, repeat this property.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Creator
{

    const TYPE_NAME_Organizational = 'Organizational';
    const TYPE_NAME_Personal = 'Personal';

    /**
     * The full name of the creator.
     * The personal name, format should be: given, family.
     * Non roman names may be transliterated according to the ALA-LC schemas
     * @var string|\linuskohl\phpdatacite\models\CreatorName
     */
    public $creatorName;

    /**
     * The type of name (Organizational, Personal)
     * @var string|null
     */
    public $nameType;

    /**
     * The personal or first name of the creator.
     * @var string|null
     */
    public $givenName;

    /**
     * The surname or last name of the creator.
     * @var string|null
     */
    public $familyName;

    /**
     * Uniquely identifies an individual or legal entity, according to various schemas.
     * @var \linuskohl\phpdatacite\models\identifiers\NameIdentifier[]|null
     */
    public $nameIdentifiers;

    /**
     * The organizational or institutional affiliation of the creator.
     * @var string[]|null
     */
    public $affiliations;

    /**
     * @return string
     */
    public function getCreatorName()
    {
        return $this->creatorName;
    }

    /**
     * @param string $creatorName
     */
    public function setCreatorName($creatorName)
    {
        $this->creatorName = $creatorName;
    }

    /**
     * @return string|null
     */
    public function getNameType()
    {
        return $this->nameType;
    }

    /**
     * @param string $nameType
     */
    public function setNameType($nameType)
    {
        $this->nameType = $nameType;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param string $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param string $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return \linuskohl\phpdatacite\models\identifiers\NameIdentifier[]|null
     */
    public function getNameIdentifiers()
    {
        return $this->nameIdentifiers;
    }

    /**
     * @param \linuskohl\phpdatacite\models\identifiers\NameIdentifier[] $nameIdentifiers
     */
    public function setNameIdentifiers($nameIdentifiers)
    {
        $this->nameIdentifiers = $nameIdentifiers;
    }

    /**
     * @return string[]|null
     */
    public function getAffiliations()
    {
        return $this->affiliations;
    }

    /**
     * @param string[] $affiliation
     */
    public function setAffiliations($affiliations)
    {
        $this->affiliation = $affiliations;
    }

}