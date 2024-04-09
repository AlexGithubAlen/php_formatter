<?php

require_once 'reformatter.php';

use PHPUnit\Framework\TestCase;

class ReformatterTest extends TestCase
{

    public function testFormatTags()
    {
        $input = '<apply><csymbol encoding="OpenMath"><msub><mi>P</mi><mn>1</mn></msub></csymbol><ci>x</ci></apply>';
        $expectedOutput = "<apply>\n  <csymbol>\n    <msub>\n      <mi>P</mi>\n      <mn>1</mn>\n    </msub>\n  </csymbol>\n  <ci>x</ci>\n</apply>";
        $output = format_tags($input);
        $this->assertEquals($expectedOutput, $output);
    }

    public function testStringLength()
    {
        $inputString = "Hello, world!";
        $expectedLength = 13;
        $actualLength = getLength($inputString);
        $this->assertEquals($expectedLength, $actualLength);
    }

}
