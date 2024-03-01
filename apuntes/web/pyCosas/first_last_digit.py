# ****************************************
# ENCONTRANDO EL PRIMER Y EL ÚLTIMO DÍGITO
# ****************************************


def run(text: str) -> tuple:
    # TU CÓDIGO AQUÍ
    text_inv = text[::-1]
    for i in text:
        if i.isnumeric():
            first_digit = int(i)
            break

    for i in text_inv:
        if i.isnumeric():
            last_digit = int(i)
            break

    

    return first_digit, last_digit


if __name__ == '__main__':
    run('1abc2')