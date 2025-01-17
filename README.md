# PHP Loose Comparison Bug

This repository demonstrates a common bug in PHP related to loose comparison (==) of values.  Loose comparison does type juggling, which can lead to unexpected results.

## Bug Description
The `==` operator in PHP performs loose comparison, meaning it converts the operands to a common type before comparison. This can lead to unexpected true results when comparing values of different types (e.g., comparing an integer to a string). This is in contrast to strict comparison (`===`) which requires both type and value to be the same. 

## How to Reproduce
The file `bug.php` demonstrates the incorrect comparison. Run this file to see the surprising true results from loose comparison.

## Solution
The file `bugSolution.php` shows the correct use of strict comparison (`===`) to avoid this type of bug. Strict comparison prevents automatic type conversion, ensuring that comparisons are more reliable and predictable.