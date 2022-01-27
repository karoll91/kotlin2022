import java.util.*

/** Array - Single Dimension
 * set 1 task 5
 * Write a menu driven C++ program with following option
a. Accept elements of an array
b. Display elements of an array
c. Sort the array using insertion sort method
d. Sort the array using selection sort method
e. Sort the array using bubble sort method
Write C++ functions for all options.
The functions should have two parameters name of the array and number of
elements in the array.
 */
fun arrayOptions() {
    println("Size of array:")
    val scanner = Scanner(System.`in`)
    val sizeOfArray = scanner.nextInt()

    println("Size: $sizeOfArray")

    val userArray = IntArray(sizeOfArray)

    do {
        println(
            "\nMENU" +
                    "\n1. Accept elements of Array" +
                    "\n2. Display elements of  Array" +
                    "\n3. Sort the array using insertion sort method" +
                    "\n4. Sort the array using selection sort method" +
                    "\n5. Sort the array using bubble sort method" +
                    "\n6. Exit"
        )
        println("Enter your choice 1-6: ")
        val userMenuOption = scanner.nextInt()

        when (userMenuOption) {
            1 -> {
                inputElementsOfArray(userArray)
            }
            2 -> {
                showElementsOfArray(userArray)
            }
            3 -> {
                sortWithInsertionMethod(userArray)
            }
            4 -> {
            }
            5 -> {
            }
            6 -> {
            }
            else -> {
                println("Wrong Input, please select between 1 to 6!")
            }
        }
    } while (userMenuOption != 6)

}

fun sortWithInsertionMethod(userArray: IntArray) {
    println("Before Sorting:")
    showElementsOfArray(userArray)
    for(index in 1 until userArray.size){
        if(userArray[index] < userArray[index-1]){
            var comingIndex = index
            for(innerIndex in index downTo 0){
                if(userArray[comingIndex] < userArray[innerIndex]){
                    val temp = userArray[comingIndex]
                    userArray[comingIndex] = userArray[innerIndex]
                    userArray[innerIndex] = temp
                    comingIndex = innerIndex
                }
            }
        }
    }
    showElementsOfArray(userArray)
}

fun inputElementsOfArray(userArray: IntArray) {
    val scanner = Scanner(System.`in`)
    println("Enter elements:")
    for (index in 0 until userArray.size) {
        val inputOfEachElement = scanner.nextInt()
        userArray[index] = inputOfEachElement
    }
    showElementsOfArray(userArray)
}

fun showElementsOfArray(userArray: IntArray) {
    val scanner = Scanner(System.`in`)
    print("Elements of the array: ")
    for (index in 0 until userArray.size) {
        print("${userArray[index]}\t")
    }
    println()
}