# *********************
# ENCONTRANDO ISOGRAMAS
# *********************


def run(text: str) -> bool:
    # TU CÓDIGO AQUÍ
    is_isogram = True
    lista = list(text)

    for i in lista:
        letra = lista.pop(0)
        for x in lista:
            if (letra == x) and (letra != '-'):
                is_isogram=False
                break
        if (is_isogram==False):
            break
    
    return is_isogram


if __name__ == '__main__':
    run('lumberjacks')