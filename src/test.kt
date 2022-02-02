fun test(a: Array<DoubleArray>, b: Array<DoubleArray>): Array<DoubleArray> {
    val m1 = a.size
    val n1 = a[0].size
    val m2 = b.size
    val n2 = b[0].size

    if (n1 != m2) throw RuntimeException("Elegan matrix")
    val c = Array(m1) { DoubleArray(n2) }
    for (i in 0 until m1)
        for (j in 0 until n2)
            for (k in 0 until n1)
                c[i][j] += a[i][k] * b[k][j]
    return c
}