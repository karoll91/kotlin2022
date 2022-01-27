/**
 * 2. Write user defined functions for square matrix to calculate
Left diagonal sum
Right diagonal sum
 */
fun squareMatrix(){
    val row1 = arrayOf(10, 11, 12)
    val row2 = arrayOf(5, 11, 15)
    val row3 = arrayOf(1, 11, 13)
    val userTwoArray = arrayOf(row1, row2, row3)

    var leftDiagonal = 0
    var rightDiagonal = 0

    for (rowIndex in 0 until userTwoArray.size){
        leftDiagonal += userTwoArray[rowIndex][rowIndex]
        rightDiagonal += userTwoArray[rowIndex][userTwoArray.size-1-rowIndex]
    }
    println("sum of left diagonal is $leftDiagonal")
    println("sum of right diagonal is $rightDiagonal")
}
