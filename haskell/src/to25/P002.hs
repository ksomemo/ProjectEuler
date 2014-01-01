module P002 where

p002 :: Int
p002 = sum $ filter (even) $ takeWhile (< 4000000) $ fibs
fib 0 = 0
fib 1 = 1
fib n = fib (n - 2) + fib (n -1)
fibs = [ fib x | x <- [2..] ]
