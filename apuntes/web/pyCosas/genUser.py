def genUsuario(n):

    def dice(m):
        return print(n+" dice: "+m)

    return dice

usrDani = genUsuario("Dani")

usrDani("Hola!")

