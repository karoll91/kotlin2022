//Flow of control [sit-1]
//task-1
/**
 * 1. Any integer is input by the user. Write a program to find out whether it is an odd number or even number. solution
 */
fun oddEven(){
    val number = readLine()!!.toInt()

    if (number%2 == 0){
        println("The number is even $number")
    }else{
        println("The number is odd $number")
    }
}
//task-2
/**
 * 2. Find the absolute value of a number entered by the user.
 */
fun absolute(){
    val absolute = readLine()!!.toInt()

    if (absolute > 0){
        println("The absolute number: $absolute")
    }else{
        println("The absolute number: $absolute")
    }
}

/**
 * 3. Write a program to calculate the total expenses. Quantity and price per item are input by the user and discount of 10% is offered if the expense is more than 5000.
 * example not processed
 */

/**
 * 4. Write a program to determine whether the seller has made profit or incurred loss. Also determine how much profit he made or loss he incurred. Cost price and selling price of an item is input by the user.
 */
fun incurredLoss(){
    print("Enter cost price of item: ")
    val cost = readLine()!!.toInt()
    print("Enter selling price of items: ")
    val selling = readLine()!!.toInt()

    val result = cost-selling

    if (result>0){
        println("Profit: $result")
    }else if (result<0){
        println("Lost: $result")
    }else{
        println("No profit no lost")
    }
}
//Task-5
/**
 * 5. If the ages of Ram, Sulabh and Ajay are input by the user, write a program to determine the youngest of the three.
 */
fun youngest(){
    print("Enter Azamat age: ")
    val azik = readLine()!!.toInt()
    print("Enter Shohruh age: ")
    val shoh = readLine()!!.toInt()
    print("Enter Nodirbek age: ")
    val nunu = readLine()!!.toInt()

    if (azik<shoh && azik<nunu){
        println("Azamat is youngest $azik")
    }else if (shoh<azik && shoh < nunu){
        println("Shohruh is youngest $shoh")
    }else{
        println("Nodirbek is youngest $nunu")
    }
}
//Task-6
/**
 * 6. Write a program to check whether a triangle is valid or not, when the three angles of the triangle are entered by the user. A triangle is valid if the sum of all the three angles is equal to 180 degrees.
 */
fun printNumber(){
    for (i in 1..10){
        println(i)
    }
}
fun naturalNum(){
    val number = 10
    var i = 1
    var sum = 0

    while (i <= number){
        sum += i
        i++
    }
    println("sum = $sum")
}
/**
 * 7. Any year is input by the user. Write a program to determine whether the year is a leap year or not.
 * example not processed
 */

/**
 * 8. In a company an employee is paid as under:
If his basic salary is less than Rs. 1500, then HRA = 10% of basic salary and DA = 90% of basic salary.
If his salary is either equal to or above Rs. 1500, then HRA = Rs. 500 and DA = 98% of basic salary.
If the employee's salary is input by the user write a program to find his gross salary. solution
 */

/**
 * 9. Write a program to calculate the monthly telephone bills as per the following rule:
Minimum Rs. 200 for upto 100 calls.
Plus Rs. 0.60 per call for next 50 calls.
Plus Rs. 0.50 per call for next 50 calls.
Plus Rs. 0.40 per call for any call beyond 200 calls. solution
 */

/**
 * 10. Write a program to find the roots of and quadratic equation of type ax2+bx+c where a is not equal to zero. solution
 */

/**
 * 11. The marks obtained by a student in 5 different subjects are input by the user. The student gets a division as per the following rules:
Percentage above or equal to 60 - First division
Percentage between 50 and 59 - Second division
Percentage between 40 and 49 - Third division
Percentage less than 40 - Fail
Write a program to calculate the division obtained by the student.
 */

/**
 * 12. Any character is entered by the user; write a program to determine whether the character entered is a capital letter, a small case letter, a digit or a special symbol. The following table shows the range of ASCII values for various characters.

Characters	ASCII Values
A – Z	65 – 90
a – z	97 – 122
0 – 9	48 – 57
special symbols	0 - 47, 58 - 64, 91 - 96, 123 – 127

 */