<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

#[CoversNothing]
class EmailTest extends TestCase {

    public function testValidEmail(): void {
        $this->assertMatchesRegularExpression('/^.+\@\S+\.\S+$/', 'mile@gmail.com');
    }

    #[DataProvider('emailsProvider')]
    public function testInvalidEmail($email): void {
        $this->assertMatchesRegularExpression('/^.+\@\S+\.\S+$/', $email);
    }

    public static function emailsProvider(): array {
        return [
            ['mile@gmail.com'],
            ['javier@email.com'],
            ['abctest@email.com'],
        ];
    }
}
