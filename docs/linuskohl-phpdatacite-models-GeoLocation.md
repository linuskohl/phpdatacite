linuskohl\phpdatacite\models\GeoLocation
===============

Class GeoLocation

Spatial region or named place where the data was gathered or about which the data is focused.


* Class name: GeoLocation
* Namespace: linuskohl\phpdatacite\models





Properties
----------


### $geoLocationBox

    public \linuskohl\phpdatacite\models\geo\GeoLocationBox $geoLocationBox

The spatial limits of a box.



* Visibility: **public**


### $geoLocationPlace

    public string $geoLocationPlace

Description of a geographic location



* Visibility: **public**


### $geoLocationPoint

    public \linuskohl\phpdatacite\models\geo\GeoLocationPoint $geoLocationPoint

A point location in space.



* Visibility: **public**


### $geoLocationPolygons

    public array<mixed,\linuskohl\phpdatacite\models\geo\GeoLocationPolygon> $geoLocationPolygons

A drawn polygon area, defined by a set of points and lines connecting the points in a closed chain



* Visibility: **public**


Methods
-------


### getGeoLocationBox

    \linuskohl\phpdatacite\models\geo\GeoLocationBox|null linuskohl\phpdatacite\models\GeoLocation::getGeoLocationBox()





* Visibility: **public**




### setGeoLocationBox

    mixed linuskohl\phpdatacite\models\GeoLocation::setGeoLocationBox(\linuskohl\phpdatacite\models\geo\GeoLocationBox $geoLocationBox)





* Visibility: **public**


#### Arguments
* $geoLocationBox **[linuskohl\phpdatacite\models\geo\GeoLocationBox](linuskohl-phpdatacite-models-geo-GeoLocationBox.md)**



### getGeoLocationPlace

    null|string linuskohl\phpdatacite\models\GeoLocation::getGeoLocationPlace()





* Visibility: **public**




### setGeoLocationPlace

    mixed linuskohl\phpdatacite\models\GeoLocation::setGeoLocationPlace(string $geoLocationPlace)





* Visibility: **public**


#### Arguments
* $geoLocationPlace **string**



### getGeoLocationPoint

    \linuskohl\phpdatacite\models\geo\GeoLocationPoint|null linuskohl\phpdatacite\models\GeoLocation::getGeoLocationPoint()





* Visibility: **public**




### setGeoLocationPoint

    mixed linuskohl\phpdatacite\models\GeoLocation::setGeoLocationPoint(\linuskohl\phpdatacite\models\geo\GeoLocationPoint $geoLocationPoint)





* Visibility: **public**


#### Arguments
* $geoLocationPoint **[linuskohl\phpdatacite\models\geo\GeoLocationPoint](linuskohl-phpdatacite-models-geo-GeoLocationPoint.md)**



### getGeoLocationPolygons

    array<mixed,\linuskohl\phpdatacite\models\geo\GeoLocationPolygon>|null linuskohl\phpdatacite\models\GeoLocation::getGeoLocationPolygons()





* Visibility: **public**




### setGeoLocationPolygons

    mixed linuskohl\phpdatacite\models\GeoLocation::setGeoLocationPolygons($geoLocationPolygons)





* Visibility: **public**


#### Arguments
* $geoLocationPolygons **mixed**


