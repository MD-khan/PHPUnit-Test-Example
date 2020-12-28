<?php
namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest  extends TestCase {

    /**
     * Testing comma separated list of tag
     * ex pizza, salad, drinks
     */
    public function test_it_parse_a_single_tag() {
        
        $parser = new TagParser;

        $result = $parser->parse('pizza' );
        $expected = ['pizza'];

        $this->assertSame( $expected, $result);
    }
    
    
     public function test_it_parse_a_comma_separated_list_of_tags() {
        
        $parser = new TagParser;

        $result = $parser->parse('pizza', 'salad', 'drinks' );
        $expected = ['pizza', 'salad', 'drinks'];

        $this->assertSame( $expected, $result);
    }
}