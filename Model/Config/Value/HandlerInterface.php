<?php

namespace ShoppingFeed\Manager\Model\Config\Value;

interface HandlerInterface
{
    /**
     * @return string|null
     */
    public function getFormDataType();

    /**
     * @return string[]
     */
    public function getFieldValidationClasses();

    /**
     * @param mixed $value
     * @return bool
     */
    public function isUndefinedValue($value);

    /**
     * @param mixed $valueA
     * @param mixed $valueB
     * @return bool
     */
    public function isEqualValues($valueA, $valueB);

    /**
     * @param array $valuesA
     * @param array $valuesB
     * @return bool
     */
    public function isEqualValueLists(array $valuesA, array $valuesB);

    /**
     * @param mixed $value
     * @param mixed $defaultValue
     * @param bool $isRequired
     * @return mixed
     */
    public function prepareRawValueForForm($value, $defaultValue, $isRequired);

    /**
     * @param mixed $value
     * @param mixed $defaultValue
     * @param bool $isRequired
     * @return mixed
     */
    public function prepareRawValueForUse($value, $defaultValue, $isRequired);

    /**
     * @param mixed $value
     * @param bool $isRequired
     * @return mixed
     */
    public function prepareFormValueForSave($value, $isRequired);
}
