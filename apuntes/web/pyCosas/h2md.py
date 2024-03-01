# ****************************
# CONVIRTIENDO HTML A MARKDOWN
# ****************************


def run(html: str) -> str:
    # TU CÓDIGO AQUÍ
    palabra = html[4:(len(html)-5)]
    asteriscos = int(html[2])*'#'
    markdown = asteriscos +' '+ palabra

    return markdown


if __name__ == '__main__':
    run('<h1>Core</h1>')
