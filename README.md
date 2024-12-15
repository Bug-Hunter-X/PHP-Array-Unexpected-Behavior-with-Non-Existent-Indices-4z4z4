# PHP Array Unexpected Behavior with Non-Existent Indices

This repository demonstrates an uncommon bug in PHP related to accessing and modifying array values when an index does not exist.  The issue arises from how PHP handles array indexing and implicit initialization of elements.

## Bug Description
The provided PHP code showcases unexpected behavior when attempting to increment or decrement the value at a non-existent index within an array. The code attempts to mitigate this by initializing the value to 0 if the index is not found; however this is not the only edge case to watch out for.

## Bug Solution
The solution addresses the issue by explicitly checking for the existence of the index before attempting to perform operations.
