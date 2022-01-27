import java.util.*

fun marge(arrayA:Int, arrayB:Int){
    var scanner = Scanner(System.`in`)
println("Enter  size of Array:")
val sizeOfArray = scanner.nextInt()
val userArray = IntArray(sizeOfArray)

println("Enter numbers in ascending order")
for (index in 0 until userArray.size) {
    val inputNumbers = scanner.nextInt()
    userArray[index] = inputNumbers
}

println("Enter second size of array:")
val sizeOfSecondArray = scanner.nextInt()
val userSecondArray = IntArray(sizeOfSecondArray)

println("Enter numbers descending order")
for (indexTwo in 0 until userSecondArray.size) {
    val inputSecondNumbers = scanner.nextInt()
    userSecondArray[indexTwo] = inputSecondNumbers
}
println("Merged array in ascending order is:")
val mergingArray = userArray.plus(userSecondArray)

for (index in 1 until mergingArray.size) {
    if (mergingArray[index] < mergingArray[index - 1]) {
        var comingIndex = index
        for (innerIndex in index downTo 0) {
            if (mergingArray[comingIndex] < mergingArray[innerIndex]) {
                val temp = mergingArray[comingIndex]
                mergingArray[comingIndex] = mergingArray[innerIndex]
                mergingArray[innerIndex] = temp
                comingIndex = innerIndex
            }
        }
    }
}

println("Sorted numbers are:")
for (index in 0 until mergingArray.size) {
    print("${mergingArray[index]}\t")
}
}
