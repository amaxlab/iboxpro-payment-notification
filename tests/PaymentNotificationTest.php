<?php

namespace AmaxLab\IBoxPro\Payment\Tests;

use AmaxLab\IBoxPro\Payment\Model\CPFField;
use AmaxLab\IBoxPro\Payment\Model\Transaction;
use AmaxLab\IBoxPro\Payment\Service\PaymentNotification;
use PHPUnit\Framework\TestCase;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class PaymentNotificationTest extends TestCase
{
    /**
     * @expectedException \AmaxLab\IBoxPro\Payment\Exception\OperatorTypeNotFoundException
     */
    public function testOperationTypeNotFound()
    {
        $service = new PaymentNotification();
        $service->handle('');
    }

    /**
     * @expectedException \AmaxLab\IBoxPro\Payment\Exception\OperatorTypeNotSupportedException
     */
    public function testOperationTypeNotSupported()
    {
        $service = new PaymentNotification();
        $service->handle('{"Operation":"test"}');
    }

    public function testTransaction()
    {
        $service = new PaymentNotification();
        $transaction = $service->handle(file_get_contents(__DIR__.'/seed/transaction.json'));

        $this->assertEquals($transaction->getRrn(), '123456EF');
        $this->assertEquals($transaction->getId(), '0C1C518C-3009-4870-BD0F-AD8ABAE5F616');
        $this->assertEquals($transaction->getDescription(), 'Заказ #1');
        $this->assertEquals($transaction->getExtId(), 'A123ID456Z');
        $this->assertEquals($transaction->getOperation(), Transaction::OPERATION_PAYMENT);
        $this->assertEquals($transaction->getAmount(), 1.55);
        $this->assertEquals($transaction->getStatus(), Transaction::STATUS_COMPLETED);
        $this->assertEquals($transaction->getApprovalCode(), Transaction::APPROVAL_CODE_SIMULATION);
        $this->assertEquals($transaction->getCardType(), 'visa');
        $this->assertEquals($transaction->getMid(), 'pos@renins.kiev');
        $this->assertEquals($transaction->getCard(), '410247*5200');
        $this->assertEquals($transaction->getResultCode(), 0);
        $this->assertEquals($transaction->getReaderSN(), 'YUGX76G6X738DH8DH');

        $this->assertEquals($transaction->getDevice()->getId(), '80F2EEE9-AF55-4205-9119-EBE572B3FBBF');
        $this->assertEquals($transaction->getDevice()->getName(), 'iPhone7,1');
        $this->assertEquals($transaction->getDevice()->getModel(), 'Apple');

        $this->assertEquals(count($transaction->getProducts()), 1);
        $this->assertEquals($transaction->getProducts()[0]->getCode(), 'EXISTANCE_INS');
        $this->assertEquals($transaction->getProducts()[0]->getTitle(), 'Страховка жития');

        $this->assertEquals(count($transaction->getProducts()[0]->getFields()), 1);
        $this->assertEquals($transaction->getProducts()[0]->getFields()[0]->getCode(), 'CONTRACT_NO');
        $this->assertEquals($transaction->getProducts()[0]->getFields()[0]->getFieldType(), CPFField::FIELD_TYPE_TEXT);
        $this->assertEquals($transaction->getProducts()[0]->getFields()[0]->getTextVal(), '11111');
    }
}
