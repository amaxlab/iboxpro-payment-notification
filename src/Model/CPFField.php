<?php

namespace AmaxLab\IBoxPro\Payment\Model;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class CPFField
{
    const FIELD_TYPE_TEXT = 1;

    const FIELD_TYPE_URL = 2;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var int
     */
    private $fieldType;

    /**
     * @var string|null
     */
    private $textVal;

    /**
     * @var string|null
     */
    private $imageUrl;

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return int
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * @param int $fieldType
     *
     * @return $this
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextVal()
    {
        return $this->textVal;
    }

    /**
     * @param string|null $textVal
     *
     * @return $this
     */
    public function setTextVal($textVal)
    {
        $this->textVal = $textVal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string|null $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }
}
