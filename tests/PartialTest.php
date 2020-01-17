<?php
/**
 * Generated by build/gen_test
 */
use LightnCandy\LightnCandy;
use LightnCandy\Runtime;
use LightnCandy\SafeString;
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/test_util.php');

class PartialTest extends TestCase
{
    /**
     * @covers LightnCandy\Partial::prePartial
     */
    public function testOn_prePartial() {
        $method = new \ReflectionMethod('LightnCandy\Partial', 'prePartial');
        $method->setAccessible(true);
        $this->assertEquals('hey', $method->invokeArgs(null, array_by_ref(array(
            Array('prepartial' => false), 'hey', 'haha'
        ))));
        $this->assertEquals('haha-hoho', $method->invokeArgs(null, array_by_ref(array(
            Array('prepartial' => function ($cx, $tmpl, $name) {return "$name-$tmpl";}), 'hoho', 'haha'
        ))));
    }
}

