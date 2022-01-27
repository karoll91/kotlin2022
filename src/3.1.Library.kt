import java.util.*
import kotlin.contracts.InvocationKind
import kotlin.contracts.contract
import kotlin.math.*
import kotlin.random.Random

// task library first (1)
// formula
/**
 * 1. Write a program which input principal, rate and time from user and calculate compound interest. You can use library function.
CI = P(1+R/100)T - P
 */
fun calculateCompoundInterest(){
        println("P sonni kiriting:")
        val p = readLine()!!.toDouble()
        println("r sonining kiriting: ")
        val r = readLine()!!.toDouble()
        println("t Sonini kiriting: ")
        val t = readLine()!!.toDouble()

        print("CI = P * pow((1+R/100)t) - T " + "CI = " )
        println(libfun(p,r,t))
}
fun libfun (p:Double,r:Double,t:Double ): Double {
    val CI = p * Math.pow((1 + r / 100.0),t) - p
    return CI
}
// task library sekond (2)
// area (Uchburchakni yuzini topish)
/**
 * 2. Write a program to compute area of triangle. Sides are input by user.
Area = sqrt(s*(s-a)*(s-b)*(s-c))
where s=(a+b+c)/2.
 */
fun areaTriangle(){
        println("A tomon")
        val a = readLine()!!.toFloat()
        println("B tomon")
        val b = readLine()!!.toFloat()
        println("C tomon")
        val c = readLine()!!.toFloat()

        println(libfun2(a,b,c))
}
fun libfun2 (a:Float, b:Float, c:Float): Float{
    val s = (a + b + c) / 2
    val area = sqrt(s * (s-a) * (s-b) * (s-c))

    return area
}
// task library third (3)
// alphabet, number, digital if else
/**
 * 3. Write a program to check character entered is alphabet, digit or special character using library functions. solution
 */
fun checkCharacterIf(){
        val scanner = Scanner(System.`in`)
        print("Enter character: ")
        val text: Char = scanner.next()[0]

        if (text in 'a'..'z' || text in 'A'..'Z')
            println("$text this alphabet")
        else if (text in '0'..'9')
            println("$text this number")
        else
            println("$text this Special Character")
}
// alphabet, number, digital when
/**
 * 3. Write a program to check character entered is alphabet, digit or special character using library functions. solution
 */
fun checkCharacterWhen(){
        val scanner = Scanner(System.`in`)
        print("Enter character: ")
        var char = scanner.next()[0]
        when {
            char.isDigit() -> println("Digit")
            char.isLetter() -> println("Alphabet")
            else -> println("Special Character")
        }
}
// task library fourth  (4)
// random
/**
 * 4. Write a program which display a number between 10 to 100 randomly.
 */
fun random(){
        print("Start number: ")
        val start = readLine()!!.toInt()
        print("End number: ")
        val end = readLine()!!.toInt()
        for (i in 1..6) println("Random: " + rand(start, end))
}

fun rand (start: Int, end: Int): Int{
    require(start <= end)
    val rand = Random(System.nanoTime())
    return (start..end).random(rand)
}
// task library fifth (5)
// Uppercase while
/**
 * 5. Write a program which accept a letter and display it in uppercase letter.
 */
fun uppercaseWhile(){
        println("Enter U or u for Uppercase, any other for lowercase: ")
        val case = readLine()

        val isUpperCase = (case == 'U'.toString()) || (case == 'u'.toString())

        var sChar = if (isUpperCase) 'A' else 'a'
        val endChar = if (isUpperCase) 'Z' else 'z'

        println("All characters: ")

        while (sChar <= endChar) {
            print("$sChar ")
            sChar++
        }
        println("\nThe End")
}

// Uppercase if else
fun uppercaseIf(){
        print("Matn kiriting: ")
        var text = readLine()!!.toString()
        println(text.uppercase(Locale.getDefault()))
}

//task library sixth (6)
// Game
/**
 * 6. Write a C++ program to implement the Number Guessing Game. In this game the computer chooses a random number between 1 and 100, and the player tries to guess the number in as few attempts as possible. Each time the player enters a guess, the computer tells him whether the guess is too high, too low, or right. Once the player guesses the number, the game is over.
 */
fun game(){
        val secretNumber = java.util.Random().nextInt(100)

        println("Welcome to the Guessing Game!\n")

        var guess: Int
        var attempts = 0

        while (true) {
            print("Enter your guess (1-100): ")
            guess = readLine()!!.toInt()

            when (guess.compareTo(secretNumber)) {
                -1 -> { println("Too small!"); attempts++ }
                0 -> { attempts++; println("You win! You took $attempts guesses!"); return }
                1 -> { println("Too big!"); attempts++ }
            }
        }
}
