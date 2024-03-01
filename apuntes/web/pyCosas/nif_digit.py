# *************************
# DÍGITO DE CONTROL DEL NIF
# *************************


def run(nif: str) -> str:
    letras_nif = 'TRWAGMYFPDXBNJZSQVHLCKE'
    digito_control = letras_nif[int(nif) % 23]
    wnif = nif + digito_control

    return wnif

if __name__ == '__main__':
    resultado = run('78654355')
    print(resultado)
