<?php
namespace linuskohl\phpdatacite\models;

/**
 * Class CreatorName
 *
 * The main researchers involved in producing the data, or the
 * authors of the publication, in priority order. To supply multiple creators, repeat this property.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class CreatorName
{

    const TYPE_NAME_Organizational = 'Organizational';
    const TYPE_NAME_Personal = 'Personal';

    /**
     * The full name of the creator.
     * The personal name, format should be: given, family.
     * Non roman names may be transliterated according to the ALA-LC schemas14
     * @var string
     */
    public $creatorName;

    /**
     * The type of name.
     * @var string|null
     */
    public $nameType;

    /**
     * @return string
     */
    public function getCreatorName() {
        return $this->creatorName;
    }

    /**
     * @param string $creatorName
     */
    public function setCreatorName($creatorName) {
        $this->creatorName = $creatorName;
    }

    /**
     * @return string|null
     */
    public function getNameType() {
         return $this->nameType; 
    }

    /**
     * @param string $nameType
     */
    public function setNameType($nameType) {
         $this->nameType = $nameType; 
    }    

}