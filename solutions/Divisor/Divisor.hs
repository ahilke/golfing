module M where
import Data.List
main = putStrLn (intercalate "\n" [intercalate " " [show n | n <- z] | z <- [[x | x <- [1..100], mod y x == 0] | y <- [1..100]]])