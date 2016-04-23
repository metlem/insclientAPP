from django.db import models
from django.utils import timezone
import sqlite3 as lite

class Post(models.Model):
    date=models.DateTimeField(
        default=timezone.now)
    hastag=models.CharField(max_length=50)


    def save(self, *args, **kwargs):
       self.date = unidecode(self.date)
       super(Post, self).save(*args, **kwargs)

       self.hastag = unidecode(self.hastag)
       super(Post, self).save(*args, **kwargs)

  # def search(self):
        #self. date = timezone.now()
        #self.save()
