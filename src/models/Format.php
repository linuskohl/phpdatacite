<?php

namespace linuskohl\phpdatacite\models;

/**
 * Class Format
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 *
 * Technical format of the resource.
 * Use file extension or MIME type where possible, e.g., PDF, XML, MPG or application/pdf, text/xml
 */
class Format
{

    /**
     * @var string
     */
    public $format; //String

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

}