module P003 where

p003 :: Int
p003 = maxPrime 600851475143 2
maxPrime :: Int -> Int -> Int
maxPrime n d
    | d          > n = n
    | d         == n = d
    | n `mod` d == 0 = maxPrime (n `div` d) (d + 1)
    | otherwise      = maxPrime n (d + 1)
