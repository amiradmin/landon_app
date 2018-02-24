<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

   /* public function testTitleModelCount(){
       // $value =1;
       // $this->assertTrue(1===$value,"Value should be one!");
       $titles = new Title;
    $this->assertTrue(count($titles->all())===6,'It should have 6 titles');
    }
    public function testLastTitleShouldBeProfessor(){
        $titles = new Title;
        $title_array = $titles->all();

        $this->assertEquals('Professor',array_pop($title_array),'The last title should be Professor');


        
    }
    */
}
