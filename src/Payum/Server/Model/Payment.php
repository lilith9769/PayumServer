<?php
namespace Payum\Server\Model;

use Makasim\Values\ValuesTrait;
use Payum\Core\Model\CreditCardInterface;
use Payum\Core\Model\PaymentInterface;

class Payment implements PaymentInterface
{
    use ValuesTrait {
        setValue as public;
        getValue as public;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getSelfValue('id');
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->setSelfValue('id', $id);
    }

    /**
     * @var CreditCardInterface
     */
    protected $creditCard;

    /**
     * {@inheritdoc}
     */
    public function getDetails()
    {
        return $this->getSelfValue('details', [], 'array');
    }

    /**
     * {@inheritdoc}
     */
    public function setDetails($details)
    {
        $this->setSelfValue('details', (array) $details);
    }

    /**
     * {@inheritdoc}
     */
    public function getNumber()
    {
        return $this->getSelfValue('number');
    }

    /**
     * {@inheritdoc}
     */
    public function setNumber($number)
    {
        $this->setSelfValue('number', $number);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->getSelfValue('description');
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->setSelfValue('description', $description);
    }

    /**
     * {@inheritdoc}
     */
    public function getClientEmail()
    {
        return $this->getSelfValue('clientEmail');
    }

    /**
     * {@inheritdoc}
     */
    public function setClientEmail($clientEmail)
    {
        $this->setSelfValue('clientEmail', $clientEmail);
    }

    /**
     * {@inheritdoc}
     */
    public function getClientId()
    {
        return $this->getSelfValue('clientId');
    }

    /**
     * {@inheritdoc}
     */
    public function setClientId($clientId)
    {
        $this->setSelfValue('clientId', $clientId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalAmount()
    {
        return $this->getSelfValue('totalAmount', null, 'int');
    }

    /**
     * {@inheritdoc}
     */
    public function setTotalAmount($totalAmount)
    {
        $this->setSelfValue('totalAmount', $totalAmount);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode()
    {
        return $this->getSelfValue('currencyCode');
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->setSelfValue('currencyCode', $currencyCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreditCard(CreditCardInterface $creditCard)
    {
        $this->creditCard = $creditCard;
    }

    /**
     * @return string
     */
    public function getGatewayName()
    {
        return $this->getSelfValue('gatewayName');
    }

    /**
     * @param string $gatewayName
     */
    public function setGatewayName($gatewayName)
    {
        $this->setSelfValue('gatewayName', $gatewayName);
    }
}