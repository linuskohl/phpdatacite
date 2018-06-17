linuskohl\phpdatacite\models\identifiers\RelatedIdentifier
===============

Class RelatedIdentifier




* Class name: RelatedIdentifier
* Namespace: linuskohl\phpdatacite\models\identifiers



Constants
----------


### IDENTIFIER_TYPE_ARK

    const IDENTIFIER_TYPE_ARK = 'ARK'





### IDENTIFIER_TYPE_arXiv

    const IDENTIFIER_TYPE_arXiv = 'arXiv'





### IDENTIFIER_TYPE_bibcode

    const IDENTIFIER_TYPE_bibcode = 'bibcode'





### IDENTIFIER_TYPE_DOI

    const IDENTIFIER_TYPE_DOI = 'DOI'





### IDENTIFIER_TYPE_EAN13

    const IDENTIFIER_TYPE_EAN13 = 'EAN13'





### IDENTIFIER_TYPE_EISSN

    const IDENTIFIER_TYPE_EISSN = 'EISSN'





### IDENTIFIER_TYPE_Handle

    const IDENTIFIER_TYPE_Handle = 'Handle'





### IDENTIFIER_TYPE_IGSN

    const IDENTIFIER_TYPE_IGSN = 'IGSN'





### IDENTIFIER_TYPE_ISBN

    const IDENTIFIER_TYPE_ISBN = 'ISBN'





### IDENTIFIER_TYPE_ISSN

    const IDENTIFIER_TYPE_ISSN = 'ISSN'





### IDENTIFIER_TYPE_ISTC

    const IDENTIFIER_TYPE_ISTC = 'ISTC'





### IDENTIFIER_TYPE_LISSN

    const IDENTIFIER_TYPE_LISSN = 'LISSN'





### IDENTIFIER_TYPE_LSID

    const IDENTIFIER_TYPE_LSID = 'LSID'





### IDENTIFIER_TYPE_PMID

    const IDENTIFIER_TYPE_PMID = 'PMID'





### IDENTIFIER_TYPE_PURL

    const IDENTIFIER_TYPE_PURL = 'PURL'





### IDENTIFIER_TYPE_UPC

    const IDENTIFIER_TYPE_UPC = 'UPC'





### IDENTIFIER_TYPE_URL

    const IDENTIFIER_TYPE_URL = 'URL'





### IDENTIFIER_TYPE_URN

    const IDENTIFIER_TYPE_URN = 'URN'





### TYPE_RELATION_IsCitedBy

    const TYPE_RELATION_IsCitedBy = 'IsCitedBy'





### TYPE_RELATION_Cites

    const TYPE_RELATION_Cites = 'Cites '





### TYPE_RELATION_IsSupplementTo

    const TYPE_RELATION_IsSupplementTo = 'IsSupplementTo '





### TYPE_RELATION_IsSupplementedBy

    const TYPE_RELATION_IsSupplementedBy = 'IsSupplementedBy '





### TYPE_RELATION_IsContinuedBy

    const TYPE_RELATION_IsContinuedBy = 'IsContinuedBy '





### TYPE_RELATION_Continues

    const TYPE_RELATION_Continues = 'Continues '





### TYPE_RELATION_IsDescribedBy

    const TYPE_RELATION_IsDescribedBy = 'IsDescribedBy '





### TYPE_RELATION_Describes

    const TYPE_RELATION_Describes = 'Describes '





### TYPE_RELATION_HasMetadata

    const TYPE_RELATION_HasMetadata = 'HasMetadata '





### TYPE_RELATION_IsMetadataFor

    const TYPE_RELATION_IsMetadataFor = 'IsMetadataFor '





### TYPE_RELATION_HasVersion

    const TYPE_RELATION_HasVersion = 'HasVersion '





### TYPE_RELATION_IsVersionOf

    const TYPE_RELATION_IsVersionOf = 'IsVersionOf '





### TYPE_RELATION_IsNewVersionOf

    const TYPE_RELATION_IsNewVersionOf = 'IsNewVersionOf '





### TYPE_RELATION_IsPreviousVersionOf

    const TYPE_RELATION_IsPreviousVersionOf = 'IsPreviousVersionOf '





### TYPE_RELATION_IsPartOf

    const TYPE_RELATION_IsPartOf = 'IsPartOf '





### TYPE_RELATION_HasPart

    const TYPE_RELATION_HasPart = 'HasPart '





### TYPE_RELATION_IsReferencedBy

    const TYPE_RELATION_IsReferencedBy = 'IsReferencedBy'





### TYPE_RELATION_References

    const TYPE_RELATION_References = 'References '





### TYPE_RELATION_IsDocumentedBy

    const TYPE_RELATION_IsDocumentedBy = 'IsDocumentedBy '





### TYPE_RELATION_Documents

    const TYPE_RELATION_Documents = 'Documents '





### TYPE_RELATION_IsCompiledBy

    const TYPE_RELATION_IsCompiledBy = 'IsCompiledBy '





### TYPE_RELATION_Compiles

    const TYPE_RELATION_Compiles = 'Compiles '





### TYPE_RELATION_IsVariantFormOf

    const TYPE_RELATION_IsVariantFormOf = 'IsVariantFormOf '





### TYPE_RELATION_IsOriginalFormOf

    const TYPE_RELATION_IsOriginalFormOf = 'IsOriginalFormOf '





