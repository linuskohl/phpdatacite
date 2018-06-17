linuskohl\phpdatacite\models\Resource
===============

Class Resource




* Class name: Resource
* Namespace: linuskohl\phpdatacite\models





Properties
----------


### $identifier

    public \linuskohl\phpdatacite\models\identifiers\Identifier $identifier

The Identifier is a unique string that identifies a resource. For software, determine whether the
identifier is for a specific version of a piece of software, (per the Force11 Software
Citation Principles13), or for all versions. (DOI)



* Visibility: **public**


### $creators

    public array<mixed,\linuskohl\phpdatacite\models\Creator> $creators

The main researchers involved in producing the data, or the authors of the publication, in
priority order. To supply multiple creators, repeat this property.



* Visibility: **public**


### $titles

    public array<mixed,\linuskohl\phpdatacite\models\Title> $titles

A name or title by which a resource is known. May be the title of a dataset or the
name of a piece of software.



* Visibility: **public**


### $publisher

    public string $publisher

The name of the entity that holds, archives, publishes prints, distributes, releases,
issues, or produces the resource. This property will be used to formulate the citation,
so consider the prominence of the role. For software, use Publisher for the code
repository. If there is an entity other than a code repository, that "holds, archives,
publishes, prints, distributes, releases, issues, or produces" the code, use the property
Contributor/contributorType/hostingInstitution for the code repository.



* Visibility: **public**


### $publicationYear

    public string $publicationYear

The year when the data was or will be made publicly available. In the case of
resources such as software or dynamic data where there may be multiple releases in
one year, include the Date/dateType/dateInformation property and sub-properties to provide
more information about the publication or release date details.



* Visibility: **public**


### $resourceType

    public \linuskohl\phpdatacite\models\ResourceType $resourceType

A description of the resource.



* Visibility: **public**


### $subjects

    public array<mixed,\linuskohl\phpdatacite\models\Subject> $subjects

Subject, keyword, classification code, or key phrase describing the resource.



* Visibility: **public**


### $contributors

    public array<mixed,\linuskohl\phpdatacite\models\Contributor> $contributors

The institution or person responsible for collecting, managing, distributing, or
otherwise contributing to the development of the resource.



* Visibility: **public**


### $dates

    public array<mixed,\linuskohl\phpdatacite\models\Date> $dates

Different dates relevant to the work.



* Visibility: **public**


### $language

    public string $language

The primary language of the resource.



* Visibility: **public**


### $alternateIdentifiers

    public array<mixed,\linuskohl\phpdatacite\models\identifiers\AlternateIdentifier> $alternateIdentifiers

An identifier or identifiers other than the primary Identifier applied to the resource being registered.

This may be any alphanumeris string which is unique within its domain of issue. May be used for
local identifiers. AlternateIdentifier should be used for another identifier of the same instance
(same location, same file).

* Visibility: **public**


### $relatedIdentifiers

    public array<mixed,\linuskohl\phpdatacite\models\identifiers\RelatedIdentifier> $relatedIdentifiers

Identifiers of related resources. These must be globally unique identifiers.



* Visibility: **public**


### $sizes

    public array<mixed,\linuskohl\phpdatacite\models\Size> $sizes

Size (e.g. bytes, pages, inches, etc.) or duration (extent), e.g. hours, minutes, days, etc., of a resource.



* Visibility: **public**


### $formats

    public array<mixed,\linuskohl\phpdatacite\models\Format> $formats

Technical format of the resource.



* Visibility: **public**


### $version

    public string $version

The version number of the resource. Suggested practice: track major_version.minor_version



* Visibility: **public**


### $rightsList

    public \linuskohl\phpdatacite\models\Rights $rightsList

Any rights information for this resource.



* Visibility: **public**


### $descriptions

    public array<mixed,\linuskohl\phpdatacite\models\Description> $descriptions

All additional information that does not fit in any of the other categories.

May be used for technical information.

* Visibility: **public**


### $geoLocations

    public array<mixed,\linuskohl\phpdatacite\models\GeoLocation> $geoLocations

Spatial region or named place where the data was gathered or about which the data is focused.



* Visibility: **public**


### $fundingReferences

    public array<mixed,\linuskohl\phpdatacite\models\FundingReference> $fundingReferences

Information about financial support (funding) for the resource being registered.



* Visibility: **public**


Methods
-------


### getIdentifier

    \linuskohl\phpdatacite\models\identifiers\Identifier linuskohl\phpdatacite\models\Resource::getIdentifier()





