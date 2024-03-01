# ApuntesDjango

django-admin startproject mysite

cd mysite

python manage.py runserver

python manage.py startapp polls

crear urls en la app y modificar views y admins

### Views
```
from django.http import HttpResponse


def index(request):
    return HttpResponse("Hello, world. You're at the polls index.")
```


### Urls
```
from django.urls import path

from . import views

urlpatterns = [
    path("", views.index, name="index"),
]

```
### Urls de mysite
```
from django.contrib import admin
from django.urls import include, path

urlpatterns = [
    path("polls/", include("polls.urls")),
    path("admin/", admin.site.urls),
]
```

## Crear Database
```
create database pruebadjango;

create user 'prueba'@'localhost' identified by '1234';

GRANT ALL PRIVILEGES ON pruebadjango.* TO 'prueba'@'localhost';
```
### Settings
```
DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': 'pruebadjango',
        'USER': 'prueba',
        'PASSWORD': '1234',
        'HOST': 'localhost',   # O la dirección IP de tu servidor MySQL
        'PORT': '3306',        # Puerto predeterminado de MySQL
    }
}
```

### SI DA ERROR

sudo apt-get install libmysqlclient-dev

export MYSQLCLIENT_CFLAGS="-I/usr/include/mysql"
export MYSQLCLIENT_LDFLAGS="-L/usr/lib/x86_64-linux-gnu -lmysqlclient -lpthread -lz -lm -lrt -latomic -lssl -lcrypto -ldl"

pip install mysqlclient

## Migraciones

python manage.py migrate

## Hacer los modelos
```
from django.db import models


class Question(models.Model):
    question_text = models.CharField(max_length=200)
    pub_date = models.DateTimeField("date published")


class Choice(models.Model):
    question = models.ForeignKey(Question, on_delete=models.CASCADE)
    choice_text = models.CharField(max_length=200)
    votes = models.IntegerField(default=0)```

instalar al app  "polls.apps.PollsConfig",

y hacer las migraciones 

python manage.py makemigrations polls

añadir a los modelos

    def __str__(self):
        return self.choice_text

crear admin 

python manage.py createsuperuser

en admin ponemos esto


from .models import Question

admin.site.register(Question)

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> create database examen;
Query OK, 1 row affected (0,01 sec)

mysql> create user 'examen'@'localhost' identified by '1234';
Query OK, 0 rows affected (0,01 sec)

mysql> GRANT ALL PRIVILEGES ON examen.* TO 'examen'@'localhost';
Query OK, 0 rows affected (0,01 sec)