### TYPE_RELATION_IsIdenticalTo

    const TYPE_RELATION_IsIdenticalTo = 'IsIdenticalTo '





### TYPE_RELATION_IsReviewedBy

    const TYPE_RELATION_IsReviewedBy = 'IsReviewedBy '





### TYPE_RELATION_Reviews

    const TYPE_RELATION_Reviews = 'Reviews '





### TYPE_RELATION_IsDerivedFrom

    const TYPE_RELATION_IsDerivedFrom = 'IsDerivedFrom '





### TYPE_RELATION_IsSourceOf

    const TYPE_RELATION_IsSourceOf = 'IsSourceOf '





### TYPE_RELATION_IsRequiredBy

    const TYPE_RELATION_IsRequiredBy = 'IsRequiredBy '





### TYPE_RELATION_Requires

    const TYPE_RELATION_Requires = 'Requires'





### TYPE_RESOURCE_Audiovisual

    const TYPE_RESOURCE_Audiovisual = 'Audiovisual'





### TYPE_RESOURCE_Collection

    const TYPE_RESOURCE_Collection = 'Collection'





### TYPE_RESOURCE_DataPaper

    const TYPE_RESOURCE_DataPaper = 'DataPaper'





### TYPE_RESOURCE_Dataset

    const TYPE_RESOURCE_Dataset = 'Dataset'





### TYPE_RESOURCE_Event

    const TYPE_RESOURCE_Event = 'Event'





### TYPE_RESOURCE_Image

    const TYPE_RESOURCE_Image = 'Image'





### TYPE_RESOURCE_InteractiveResource

    const TYPE_RESOURCE_InteractiveResource = 'InteractiveResource'





### TYPE_RESOURCE_Model

    const TYPE_RESOURCE_Model = 'Model'





### TYPE_RESOURCE_PhysicalObject

    const TYPE_RESOURCE_PhysicalObject = 'PhysicalObject'





### TYPE_RESOURCE_Service

    const TYPE_RESOURCE_Service = 'Service'





### TYPE_RESOURCE_Software

    const TYPE_RESOURCE_Software = 'Software'





### TYPE_RESOURCE_Sound

    const TYPE_RESOURCE_Sound = 'Sound'





### TYPE_RESOURCE_Text

    const TYPE_RESOURCE_Text = 'Text'





### TYPE_RESOURCE_Workflow

    const TYPE_RESOURCE_Workflow = 'Workflow'





### TYPE_RESOURCE_Other

    const TYPE_RESOURCE_Other = 'Other'





Properties
----------


### $relatedIdentifier

    public string $relatedIdentifier

Identifiers of related resources. These must be globally unique identifiers



* Visibility: **public**


### $relatedIdentifierType

    public string $relatedIdentifierType

The type of the RelatedIdentifier



* Visibility: **public**


### $relationType

    public string $relationType

Description of the relationship of the resource being registered (A) and the related resource (B).



* Visibility: **public**


### $relatedMetadataScheme

    public string $relatedMetadataScheme

The name of the scheme.



* Visibility: **public**


### $schemeURI

    public string $schemeURI

The URI of the relatedMetadataScheme.



* Visibility: **public**


### $schemeType

    public string $schemeType

The type of the relatedMetadataScheme, linked with the schemeURI.



* Visibility: **public**


### $resourceTypeGeneral

    public string $resourceTypeGeneral

The general type of a resource.



* Visibility: **public**


Methods
-------


### getRelatedIdentifier

    string linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::getRelatedIdentifier()





* Visibility: **public**




### setRelatedIdentifier

    mixed linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::setRelatedIdentifier(string $relatedIdentifier)





* Visibility: **public**


#### Arguments
* $relatedIdentifier **string**



### getRelatedIdentifierType

    string linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::getRelatedIdentifierType()





* Visibility: **public**




### setRelatedIdentifierType

    mixed linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::setRelatedIdentifierType(string $relatedIdentifierType)





* Visibility: **public**


#### Arguments
* $relatedIdentifierType **string**



### getRelationType

    string linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::getRelationType()





* Visibility: **public**




### setRelationType

    mixed linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::setRelationType(string $relationType)





* Visibility: **public**


#### Arguments
* $relationType **string**



### getRelatedMetadataScheme

    null|string linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::getRelatedMetadataScheme()





* Visibility: **public**




### setRelatedMetadataScheme

    mixed linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::setRelatedMetadataScheme(string $relatedMetadataScheme)





* Visibility: **public**


#### Arguments
* $relatedMetadataScheme **string**



### getSchemeURI

    null|string linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::getSchemeURI()





* Visibility: **public**




### setSchemeURI

    mixed linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::setSchemeURI(string $schemeURI)





* Visibility: **public**


#### Arguments
* $schemeURI **string**



### getSchemeType

    null|string linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::getSchemeType()





* Visibility: **public**




### setSchemeType

    mixed linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::setSchemeType(string $schemeType)





* Visibility: **public**


#### Arguments
* $schemeType **string**



### getResourceTypeGeneral

    null|string linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::getResourceTypeGeneral()





* Visibility: **public**




### setResourceTypeGeneral

    mixed linuskohl\phpdatacite\models\identifiers\RelatedIdentifier::setResourceTypeGeneral(string $resourceTypeGeneral)





* Visibility: **public**


#### Arguments
* $resourceTypeGeneral **string**


