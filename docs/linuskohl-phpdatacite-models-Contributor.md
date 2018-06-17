linuskohl\phpdatacite\models\Contributor
===============

Class AlternateIdentifier

The institution or person responsible for collecting, managing, distributing, or
otherwise contributing to the development of the resource. To supply multiple contributors,
repeat this property. For software, if there is an alternate entity that "holds,
archives, publishes, prints, distributes, releases, issues, or produces" the code, use the
contributorType "hostingInstitution" for the code repository


* Class name: Contributor
* Namespace: linuskohl\phpdatacite\models



Constants
----------


### TYPE_NAME_Organizational

    const TYPE_NAME_Organizational = 'Organizational'





### TYPE_NAME_Personal

    const TYPE_NAME_Personal = 'Personal'





### TYPE_ContactPerson

    const TYPE_ContactPerson = 'ContactPerson'





### TYPE_DataCollector

    const TYPE_DataCollector = 'DataCollector'





### TYPE_DataCurator

    const TYPE_DataCurator = 'DataCurator'





### TYPE_DataManager

    const TYPE_DataManager = 'DataManager'





### TYPE_Distributor

    const TYPE_Distributor = 'Distributor'





### TYPE_Editor

    const TYPE_Editor = 'Editor'





### TYPE_HostingInstitution

    const TYPE_HostingInstitution = 'HostingInstitution'





### TYPE_Producer

    const TYPE_Producer = 'Producer'





### TYPE_ProjectLeader

    const TYPE_ProjectLeader = 'ProjectLeader'





### TYPE_ProjectManager

    const TYPE_ProjectManager = 'ProjectManager'





### TYPE_ProjectMember

    const TYPE_ProjectMember = 'ProjectMember'





### TYPE_RegistrationAgency

    const TYPE_RegistrationAgency = 'RegistrationAgency'





### TYPE_RegistrationAuthority

    const TYPE_RegistrationAuthority = 'RegistrationAuthority'





### TYPE_RelatedPerson

    const TYPE_RelatedPerson = 'RelatedPerson'





### TYPE_Researcher

    const TYPE_Researcher = 'Researcher'





### TYPE_ResearchGroup

    const TYPE_ResearchGroup = 'ResearchGroup'





### TYPE_RightsHolder

    const TYPE_RightsHolder = 'RightsHolder'





### TYPE_Sponsor

    const TYPE_Sponsor = 'Sponsor'





### TYPE_Supervisor

    const TYPE_Supervisor = 'Supervisor'





### TYPE_WorkPackageLeader

    const TYPE_WorkPackageLeader = 'WorkPackageLeader'





### TYPE_Other

    const TYPE_Other = 'Other'





Properties
----------


### $contributorType

    public string $contributorType

The type of contributor of the resource



* Visibility: **public**


### $contributorName

    public string $contributorName

The full name of the contributor. The personal name format may be: given, family.

Non roman names should be transliterated according to the ALA-LC schemas.

* Visibility: **public**


### $nameType

    public string $nameType

The type of name. (Organizational|Personal)



* Visibility: **public**


### $givenName

    public string $givenName

The personal or first name of the contributor.



* Visibility: **public**


### $familyName

    public string $familyName

The surname or last name of the contributor.



* Visibility: **public**


### $nameIdentifiers

    public array<mixed,\linuskohl\phpdatacite\models\identifiers\NameIdentifier> $nameIdentifiers

Uniquely identifies an individual orlegal entity, according to various schemes.



* Visibility: **public**


### $affiliations

    public array<mixed,string> $affiliations

The organizational or institutional affiliation of the contributor.



* Visibility: **public**


Methods
-------


### getContributorType

    string linuskohl\phpdatacite\models\Contributor::getContributorType()





* Visibility: **public**




### setContributorType

    mixed linuskohl\phpdatacite\models\Contributor::setContributorType(string $contributorType)





* Visibility: **public**


#### Arguments
* $contributorType **string**



### getContributorName

    string linuskohl\phpdatacite\models\Contributor::getContributorName()





* Visibility: **public**




### setContributorName

    mixed linuskohl\phpdatacite\models\Contributor::setContributorName(string $contributorName)





* Visibility: **public**


#### Arguments
* $contributorName **string**



### getNameType

    string|null linuskohl\phpdatacite\models\Contributor::getNameType()





* Visibility: **public**




### setNameType

    mixed linuskohl\phpdatacite\models\Contributor::setNameType(string $nameType)





* Visibility: **public**


#### Arguments
* $nameType **string**



### getGivenName

    null|string linuskohl\phpdatacite\models\Contributor::getGivenName()





* Visibility: **public**




### setGivenName

    mixed linuskohl\phpdatacite\models\Contributor::setGivenName(string $givenName)





* Visibility: **public**


#### Arguments
* $givenName **string**



### getFamilyName

    null|string linuskohl\phpdatacite\models\Contributor::getFamilyName()





* Visibility: **public**




### setFamilyName

    mixed linuskohl\phpdatacite\models\Contributor::setFamilyName(string $familyName)





* Visibility: **public**


#### Arguments
* $familyName **string**



### getNameIdentifiers

    array<mixed,\linuskohl\phpdatacite\models\identifiers\NameIdentifier>|null linuskohl\phpdatacite\models\Contributor::getNameIdentifiers()





* Visibility: **public**




### setNameIdentifiers

    mixed linuskohl\phpdatacite\models\Contributor::setNameIdentifiers(array<mixed,\linuskohl\phpdatacite\models\identifiers\NameIdentifier> $nameIdentifiers)





* Visibility: **public**


#### Arguments
* $nameIdentifiers **array&lt;mixed,\linuskohl\phpdatacite\models\identifiers\NameIdentifier&gt;**



### getAffiliations

    null|string linuskohl\phpdatacite\models\Contributor::getAffiliations()





* Visibility: **public**




### setAffiliations

    mixed linuskohl\phpdatacite\models\Contributor::setAffiliations(array<mixed,string> $affiliations)





* Visibility: **public**


#### Arguments
* $affiliations **array&lt;mixed,string&gt;**


