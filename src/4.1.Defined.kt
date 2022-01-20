import java.math.*
import kotlin.math.*
// task one (1)
// add
/**
 * 1. Write a program using function which accept two integers as an argument and return its sum. Call this function from main( ) and print the results in main( ).
 */
fun addSum(){
        val a = readLine()!!.toInt()
        val b = readLine()!!.toInt()

        println("Natija: " + first(a,b))
}
fun first (n1:Int, n2:Int):Int{
        val c = n1 + n2
        return c
}
// task sekond (2)
// task factorial if else
/**
 * 2. Write a function to calculate the factorial value of any integer as an argument. Call this function from main( ) and print the results in main( ).
 */
fun factorialIf(){
        val number = readLine()!!.toInt()
        val result = facex1(number)

        println("$number! - $result")
}
fun facex1 (n: Int): Int {
    if (n==0 || n==1){
        return 1
    }else{
        return n * facex1(n-1)
    }
}
// task factorial if else 2
fun factorialIfElse(){
        val number = readLine()!!.toInt()
        val result = facex1if(number)

        println("$number! - $result")
}
fun facex1if (n: Int): Long {
    if (n>=1)
        return n * facex1if(n-1)
    else
        return 1
}
// task factorial for
fun factorialFor(){
        val number = readLine()!!.toInt()
        val result = facex1for(number)

        println("$number! - $result")
}
fun facex1for (n: Int): Int {
    var result = 1
    for (i in 1..n){
        result *= i
    }
    return result
}
// Task factorial while
fun factorialWhile(){
    val number = readLine()!!.toInt()
    val result = facex1while(number)

    println("$number! - $result")
}
fun facex1while (n: Int): Int{
    var home = 1
    var i: Int = n
    while (i>=1){
        home*=i
        i--
    }
    return home
}
// Task factorial when
fun factorialWhen(){
    val number = readLine()!!.toInt()
    val result = facex1when(number)

    println("$number! - $result")
}
fun facex1when (n: Int): Int{
    when (n){
        0 -> return 1
        else -> return n * facex1when(n-1)
    }
}
// task third (3)
// numbers between (Tub son)
/**
 * 3. Write a function that receives two numbers as an argument and display all prime numbers between these two numbers. Call this function from main( ).
 */
fun primeNumbers(){
        println("Enter number: ")
        var first = readLine()!!.toInt()
        println("Enter number: ")
        val second = readLine()!!.toInt()

        while (first < second){
            if (ex2(first))
                println("Between: " + first.toString())
            ++first
        }
}
fun ex2 (n: Int): Boolean{
    var num = true

    for (i in 2..n/2){
        if (n % i == 0) {
            num = false
            break
        }
    }
    return num
}
// task fourth (4)
// pow (Daraja)
/**
 * 4. Raising a number to a power p is the same as multiplying n by itself p times. Write a function called power that takes two arguments, a double value for n and an int value for p, and return the result as double value. Use default argument of 2 for p, so that if this argument is omitted the number will be squared. Write the main function that gets value from the user to test power function.
 */
fun powNumber(){
        println("Son kiriting: ")
        var first = readLine()!!.toLong()
        println("darajasini kiriting: ")
        var second = readLine()!!.toInt()

        println(pow1(first,second))
}
fun pow1 (n: Long, exp: Int): Long{
    return when {
        exp > 1 -> n * pow1(n,exp-1)
        exp == 1 -> n
        else -> 1
    }
}
// pow_2 (Daraja)
fun powNumber2(){
    println("Son kiriting: ")
    val first = readLine()!!.toDouble()
    println("darajasini kiriting: ")
    val second = readLine()!!.toDouble()

    println(pow2(first,second))
}
fun pow2(num: Double, exp: Double): Double{
    return num.pow(exp)
}
// task fifth (5)
/**
 * 5. Write a function called zero_small() that has two integer arguments being passed by reference and sets the smaller of the two numbers to 0. Write the main program to access the function.
 */
