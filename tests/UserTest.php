<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
class UserTest extends TestCase {
    public function testValidUserNameUsingClosure(): void {

        $user = new User('donald', 'Trump');
        $expected = 'Donald';
        $phpunit = $this;
        $closure = function() use ($phpunit, $expected) {
            $phpunit->assertSame($expected, $this->name);
        };
        $binding = $closure->bindTo($user, get_class($user));
        $binding();
    }

    public function testValidUserName2(): void {
        $user = new class('donald', 'Trump') extends User {
            /**
             * @return string
             */
            public function getName(): string
            {
                return $this->name;
            }
        };
        $this->assertSame('Donald', $user->getName());
    }

    public function testValidDataFormat() : void {
        $user = new User('donald', 'Trump');

        $mockDB = new class extends Database {
            public function getEmailAndLastName(): void
            {
                echo "No real DB touched!";
            }
        };

        $setUserClosure = function() use ($mockDB) {
            $this->db = $mockDB;
        };

        $executeSetUserClosure = $setUserClosure->bindTo($user, get_class($user));
        $executeSetUserClosure();

        $this->assertSame('Donald Trump', $user->getFullName());
    }

    public function testPasswordHashed(): void {
        $user = new User('donald', 'Trump');
        $expected = 'Password Hashed!!';
        $phpunit = $this;
        $assertClosure = function() use ($phpunit, $expected) {
            $phpunit->assertSame($expected, $this->hashPassword());
        };
        $executeAssertClosure = $assertClosure->bindTo($user, get_class($user));
        $executeAssertClosure();
    }

    public function testPasswordHashedSecond(): void {
        $user = new class('donald', 'Trump') extends User {
            public function getHashedPassword(): string {
                return $this->hashPassword();
            }
        };

        $this->assertSame('Password Hashed!!', $user->getHashedPassword());

    }
}
