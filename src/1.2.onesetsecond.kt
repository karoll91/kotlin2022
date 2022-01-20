import java.util.*

//Task 1
/**
 * 1. Write a program to swap value of two variables without using third variable.
 */
fun swapTwo() {
    print("Enter first number: ")
    var a = readLine()!!.toInt()

    print("Enter first number: ")
    var b = readLine()!!.toInt()

    println("Before number: \na = $a;\nb = $b")

    a += b
    b = a - b
    a -= b

    println("After number: \na = $a;\nb = $b")
}

//Task 2
/**
 * 2. Write a program which input three numbers and display the largest number using ternary operator.
 */
fun largest() {
    val one = readLine()!!.toInt()
    val two = readLine()!!.toInt()
    val three = readLine()!!.toInt()

    if (one >= two && one >= three) {
        println("This number: $one")
    } else if (two >= one && two >= three) {
        println("This number: $two")
    } else {
        println("This number: $three")
    }
}

//Task 4
/**
 * 4. Write a program which accepts a character and display its next character.
 */
fun accepts() {
    val scanner = Scanner(System.`in`)
    print("Enter character: ")
    var character = scanner.next().single()

    println("This character $character  ")
    character++
    println("next character $character ")
}

//Task 5
/**
 * 5. Write a program which accepts days as integer and display total number of years, months and days in it.
for example :  If user input as 856 days the output should be 2 years 4 months 6 days. solution
 */
fun year() {
    var days = readLine()!!.toInt()
    val year = days / 365
    days %= 365
    val month = days / 30
    val day = days % 30

    println("Years: $year\nMonths: $month\nDays: $day")
}