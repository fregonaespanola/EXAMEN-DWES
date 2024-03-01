# *****************
# COMBINANDO TECLAS
# *****************


def run(key1: str, key2: str, key3: str) -> str:
    # TU CÓDIGO AQUÍ
    match key3:
        case 'T':
            if key1 == 'CTRL' and key2 == 'ALT':
                action = 'Open terminal'
        case 'L':
            if key1 == 'CTRL' and key2 == 'ALT':
                action = 'Lock screen'
        case 'D':
            if key1 == 'CTRL' and key2 == 'ALT':
                action = 'Show desktop'
        case '':
            if key1 == 'ALT' and key2 == 'F2':
                action= 'Run console'
            elif key1 == 'CTRL' and key2 == 'Q':
                action= 'Close window'
        case 'DEL':
            if key1 == 'CTRL' and key2 == 'ALT':
                action = 'Log out'

    return action


if __name__ == '__main__':
    run('CTRL', 'ALT', 'T')