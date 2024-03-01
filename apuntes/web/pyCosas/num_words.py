# ********************************
# OBTENIENDO EL NÚMERO DE PALABRAS
# ********************************


def run(text: str) -> int:
    # TU CÓDIGO AQUÍ
    num_words = 'output'
    oracion = text.split()

    num_words = len(oracion)
    return num_words


if __name__ == '__main__':
    run('Before software can be reusable it first has to be usable')