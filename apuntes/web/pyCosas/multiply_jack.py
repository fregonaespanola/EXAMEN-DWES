# *************************
# LA MULTIPLICACIÓN DE JACK
# *************************


def run(n: int) -> int:
    # TU CÓDIGO AQUÍ
    n_string = str(abs(n))
    result = n * 5**(len(n_string))

    return result


if __name__ == '__main__':
    run(3)