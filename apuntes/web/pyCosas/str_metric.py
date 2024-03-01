# ********************************
# UNA MÉTRICA PARA CADENA DE TEXTO
# ********************************


def run(text: str) -> int:
    # TU CÓDIGO AQUÍ
    letras = len(text)
    vocales = sum(1 for c in text if c in 'aeiou')
    metric = letras * vocales

    return metric


if __name__ == '__main__':
    run('ordenador')
