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
fun sumAndAvg() {
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

fun sumAndAvgTwo() {
    print("Enter number of elements in the array: ")
    val size = scan.nextInt()
    // Berilgan o'lchamdagi ikkita massivni yarating
    val doubArr = DoubleArray(size)
    //Masiv elementlarini kiritish
    println("Enter Arrays")
    for (i in doubArr.indices) {
        print("double Array [$i] : ")
        doubArr[i] = scan.nextDouble()
    }
    //elementlar yig'indisi uchun o'zgaruvchini e'lon qilish
    var sum: Double = 0.toDouble()
    for (i in doubArr.indices) {
        //massivlarni yig'indisini chiqarish
        sum += doubArr[i]
    }
    //o'rtachasini chiqarish
    val avg = sum / doubArr.size

    println("Array: ${doubArr.contentToString()} ")
    println("Array Sum: $sum")
    println("Array average: $avg")
}

/**
 * 2. Write a C++ program to swap first and last element of an integer 1-d array.
 */
fun swapFirstLast() {
    print("Enter number of elements in the array: ")
    val size = readLine()!!.toInt()
    val intArr = IntArray(size)
    println("Enter arrays: ")

    for (index in intArr.indices) {
        print("Array: [$index] : ")
        intArr[index] = readLine()!!.toInt()
    }
    println("Before array: ${intArr.contentToString()}")

    println()
    println("After swapping first and last:")
    print("${intArr.last()}\t")
    for (index in 1 until intArr.size - 1) {
        print("${intArr[index]}\t")
    }
    print(intArr.first())
}

/**
 * 3. Write a C++ program to reverse the element of an integer 1-D array.
 */
fun reverseElement() {
    val arr = arrayOf(1, 2, 3, 4, 6, 5, 7, 8, 9)

    println("Before: ${arr.contentToString()}")
    arr.reverse()
    println("After: ${arr.contentToString()}")
}

/**
 * 4. Write a C++ program to find the largest and smallest element of an array.
 */
fun arrayMaxMin() {
    var min = 0
    var max = 0

    val arr = IntArray(5)
    println("Enter five number: ")

    for (i in 0 until arr.size) {
        print("Array [$i] : ")
        arr[i] = scan.nextInt()
    }

    min = arr[0]
    max = arr[0]

    for (n in arr) {
        if (min > n) {
            min = n
        }
        if (max < n) {
            max = n
        }
    }
    println("Array: ${arr.contentToString()} ")
    println("Number minumum: $min")
    println("Number maximum: $max")
}

/**
5. Write a menu driven C++ program with following option
a. Accept elements of an array
b. Display elements of an array
c. Sort the array using insertion sort method
d. Sort the array using selection sort method
e. Sort the array using bubble sort method
Write C++ functions for all options. The functions should have two parameters name of the array and number of elements in the array.
 */

fun menuDriven() {
    println("Size of Array: ")
    val sizeOfArray = readLine()!!.toInt()


    println("size: $sizeOfArray")
    val userArray = IntArray(sizeOfArray)
    do {
        println(
            "\nMenu" +
                    "\n1. Accept elements of Array" +
                    "\n2. Display elements of  Array" +
                    "\n3. Sort the array using insertion sort method" +
                    "\n4. Sort the array using selection sort method" +
                    "\n5. Sort the array using bubble sort method" +
                    "\n6. Exit"
        )
        println("Enter your choice 1-6: ")
        val userMenuOption = readLine()!!.toInt()

        when (userMenuOption) {
            1 -> {
                acceptElementsOfArray(userArray)
            }
            2 -> {
                displayElementOfArray(userArray)
            }
            3 -> {
                arrayUsingInsertionSortMethod(userArray)
            }
            4 -> {
                arrayUsingSelectionSortMethod(userArray)
            }
            5 -> {
                arrayUsingBubbleSortMethod5(userArray)
            }
        }
    } while (userMenuOption != 6)
}

fun acceptElementsOfArray(userArray: IntArray) {
    println("Enter elements: ")
    for (index in 0 until userArray.size) {
        val inputOfEachElement = readLine()!!.toInt()
        userArray[index] = inputOfEachElement
    }
}

fun displayElementOfArray(userArray: IntArray) {
    println("Elements of the array: ")
    for (index in 0 until userArray.size) {
        print("${userArray[index]}\t")
    }
    println()
}

fun arrayUsingInsertionSortMethod(userArray: IntArray) {
    println("Before sorting: ")
    displayElementOfArray(userArray)
    for (index in 1 until userArray.size) {
        if (userArray[index] < userArray[index - 1]) {
            var comingIndex = index
            for (innerIndex in index downTo 0) {
                if (userArray[comingIndex] < userArray[innerIndex]) {
                    val temp = userArray[comingIndex]
                    userArray[comingIndex] = userArray[innerIndex]
                    userArray[innerIndex] = temp
                    comingIndex = innerIndex
                }
            }
        }
    }
    displayElementOfArray(userArray)
}

fun arrayUsingSelectionSortMethod(userArray: IntArray) {
    println("Before sorting: ")
    displayElementOfArray(userArray)
    val num = userArray.size
    var temp: Int
    for (index in 0..num - 1) {
        var indexOfMin = index
        for (innerIndex in num - 1 downTo index) {
            if (userArray[innerIndex] < userArray[indexOfMin])
                indexOfMin = innerIndex
        }
        if (index != indexOfMin) {
            temp = userArray[index]
            userArray[index] = userArray[indexOfMin]
            userArray[indexOfMin] = temp
        }
    }
    displayElementOfArray(userArray)
}

fun arrayUsingBubbleSortMethod5(userArray: IntArray): IntArray {
    println("Before sorting: ")
    displayElementOfArray(userArray)
    var swap = true
    while (swap) {
        swap = false
        for (index in 0 until userArray.size - 1) {
            if (userArray[index] > userArray[index + 1]) {
                val temp = userArray[index]
                userArray[index] = userArray[index + 1]
                userArray[index + 1] = temp

                swap = true
            }
        }
    }
    return userArray
}

/**
 * 6. P is one-dimensional array of integers. Write a C++ function to efficiently search for a data VAL from P. If VAL is present in the array then the function should return value 1 and 0 otherwise.
 */
fun efficientlySearch() {
    println("Enter size of array: ")
    val sizeOfArray = readLine()!!.toInt()
    val userArray = IntArray(sizeOfArray)
    println("Enter arrays: ")

    for (index in 0 until userArray.size) {
        val inputArray = readLine()!!.toInt()
        userArray[index] = inputArray
    }
    println("Array: ${userArray.contentToString()}")
    val number = readLine()!!.toInt()
    val position = linearSearch(userArray, number)
    println("${number} is in the position ${position} in the ordered List.")
}

fun linearSearch(list: IntArray, key: Any): Int? {
    for ((index, value) in list.withIndex()) {
        if (value == key) {
            return index
        }
    }
    return null
}

/**
 * 7. Suppose a one-dimensional array AR containing integers is arranged in ascending order. Write a user-defined function in C++ to search for an integer from AR with the help of Binary search method, returning an integer 0 to show absence of the number and integer 1 to show presence of the number in the array. Function should have three parameters : (i) array AR (ii) the number to be searched and (iii) the number of elements N in the array.
 */
fun binarySearch() {
    var n = 0
    var mid: Int = 0
    var flag = -1
    var not = 0

    println("Enter the size of the array: ")
    n = readLine()!!.toInt()
    var arr = Array(n) { 0 }
    println("Enter the elements of the array: ")
    for (index in 0..n - 1) {
        arr[index] = readLine()!!.toInt()
    }
    println("Elements of an Array: ")
    for (index in 0..n - 1) {
        println(arr[index])
    }
    println("Enter the searching element: ")
    var key = readLine()!!.toInt()
    var low = 0
    var hiegh = n - 1
    while (low <= hiegh) {
        mid = (low + hiegh) / 2
        if (key == arr[mid]) {
            flag = mid
            break
        } else if (arr[mid] < key) {
            low = mid + 1
        } else {
            hiegh = mid - 1
        }
    }
    if (flag >= 0) {
        println("The searching element if found at position $flag")
    } else {
        println("Element is not found any position $not")
    }
}

/**
 * 8. Suppose A, B, C are arrays of integers of size M, N, and M + N respectively. The numbers in array A appear in ascending order while the numbers in array B appear in descending order. Write a user defined function in C++ to produce third array C by merging arrays A and B in ascending order. Use A, B and C as arguments in the function.
 */
fun arraysOfWholeNumbers() {
    println("Enter number of A elements in the array: ")
    val sizeA = readLine()!!.toInt()
    val intToArratA = IntArray(sizeA)
    println("Enter array: ")
    for (arrayA in intToArratA.indices) {
        print("arrays A [$arrayA] : ")
        intToArratA[arrayA] = readLine()!!.toInt()
    }
    arrayUsingInsertionSortMethod(intToArratA)

    println("Enter number of B elements in the array: ")
    val sizeB = readLine()!!.toInt()
    val intToArratB = IntArray(sizeB)
    println("Enter array: ")
    for (arrayB in intToArratB.indices) {
        print("arrays B [$arrayB] : ")
        intToArratB[arrayB] = readLine()!!.toInt()
    }
    arrayUsingInsertionSortMethodReverse(intToArratB)
    val arrayC = intToArratA.plus(intToArratB)
    arrayUsingInsertionSortMethod(arrayC)

}

fun arrayUsingInsertionSortMethodReverse(userArray: IntArray) {
    println("Before sorting: ")
    displayElementOfArray(userArray)
    for (index in 1 until userArray.size) {
        if (userArray[index] > userArray[index - 1]) {
            var comingIndex = index
            for (innerIndex in index downTo 0) {
                if (userArray[comingIndex] > userArray[innerIndex]) {
                    val temp = userArray[comingIndex]
                    userArray[comingIndex] = userArray[innerIndex]
                    userArray[innerIndex] = temp
                    comingIndex = innerIndex
                }
            }
        }
    }
    displayElementOfArray(userArray)
}

/**
 * 9. Suppose X. Y, Z are arrays of integers of size M, N, and M + N respectively. The numbers in array X and Y appear in descending order. Write a user-defined function in C++ to produce third array Z by merging arrays X and Y in descending order.
 */
fun arraysOfDescendingOrder() {
    println("Enter number of X elements in the array: ")
    val sizeX = readLine()!!.toInt()
    val intToArrX = IntArray(sizeX)
    println("Enter array X: ")
    for (arrayX in intToArrX.indices) {
        print("Array X [$arrayX]: ")
        intToArrX[arrayX] = readLine()!!.toInt()
    }
    arrayUsingInsertionSortMethodReverse(intToArrX)

    val intToArrY = IntArray(sizeX)
    println("Enter array Y: ")
    for (arrayY in intToArrY.indices) {
        print("Array Y [$arrayY]: ")
        intToArrY[arrayY] = readLine()!!.toInt()
    }
    arrayUsingInsertionSortMethodReverse(intToArrY)

    val arrayC = intToArrX.plus(intToArrY)
    arrayUsingInsertionSortMethodReverse(arrayC)
}

/**
 * 10. Given two arrays of integers A and B of sizes M and N respectively. Write a function named MIX () with four arguments, which will produce a third array named C. such that the following sequence is followed.
All even numbers of A from left to right are copied into C from left to right.
All odd numbers of A from left to right are copied into C from right to left.
All even numbers of B from left to right are copied into C from left to right.
All old numbers of B from left to right are copied into C from right to left.
A, B and C are passed as arguments to MIX (). e.g., A is {3, 2, 1, 7, 6, 3} and B is {9, 3, 5, 6, 2, 8, 10} the resultant array C is {2, 6, 6, 2, 8, 10, 5, 3, 9, 3, 7, 1, 3}
 */
fun sortingOfEvenAndOddNumbers() {
    println("Enter number of A elements in the array: ")
    val size = readLine()!!.toInt()
    val intToArrA = IntArray(size)

    println("Enter array: ")
    for (index in intToArrA.indices) {
        print("Array A [$index]: ")
        intToArrA[index] = readLine()!!.toInt()
    }
    val dic = intToArrA.groupBy {
        if (it % 2 == 0) "even" else "odd"
    }
    println(dic)
}