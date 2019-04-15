<?php


namespace AmaxLab\IBoxPro\Payment\Model;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class Transaction
{
    const OPERATION_PAYMENT = 'Payment';

    const APPROVAL_CODE_SIMULATION = 'SIMULATION';

    const STATUS_COMPLETED = "Completed";

    const STATUS_VOIDED = "Voided";

    /**
     * @var string
     */
    private $rrn;

    /**
     * @var string
     */
    private $operation;

    /**
     * @var string
     */
    private $approvalCode;

    /**
     * @var CPFProduct[]|null
     */
    private $products;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $extId;

    /**
     * @var int|null
     */
    private $scheduleId;

    /**
     * @var int|null
     */
    private $ScheduleStepId;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string
     */
    private $tid;

    /**
     * @var string
     */
    private $mid;

    /**
     * @var string
     */
    private $receiptPhone;

    /**
     * @var string
     */
    private $receiptEmail;

    /**
     * @var int
     */
    private $resultCode;

    /**
     * @var string|null
     */
    private $resultMessage;

    /**
     * @var string
     */
    private $cardType;

    /**
     * @var string
     */
    private $card;

    /**
     * @var Device
     */
    private $device;

    /**
     * @var Fiscal
     */
    private $fiscal;

    /**
     * @return string
     */
    public function getRrn()
    {
        return $this->rrn;
    }

    /**
     * @param string $rrn
     *
     * @return $this
     */
    public function setRrn($rrn)
    {
        $this->rrn = $rrn;

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
    public function getApprovalCode()
    {
        return $this->approvalCode;
    }

    /**
     * @param string $approvalCode
     *
     * @return $this
     */
    public function setApprovalCode($approvalCode)
    {
        $this->approvalCode = $approvalCode;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * @param string|null $extId
     *
     * @return $this
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getScheduleId()
    {
        return $this->scheduleId;
    }

    /**
     * @param int|null $scheduleId
     *
     * @return $this
     */
    public function setScheduleId($scheduleId)
    {
        $this->scheduleId = $scheduleId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getScheduleStepId()
    {
        return $this->ScheduleStepId;
    }

    /**
     * @param int|null $ScheduleStepId
     *
     * @return $this
     */
    public function setScheduleStepId($ScheduleStepId)
    {
        $this->ScheduleStepId = $ScheduleStepId;

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
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     * @return int
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * @param int $resultCode
     *
     * @return $this
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getResultMessage()
    {
        return $this->resultMessage;
    }

    /**
     * @param string|null $resultMessage
     *
     * @return $this
     */
    public function setResultMessage($resultMessage)
    {
        $this->resultMessage = $resultMessage;

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
     * @return Fiscal
     */
    public function getFiscal()
    {
        return $this->fiscal;
    }

    /**
     * @param Fiscal $fiscal
     *
     * @return $this
     */
    public function setFiscal($fiscal)
    {
        $this->fiscal = $fiscal;

        return $this;
    }
}
