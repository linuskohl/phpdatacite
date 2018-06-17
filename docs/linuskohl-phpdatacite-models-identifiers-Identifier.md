linuskohl\phpdatacite\models\identifiers\Identifier
===============

Class Identifier

The Identifier is a unique string that identifies a resource. For software, determine whether the
identifier is for a specific version of a piece of software, (per the Force11 Software
Citation Principles13), or for all versions.


* Class name: Identifier
* Namespace: linuskohl\phpdatacite\models\identifiers



Constants
----------


### TYPE_IDENTIFIER_DOI

    const TYPE_IDENTIFIER_DOI = 'DOI'





Properties
----------


### $identifier

    public string $identifier

Identifier



* Visibility: **public**


### $identifierType

    public string $identifierType

Type of the identifier



* Visibility: **public**


Methods
-------


### getIdentifier

    string linuskohl\phpdatacite\models\identifiers\Identifier::getIdentifier()





* Visibility: **public**




### setIdentifier

    mixed linuskohl\phpdatacite\models\identifiers\Identifier::setIdentifier(string $identifier)





* Visibility: **public**


#### Arguments
* $identifier **string**



### getIdentifierType

    string linuskohl\phpdatacite\models\identifiers\Identifier::getIdentifierType()





* Visibility: **public**




### setIdentifierType

    mixed linuskohl\phpdatacite\models\identifiers\Identifier::setIdentifierType(string $identifierType)





* Visibility: **public**


#### Arguments
* $identifierType **string**



### validateDOI

    mixed linuskohl\phpdatacite\models\identifiers\Identifier::validateDOI(string $doi)

Validates a DOI



* Visibility: **public**


#### Arguments
* $doi **string**


