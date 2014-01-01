module P004 where

p004 :: Int
p004 = maximum [ a | x1 <- [1..9], y1 <- [1..9], z1 <- [1..9]
                   , x2 <- [1..9], y2 <- [1..9], z2 <- [1..9]
                   , let a = (x1 * 100 + y1 * 10 + z1) * (x2 * 100 + y2 * 10 + z2)
                   , show a == reverse (show a) ]
