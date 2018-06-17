<?php

namespace linuskohl\phpdatacite\models\identifiers;

/**
 * Class RelatedIdentifier
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class RelatedIdentifier
{

    const IDENTIFIER_TYPE_ARK = 'ARK';
    const IDENTIFIER_TYPE_arXiv = 'arXiv';
    const IDENTIFIER_TYPE_bibcode = 'bibcode';
    const IDENTIFIER_TYPE_DOI = 'DOI';
    const IDENTIFIER_TYPE_EAN13 = 'EAN13';
    const IDENTIFIER_TYPE_EISSN = 'EISSN';
    const IDENTIFIER_TYPE_Handle = 'Handle';
    const IDENTIFIER_TYPE_IGSN = 'IGSN';
    const IDENTIFIER_TYPE_ISBN = 'ISBN';
    const IDENTIFIER_TYPE_ISSN = 'ISSN';
    const IDENTIFIER_TYPE_ISTC = 'ISTC';
    const IDENTIFIER_TYPE_LISSN = 'LISSN';
    const IDENTIFIER_TYPE_LSID = 'LSID';
    const IDENTIFIER_TYPE_PMID = 'PMID';
    const IDENTIFIER_TYPE_PURL = 'PURL';
    const IDENTIFIER_TYPE_UPC = 'UPC';
    const IDENTIFIER_TYPE_URL = 'URL';
    const IDENTIFIER_TYPE_URN = 'URN';

    const TYPE_RELATION_IsCitedBy = 'IsCitedBy';
    const TYPE_RELATION_Cites = 'Cites ';
    const TYPE_RELATION_IsSupplementTo = 'IsSupplementTo ';
    const TYPE_RELATION_IsSupplementedBy = 'IsSupplementedBy ';
    const TYPE_RELATION_IsContinuedBy = 'IsContinuedBy ';
    const TYPE_RELATION_Continues = 'Continues ';
    const TYPE_RELATION_IsDescribedBy = 'IsDescribedBy ';
    const TYPE_RELATION_Describes = 'Describes ';
    const TYPE_RELATION_HasMetadata = 'HasMetadata ';
    const TYPE_RELATION_IsMetadataFor = 'IsMetadataFor ';
    const TYPE_RELATION_HasVersion = 'HasVersion ';
    const TYPE_RELATION_IsVersionOf = 'IsVersionOf ';
    const TYPE_RELATION_IsNewVersionOf = 'IsNewVersionOf ';
    const TYPE_RELATION_IsPreviousVersionOf = 'IsPreviousVersionOf ';
    const TYPE_RELATION_IsPartOf = 'IsPartOf ';
    const TYPE_RELATION_HasPart = 'HasPart ';
    const TYPE_RELATION_IsReferencedBy = 'IsReferencedBy';
    const TYPE_RELATION_References = 'References ';
    const TYPE_RELATION_IsDocumentedBy = 'IsDocumentedBy ';
    const TYPE_RELATION_Documents = 'Documents ';
    const TYPE_RELATION_IsCompiledBy = 'IsCompiledBy ';
    const TYPE_RELATION_Compiles = 'Compiles ';
    const TYPE_RELATION_IsVariantFormOf = 'IsVariantFormOf ';
    const TYPE_RELATION_IsOriginalFormOf = 'IsOriginalFormOf ';
    const TYPE_RELATION_IsIdenticalTo = 'IsIdenticalTo ';
    const TYPE_RELATION_IsReviewedBy = 'IsReviewedBy ';
    const TYPE_RELATION_Reviews = 'Reviews ';
    const TYPE_RELATION_IsDerivedFrom = 'IsDerivedFrom ';
    const TYPE_RELATION_IsSourceOf = 'IsSourceOf ';
    const TYPE_RELATION_IsRequiredBy = 'IsRequiredBy ';
    const TYPE_RELATION_Requires = 'Requires';

    const TYPE_RESOURCE_Audiovisual = 'Audiovisual';
    const TYPE_RESOURCE_Collection = 'Collection';
    const TYPE_RESOURCE_DataPaper = 'DataPaper';
    const TYPE_RESOURCE_Dataset = 'Dataset';
    const TYPE_RESOURCE_Event = 'Event';
    const TYPE_RESOURCE_Image = 'Image';
    const TYPE_RESOURCE_InteractiveResource = 'InteractiveResource';
    const TYPE_RESOURCE_Model = 'Model';
    const TYPE_RESOURCE_PhysicalObject = 'PhysicalObject';
    const TYPE_RESOURCE_Service = 'Service';
    const TYPE_RESOURCE_Software = 'Software';
    const TYPE_RESOURCE_Sound = 'Sound';
    const TYPE_RESOURCE_Text = 'Text';
    const TYPE_RESOURCE_Workflow = 'Workflow';
    const TYPE_RESOURCE_Other = 'Other';

    /**
     * Identifiers of related resources. These must be globally unique identifiers
     * @var string
     */
    public $relatedIdentifier;

    /**
     * The type of the RelatedIdentifier
     * @var string
     */
    public $relatedIdentifierType;

    /**
     * Description of the relationship of the resource being registered (A) and the related resource (B).
     * @var string
     */
    public $relationType;

    /**
     * The name of the scheme.
     * @var string|null
     */
    public $relatedMetadataScheme;

    /**
     * The URI of the relatedMetadataScheme.
     * @var string|null
     */
    public $schemeURI;

    /**
     * The type of the relatedMetadataScheme, linked with the schemeURI.
     * @var string|null
     */
    public $schemeType;

    /**
     * The general type of a resource.
     * @var string|null
     */
    public $resourceTypeGeneral;

    /**
     * @return string
     */
    public function getRelatedIdentifier()
    {
        return $this->relatedIdentifier;
    }

    /**
     * @param string $relatedIdentifier
     */
    public function setRelatedIdentifier($relatedIdentifier)
    {
        $this->relatedIdentifier = $relatedIdentifier;
    }

    /**
     * @return string
     */
    public function getRelatedIdentifierType()
    {
        return $this->relatedIdentifierType;
    }

    /**
     * @param string $relatedIdentifierType
     */
    public function setRelatedIdentifierType($relatedIdentifierType)
    {
        $this->relatedIdentifierType = $relatedIdentifierType;
    }

    /**
     * @return string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * @param string $relationType
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;
    }

    /**
     * @return null|string
     */
    public function getRelatedMetadataScheme()
    {
        return $this->relatedMetadataScheme;
    }

    /**
     * @param string $relatedMetadataScheme
     */
    public function setRelatedMetadataScheme($relatedMetadataScheme)
    {
        $this->relatedMetadataScheme = $relatedMetadataScheme;
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

    /**
     * @return null|string
     */
    public function getSchemeType()
    {
        return $this->schemeType;
    }

    /**
     * @param string $schemeType
     */
    public function setSchemeType($schemeType)
    {
        $this->schemeType = $schemeType;
    }

    /**
     * @return null|string
     */
    public function getResourceTypeGeneral()
    {
        return $this->resourceTypeGeneral;
    }

    /**
     * @param string $resourceTypeGeneral
     */
    public function setResourceTypeGeneral($resourceTypeGeneral)
    {
        $this->resourceTypeGeneral = $resourceTypeGeneral;
    }


}