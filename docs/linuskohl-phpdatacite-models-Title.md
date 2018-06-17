linuskohl\phpdatacite\models\Title
===============

Class Title

A name or title by which a resource is known. May be the title of a dataset or the name of a piece of software.


* Class name: Title
* Namespace: linuskohl\phpdatacite\models



Constants
----------


### TYPE_AlternativeTitle

    const TYPE_AlternativeTitle = 'AlternativeTitle'





### TYPE_Subtitle

    const TYPE_Subtitle = 'Subtitle'





### TYPE_TranslatedTitle

    const TYPE_TranslatedTitle = 'TranslatedTitle'





### TYPE_Other

    const TYPE_Other = 'Other'





Properties
----------


### $title

    public string $title

Title



* Visibility: **public**


### $titleType

    public string $titleType

The type of Title.



* Visibility: **public**


### $lang

    public string $lang

Language of the title.



* Visibility: **public**


Methods
-------


### getTitle

    string linuskohl\phpdatacite\models\Title::getTitle()





* Visibility: **public**




### setText

    mixed linuskohl\phpdatacite\models\Title::setText(string $title)





* Visibility: **public**


#### Arguments
* $title **string**



### getTitleType

    string|null linuskohl\phpdatacite\models\Title::getTitleType()





* Visibility: **public**




### setTitleType

    mixed linuskohl\phpdatacite\models\Title::setTitleType(string $titleType)





* Visibility: **public**


#### Arguments
* $titleType **string**



### getLang

    null|string linuskohl\phpdatacite\models\Title::getLang()





* Visibility: **public**




### setLang

    mixed linuskohl\phpdatacite\models\Title::setLang(string $lang)





* Visibility: **public**


#### Arguments
* $lang **string**


