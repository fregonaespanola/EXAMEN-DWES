class MobilePhone:
    def __init__(self, manufacturer: str, screen_size: float, num_cores: int):
        self.manufacturer = manufacturer
        self.screen_size = screen_size
        self.num_cores = num_cores
        self.apps = list()
        self.status = False

    def power_on(self):
        self.status = True

    def power_off(self):
        self.status = False

    def install_app(self, app:str):
        existe = False
        for i in range(0,len(self.apps)):
            if self.apps[i]==app:
                existe = True
                break
        if existe == False:
            self.apps.append(app)

    def uninstall_app(self, app:str):
        existe = False
        pos = 0
        for i in range(0,len(self.apps)):
            if self.apps[i]==app:
                existe = True
                pos = i
                break
        if existe == True:
            self.apps.pop(pos)