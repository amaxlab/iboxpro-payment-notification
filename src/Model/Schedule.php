<?php

namespace AmaxLab\IBoxPro\Payment\Model;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class Schedule
{
    const OPERATION_SCHEDULE = 'Schedule';

    const FREQUENCY_DELAYED_ONCE = 'DelayedOnce';

    const FREQUENCY_ANNUAL = 'Annual';

    const FREQUENCY_QUARTERLY = 'Quarterly';

    const FREQUENCY_MONTHLY = 'Monthly';

    const FREQUENCY_WEEKLY = 'Weekly';

    const FREQUENCY_DAILY = 'Daily';

    const FREQUENCY_ARBITRARY_DATES = 'ArbitraryDates';

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $operation;

    /**
     * @var string
     */
    private $frequency;

    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $receiptPhone;

    /**
     * @var string
     */
    private $receiptEmail;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $mid;

    /**
     * @var Device
     */
    private $device;

    /**
     * @var CPFProduct[]|null
     */
    private $products;

    /**
     * @var string
     */
    private $tid;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $finish;

    /**
     * @var string
     */
    private $cardType;

    /**
     * @var string
     */
    private $card;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param string $frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptPhone()
    {
        return $this->receiptPhone;
    }

    /**
     * @param string $receiptPhone
     *
     * @return $this
     */
    public function setReceiptPhone($receiptPhone)
    {
        $this->receiptPhone = $receiptPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptEmail()
    {
        return $this->receiptEmail;
    }

    /**
     * @param string $receiptEmail
     *
     * @return $this
     */
    public function setReceiptEmail($receiptEmail)
    {
        $this->receiptEmail = $receiptEmail;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * @param string $mid
     *
     * @return $this
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * @return Device
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param Device $device
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * @return CPFProduct[]|null
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param CPFProduct[]|null $products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param \DateTime $start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * @param \DateTime $finish
     *
     * @return $this
     */
    public function setFinish($finish)
    {
        $this->finish = $finish;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     *
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param string $card
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }
}
