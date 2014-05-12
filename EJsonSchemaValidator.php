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
    public $libraryPathAlias = 'application.vendor.justinrainbow.json-schema.src.JsonSchema';
    public $schemaFilesPathAlias = 'application.data.json-schemes';

    public function init()
    {
        // We can use standard Yii autoloader, because the library is PSR-0 compliant
        // We just need to create a path alias:
        Yii::setPathOfAlias('JsonSchema', Yii::getPathOfAlias($this->libraryPathAlias));

        return parent::init();
    }

    /**
     * Validate the JSON file pointed to by $dataUri agains the $schemaFile
     * @todo Implement
     * @param $dataUri
     * @param $schemaFile
     * @return bool
     */
    public function validate($dataUri, $schemaFile)
    {
        return true;
    }

    /**
     * Resolves schema file name to the fully qualified path
     * @param $fileName
     * @return string
     */
    public function resolveSchemaPath($fileName)
    {
        return Yii::getPathOfAlias($this->schemaFilesPathAlias) . DIRECTORY_SEPARATOR . $fileName;
    }
}