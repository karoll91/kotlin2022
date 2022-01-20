import java.util.*

//Variable, Operator and Expression [sit-1]
//Task-1
/**
 * 1. Write a program to print HELLO WORLD on screen. solution
 */
fun helloWorld() {
    val text = "Hello world"
    println(text)
}
//Task 2 dfd
/**
 * 2. Write a program to display the following output using a single cout statement.

Subject            Marks
Mathematics     90
Computer         77
Chemistry        69  solution
 */
fun printStatement() {
    val subject = "Marks"
    val mathematics = 90
    val computer = 77
    val chemistry = 69


    println("Subject:   $subject \nMathematics: $mathematics \nComputer:    $computer \nChemistry:  $chemistry")
}

//Task 3
/**
 * 3. Write a program which accept two numbers and print their sum. solution
 */
fun sum() {
    print("Enter the first number: ")
    val one = readLine()!!.toInt()
    print("Enter the second number: ")
    val second = readLine()!!.toInt()

    val sum = one + second

    println("The result: $one + $second = $sum")
}

//Task 4
/**
 * 4. Write a program which accept temperature in Farenheit and print it in centigrade. solution
 */
fun temperature() {
    print("Enter temperature in Fahrenheit: ")
    val far = readLine()!!.toFloat()

    val centigrade = 5.0 * (far - 32) / 9

    println("Temperature in Celsius is : $centigrade")
}

//Task 5
/**
 * 5. Write a program which accept principle, rate and time from user and print the simple interest. solution
 */
fun interest() {
    print("Enter number principle ")
    val principal = readLine()!!.toInt()
    print("Enter number rate ")
    val rate = readLine()!!.toInt()
    print("Enter time ")
    val time = readLine()!!.toInt()

    val result = (principal * rate * time) / 100

    println("Simple interest is : $result")
}

//Task 6
/**
 * 6. Write a program which accepts a character and display its ASCII value.
 */
fun ascii() {
    val scanner = Scanner(System.`in`)
    print("Enter character: ")
    val character = scanner.next()[0]
    val ascii = character.code

    println("The ASCII value of $character is: $ascii")
}

//Task 7
/**
 * 7. Write a program to swap the values of two variables.
 */
fun swap() {
    print("Enter first number: ")
    var a = readLine()!!.toInt()

    print("Enter first number: ")
    var b = readLine()!!.toInt()

    println("Before number: \na = $a;\nb = $b")

    val c = b
    b = a
    a = c

    println("After number: \na = $a;\nb = $b")
}

//Task 8
/**
 * 8. Write a program to calculate area of circle.
 */
fun area() {
    val pi = 3.14
    val radius = readLine()!!.toInt()
    val area = pi * radius * radius

    println("Area of circle: $area")
}

//Task 9
/**
 * 9. Write a program to check whether the given number is positive or negative (using ? : ternary operator )
 */
fun positiveNegative() {
    val num = readLine()!!.toInt()
    val res = if (num >= 0) "Positive" else "Negative"

    println(res)
}

//Task 10
/**
 * 10. Write a program to check whether the given number is even or odd (using ? : ternary operator )
 */
fun evenOdd() {
    val number = readLine()!!.toInt()
    val result = if (number % 2 == 0) "Number is even" else "Number is odd"

    println(result)
}

