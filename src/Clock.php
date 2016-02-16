<?php
class Clock
{
    function hourToDegrees($input_hour)
    {
        $hour_degrees = $input_hour/12 * 360;
        return $hour_degrees;
    }
    function minuteToDegrees($input_minute)
    {
        $minute_degrees = $input_minute/60 * 360;
        return $minute_degrees;
    }
    function betweenHands($input_hour, $input_minute)
    {
        $chank = $input_hour * 60;
        $chunk = $input_minute * 11;
        $chunker = $chank - $chunk;
        $clock_angle = abs($chunker/2);

        if ($clock_angle > 180) {
            $clock_angle = 360 - $clock_angle;
        }
        return $clock_angle;
    }

}
 ?>
