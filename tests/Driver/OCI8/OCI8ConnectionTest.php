<?php

namespace Doctrine\DBAL\Tests\Driver\OCI8;

use Doctrine\DBAL\Driver\OCI8\OCI8Connection;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

use function extension_loaded;

class OCI8ConnectionTest extends TestCase
{
    /**
     * The oci8 driver connection mock under test.
     *
     * @var OCI8Connection|MockObject
     */
    private $connectionMock;

    protected function setUp(): void
    {
        if (! extension_loaded('oci8')) {
            $this->markTestSkipped('oci8 is not installed.');
        }

        parent::setUp();

        $this->connectionMock = $this->getMockBuilder(OCI8Connection::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
    }

    public function testDoesNotRequireQueryForServerVersion(): void
    {
        self::assertFalse($this->connectionMock->requiresQueryForServerVersion());
    }
}
