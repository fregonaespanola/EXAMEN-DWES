# Generated by Django 5.0.2 on 2024-02-29 19:51

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('incidencias', '0009_alter_incidencia_fecha'),
    ]

    operations = [
        migrations.AlterField(
            model_name='incidencia',
            name='fecha',
            field=models.DateTimeField(auto_now_add=True),
        ),
    ]