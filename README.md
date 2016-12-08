# php-timer
Count load time between processes and total.

## How to?

```php
include("class.timer.php");
$timer = new timer(); // timer starts here

// code

$timer->now("Phase 1");

// code

$current = $timer->now("Phase 2");

print "$current<br />"; // prints time requestet on line 17.

// code

$timer->now("Phase 3", "min");

foreach($timer->data as $title => $time) {
  print "<b>$title:</b> $time<br />";
}

```

Result will be like:

0,567 sec<br />
**Phase 1:** 0,134 sec<br />
**Phase 2:** 0,567 sec<br />
**Phase 3:** 0,084 min<br />

## Docs

Construct:

```$timer = new timer();```
Counter starts here.

Request current moment:

```$value = $timer->now();```
Requested time inseconds returned.

```$value = $timer->now("Phase 1");```
Requested time in seconds returned and saved into array for later use.

```$value = $timer->now("Phase 2", "min");```
Requested time in minutes returned and saved into array for later use.

```$timer->now("Phase 3");```
Requested time saved into array for later use.

```$value = $timer->last();```
Previously requested time in seconds returned.

```$value = $timer->last("min");```
Previously requested time in minutes returned.

```$timer->data;```
Array of all titled requested times.