* Visibility: **public**




### setIdentifier

    mixed linuskohl\phpdatacite\models\Resource::setIdentifier(\linuskohl\phpdatacite\models\identifiers\Identifier $identifier)





* Visibility: **public**


#### Arguments
* $identifier **[linuskohl\phpdatacite\models\identifiers\Identifier](linuskohl-phpdatacite-models-identifiers-Identifier.md)**



### getCreators

    array<mixed,\linuskohl\phpdatacite\models\Creator> linuskohl\phpdatacite\models\Resource::getCreators()





* Visibility: **public**




### setCreators

    mixed linuskohl\phpdatacite\models\Resource::setCreators(array<mixed,\linuskohl\phpdatacite\models\Creator> $creators)





* Visibility: **public**


#### Arguments
* $creators **array&lt;mixed,\linuskohl\phpdatacite\models\Creator&gt;**



### getTitles

    array<mixed,\linuskohl\phpdatacite\models\Title> linuskohl\phpdatacite\models\Resource::getTitles()





* Visibility: **public**




### setTitles

    mixed linuskohl\phpdatacite\models\Resource::setTitles(array<mixed,\linuskohl\phpdatacite\models\Title> $titles)





* Visibility: **public**


#### Arguments
* $titles **array&lt;mixed,\linuskohl\phpdatacite\models\Title&gt;**



### getPublisher

    string linuskohl\phpdatacite\models\Resource::getPublisher()





* Visibility: **public**




### setPublisher

    mixed linuskohl\phpdatacite\models\Resource::setPublisher(string $publisher)





* Visibility: **public**


#### Arguments
* $publisher **string**



### getPublicationYear

    string linuskohl\phpdatacite\models\Resource::getPublicationYear()





* Visibility: **public**




### setPublicationYear

    mixed linuskohl\phpdatacite\models\Resource::setPublicationYear(string $publicationYear)





* Visibility: **public**


#### Arguments
* $publicationYear **string**



### getResourceType

    \linuskohl\phpdatacite\models\ResourceType linuskohl\phpdatacite\models\Resource::getResourceType()





* Visibility: **public**




### setResourceType

    mixed linuskohl\phpdatacite\models\Resource::setResourceType(\linuskohl\phpdatacite\models\ResourceType $resourceType)





* Visibility: **public**


#### Arguments
* $resourceType **[linuskohl\phpdatacite\models\ResourceType](linuskohl-phpdatacite-models-ResourceType.md)**



### getSubjects

    array<mixed,\linuskohl\phpdatacite\models\Subject>|null linuskohl\phpdatacite\models\Resource::getSubjects()





* Visibility: **public**




### setSubjects

    mixed linuskohl\phpdatacite\models\Resource::setSubjects(array<mixed,\linuskohl\phpdatacite\models\Subject> $subjects)





* Visibility: **public**


#### Arguments
* $subjects **array&lt;mixed,\linuskohl\phpdatacite\models\Subject&gt;**



### getContributors

    array<mixed,\linuskohl\phpdatacite\models\Contributor>|null linuskohl\phpdatacite\models\Resource::getContributors()





* Visibility: **public**




### setContributors

    mixed linuskohl\phpdatacite\models\Resource::setContributors(array<mixed,\linuskohl\phpdatacite\models\Contributor> $contributors)





* Visibility: **public**


#### Arguments
* $contributors **array&lt;mixed,\linuskohl\phpdatacite\models\Contributor&gt;**



### getDates

    array<mixed,\linuskohl\phpdatacite\models\Date>|null linuskohl\phpdatacite\models\Resource::getDates()





* Visibility: **public**




### setDates

    mixed linuskohl\phpdatacite\models\Resource::setDates(array<mixed,\linuskohl\phpdatacite\models\Date> $dates)





* Visibility: **public**


#### Arguments
* $dates **array&lt;mixed,\linuskohl\phpdatacite\models\Date&gt;**



### getLanguage

    string|null linuskohl\phpdatacite\models\Resource::getLanguage()





* Visibility: **public**




### setLanguage

    mixed linuskohl\phpdatacite\models\Resource::setLanguage(string $language)





* Visibility: **public**


#### Arguments
* $language **string**



### getAlternateIdentifiers

    array<mixed,\linuskohl\phpdatacite\models\identifiers\AlternateIdentifier>|null linuskohl\phpdatacite\models\Resource::getAlternateIdentifiers()





