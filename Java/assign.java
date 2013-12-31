/**
 * The result of a is -24,
 * in Java they are copy 
 * rather than reference.
 * The code can be spilt into:
 * 1. a1 -= a * a; // a1 = -30,
 * 2. a += -a1; // where a = 6,
 * so the result is -24.
 * different with C/C++,
 * in C/C++ the result will be -60.
 */
int a = 6;
a += a -= a * a;

