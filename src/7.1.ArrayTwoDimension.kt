import java.util.*

/**
 *1. Write a menu driven C++ program to do following operation on two dimensional array A of size m x n. You should use user-defined functions which accept 2-D array A, and its size m and n as arguments. The options are:

To input elements into matrix of size m x n
To display elements of matrix of size m x n
Sum of all elements of matrix of size m x n
To display row-wise sum of matrix of size m x n
To display column-wise sum of matrix of size m x n
To create transpose of matrix B of size n x m
 */
fun menuDrivenTwoDimension() {
    var matrixUser: Array<IntArray>? = null

    do {
        println(
            "\nMenu" +
                    "\n1. To input elements into matrix of size m x n" +
                    "\n2. To display elements of matrix of size m x n" +
                    "\n3. Sum of all elements of matrix of size m x n" +
                    "\n4. To display row-wise sum of matrix of size m x n" +
                    "\n5. To display column-wise sum of matrix of size m x n" +
                    "\n6. To create transpose of matrix B of size n x m" +
                    "\n7. Exit"
        )
        println("Enter your choice: ")
        val userChoice = readLine()!!.toInt()

        when (userChoice) {
            1 -> {
                matrixUser = inputElement()
            }
            2 -> {

            }
            3 -> {

            }
            4 -> {

            }
            5 -> {

            }
            6 -> {

            }
        }

    } while (userChoice != 7)
}

fun inputElement(): Array<IntArray> {
    println("Enter the number of row element: ")
    val row = readLine()!!.toInt()

    println("Enter the number of row element: ")
    val col = readLine()!!.toInt()

    val result = Array(row) { IntArray(col) }

    println("rowspan: $row, colspan: $col")

    return result
}

fun displayElement() {

    inputElement()

    println("Table arrays automatic")
    for (row in 0 until inputElement().size) {
        val colArray = IntArray(row)
        for (cols in 0 until colArray.size) {
            val inputNumber = (0..100).random()
            colArray[cols] = inputNumber
        }
        inputElement()[row] = colArray
    }
    for (rowNumbers in inputElement()) {
        for (columnNumbers in rowNumbers) {
            print(columnNumbers)
            print(" ")
        }
        println()
    }
}

/**
 * 2. Write user defined functions for square matrix to calculate
Left diagonal sum
Right diagonal sum
 */
fun squareMatrix() {
    val row1 = arrayOf(10, 11, 12)
    val row2 = arrayOf(5, 11, 15)
    val row3 = arrayOf(1, 11, 13)
    val userTwoArray = arrayOf(row1, row2, row3)

    var leftDiagonal = 0
    var rightDiagonal = 0

    for (rowIndex in 0 until userTwoArray.size) {
        leftDiagonal += userTwoArray[rowIndex][rowIndex]
        rightDiagonal += userTwoArray[rowIndex][userTwoArray.size - 1 - rowIndex]
    }
    println("sum of left diagonal is $leftDiagonal")
    println("sum of right diagonal is $rightDiagonal")
}

/**
 * 3. Write a user-defined function in C++ to display the multiplication of row element of two-dimensional array A[4][6] containing integer.
 */
fun multiplicationRowElement() {
    println("Enter the number of row element: ")
    val row = readLine()!!.toInt()

    println("Enter the number of col element: ")
    val col = readLine()!!.toInt()
    val twoDimension = Array(row) { IntArray(col) }
    println("Table arrays automatic")
    for (row in 0 until twoDimension.size) {
        val colArray = IntArray(col)
        for (cols in 0 until colArray.size) {
            val inputNumber = (0..100).random()
            colArray[cols] = inputNumber
        }
        twoDimension[row] = colArray
    }
    for (rowNumbers in twoDimension) {
        for (columnNumbers in rowNumbers) {
            print(columnNumbers)
            print(" ")
        }
        println()
    }
    println("The multiplication of rows and cols is: ")
    val result = row * col
    println(result)
}

/**
 * 4. Write a user defined function named Upper-half() which takes a two dimensional array A, with size N rows and N columns as argument and prints the upper half of the array.
e.g.,
2 3 1 5 0                              2 3 1 5 0
7 1 5 3 1                                1 5 3 1
2 5 7 8 1            Output will be:       1 7 8
0 1 5 0 1                                    0 1
3 4 9 1 5                                      5
 */
fun upperHalf() {
    println("Enter the number of rowspan element: ")
    val row = readLine()!!.toInt()

    println("Enter the number of colspan element: ")
    val col = readLine()!!.toInt()
    val result = Array(row) { IntArray(col) }


    for (rows in result.indices) {
        for (cols in result[rows].indices) {
            result[rows][cols] = (0..100).random()
        }
    }
    println("Before")
    for (i in result.indices) {
        println("${result[i].contentToString()} ")
    }

    for (outputR in result.indices) {
        for (outputC in result[outputR].indices) {
            if (outputR <= outputC)
                print("" + result[outputR][outputC] + "")
            else
                print("  ")
        }
        println()
    }



    println("After")

}

/**
 *5. Write a function in C++ which accepts a 2D array of integers and its size as arguments and displays the elements of middle row and the elements of middle column.
[Assuming the 2D Array to be a square matrix with odd dimension i.e. 3x3, 5x5, 7x7 etc...]
Example, if the array contents is
3  5  4
7  6  9
2  1  8
Output through the function should be :
Middle Row : 7 6 9
Middle column : 5 6 1
 */
fun displaysElementRowCol() {
    print("Enter number of matrix: ")
    val element = readLine()!!.toInt()
    println("Matrix ${element} x $element")

    val row = element
    val col = element

    val result = Array(row) { IntArray(col) }

    //random matrix
    for (inputRows in result.indices) {
        for (inputCols in result[inputRows].indices) {
            result [inputRows][inputCols] = (0..100).random()
        }
    }
    //Extract the matrix
    for (rows in result) {
        for (cols in rows) {
            print(cols)
            print(" ")
        }
        println()
    }
    var middleRow = 0
    println("Average number of rows:")
    for (rowM in 0 until result.size){
        val last = result[rowM].size-1
        for (colM in last downTo 0){
            if (result[rowM].size / 2 == colM) {
                middleRow += result[rowM][colM]
                print("${result[rowM][colM]} ")
            }
        }
    }
    println()
    var middleCol = 0
    println("Average number of columns:")
    for (rowM in 0 until result.size){
        val last = result[rowM].size - 1
        for (colM in last downTo 0){
            if (result[rowM].size / 2 == colM) {
                middleCol += result[colM][rowM]
                print("${result[colM][rowM]} ")
            }
        }
    }

}

/**
 * 6. Write a program to add two array A and B of size m x n.
 */
fun addTwoArray() {
    val rowspan = 2
    val colspan = 3
    val firtsMatrix = arrayOf(intArrayOf(2, 3, 4), intArrayOf(4, 5, 6))
    val secondMatrix = arrayOf(intArrayOf(7, 8, 9), intArrayOf(1, 4, 7))

    // add
    val sum = Array(rowspan) { IntArray(colspan) }
    for (index in 0..rowspan - 1) {
        for (cols in 0..colspan - 1) {
            sum[index][cols] = firtsMatrix[index][cols] + secondMatrix[index][cols]
        }
    }
    //result display
    println("Sum of two matrices is: ")
    for (row in sum) {
        for (col in row) {
            print("$col ")
        }
        println("")
    }
}
/**
 * 7. Write a program to multiply array A and B of order NxL and LxM
 */