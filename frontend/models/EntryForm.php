<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use UrlComponents;

/*
 * Класс модели для обработки формы
 */
class EntryForm extends Model
{
    public $link;
    public $urlStructure;

    public function rules()
    {
        return [
            [['link'], 'required'],
            ['link', 'url'],
        ];
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getUrlStructure()
    {
        return $this->urlStructure;
    }

    /**
     * @param mixed $urlStructure
     */
    public function setUrlStructure($urlStructure)
    {
        $this->urlStructure = UrlComponents::getUrlComponentsArray($urlStructure);
    }
}