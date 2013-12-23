module FizzBuzzSpec where

import Test.Hspec
import Test.Hspec.QuickCheck
import Test.QuickCheck
import Control.Monad

import FizzBuzz

spec :: Spec
spec = do
    describe "fizzbuzz" $ do
        it "other it spec" $
            fizzbuzz 1 `shouldBe` "1"

        prop "m3 spec" $
            \x -> ((m3 x) && not (m5 x) && (x > 0)) ==> fizzbuzz x == "Fizz"

        prop "m5 spec" $
            forAll (liftM abs arbitrary) $
                \x -> (not (m3 x) && (m5 x)) ==> prop_buzz x

        prop "m3 and m5 spec" $
            forAll (liftM ((*15) . abs) arbitrary) $
-- HSpecの場合に失敗してしまう。スコープの問題？  
--            forAll (sized $ \n -> resize (15*n) arbitrary) $
               \x -> ((m3 x) && (m5 x) && (x > 0)) ==> fizzbuzz x == "FizzBuzz"

        prop "other prop spec" 
            (\x y -> fizzbuzz (1 + 0 * x * y) == "1")

        prop "other prop spec2" 
            prop_other

prop_buzz :: Int -> Bool
prop_buzz x = fizzbuzz x == "Buzz"

prop_other :: Bool
prop_other = fizzbuzz 2 == "2"
