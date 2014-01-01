module P005 where

p005 = foldl1 lcm' [2..20]
gcd' :: Int -> Int -> Int
gcd' a b
    | a < b     = gcd' b a
    | b == 0    = a
    | otherwise = gcd' b (a `mod` b)

lcm' :: Int -> Int -> Int
lcm' a b = a * b `div` gcd' a b

-- p005の残骸
isPrime :: Int -> Bool
isPrime n = isPrime2 n 2 
isPrime2 :: Int -> Int -> Bool 
isPrime2 n d 
    | n < d * d      = True
    | n `mod` d == 0 = False
    | otherwise      = isPrime2 n (d + 1)

factors :: Int -> [(Int, Int)]
factors n = factors2 n 2
factors2 :: Int -> Int -> [(Int, Int)]
factors2 n d
    | n <= d         = [(d, 1)]
    | n `mod` d == 0 = let powCnt = powers n d in
                           (d, powCnt) : factors2 (n `div` d ^ powCnt) (d + 1)
    | otherwise      = factors2 n (d + 1)

powers n d
    | n == 1         = 0
    | n `mod` d == 0 = 1 + powers (n `div` d) d
    | otherwise      = 0
