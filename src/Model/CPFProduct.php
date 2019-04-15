<?php

namespace AmaxLab\IBoxPro\Payment\Model;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class CPFProduct
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $title;


    private $fields;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param mixed $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }
}
