<?php
/**
 * Tests for BlockLink
 */

use PHPUnit\Framework\TestCase;
use Blocklink\Blocklink;

class BlocklinkTest extends TestCase {
    private Blocklink $instance;

    protected function setUp(): void {
        $this->instance = new Blocklink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocklink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
