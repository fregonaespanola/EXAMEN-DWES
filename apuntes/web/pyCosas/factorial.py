# ************************************
# CALCULANDO EL FACTORIAL DE UN NÚMERO
# ************************************


def factorial(num):
    # TU CÓDIGO AQUÍ
    if(num == 0):
        return 1
    elif(num < 0):
        return None
    else:
        result = num
        for i in range(1, num):
            result *= num - i
        return result
