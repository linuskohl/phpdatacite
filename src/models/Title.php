<?php

namespace linuskohl\phpdatacite\models;

/**
 * Class Title
 *
 * A name or title by which a resource is known. May be the title of a dataset or the name of a piece of software.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Title
{

    const TYPE_AlternativeTitle = 'AlternativeTitle';
    const TYPE_Subtitle = 'Subtitle';
    const TYPE_TranslatedTitle = 'TranslatedTitle';
    const TYPE_Other = 'Other';

    /**
     * Title
     * @var string
     */
    public $title;

    /**
     * The type of Title.
     * @var string|null
     */
    public $titleType;

    /**
     * Language of the title.
     * @var string|null
     */
    public $lang;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setText($title)
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * @param string $titleType
     */
    public function setTitleType($titleType)
    {
        $this->titleType = $titleType;
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