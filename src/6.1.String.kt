import java.util.*

/**
 * 1. Write a program to find the length of string.
 */
fun lengthOfString(){
    print("Enter text: ")
    val string = readLine()!!.toString()
    val length = string.length
    println("length of string number $length")
}
/**
 * 2. Write a program to display string from backward.
 */
fun stringFromBackward (){
    print("Type text: ")
    var str = readLine()!!.toString()

    var reverse = str.reversed()
    println("the result backword: $reverse")

// 2 metod
    print("Type text: ")
    var string = readLine()!!.toString()

    for (text in string.length - 1 downTo 0){
           print(string[text])
    }
}
/**
 * 3. Write a program to count number of words in string.
 */
fun numOfWords (){
    var count: Int = 0
    print("Type text: ")
    val text = readLine()!!.toString()
    val strArray = text.split(" ".toRegex()).toTypedArray()

    for (i in strArray){
        if (i !=""){
            count++
        }
    }
    println(text)
    println("Number of words in string: $count")
}
/**
 * 4. Write a program to concatenate one string contents to another.
 */
fun strContents(){
    print("Type text first: ")
    val textOne = readLine()!!.toString()
    print("Type text second: ")
    val textTwo = readLine()!!.toString()
    val result = textOne.plus(" ").plus(textTwo)
    println(result)
}
/**
 * 5. Write a program to compare two strings they are exact equal or not.
 */
fun compareTwoStr(){
    print("Type text first: ")
    val textOne = readLine()!!.toString()
    print("Type text second: ")
    val textTwo = readLine()!!.toString()

    if (textOne == textTwo){
        println("Strings are equal")
    }else{
        println("Strings are not equal")
    }
}
/**
 * 6. Write a program to check a string is palindrome or not.
 */
fun strPolindrome(){
    print("Enter text: ")
    val string = readLine()!!.toString()
    var reverseString: String = ""
    val length = string.length

    for (i in (length - 1) downTo 0 ){
        reverseString += string[i]
    }
    if (string.equals(reverseString, ignoreCase = true)){
        println("This string is Palindrome")
    } else{
        println("This string is not polindrome")
    }
}

/**
 * 7. Write a program to find a substring within a string. If found display its starting position. solution

* 8. Write a program to reverse a string. solution

* 9. Write a program to convert a string in lowercase. solution

* 10. Write a program to convert a string in uppercase. solution
 */