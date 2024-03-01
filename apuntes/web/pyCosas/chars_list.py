# **********************
# DESPLEGANDO CARACTERES
# **********************


def run(texts: list) -> list:
    # TU CÓDIGO AQUÍ
    chars = list()

    for i in range (0,len(texts)):
        chars.extend(texts[i])
    return chars


if __name__ == '__main__':
    run(['uno', 'dos', 'tres'])