<?php

namespace forStubMockTesting;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
class UserTest extends TestCase {

    public function testUser() {
//        $user = new User();
//         $stub = $this->getMockBuilder(User::class)
//                      ->getMock(); // all methods return null by default unless mocked
//        $this->createStub(User::class);
//        $stub->method('save')->willReturn('fake');

//         $stub = $this->getMockBuilder(User::class)
//                        ->setMethods(null)
//                        ->getMock(); // works like a real object

        $stub = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['save']) // setMethods
            ->getMock();
        $stub->method('save')->willReturn(true);

        $this->assertTrue($stub->createUser('Adam', 'email@com.pl'));
    }

}
