# *********************
# ENCUENTRA LA INTEGRAL
# *********************


def run(symbol: str) -> str:
    # TU CÓDIGO AQUÍ
    coma = symbol.find(",")
    num2 = symbol[coma+1:len(symbol)]
    num2 = int(num2) + 1
    num1 = int(symbol[0:coma])
    num1 = num1 // num2
    num1 = str(num1)
    num2 = str(num2)
    integral = num1+"x^"+num2

    return integral


if __name__ == '__main__':
    run('3,2')