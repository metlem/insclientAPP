from django.shortcuts import render
from .models import Post

def post_list(request):
    return render(request, 'instagramclientAPP/post_list.html', {})

# Create your views here.
