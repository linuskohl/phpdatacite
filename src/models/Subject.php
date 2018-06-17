<?php

namespace linuskohl\phpdatacite\models;

/**
 * Class Subject
 *
 * Subject, keyword, classification code, or key phrase describing the resource.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Subject
{
    /**
     * @var string
     */
    public $subject;

    /**
     * The name of the subject scheme or classification code or authority if one is used
     * @var  string|null
     */
    public $subjectScheme;

    /**
     * The URI of the subject identifier scheme
     * @var string|null
     */
    public $schemeURI;

    /**
     * The URI of the subject term.
     * @var string|null
     */
    public $valueURI;

    /**
     * Language of the subject
     * @var string|null
     */
    public $lang;

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string|null
     */
    public function getSubjectScheme()
    {
        return $this->subjectScheme;
    }

    /**
     * @param string $subjectScheme
     */
    public function setSubjectScheme($subjectScheme)
    {
        $this->subjectScheme = $subjectScheme;
    }

    /**
     * @return string|null
     */
    public function getSchemeURI()
    {
        return $this->schemeURI;
    }

    /**
     * @param string $schemeURI
     */
    public function setSchemeURI($schemeURI)
    {
        $this->schemeURI = $schemeURI;
    }

    /**
     * @return string|null
     */
    public function getValueURI()
    {
        return $this->schemeURI;
    }

    /**
     * @param string $schemeURI
     */
    public function setValueURI($schemeURI)
    {
        $this->schemeURI = $schemeURI;
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