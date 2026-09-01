<?php
/**
 * Tests for SolidityScanPlus
 */

use PHPUnit\Framework\TestCase;
use Solidityscanplus\Solidityscanplus;

class SolidityscanplusTest extends TestCase {
    private Solidityscanplus $instance;

    protected function setUp(): void {
        $this->instance = new Solidityscanplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityscanplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
