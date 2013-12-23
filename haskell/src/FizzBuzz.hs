module FizzBuzz where

{-| fizzbuzz
$setup
>>> import Test.QuickCheck

例：
m3
>>> fizzbuzz 3
"Fizz"

m5
>>> fizzbuzz 5
"Buzz"

m3 and m5
>>> fizzbuzz 15
"FizzBuzz"

other(Qucik Check Test)
prop> not (m3 x) && not (m5 x) && (x > 0) ==> fizzbuzz x == show x

two args
prop> (\x y -> x + y) a b == a + b
-}
fizzbuzz :: Int -> String
fizzbuzz x
    | m3 x && m5 x = "FizzBuzz"
    | m3 x         = "Fizz"
    | m5 x         = "Buzz"
    | otherwise    = show x

m3 :: Int -> Bool
m3 x = x `mod` 3 == 0

m5 :: Int -> Bool
m5 x = x `mod` 5 == 0

