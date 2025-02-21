<?php

declare(strict_types=1);

namespace Cycle\Database\Tests\Functional\Driver\MySQL\Schema;

// phpcs:ignore
use Cycle\Database\Tests\Functional\Driver\Common\Schema\DefaultValueTest as CommonClass;

/**
 * @group driver
 * @group driver-mysql
 */
class DefaultValueTest extends CommonClass
{
    public const DRIVER = 'mysql';

    public function testTextDefaultValueString(): void
    {
        $this->expectException(\Cycle\Database\Driver\MySQL\Exception\MySQLException::class);
        $this->expectExceptionMessage('Column table.target of type text/blob/json can not have non empty default value');
        parent::testTextDefaultValueString();
    }

    public function testTextDefaultValueEmpty(): void
    {
        $this->expectException(\Cycle\Database\Driver\MySQL\Exception\MySQLException::class);
        $this->expectExceptionMessage('Column table.target of type text/blob/json can not have non empty default value');
        parent::testTextDefaultValueEmpty();
    }

    public function testJsonDefaultValueString(): void
    {
        $this->expectException(\Cycle\Database\Driver\MySQL\Exception\MySQLException::class);
        $this->expectExceptionMessage('Column table.target of type text/blob/json can not have non empty default value');
        parent::testJsonDefaultValueString();
    }

    public function testJsonDefaultValueArray(): void
    {
        $this->expectException(\Cycle\Database\Driver\MySQL\Exception\MySQLException::class);
        $this->expectExceptionMessage('Column table.target of type text/blob/json can not have non empty default value');
        parent::testJsonDefaultValueArray();
    }

    public function testJsonDefaultValueEmpty(): void
    {
        $this->expectException(\Cycle\Database\Driver\MySQL\Exception\MySQLException::class);
        $this->expectExceptionMessage('Column table.target of type text/blob/json can not have non empty default value');
        parent::testJsonDefaultValueEmpty();
    }
}
