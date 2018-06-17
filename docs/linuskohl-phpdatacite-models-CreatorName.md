linuskohl\phpdatacite\models\CreatorName
===============

Class CreatorName

The main researchers involved in producing the data, or the
authors of the publication, in priority order. To supply multiple creators, repeat this property.


* Class name: CreatorName
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
Non roman names may be transliterated according to the ALA-LC schemas14

* Visibility: **public**


### $nameType

    public string $nameType

The type of name.



* Visibility: **public**


Methods
-------


### getCreatorName

    string linuskohl\phpdatacite\models\CreatorName::getCreatorName()





* Visibility: **public**




### setCreatorName

    mixed linuskohl\phpdatacite\models\CreatorName::setCreatorName(string $creatorName)





* Visibility: **public**


#### Arguments
* $creatorName **string**



### getNameType

    string|null linuskohl\phpdatacite\models\CreatorName::getNameType()





* Visibility: **public**




### setNameType

    mixed linuskohl\phpdatacite\models\CreatorName::setNameType(string $nameType)





* Visibility: **public**


#### Arguments
* $nameType **string**


