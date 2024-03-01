class Vehiculo:
    def __init__(self, matricula:str, ruedas:int):
        self.matricula = matricula
        self.ruedas = ruedas

    def get_matricula(self):
        return self.matricula

    def set_matricula(self, value):
        self.matricula = value

    def get_ruedas(self):
        return self.ruedas

    def set_ruedas(self, value):
        self.ruedas = value

    def tocar_bocina(self):
        pass


class Moto(Vehiculo):
    def __init__(self, matricula:str, ruedas:int, tipo:str):
        super().__init__(matricula, ruedas)
        if tipo=="Scooter" or tipo=="Naked" or tipo=="Custom":
            self.tipo = tipo
        else:
            self.tipo = "Custom"

    def get_tipo(self):
        return self.tipo

    def set_tipo(self, value):
        self.tipo = value

    def tocar_bocina(self):
        print("meeehh")


class Coche(Vehiculo):
    def __init__(self, matricula:str, ruedas:int, puertas:int):
        super().__init__(matricula, ruedas)
        self.puertas = puertas

    def get_puertas(self):
        return self.puertas

    def set_puertas(self, value):
        self.puertas = value

    def tocar_bocina(self):
        print("pipiii")


class Grua(Vehiculo):
    def __init__(self, matricula:str, ruedas:int, lista_vehiculos:list):
        super().__init__(matricula, ruedas)
        self.lista_vehiculos = lista_vehiculos

    def get_lista_vehiculos(self):
        return [type(vehiculo).__name__ for vehiculo in self.lista_vehiculos]

    def set_lista_vehiculos(self, value):
        self.lista_vehiculos = value

    def tocar_bocina(self):
        print("moook")


class Camion(Vehiculo):
    def __init__(self, matricula:str, ruedas:int, carga:float):
        super().__init__(matricula, ruedas)
        self.carga = carga

    def get_carga(self):
        return self.carga

    def set_carga(self, value):
        self.carga = value
    
    def tocar_bocina(self):
        print("turuu")

mi_moto = Moto("5555FFF", 2, "bruh")
mi_coche = Coche("4444GGG", 4, 4)
mi_grua = Grua("6666QQQ", 6, [mi_moto, mi_coche])
mi_camion = Camion("9999DDD", 8, 4.75)

print(mi_moto.get_matricula(), mi_moto.get_ruedas(), mi_moto.get_tipo())
mi_moto.tocar_bocina()
print('\n')
print(mi_coche.get_matricula(), mi_coche.get_ruedas(), mi_coche.get_puertas())
mi_coche.tocar_bocina()
print('\n')
print(mi_grua.get_matricula(), mi_grua.get_ruedas(), mi_grua.get_lista_vehiculos())
mi_grua.tocar_bocina()
print('\n')
print(mi_camion.get_matricula(), mi_camion.get_ruedas(), mi_camion.get_carga())
mi_camion.tocar_bocina()
