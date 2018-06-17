linuskohl\phpdatacite\models\FundingReference
===============

Class FundingReference

Information about financial support (funding) for the resource being registered.


* Class name: FundingReference
* Namespace: linuskohl\phpdatacite\models



Constants
----------


### TYPE_IDENTIFIER_ISNI

    const TYPE_IDENTIFIER_ISNI = 'ISNI'





### TYPE_IDENTIFIER_GRID

    const TYPE_IDENTIFIER_GRID = 'GRID'





### TYPE_IDENTIFIER_CROSSREF_FUNDER

    const TYPE_IDENTIFIER_CROSSREF_FUNDER = 'Crossref Funder'





### TYPE_IDENTIFIER_Other

    const TYPE_IDENTIFIER_Other = 'Other'





Properties
----------


### $funderName

    public string $funderName

Name of the funding provider.



* Visibility: **public**


### $funderIdentifier

    public \linuskohl\phpdatacite\models\identifiers\FunderIdentifier $funderIdentifier

Uniquely identifies a funding entity, according to various types



* Visibility: **public**


### $awardNumber

    public \linuskohl\phpdatacite\models\AwardNumber $awardNumber

The code assigned by the funder to a sponsored award (grant).



* Visibility: **public**


### $awardTitle

    public string $awardTitle

The human readable title or name of the award (grant).



* Visibility: **public**


Methods
-------


### getFunderName

    string linuskohl\phpdatacite\models\FundingReference::getFunderName()





* Visibility: **public**




### setFunderName

    mixed linuskohl\phpdatacite\models\FundingReference::setFunderName(string $funderName)





* Visibility: **public**


#### Arguments
* $funderName **string**



### getFunderIdentifier

    \linuskohl\phpdatacite\models\identifiers\FunderIdentifier|null linuskohl\phpdatacite\models\FundingReference::getFunderIdentifier()





* Visibility: **public**




### setFunderIdentifier

    mixed linuskohl\phpdatacite\models\FundingReference::setFunderIdentifier(\linuskohl\phpdatacite\models\identifiers\FunderIdentifier $funderIdentifier)





* Visibility: **public**


#### Arguments
* $funderIdentifier **[linuskohl\phpdatacite\models\identifiers\FunderIdentifier](linuskohl-phpdatacite-models-identifiers-FunderIdentifier.md)**



### getAwardNumber

    \linuskohl\phpdatacite\models\AwardNumber|null linuskohl\phpdatacite\models\FundingReference::getAwardNumber()





* Visibility: **public**




### setAwardNumber

    mixed linuskohl\phpdatacite\models\FundingReference::setAwardNumber(\linuskohl\phpdatacite\models\AwardNumber $awardNumber)





* Visibility: **public**


#### Arguments
* $awardNumber **[linuskohl\phpdatacite\models\AwardNumber](linuskohl-phpdatacite-models-AwardNumber.md)**



### getAwardTitle

    string|null linuskohl\phpdatacite\models\FundingReference::getAwardTitle()





* Visibility: **public**




### setAwardTitle

    mixed linuskohl\phpdatacite\models\FundingReference::setAwardTitle(string $awardTitle)





* Visibility: **public**


#### Arguments
* $awardTitle **string**


