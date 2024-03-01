# ********************
# REORGANIZANDO FECHAS
# ********************


def run(input_date: str, base_year: int) -> str:
    # TU CÓDIGO AQUÍ
    lista = input_date.split("/")

    return lista[1]+"-"+lista[0]+"-"+(int(lista[2])+base_year)

if __name__ == '__main__':
    run('12/31/23', 2000)