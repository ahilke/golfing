fun main() {
    print(golf())
}

fun golf(): Any {
    return (1..100).forEach { i ->
        println(
            when {
                it % 15 == 0 -> "FizzBuzz"
                it % 3 == 0 -> "Fizz"
                it % 5 == 0 -> "Buzz"
                else -> it
            },
        )
    }
}
