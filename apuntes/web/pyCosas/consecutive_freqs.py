# ************************************
# FRECUENCIA DE ELEMENTOS CONSECUTIVOS
# ************************************

def cfreq(lista, booleano=False):
    freq = []
    cnt = 1
    for i in range(1, len(lista)):
        if lista[i] == lista[i - 1]:
            cnt += 1
        else:
            freq.append((lista[i - 1], cnt))
            cnt = 1
            
    if(lista != []):
        freq.append((lista[-1], cnt))

    if booleano:
        return ','.join(f'{elemento}:{frecuencia}' for elemento, frecuencia in freq)
    else:
        return freq




#print(cfreq([1, 2, 2, 2, 4, 4, 4, 5, 5, 5, 5],False))
#print(cfreq([2, 2, 1, 1, 2, 2, 1, 1],True))
#print(cfreq([],True))