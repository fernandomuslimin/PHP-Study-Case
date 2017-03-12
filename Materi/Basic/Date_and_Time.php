<html>
    <body>
        <h2>Get A Simple Date</h2>
        <?php 
            echo "today is : ". date("Y/m/d") . "<br>";
            echo "Today is : ". date("Y.m.d") . "<br>";
            echo "Today is : ". date("Y-m-d") . "<br>";
            echo "Today is : ". date("l") . "<br>";
            
            
        ?>
        <h2>Get A Copyright Symbol</h2>
        Fernando Muslimin &copy; 2017-<?php echo date("Y");?>
        
        <h2>Get A Simple Time</h2>
        h - 12-hour format of an hour with leading zeros (01 to 12)<br>
        i - Minutes with leading zeros (00 to 59)<br>
        s - Seconds with leading zeros (00 to 59)<br
        a - Lowercase Ante meridiem and Post meridiem (am or pm)<br><br>
        
        <?php 
            echo "The time is ".  date("h:i:sa")."<br><br>";
            echo "<h3>Time Zone</h3>";
            date_default_timezone_set("America/New_York");
            echo "The time is ".  date("h:i:sa")."<br><br>";            
        ?>
        
        mktime(hour,minute,second,month,day,year)
        
        <?php 
            $d = mktime(11,14,54,8,12,2017);
            echo "<br>Created Date is ". date("Y-m-d h:i:sa", $d) . "<br><br>";
        ?>
        
        strtotime(time,now)
        <?php 
            echo "<h3>String to time</h3>";
            $d = strtotime("10:30pm April 15 2017");
            echo "Created date is ". date("Y-m-d h:i:sa",$d) . "<br>";
        ?>
        
        <?php
            $d=strtotime("tomorrow");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d=strtotime("next Saturday");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d=strtotime("+3 Months");
            echo date("Y-m-d h:i:sa", $d) . "<br>";
        ?>
        
        <?php
            $startdate = strtotime("Saturday");
            $enddate = strtotime("+6 weeks", $startdate);

            while ($startdate < $enddate) {
              echo date("M d", $startdate) . "<br>";
              $startdate = strtotime("+1 week", $startdate);
            }
        ?>
        
        <?php
            $d1=strtotime("July 04");
            $d2=ceil(($d1-time())/60/60/24);
            echo "There are " . $d2 ." days until 4th of July.";
        ?>
    </body>
</html>