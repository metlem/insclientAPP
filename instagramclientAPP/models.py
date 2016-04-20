from django.db import models
from django.utils import timezone
import sqlite3 as lite

class Post(models.Model):
    date=models.DateTimeField(
        default=timezone.now)
    hastag=models.CharField(max_length=50)
