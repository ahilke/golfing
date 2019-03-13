module Divisor.Main where

import Data.List

-- Returns list of divisors of n.
get_divisors :: Int -> [String]
get_divisors n = [show x | x <- [1..n], mod n x == 0]

-- List of divisors for 1 to 100.
divisors :: [[String]]
divisors = [get_divisors x | x <- [1..100]]

-- List of divisors as space-separated strings.
divisor_lines :: [String]
divisor_lines = [intercalate " " divisor_list | divisor_list <- divisors]

divisor_output :: String
divisor_output = intercalate "\n" divisor_lines

main :: IO()
main = putStr divisor_output
