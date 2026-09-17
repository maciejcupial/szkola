# Task 3 of three: write a function that answers one yes/no question.
# The student fills in is_prime(); the test loop at the bottom stays as it is
# and prints every prime number below 20 once the function works.


# def creates the function, number is the value it receives when it is called.
# A prime number can be divided evenly only by 1 and by itself, so checking the
# divisors from 2 up to number - 1 is enough: if any of them divides without a
# remainder (number % divisor == 0), the number is not prime.
def is_prime(number):
    # return hands a value back to the caller and stops the function right there,
    # so a return inside the loop can end the check as soon as the answer is known.
    # TU ZMIEŃ: zwróć True, gdy liczba jest pierwsza, w przeciwnym razie False
    return False


# Test loop: it calls is_prime() for every number from 2 to 19.
# end=" " tells print() to put a space after the value instead of moving to a new line.
for candidate in range(2, 20):
    if is_prime(candidate):
        print(candidate, end=" ")

# An empty print() ends the line, so the next terminal prompt starts underneath the result.
print()
