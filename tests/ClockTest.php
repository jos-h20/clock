<?php
require_once "src/Clock.php";

class ClockTest extends PHPUnit_Framework_TestCase
{
    function test_ClockHour()
    {
        //arrange
        $test_Clock = new Clock;
        $input = 3;

        //act
        $result = $test_Clock->hourToDegrees($input);

        //assert
        $this->assertEquals(90, $result);
    }
    function test_ClockMinute()
    {
        //arrange
        $test_Clock = new Clock;
        $input = 45;

        //act
        $result = $test_Clock->minuteToDegrees($input);

        //assert
        $this->assertEquals(270, $result);

    }
    function test_ClockAngle()
    {
        //arrange
        $test_Clock = new Clock;
        $input_hour = 3;
        $input_minute = 45;

        //act
        $result = $test_Clock->betweenHands($input_hour, $input_minute);

        //assert
        $this->assertEquals(157.5, $result);

    }

}

?>
