(1..100).forEach{i->println(when{i%15==0->"FizzBuzz"
i%3==0->"Fizz"
i%5==0->"Buzz"
else->i})}