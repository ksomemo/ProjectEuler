{-# LANGUAGE TemplateHaskell #-}
module Main where

import Test.Framework.TH
import Test.Framework.Providers.QuickCheck2
import Test.QuickCheck
import Control.Monad

import FizzBuzz

main :: IO ()
main = $(defaultMainGenerator)

-- prop_をつけることでテスト対象の関数となる
-- ==> は値の制約
prop_fizz :: Int -> Property
prop_fizz x =
  (m3 x) && not (m5 x) && (x > 0) ==> fizzbuzz x == "Fizz"

-- arbitrary はGen型であり、FunctorやMonadでもある
-- よって、liftMとabsにより整数のみに制限できる
prop_buzz :: Property
prop_buzz =
  forAll (liftM abs arbitrary) $
    \x -> (not (m3 x) && (m5 x)) ==> fizzbuzz x == "Buzz"

-- size系を使うことで範囲の変更を明示する
prop_fizzbuzz :: Property
prop_fizzbuzz =
  forAll (sized $ \n -> resize (15*n) arbitrary) $
    \x -> ((m3 x) && (m5 x) && (x > 0)) ==> fizzbuzz x == "FizzBuzz"

prop_other :: Int -> Property
prop_other x =
  not (m3 x) && not (m5 x) && (x > 0) ==> fizzbuzz x == show x