* Visibility: **public**




### setAlternateIdentifiers

    mixed linuskohl\phpdatacite\models\Resource::setAlternateIdentifiers(array<mixed,\linuskohl\phpdatacite\models\identifiers\AlternateIdentifier> $alternateIdentifiers)





* Visibility: **public**


#### Arguments
* $alternateIdentifiers **array&lt;mixed,\linuskohl\phpdatacite\models\identifiers\AlternateIdentifier&gt;**



### getRelatedIdentifiers

    array<mixed,\linuskohl\phpdatacite\models\identifiers\RelatedIdentifier>|null linuskohl\phpdatacite\models\Resource::getRelatedIdentifiers()





* Visibility: **public**




### setRelatedIdentifiers

    mixed linuskohl\phpdatacite\models\Resource::setRelatedIdentifiers(array<mixed,\linuskohl\phpdatacite\models\identifiers\RelatedIdentifier> $relatedIdentifiers)





* Visibility: **public**


#### Arguments
* $relatedIdentifiers **array&lt;mixed,\linuskohl\phpdatacite\models\identifiers\RelatedIdentifier&gt;**



### getSizes

    array<mixed,\linuskohl\phpdatacite\models\Size>|null linuskohl\phpdatacite\models\Resource::getSizes()





* Visibility: **public**




### setSizes

    mixed linuskohl\phpdatacite\models\Resource::setSizes(array<mixed,\linuskohl\phpdatacite\models\Size> $sizes)





* Visibility: **public**


#### Arguments
* $sizes **array&lt;mixed,\linuskohl\phpdatacite\models\Size&gt;**



### getFormats

    array<mixed,\linuskohl\phpdatacite\models\Format>|null linuskohl\phpdatacite\models\Resource::getFormats()





* Visibility: **public**




### setFormats

    mixed linuskohl\phpdatacite\models\Resource::setFormats(array<mixed,\linuskohl\phpdatacite\models\Format> $formats)





* Visibility: **public**


#### Arguments
* $formats **array&lt;mixed,\linuskohl\phpdatacite\models\Format&gt;**



### getVersion

    string linuskohl\phpdatacite\models\Resource::getVersion()





* Visibility: **public**




### setVersion

    mixed linuskohl\phpdatacite\models\Resource::setVersion(string $version)





* Visibility: **public**


#### Arguments
* $version **string**



### getRightsList

    \linuskohl\phpdatacite\models\RightsList|null linuskohl\phpdatacite\models\Resource::getRightsList()





* Visibility: **public**




### setRightsList

    mixed linuskohl\phpdatacite\models\Resource::setRightsList(array<mixed,\linuskohl\phpdatacite\models\Rights> $rightsList)





* Visibility: **public**


#### Arguments
* $rightsList **array&lt;mixed,\linuskohl\phpdatacite\models\Rights&gt;**



### getDescriptions

    array<mixed,\linuskohl\phpdatacite\models\Description>|null linuskohl\phpdatacite\models\Resource::getDescriptions()





* Visibility: **public**




### setDescriptions

    mixed linuskohl\phpdatacite\models\Resource::setDescriptions(array<mixed,\linuskohl\phpdatacite\models\Description> $descriptions)





* Visibility: **public**


#### Arguments
* $descriptions **array&lt;mixed,\linuskohl\phpdatacite\models\Description&gt;**



### getGeoLocations

    array<mixed,\linuskohl\phpdatacite\models\GeoLocation>|null linuskohl\phpdatacite\models\Resource::getGeoLocations()





* Visibility: **public**




### setGeoLocations

    mixed linuskohl\phpdatacite\models\Resource::setGeoLocations(array<mixed,\linuskohl\phpdatacite\models\GeoLocation> $geoLocations)





* Visibility: **public**


#### Arguments
* $geoLocations **array&lt;mixed,\linuskohl\phpdatacite\models\GeoLocation&gt;**



### getFundingReferences

    array<mixed,\linuskohl\phpdatacite\models\FundingReference>|null linuskohl\phpdatacite\models\Resource::getFundingReferences()





* Visibility: **public**




### setFundingReferences

    mixed linuskohl\phpdatacite\models\Resource::setFundingReferences(array<mixed,\linuskohl\phpdatacite\models\FundingReference> $fundingReferences)





* Visibility: **public**


#### Arguments
* $fundingReferences **array&lt;mixed,\linuskohl\phpdatacite\models\FundingReference&gt;**


