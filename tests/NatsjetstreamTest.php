<?php
/**
 * Tests for NatsJetstream
 */

use PHPUnit\Framework\TestCase;
use Natsjetstream\Natsjetstream;

class NatsjetstreamTest extends TestCase {
    private Natsjetstream $instance;

    protected function setUp(): void {
        $this->instance = new Natsjetstream(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Natsjetstream::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
