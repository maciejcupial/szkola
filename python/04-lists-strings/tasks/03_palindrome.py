# Task 3 of 3: reverse a word and check whether it is a palindrome.
# Expected (kajak):
# Odwrócone słowo to kajak
# To jest palindrom.
# Expected (Python):
# Odwrócone słowo to nohtyP
# To nie jest palindrom.

word = input("Podaj słowo: ")

reversed_word = ""

# Trick: reversed_word = letter + reversed_word puts each letter in front

# TU ZMIEŃ: pętla for po literach słowa, która buduje reversed_word od tyłu

print("Odwrócone słowo to", reversed_word)

if word.lower() == reversed_word.lower():
    print("To jest palindrom.")
else:
    print("To nie jest palindrom.")
