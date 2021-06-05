<?php

namespace Boatrace\Analytics\Cherry\Blossom\Tests;

use Boatrace\Analytics\Cherry\Blossom\MainPurchaser;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class MainPurchaserTest extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Analytics\Cherry\Blossom\MainPurchaser
     */
    protected $purchaser;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->purchaser = new MainPurchaser;
    }

    /**
     * @doesNotPerformAssertions
     * @return void
     */
    public function testPurchaser(): void
    {
        $this->purchaser
            ->setDepositAmount(1000)
            ->setSubscriberNumber(getenv('SUBSCRIBER_NUMBER'))
            ->setPersonalIdentificationNumber(getenv('PERSONAL_IDENTIFICATION_NUMBER'))
            ->setAuthenticationPassword(getenv('AUTHENTICATION_PASSWORD'))
            ->setPurchasePassword(getenv('PURCHASE_PASSWORD'))
            ->purchase(24, 12, [1, 2]);
    }
}
