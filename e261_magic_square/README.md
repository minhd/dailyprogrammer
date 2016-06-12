# Challenge 261 Verifying Magic Square

A 3x3 magic square is a 3x3 grid of the numbers 1-9 such that each row, column, and major diagonal adds up to 15. Here's an example:
```
8 1 6
3 5 7
4 9 2
```
The major diagonals in this example are 8 + 5 + 2 and 6 + 5 + 4.

Example
```
[8, 1, 6, 3, 5, 7, 4, 9, 2] => true
[2, 7, 6, 9, 5, 1, 4, 3, 8] => true
[3, 5, 7, 8, 1, 6, 4, 9, 2] => false
[8, 1, 6, 7, 5, 3, 4, 9, 2] => false
```

**Bonus**
1. Verify magic squares of any size, not just 3x3
2. Write another function that takes a grid whose bottom row is missing, so it only has the first 2 rows (6 values). This function should return true if it's possible to fill in the bottom row to make a magic square. You may assume that the numbers given are all within the range 1-9 and no number is repeated. Examples:
```
[8, 1, 6, 3, 5, 7] => true
[3, 5, 7, 8, 1, 6] => false
```
