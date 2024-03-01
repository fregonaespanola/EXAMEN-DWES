# ****************
# NOMBRE VICEVERSA
# ****************


def run(fullname: str) -> str:
    # TU CÓDIGO AQUÍ
    array = fullname.split(" ",1)
    swapname = array[1]+' '+array[0]

    return swapname


if __name__ == '__main__':
    run('John McClane')
