<?php 

namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase {

    /**
     * @test
     */
    public function it_parses_a_single_tag()
    {
        $parser = new TagParser;

        $result = $parser->parse('personal');

        $expected = ['personal'];
        
        $this->assertEquals($expected, $result);
    }
}