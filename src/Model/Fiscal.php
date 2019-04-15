<?php

namespace AmaxLab\IBoxPro\Payment\Model;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class Fiscal
{
    /**
     * @var string|null
     */
    private $printerSerialNumber;

    /**
     * @var string|null
     */
    private $printerShift;

    /**
     * @var string|null
     */
    private $printerCryptographicVerificationCode;

    /**
     * @var string|null
     */
    private $printerDocSerialNumber;

    /**
     * @var \DateTime|null
     */
    private $fiscalDatetime;

    /**
     * @var string|null
     */
    private $fiscalStorageNumber;

    /**
     * @var string|null
     */
    private $fiscalDocumentNumber;

    /**
     * @var string|null
     */
    private $fiscalDocumentMark;

    /**
     * @return string|null
     */
    public function getPrinterSerialNumber()
    {
        return $this->printerSerialNumber;
    }

    /**
     * @param string|null $printerSerialNumber
     *
     * @return $this
     */
    public function setPrinterSerialNumber($printerSerialNumber)
    {
        $this->printerSerialNumber = $printerSerialNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrinterShift()
    {
        return $this->printerShift;
    }

    /**
     * @param string|null $printerShift
     *
     * @return $this
     */
    public function setPrinterShift($printerShift)
    {
        $this->printerShift = $printerShift;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrinterCryptographicVerificationCode()
    {
        return $this->printerCryptographicVerificationCode;
    }

    /**
     * @param string|null $printerCryptographicVerificationCode
     *
     * @return $this
     */
    public function setPrinterCryptographicVerificationCode($printerCryptographicVerificationCode)
    {
        $this->printerCryptographicVerificationCode = $printerCryptographicVerificationCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrinterDocSerialNumber()
    {
        return $this->printerDocSerialNumber;
    }

    /**
     * @param string|null $printerDocSerialNumber
     *
     * @return $this
     */
    public function setPrinterDocSerialNumber($printerDocSerialNumber)
    {
        $this->printerDocSerialNumber = $printerDocSerialNumber;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFiscalDatetime()
    {
        return $this->fiscalDatetime;
    }

    /**
     * @param \DateTime|null $fiscalDatetime
     *
     * @return $this
     */
    public function setFiscalDatetime($fiscalDatetime)
    {
        $this->fiscalDatetime = $fiscalDatetime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiscalStorageNumber()
    {
        return $this->fiscalStorageNumber;
    }

    /**
     * @param string|null $fiscalStorageNumber
     *
     * @return $this
     */
    public function setFiscalStorageNumber($fiscalStorageNumber)
    {
        $this->fiscalStorageNumber = $fiscalStorageNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiscalDocumentNumber()
    {
        return $this->fiscalDocumentNumber;
    }

    /**
     * @param string|null $fiscalDocumentNumber
     *
     * @return $this
     */
    public function setFiscalDocumentNumber($fiscalDocumentNumber)
    {
        $this->fiscalDocumentNumber = $fiscalDocumentNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiscalDocumentMark()
    {
        return $this->fiscalDocumentMark;
    }

    /**
     * @param string|null $fiscalDocumentMark
     *
     * @return $this
     */
    public function setFiscalDocumentMark($fiscalDocumentMark)
    {
        $this->fiscalDocumentMark = $fiscalDocumentMark;

        return $this;
    }
}
