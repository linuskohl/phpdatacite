<?php

namespace linuskohl\phpdatacite\models;

use linuskohl\phpdatacite\models\Creator;
use linuskohl\phpdatacite\models\Title;
use linuskohl\phpdatacite\models\ResourceType;
use linuskohl\phpdatacite\models\Subject;
use linuskohl\phpdatacite\models\Contributor;
use linuskohl\phpdatacite\models\Date;
use linuskohl\phpdatacite\models\identifiers\AlternateIdentifier;
use linuskohl\phpdatacite\models\identifiers\RelatedIdentifier;
use linuskohl\phpdatacite\models\Size;
use linuskohl\phpdatacite\models\Format;
use linuskohl\phpdatacite\models\Rights;
use linuskohl\phpdatacite\models\Description;
use linuskohl\phpdatacite\models\GeoLocation;
use linuskohl\phpdatacite\models\FundingReference;

/**
 * Class Resource
 *
 *
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Resource
{

    /**
     * The Identifier is a unique string that identifies a resource. For software, determine whether the
     * identifier is for a specific version of a piece of software, (per the Force11 Software
     * Citation Principles13), or for all versions. (DOI)
     * @var \linuskohl\phpdatacite\models\identifiers\Identifier
     */
    public $identifier;

    /**
     * The main researchers involved in producing the data, or the authors of the publication, in
     * priority order. To supply multiple creators, repeat this property.
     * @var \linuskohl\phpdatacite\models\Creator[]
     */
    public $creators;

    /**
     * A name or title by which a resource is known. May be the title of a dataset or the
     * name of a piece of software.
     * @var \linuskohl\phpdatacite\models\Title[]
     */
    public $titles;

    /**
     * The name of the entity that holds, archives, publishes prints, distributes, releases,
     * issues, or produces the resource. This property will be used to formulate the citation,
     * so consider the prominence of the role. For software, use Publisher for the code
     * repository. If there is an entity other than a code repository, that "holds, archives,
     * publishes, prints, distributes, releases, issues, or produces" the code, use the property
     * Contributor/contributorType/hostingInstitution for the code repository.
     * @var string
     */
    public $publisher;

    /**
     * The year when the data was or will be made publicly available. In the case of
     * resources such as software or dynamic data where there may be multiple releases in
     * one year, include the Date/dateType/dateInformation property and sub-properties to provide
     * more information about the publication or release date details.
     * @var string
     */
    public $publicationYear;

    /**
     * A description of the resource.
     * @var \linuskohl\phpdatacite\models\ResourceType
     */
    public $resourceType;

    /**
     * Subject, keyword, classification code, or key phrase describing the resource.
     * @var \linuskohl\phpdatacite\models\Subject[]|null
     */
    public $subjects;

    /**
     * The institution or person responsible for collecting, managing, distributing, or
     * otherwise contributing to the development of the resource.
     * @var \linuskohl\phpdatacite\models\Contributor[]|null
     */
    public $contributors;

    /**
     * Different dates relevant to the work.
     * @var \linuskohl\phpdatacite\models\Date[]|null
     */
    public $dates;

    /**
     * The primary language of the resource.
     * @var string|null
     */
    public $language;

    /**
     * An identifier or identifiers other than the primary Identifier applied to the resource being registered.
     * This may be any alphanumeris string which is unique within its domain of issue. May be used for
     * local identifiers. AlternateIdentifier should be used for another identifier of the same instance
     * (same location, same file).
     * @var \linuskohl\phpdatacite\models\identifiers\AlternateIdentifier[]|null
     */
    public $alternateIdentifiers;

    /**
     * Identifiers of related resources. These must be globally unique identifiers.
     * @var \linuskohl\phpdatacite\models\identifiers\RelatedIdentifier[]|null
     */
    public $relatedIdentifiers;

    /**
     * Size (e.g. bytes, pages, inches, etc.) or duration (extent), e.g. hours, minutes, days, etc., of a resource.
     * @var \linuskohl\phpdatacite\models\Size[]|null
     */
    public $sizes;

    /**
     * Technical format of the resource.
     * @var \linuskohl\phpdatacite\models\Format[]|null
     */
    public $formats;

    /**
     * The version number of the resource. Suggested practice: track major_version.minor_version
     * @var string
     */
    public $version;

    /**
     * Any rights information for this resource.
     * @var \linuskohl\phpdatacite\models\Rights|null
     */
    public $rightsList;

    /**
     * All additional information that does not fit in any of the other categories.
     * May be used for technical information.
     * @var \linuskohl\phpdatacite\models\Description[]|null
     */
    public $descriptions;

    /**
     * Spatial region or named place where the data was gathered or about which the data is focused.
     * @var \linuskohl\phpdatacite\models\GeoLocation[]|null
     */
    public $geoLocations;

    /**
     * Information about financial support (funding) for the resource being registered.
     * @var \linuskohl\phpdatacite\models\FundingReference[]|null
     */
    public $fundingReferences;

    /**
     * @return \linuskohl\phpdatacite\models\identifiers\Identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param \linuskohl\phpdatacite\models\identifiers\Identifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return \linuskohl\phpdatacite\models\Creator[]
     */
    public function getCreators()
    {
        return $this->creators;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Creator[] $creators
     */
    public function setCreators($creators)
    {
        $this->creators = $creators;
    }

    /**
     * @return \linuskohl\phpdatacite\models\Title[]
     */
    public function getTitles()
    {
        return $this->titles;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Title[] $titles
     */
    public function setTitles($titles)
    {
        $this->titles = $titles;
    }

    /**
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getPublicationYear()
    {
        return $this->publicationYear;
    }

    /**
     * @param string $publicationYear
     */
    public function setPublicationYear($publicationYear)
    {
        $this->publicationYear = $publicationYear;
    }

    /**
     * @return \linuskohl\phpdatacite\models\ResourceType
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @param \linuskohl\phpdatacite\models\ResourceType $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
    }

    /**
     * @return \linuskohl\phpdatacite\models\Subject[]|null
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Subject[] $subjects
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }

    /**
     * @return \linuskohl\phpdatacite\models\Contributor[]|null
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Contributor[] $contributors
     */
    public function setContributors($contributors)
    {
        $this->contributors = $contributors;
    }

    /**
     * @return \linuskohl\phpdatacite\models\Date[]|null
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Date[] $dates
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }

    /**
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return \linuskohl\phpdatacite\models\identifiers\AlternateIdentifier[]|null
     */
    public function getAlternateIdentifiers()
    {
        return $this->alternateIdentifiers;
    }

    /**
     * @param \linuskohl\phpdatacite\models\identifiers\AlternateIdentifier[] $alternateIdentifiers
     */
    public function setAlternateIdentifiers($alternateIdentifiers)
    {
        $this->alternateIdentifiers = $alternateIdentifiers;
    }

    /**
     * @return \linuskohl\phpdatacite\models\identifiers\RelatedIdentifier[]|null
     */
    public function getRelatedIdentifiers()
    {
        return $this->relatedIdentifiers;
    }

    /**
     * @param \linuskohl\phpdatacite\models\identifiers\RelatedIdentifier[] $relatedIdentifiers
     */
    public function setRelatedIdentifiers($relatedIdentifiers)
    {
        $this->relatedIdentifiers = $relatedIdentifiers;
    }

    /**
     * @return \linuskohl\phpdatacite\models\Size[]|null
     */
    public function getSizes()
    {
        return $this->sizes;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Size[] $sizes
     */
    public function setSizes($sizes)
    {
        $this->sizes = $sizes;
    }

    /**
     * @return \linuskohl\phpdatacite\models\Format[]|null
     */
    public function getFormats()
    {
        return $this->formats;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Format[] $formats
     */
    public function setFormats($formats)
    {
        $this->formats = $formats;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return \linuskohl\phpdatacite\models\RightsList|null
     */
    public function getRightsList()
    {
        return $this->rightsList;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Rights[] $rightsList
     */
    public function setRightsList($rightsList)
    {
        $this->rightsList = $rightsList;
    }

    /**
     * @return \linuskohl\phpdatacite\models\Description[]|null
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * @param \linuskohl\phpdatacite\models\Description[] $descriptions
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
    }

    /**
     * @return \linuskohl\phpdatacite\models\GeoLocation[]|null
     */
    public function getGeoLocations()
    {
        return $this->geoLocations;
    }

    /**
     * @param \linuskohl\phpdatacite\models\GeoLocation[] $geoLocations
     */
    public function setGeoLocations($geoLocations)
    {
        $this->geoLocations = $geoLocations;
    }

    /**
     * @return \linuskohl\phpdatacite\models\FundingReference[]|null
     */
    public function getFundingReferences()
    {
        return $this->fundingReferences;
    }

    /**
     * @param \linuskohl\phpdatacite\models\FundingReference[] $fundingReferences
     */
    public function setFundingReferences($fundingReferences)
    {
        $this->fundingReferences = $fundingReferences;
    }

}