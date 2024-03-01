# *************
# SUMA REPETIDA
# *************


def run(n: int) -> int:
    # TU CÓDIGO AQUÍ
    n = str(n)
    result = int(n)+int(n+n)+int(n+n+n)

    return result


if __name__ == '__main__':
    run(3)
