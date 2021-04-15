

<?php
# developed by Alfeus Nghilinganye
# GitHub --> https://github.com/Alfeus-Nghilinganye
# Profile --> https://alfeus-nghilinganye.netlify.app

    function Time_stamp($datetime){
#86400 = seconds in a day (24*60*60);

        $time = (strtotime($datetime) - strtotime(date("Y-m-d H:i:s"))) / 86400;
        
        if($time <= -365){//years
                $time /= 365; //divide by days in a year
                $time *= -1; //turn to positive
                $time = round($time, 0) == 1 ? " a year ago" : round($time, 0)." years ago";
        }
        else{
            if ($time <= -30.5) {//months
                $time /= 30.5; //divide by days in a month
                $time *= -1; //turn to positive
                $time = round($time, 0) == 1 ? " a month ago" : round($time, 0)." months ago";
            }else {
                if ($time <= -7) {//weeks
                    $time /= 7; //divide by days in a week
                    $time *= -1; //turn to positive
                    $time = round($time, 0) == 1 ? " a week ago" : round($time, 0)." weeks ago";
                } else {//days
                    if ($time <= -1) {
                    $time *= -1; //turn to positive
                    $time = round($time, 0) == 1 ? " yesterday" : round($time, 0) == 2 ? " a day ago" : round($time, 1)." days ago";

                    }else {
                        if ($time <= -0.0416666666666667) { // hours
                        $time *= 24; //multiply by hours in a day
                        $time *= -1; //turn to positive
                        $time = round($time, 0) == 1 ? " an hour ago" : round($time, 0)." hours ago";
                        } else {
                            $time *= 86400;  //converting seconds back to epoch timestamp 
                            $time /= 60;  //converting epoch seconds to minutes
                            $time *= -1;  //changing to positive number
                            if ($time <= 59.99) { //checking if its less than an hour
                                if ($time >= 1 ) {  //minutes
                                    $time = round($time, 0) == 1 ? " a minute ago" : round($time, 0)." minutes ago";
                                } else { //seconds
                                $time *= 60;
                                    $time = round($time, 0) < 30 ? "just now" : round($time, 0) ." seconds ago";
                                }
                            }
                          
                        }
                    }
                }
           }
        }
        return $time;
    }

    echo Time_stamp(date("2021-04-15 00:00:00")); //calling the function here...

?>
    
