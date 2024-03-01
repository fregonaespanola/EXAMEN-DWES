# ****************
# TODO SON CARITAS
# ****************


def run(emoji_text: str) -> str:
    # TU CÓDIGO AQUÍ
    emoji_text = emoji_text.lower()
    match emoji_text:
        case 'happy':
            emoji='😀'
        case 'sad':
            emoji ='😔'
        case 'angry':
            emoji='😡'
        case 'pensive':
            emoji ='🤔' 
        case 'surprised':
            emoji ='😮'  

    return emoji


if __name__ == '__main__':
    run('happy')