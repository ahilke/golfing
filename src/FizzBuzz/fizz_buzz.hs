module Divisor.Main where

fizz_buzz :: Int -> IO ()
fizz_buzz n
    | mod n 3 == 0 && mod n 5 == 0 = putStrLn "FizzBuzz"
    | mod n 3 == 0 = putStrLn "Fizz"
    | mod n 5 == 0 = putStrLn "Buzz"
    | otherwise = putStrLn (show n) 

main :: IO ()
main = mapM_ fizz_buzz [1..100]