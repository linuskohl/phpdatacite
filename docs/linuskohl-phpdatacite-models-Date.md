linuskohl\phpdatacite\models\Date
===============

Class Date

Different dates relevant to the work.


* Class name: Date
* Namespace: linuskohl\phpdatacite\models



Constants
----------


### TYPE_Accepted

    const TYPE_Accepted = 'Accepted'





### TYPE_Available

    const TYPE_Available = 'Available'





### TYPE_Copyrighted

    const TYPE_Copyrighted = 'Copyrighted'





### TYPE_Collected

    const TYPE_Collected = 'Collected'





### TYPE_Created

    const TYPE_Created = 'Created'





### TYPE_Issued

    const TYPE_Issued = 'Issued'





### TYPE_Submitted

    const TYPE_Submitted = 'Submitted'





### TYPE_Updated

    const TYPE_Updated = 'Updated'





### TYPE_Valid

    const TYPE_Valid = 'Valid'





### TYPE_Other

    const TYPE_Other = 'Other'





Properties
----------


### $date

    public \DateTime $date

YYYY,YYYY-MM-DD, YYYYMM-DDThh:mm:ssTZD or any other format or level of granularity described in
W3CDTF.22 Use RKMSISO860123 standard for depicting date ranges.



* Visibility: **public**


### $dateType

    public string $dateType

The type of date.



* Visibility: **public**


### $dateInformation

    public string $dateInformation

Specific information about the date, if appropriate.



* Visibility: **public**


Methods
-------


### getDate

    \DateTime linuskohl\phpdatacite\models\Date::getDate()





* Visibility: **public**




### setDate

    mixed linuskohl\phpdatacite\models\Date::setDate(\DateTime $date)





* Visibility: **public**


#### Arguments
* $date **DateTime**



### getDateType

    string linuskohl\phpdatacite\models\Date::getDateType()





* Visibility: **public**




### setDateType

    mixed linuskohl\phpdatacite\models\Date::setDateType(string $dateType)





* Visibility: **public**


#### Arguments
* $dateType **string**



### getDateInformation

    string|null linuskohl\phpdatacite\models\Date::getDateInformation()





* Visibility: **public**




### setDateInformation

    mixed linuskohl\phpdatacite\models\Date::setDateInformation(string $dateInformation)





* Visibility: **public**


#### Arguments
* $dateInformation **string**


