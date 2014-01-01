module P001 where

{-|Multiples of 3 and 5

１から１０００未満の数字のうち、３または５で割り切れる数の総和
>>> p001
233168   

-}
p001 :: Int
p001 = sum $ takeWhile (< 1000) [ x | x <- [1..], ((x `mod` 3) == 0 || (x `mod` 5) == 0) ]
