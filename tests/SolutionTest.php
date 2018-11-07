<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Solution;

class SolutionTest extends TestCase
{
    public function testSymmetricCharacters() {
        $solution = new Solution;
        $result = $solution->solution('(([]{})(())(<>))');
            $this->assertEquals(1, $result);
        $result = $solution->solution("([{<>}])");
            $this->assertEquals(1, $result);
    }

    public function testUnsymmetricCharacters() {
        $solution = new Solution;
        $result = $solution->solution("([{<)]}>");
            $this->assertEquals(0, $result);
        $result = $solution->solution("([{<");
            $this->assertEquals(0, $result);
    }
}