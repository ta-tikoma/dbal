<?php

namespace Doctrine\DBAL\Tests\Driver\PDOOracle;

use Doctrine\DBAL\Driver as DriverInterface;
use Doctrine\DBAL\Driver\PDOOracle\Driver;
use Doctrine\DBAL\Tests\Driver\AbstractOracleDriverTest;

class DriverTest extends AbstractOracleDriverTest
{
    public function testReturnsName(): void
    {
        self::assertSame('pdo_oracle', $this->driver->getName());
    }

    protected function createDriver(): DriverInterface
    {
        return new Driver();
    }
}
