<?php
/**
 * Tests for iExecCloud
 */

use PHPUnit\Framework\TestCase;
use Iexeccloud\Iexeccloud;

class IexeccloudTest extends TestCase {
    private Iexeccloud $instance;

    protected function setUp(): void {
        $this->instance = new Iexeccloud(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Iexeccloud::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
