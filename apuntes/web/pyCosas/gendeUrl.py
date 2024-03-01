def genUrl(dominio:str, protocolo:bool = False):

    def url(entidad:str, ap:str, id:int=None):
        match(protocolo, ap):
            case(True, "listado"):
                return print(f'https://{dominio}/{entidad}/{ap}/')
            case(True, "get"):
                return print(f'https://{dominio}/{entidad}/{ap}/{str(id)}')
            case(False, "listado"):
                return print(f'http://{dominio}/{entidad}/{ap}/')
            case(False, "get"):
                return print(f'http://{dominio}/{entidad}/{ap}/{str(id)}')

    return url

x = genUrl("miweb.com", True)

x("tareas", "get", 15)

y = genUrl("miweb.com")

y("tareas", "listado", 15)
