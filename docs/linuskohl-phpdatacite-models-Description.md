linuskohl\phpdatacite\models\Description
===============

Class Description

All additional information that does not fit in any of the other categories. May be used for technical information.


* Class name: Description
* Namespace: linuskohl\phpdatacite\models



Constants
----------


### TYPE_Abstract

    const TYPE_Abstract = 'Abstract'





### TYPE_Methods

    const TYPE_Methods = 'Methods'





### TYPE_SeriesInformation

    const TYPE_SeriesInformation = 'SeriesInformation'





### TYPE_TableOfContents

    const TYPE_TableOfContents = 'TableOfContents'





### TYPE_TechnicalInfo

    const TYPE_TechnicalInfo = 'TechnicalInfo'





### TYPE_Other

    const TYPE_Other = 'Other'





Properties
----------


### $description

    public string $description

Description



* Visibility: **public**


### $descriptionType

    public string $descriptionType

The type of the Description



* Visibility: **public**


### $lang

    public string $lang

Language of the description.



* Visibility: **public**


Methods
-------


### getDescription

    string linuskohl\phpdatacite\models\Description::getDescription()





* Visibility: **public**




### setDescription

    mixed linuskohl\phpdatacite\models\Description::setDescription(string $description)





* Visibility: **public**


#### Arguments
* $description **string**



### getDescriptionType

    string linuskohl\phpdatacite\models\Description::getDescriptionType()





* Visibility: **public**




### setDescriptionType

    mixed linuskohl\phpdatacite\models\Description::setDescriptionType(string $descriptionType)





* Visibility: **public**


#### Arguments
* $descriptionType **string**



### getLang

    null|string linuskohl\phpdatacite\models\Description::getLang()





* Visibility: **public**




### setLang

    mixed linuskohl\phpdatacite\models\Description::setLang(string $lang)





* Visibility: **public**


#### Arguments
* $lang **string**


