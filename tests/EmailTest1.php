<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

require_once './src/Email.php';

final class EmailTest1 extends TestCase {

    public function testCanBeCreatedFromValidEmailAddress() {
        $email = new Email('user@example.com');
        $this->assertInstanceOf(
                Email::class, Email::fromString('user@example.com')
        );
        //$this->assertInstanceOf(Email::class, $email);
    }

    public function testCannotBeCreatedFromInvalidEmailAddress() {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString() {
        $this->assertEquals(
                'user@example.com', Email::fromString('user@example.com')
        );
    }

}

// exec: 
// phpunit tests/EmailTest1
