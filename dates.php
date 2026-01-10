<!-- This file contains date-related functions for the sandbox project -->
 <?php
// Set the default timezone
date_default_timezone_set('Africa/Lagos');
// Get the current date and time
$currentDate = date('Y-m-d H:i:s');
echo "Current Date and Time: " . $currentDate . "</br>";
// Format a specific date
$specificDate = mktime(0, 0, 0, 12, 25, 2023); // December 25, 2023
$formattedDate = date('l, F j, Y', $specificDate);
echo "Formatted Specific Date: " . $formattedDate . "</br>";
// Date arithmetic: Add 10 days to the current date
$futureDate = date('Y-m-d', strtotime('+10 days'));
echo "Date after 10 days: " . $futureDate . "</br>";
// Date arithmetic: Subtract 5 days from the current date
$pastDate = date('Y-m-d', strtotime('-5 days'));
echo "Date 5 days ago: " . $pastDate . "</br>";
// Get the day of the week for a specific date
$dayOfWeek = date('l', strtotime('2023-12-25'));
echo "Day of the week for 2023-12-25: " . $dayOfWeek . "</br>";
// Calculate the difference between two dates
$date1 = new DateTime('2023-01-01');
$date2 = new DateTime('2023-12-31');
$interval = $date1->diff($date2);
echo "Difference between 2023-01-01 and 2023-12-31: " . $interval->days . " days</br>";
// Check if a year is a leap year
$year = 2024;
$isLeapYear = (date('L', mktime(0, 0, 0, 1, 1, $year))) ? 'Yes' : 'No';
echo "Is $year a leap year? " . $isLeapYear . "</br>";
 ?>