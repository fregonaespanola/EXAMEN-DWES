# **********************
# PIEDRA, PAPEL O TIJERA
# **********************


def run(choice1: str, choice2: str) -> int:
    # TU CÓDIGO AQUÍ
    choice1 = choice1.upper()
    choice2 = choice2.upper()
    
    if choice1 == choice2:
        winner=0
    else:
        match choice1:
            case 'PIEDRA':
                if choice2=='TIJERA':
                    winner=1
                else:
                    winner=2
            case 'TIJERA':
                if choice2=='PAPEL':
                    winner=1
                else:
                    winner=2
            case 'PAPEL':
                if choice2=='PIEDRA':
                    winner=1
                else:
                    winner=2
        
    return winner


if __name__ == '__main__':
    run('piedra', 'PAPEL')