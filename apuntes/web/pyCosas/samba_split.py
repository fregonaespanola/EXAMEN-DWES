# ***********************
# SEPARANDO RECURSO SAMBA
# ***********************


def run(smb_path: str) -> tuple:
    # TU CÓDIGO AQUÍ
    array = smb_path.split('/',3)
    host = array[2]
    path ='/'+array[3]
    return host, path


if __name__ == '__main__':
    run('//1.1.1.1/aprende/python')
