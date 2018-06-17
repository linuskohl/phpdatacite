<?php
namespace linuskohl\phpdatacite\models;

use linuskohl\phpdatacite\models\identifiers\NameIdentifier;

/**
 * Class AlternateIdentifier
 *
 * The institution or person responsible for collecting, managing, distributing, or
 * otherwise contributing to the development of the resource. To supply multiple contributors,
 * repeat this property. For software, if there is an alternate entity that "holds,
 * archives, publishes, prints, distributes, releases, issues, or produces" the code, use the
 * contributorType "hostingInstitution" for the code repository
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Contributor
{
     const TYPE_NAME_Organizational = 'Organizational';
     const TYPE_NAME_Personal = 'Personal';

     const TYPE_ContactPerson = 'ContactPerson';
     const TYPE_DataCollector = 'DataCollector';
     const TYPE_DataCurator = 'DataCurator';
     const TYPE_DataManager = 'DataManager';
     const TYPE_Distributor = 'Distributor';
     const TYPE_Editor = 'Editor';
     const TYPE_HostingInstitution = 'HostingInstitution';
     const TYPE_Producer = 'Producer';
     const TYPE_ProjectLeader = 'ProjectLeader';
     const TYPE_ProjectManager = 'ProjectManager';
     const TYPE_ProjectMember = 'ProjectMember';
     const TYPE_RegistrationAgency = 'RegistrationAgency';
     const TYPE_RegistrationAuthority = 'RegistrationAuthority';
     const TYPE_RelatedPerson = 'RelatedPerson';
     const TYPE_Researcher = 'Researcher';
     const TYPE_ResearchGroup = 'ResearchGroup';
     const TYPE_RightsHolder = 'RightsHolder';
     const TYPE_Sponsor = 'Sponsor';
     const TYPE_Supervisor = 'Supervisor';
     const TYPE_WorkPackageLeader = 'WorkPackageLeader';
     const TYPE_Other = 'Other';

    /**
     * The type of contributor of the resource
     * @var string
     */
    public $contributorType;

    /**
     * The full name of the contributor. The personal name format may be: given, family.
     * Non roman names should be transliterated according to the ALA-LC schemas.
     * @var string
     */
    public $contributorName;

    /**
     * The type of name. (Organizational|Personal)
     * @var string|null
     */
    public $nameType;

    /**
     * The personal or first name of the contributor.
     * @var string|null
     */
    public $givenName;

    /**
     * The surname or last name of the contributor.
     * @var string|null
     */
    public $familyName;

    /**
     * Uniquely identifies an individual orlegal entity, according to various schemes.
     * @var \linuskohl\phpdatacite\models\identifiers\NameIdentifier[]|null
     */
    public $nameIdentifiers;

    /**
     * The organizational or institutional affiliation of the contributor.
     * @var string[]|null
     */
    public $affiliations;

    /**
     * @return string
     */
    public function getContributorType()
    {
        return $this->contributorType;
    }

    /**
     * @param string $contributorType
     */
    public function setContributorType($contributorType)
    {
        $this->contributorType = $contributorType;
    }

    /**
     * @return string
     */
    public function getContributorName()
    {
        return $this->contributorName;
    }

    /**
     * @param string $contributorName
     */
    public function setContributorName($contributorName)
    {
        $this->contributorName = $contributorName;
    }

    /**
     * @return string|null
     */
    public function getNameType() {
        return $this->getNameType();
    }

    /**
     * @param string $nameType
     */
    public function setNameType($nameType) {
        $this->contributorName = $nameType;
    }

    /**
     * @return null|string
     */
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
     * @return null|string
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
     * @return null|string
     */
    public function getAffiliations()
    {
        return $this->affiliations;
    }

    /**
     * @param string[] $affiliations
     */
    public function setAffiliations($affiliations)
    {
        $this->affiliations = $affiliations;
    }

}