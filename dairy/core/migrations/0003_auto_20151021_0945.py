# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('core', '0002_auto_20151017_1121'),
    ]

    operations = [
        migrations.AlterField(
            model_name='ussdrequest',
            name='session_id',
            field=models.CharField(unique=True, max_length=100),
        ),
    ]
