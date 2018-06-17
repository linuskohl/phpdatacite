<?php
namespace linuskohl\phpdatacite\models;

/**
 * Class Entity
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Entity
{

    public $resource; //Resource

    public function getResource()
    {
        return $this->resource;
    }

    public function setResource($resource)
    {
        $this->resource = $resource;
    }

}