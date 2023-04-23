import requests
from bs4 import BeautifulSoup
import sys
sys.stdout.reconfigure(encoding='utf-8')
url = 'https://www.koreastardaily.com/tc/kpop'
html = requests.get(url)
sp = BeautifulSoup(html.text, 'html.parser')

data1 = sp.find('div', {'class':'shadow2 btn'})
data2 = data1.find_all('div', {'class':'text'})

for i in range(len(data2)):
    data3 = data2[i].find('a')
    href = "https://www.koreastardaily.com/"+data3.get("href")
    print(href)