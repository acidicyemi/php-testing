<?php 

namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase {

    protected $parser;

    protected function setUp() : void
    {
        $this->parser = new TagParser;
    }

    /**
     * @test
     */
    public function it_parses_a_single_tag()
    {
        $parser = new TagParser;

        $result = $this->parser->parse('personal');

        $expected = ['personal'];
        
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_parses_a_comma_seperated_list_of_tags()
    {
        $parser = new TagParser;

        $result = $this->parser->parse('personal, money, family');

        $expected = ['personal','money',"family"];
        
        $this->assertEquals($expected, $result);
    }
    
    /**
     * @test
     */
    public function commas_spaces_are_optional()
    {
        $parser = new TagParser;

        $result = $this->parser->parse('personal,money,family');

        $expected = ['personal','money',"family"];
        
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_parses_a_pipe_separated_list_of_tags()
    {
        // Given or Arrange
        $parser = new TagParser;

        // When or Act
        $result = $this->parser->parse('personal | money | family');

        $expected = ['personal','money',"family"];
        
        // Then or Assert
        $this->assertEquals($expected, $result);
    }
}