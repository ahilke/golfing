module Divisor.Main where

import Data.List

-- list of multiples of x less or equal to 100
get_multiples_to_100 :: Int -> [Int]
get_multiples_to_100 x = [x, 2 * x .. 100]

-- list of multiples for numbers 1 - 100
multiples_to_100 :: [[Int]]
multiples_to_100 = [get_multiples_to_100 x | x <- [1..100]]

empty_to_100 :: [[Int]]
empty_to_100 = [[] | x <- [1..100]]

-- invert multiples array?

divisors_to_100 :: [[Int]]
divisors_to_100 = [get_multiples_to_100 x | x <- [1..100]]

divisors_to_100_string :: [[String]]
divisors_to_100_string = [[show number | number <- divisor_list] | divisor_list <- divisors_to_100]

divisor_lines :: [String]
divisor_lines = [(intercalate " " list) | list <- divisors_to_100_string]

divisor_output :: String
divisor_output = intercalate "\n" divisor_lines ++ "\n"

get_divisors :: Int -> [Int]
get_divisors n = [x | x <- [1..100], mod n x == 0]

real_divisors :: [[Int]]
real_divisors = [get_divisors x | x <- [1..100]]

real_divisor_output :: String
real_divisor_output = intercalate "\n" [intercalate " " [show number | number <- divisor_list] | divisor_list <- real_divisors]

main :: IO()
main = putStrLn real_divisor_output
