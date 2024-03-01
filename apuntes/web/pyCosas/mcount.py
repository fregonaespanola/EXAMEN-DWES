# *******************
# CONTANDO SIN CONTAR
# *******************


def mcount(tupla:tuple, numero:int):
    cnt=0
    for i in range(0,len(tupla)):
        if(numero == tupla[i]):
            cnt+=1
    return cnt


