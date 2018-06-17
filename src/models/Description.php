<?php

namespace linuskohl\phpdatacite\models;

/**
 * Class Description
 *
 * All additional information that does not fit in any of the other categories. May be used for technical information.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Description
{

    const TYPE_Abstract = 'Abstract';
    const TYPE_Methods = 'Methods';
    const TYPE_SeriesInformation = 'SeriesInformation';
    const TYPE_TableOfContents = 'TableOfContents';
    const TYPE_TechnicalInfo = 'TechnicalInfo';
    const TYPE_Other = 'Other';

    /**
     * Description
     * @var string
     */
    public $description;

    /**
     * The type of the Description
     * @var string
     */
    public $descriptionType;

    /**
     * Language of the description.
     * @var string|null
     */
    public $lang;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescriptionType()
    {
        return $this->descriptionType;
    }

    /**
     * @param string $descriptionType
     */
    public function setDescriptionType($descriptionType)
    {
        $this->descriptionType = $descriptionType;
    }

    /**
     * @return null|string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }
}