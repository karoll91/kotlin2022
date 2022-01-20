import java.util.*

val scan = Scanner(System.`in`)
//                val row1 = arrayOf(1,2,3,4,5)
//                val row2 = arrayOf(6,7,8,9,10)
//                val row3 = arrayOf(6,7,8,9,10)
//
//                var table = arrayOf<Array<Int>>(row1, row2,row3)
//
//                for(rowCount in 0 until table.size){ // nested
//                    println()
//                    for(columnCount in 0 until table[rowCount].size){
//                        print(table[rowCount][columnCount])
//                    }
//                }


/**
 * 1. Write a C++ program to find the sum and average of one dimensional integer array.
 */
fun sumAndAvg(){
    val array = arrayOf(25, 30, 35, 40, 45, 50, 55)
    println(Arrays.toString(array))
    var sum = 0
    val avg = array.average()

    for (i in array)
        sum += i
    println("arrays sum $sum")
    println("arrays average $avg")
    // this second method
    println("maximum: ${array.maxOrNull()}")
    println("minimal: ${array.minOrNull()}")
    println("Summa: ${array.sum()}")
    println("Count: ${array.count()}")
    println("Average: ${array.average()}")
}

fun sumAndAvgTwo(){
    print("Enter number of elements in the array: ")
    val size = scan.nextInt()
    // Berilgan o'lchamdagi ikkita massivni yarating
    val doubArr = DoubleArray(size)
    //Masiv elementlarini kiritish
    println("Enter Arrays")
    for (i in doubArr.indices){
        print("double Array [$i] : ")
        doubArr[i] = scan.nextDouble()
    }
    //elementlar yig'indisi uchun o'zgaruvchini e'lon qilish
    var sum: Double = 0.toDouble()
    for (i in doubArr.indices){
        //massivlarni yig'indisini chiqarish
        sum += doubArr[i]
    }
    //o'rtachasini chiqarish
    var avg = sum/doubArr.size

    println("Array: ${doubArr.contentToString()} ")
    println("Array Sum: $sum")
    println("Array average: $avg")
}

/**
 * 2. Write a C++ program to swap first and last element of an integer 1-d array.
 */
fun swapFirstLastElement(){
    println("Enter 5 elements you want")
    val one = scan.nextInt()
    val two = scan.nextInt()
    val three = scan.nextInt()
    val four = scan.nextInt()
    val five = scan.nextInt()

    println("Now your first element and last element is swapped")
    val array = intArrayOf(one, two, three, four, five)

    println(
        "Your first element is ${array.last()} (but it was $one)\n" +
                "Your last element is ${array[0]} (but it was $five)"
    )
}
/**
 * 3. Write a C++ program to reverse the element of an integer 1-D array.
 */
fun reverseElement(){
    val arr = arrayOf(1,2,3,4,6,5,7,8,9)

    println("Before: ${arr.contentToString()}")
    arr.reverse()
    println("After: ${arr.contentToString()}")
}
/**
 * 4. Write a C++ program to find the largest and smallest element of an array.
 */
fun arrayMaxMin(){
    var min = 0
    var max = 0

    val arr = IntArray(5)
    println("Enter five number: ")

    for (i in 0 until arr.size){
        print("Array [$i] : ")
        arr[i] =scan.nextInt()
    }

    min = arr[0]
    max = arr[0]

    for (n in arr){
        if (min>n){
            min=n
        }
        if (max<n){
            max=n
        }
    }
    println("Array: ${arr.contentToString()} ")
    println("Number minumum: $min")
    println("Number maximum: $max")
}