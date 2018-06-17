linuskohl\phpdatacite\models\Creator
===============

Class Creator

The main researchers involved in producing the data, or the authors of the publication, in
priority order. To supply multiple creators, repeat this property.


* Class name: Creator
* Namespace: linuskohl\phpdatacite\models



Constants
----------


### TYPE_NAME_Organizational

    const TYPE_NAME_Organizational = 'Organizational'





### TYPE_NAME_Personal

    const TYPE_NAME_Personal = 'Personal'





Properties
----------


### $creatorName

    public string $creatorName

The full name of the creator.

The personal name, format should be: given, family.
Non roman names may be transliterated according to the ALA-LC schemas

* Visibility: **public**


### $nameType

    public string $nameType

The type of name (Organizational, Personal)



* Visibility: **public**


### $givenName

    public string $givenName

The personal or first name of the creator.



* Visibility: **public**


### $familyName

    public string $familyName

The surname or last name of the creator.



* Visibility: **public**


### $nameIdentifiers

    public array<mixed,\linuskohl\phpdatacite\models\identifiers\NameIdentifier> $nameIdentifiers

Uniquely identifies an individual or legal entity, according to various schemas.



* Visibility: **public**


### $affiliations

    public array<mixed,string> $affiliations

The organizational or institutional affiliation of the creator.



* Visibility: **public**


Methods
-------


### getCreatorName

    string linuskohl\phpdatacite\models\Creator::getCreatorName()





* Visibility: **public**




### setCreatorName

    mixed linuskohl\phpdatacite\models\Creator::setCreatorName(string $creatorName)





* Visibility: **public**


#### Arguments
* $creatorName **string**



### getNameType

    string|null linuskohl\phpdatacite\models\Creator::getNameType()





* Visibility: **public**




### setNameType

    mixed linuskohl\phpdatacite\models\Creator::setNameType(string $nameType)





* Visibility: **public**


#### Arguments
* $nameType **string**



### getGivenName

    mixed linuskohl\phpdatacite\models\Creator::getGivenName()





* Visibility: **public**




### setGivenName

    mixed linuskohl\phpdatacite\models\Creator::setGivenName(string $givenName)





* Visibility: **public**


#### Arguments
* $givenName **string**



### getFamilyName

    string|null linuskohl\phpdatacite\models\Creator::getFamilyName()





* Visibility: **public**




### setFamilyName

    mixed linuskohl\phpdatacite\models\Creator::setFamilyName(string $familyName)





* Visibility: **public**


#### Arguments
* $familyName **string**



### getNameIdentifiers

    array<mixed,\linuskohl\phpdatacite\models\identifiers\NameIdentifier>|null linuskohl\phpdatacite\models\Creator::getNameIdentifiers()





* Visibility: **public**




### setNameIdentifiers

    mixed linuskohl\phpdatacite\models\Creator::setNameIdentifiers(array<mixed,\linuskohl\phpdatacite\models\identifiers\NameIdentifier> $nameIdentifiers)





* Visibility: **public**


#### Arguments
* $nameIdentifiers **array&lt;mixed,\linuskohl\phpdatacite\models\identifiers\NameIdentifier&gt;**



### getAffiliations

    array<mixed,string>|null linuskohl\phpdatacite\models\Creator::getAffiliations()





* Visibility: **public**




### setAffiliations

    mixed linuskohl\phpdatacite\models\Creator::setAffiliations($affiliations)





* Visibility: **public**


#### Arguments
* $affiliations **mixed**


