# *******************************
# ADIVINANDO PERSONAJES DE MARVEL
# *******************************


def run(can_fly: bool, is_human: bool, has_mask: bool) -> str:
    # TU CÓDIGO AQUÍ

    char = ["Ironman", "Captain Marvel", "Ronan Accuser", "Vision", "Spiderman", "Hulk", "Black Bolt", "Thanos"]

    if can_fly:
        if is_human:
            if has_mask:
                character = char[0]
            else:
                character = char[1]
        else:
            if has_mask:
                character = char[2]
            else:
                character = char[3]
    else:
        if is_human:
            if has_mask:
                character = char[4]
            else:
                character = char[5]
        else:
            if has_mask:
                character = char[6]
            else:
                character = char[7]

    
    return character


if __name__ == '__main__':
    run(True, True, True)