<?php
/**
 * Json Schema validator view
 *
 * @author Sergey Tsivin <sergey.tsivin@gmail.com>
 * @link https://github.com/sergeytsivin/json-schema-validator
 * @link https://github.com/justinrainbow/json-schema
 *
 * @version 0.0.1
 */
class EJsonSchemaValidator extends CApplicationComponent
{
    /**
     * @var string Path alias to Json Schema for PHP library
     */
    public $jsonSchemaPathAlias = 'application.vendor.justinrainbow.json-schema.src';

    function init()
    {
        Yii::setPathOfAlias('JsonSchema', Yii::getPathOfAlias($this->jsonSchemaPathAlias));

        return parent::init();
    }
}