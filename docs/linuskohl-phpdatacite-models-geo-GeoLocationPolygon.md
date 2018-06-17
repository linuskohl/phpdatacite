linuskohl\phpdatacite\models\geo\GeoLocationPolygon
===============

Class GeoLocationPolygon

A drawn polygon area, defined by a set of points and lines connecting the points in a closed chain.
A polygon is delimited by geographic points. Each point is defined by a longitude/latitude pair.
The last point should be the same as the first point.


* Class name: GeoLocationPolygon
* Namespace: linuskohl\phpdatacite\models\geo





Properties
----------


### $polygonPoints

    public array<mixed,\linuskohl\phpdatacite\models\geo\GeoLocationPoint> $polygonPoints

Point locations in a polygon. (4.

.n)

* Visibility: **public**


### $inPolygonPoint

    public \linuskohl\phpdatacite\models\geo\GeoLocationPoint $inPolygonPoint

For any bound area that is larger than half the earth, define a (random) point inside.

inPolygonPoint is only necessary to indicate the "inside" of the polygon if the polygon is larger
than half the earth. Otherwise the smallest of the two areas bounded by the polygon will be used.

* Visibility: **public**


Methods
-------


### getPolygonPoints

    array<mixed,\linuskohl\phpdatacite\models\geo\GeoLocationPoint> linuskohl\phpdatacite\models\geo\GeoLocationPolygon::getPolygonPoints()





* Visibility: **public**




### setPolygonPoints

    mixed linuskohl\phpdatacite\models\geo\GeoLocationPolygon::setPolygonPoints(array<mixed,\linuskohl\phpdatacite\models\geo\GeoLocationPoint> $polygonPoints)





* Visibility: **public**


#### Arguments
* $polygonPoints **array&lt;mixed,\linuskohl\phpdatacite\models\geo\GeoLocationPoint&gt;**



### getInPolygonPoint

    \linuskohl\phpdatacite\models\geo\GeoLocationPoint|null linuskohl\phpdatacite\models\geo\GeoLocationPolygon::getInPolygonPoint()





* Visibility: **public**




### setInPolygonPoint

    mixed linuskohl\phpdatacite\models\geo\GeoLocationPolygon::setInPolygonPoint(\linuskohl\phpdatacite\models\geo\GeoLocationPoint $inPolygonPoint)





* Visibility: **public**


#### Arguments
* $inPolygonPoint **[linuskohl\phpdatacite\models\geo\GeoLocationPoint](linuskohl-phpdatacite-models-geo-GeoLocationPoint.md)**


