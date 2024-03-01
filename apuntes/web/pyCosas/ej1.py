#!/bin/python

cadena = input("Dime una cadena: ")

print("Tu cadena normal: " + cadena)

cadena_inv = ""

for i in range(len(cadena) - 1, -1, -1):
    cadena_inv += cadena[i]

print("Tu cadena inversa: " + cadena_inv)
