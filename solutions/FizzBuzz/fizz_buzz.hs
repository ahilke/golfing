f n|mod n 3==0&&mod n 5==0=putStrLn"FizzBuzz"|mod n 3==0=putStrLn"Fizz"|mod n 5==0=putStrLn"Buzz"|otherwise=putStrLn(show n)
main=mapM_ f[1..100]