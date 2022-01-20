/**
 * 1. Write a program to print following
i)
 **********
 **********
 **********
 **********
 */
fun printFollowingKv() {
    for (i in 1..5) {
        for (j in 1..5) {
            print(" * ")
        }
        println()
    }
}

/**
 * ii)
 *
 **
 ***
 ****
 *****
 */
fun printFollowingTriangleLift() {
    for (i in 1..5) {
        for (j in 1..i) {
            print(" * ")
        }
        println()
    }
}

/**
 * iii)
     *
    **
   ***
  ****
 *****
 */
fun printFollowingTriangleRight() {
    for (i in 5 downTo 1) {
        for (k in i downTo 1) {
            print(" ")
        }
        for (j in i..5) {
            print("*")
        }
        println()
    }
}

/**
 * iv)
     *
    ***
   *****
  *******
 *********
 */
fun printChristmasCenter() {
    for (i in 5 downTo 1) {
        for (k in i downTo 1) {
            print(" ")
        }
        for (j in i*2 .. 10) {
            print("*")
        }
        println()
    }
}

/**
 * v)
    1
   222
  33333
 4444444
555555555
 */
fun printChristmasCenterNumber() {
    for (i in 1..5) {
        for (k in 5 downTo i){
            print(" ")
        }
        for (j in 1..(2*i-1)){
            print(i)
        }
        println()
    }
}

/**
 * vi)
    1
   212
  32123
 4321234
543212345
 */
fun printChristmasCenterTrue() {
    for (i in 1..5) {
        for (k in 5 downTo i){
            print(" ")
        }
        for (h in i downTo 2) {
            print(h)
        }
        for (j in 1..i) {
            print(j)
        }
        println()
    }
}

/**
 * KARA JADVAL
 */
fun multiplicationTable(size: Int) {
    for (number in 1..size) {
        print(" | ")
        for (otherNumber in 1..size) {
            print("$number x $otherNumber = ${number * otherNumber} | ")
        }
        println()
    }
}