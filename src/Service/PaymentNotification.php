<?php

namespace AmaxLab\IBoxPro\Payment\Service;

use AmaxLab\IBoxPro\Payment\Exception\OperatorTypeNotFoundException;
use AmaxLab\IBoxPro\Payment\Exception\OperatorTypeNotSupportedException;
use AmaxLab\IBoxPro\Payment\Model\Schedule;
use AmaxLab\IBoxPro\Payment\Model\Transaction;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class PaymentNotification
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * PaymentNotification constructor.
     */
    public function __construct()
    {
        $this->serializer = new Serializer([
            new DateTimeNormalizer(),
            new ObjectNormalizer(null, null, null, new PhpDocExtractor()),
            new ArrayDenormalizer()
        ], [
            new JsonEncoder()
        ]);
    }

    /**
     * @param $data
     * @return Transaction|Schedule
     * @throws OperatorTypeNotFoundException
     * @throws OperatorTypeNotSupportedException
     */
    public function handle($data)
    {
        return $this->serializer->deserialize($data, $this->getOperationClass($data), 'json');
    }

    /**
     * @param string $data
     * @return string
     * @throws OperatorTypeNotFoundException
     * @throws OperatorTypeNotSupportedException
     */
    private function getOperationClass($data)
    {
        $data = json_decode($data, true);

        if (!isset($data['Operation'])) {
            throw new OperatorTypeNotFoundException('Operation type not found in transaction');
        }

        $operationClass = [
            Transaction::OPERATION_PAYMENT => Transaction::class,
            Schedule::OPERATION_SCHEDULE => Schedule::class,
        ];

        if (!isset($operationClass[$data['Operation']])) {
            throw new OperatorTypeNotSupportedException(sprintf('Operation type %s not supported', $data['Operation']));
        }

        return $operationClass[$data['Operation']];
    }
}
