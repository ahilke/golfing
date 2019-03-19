p=putStrLn
m=mod
f n|m n 15==0=p"FizzBuzz"|m n 3==0=p"Fizz"|m n 5==0=p"Buzz"|otherwise=p$show n
main=mapM_ f[1..100]