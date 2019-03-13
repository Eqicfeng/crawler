from bs4 import BeautifulSoup
import requests

url = "https://stackoverflow.com/questions/tagged/android"
url_votes = url+"?sort=votes&days=7"
print(url_votes)
f = requests.get(url_votes)
soup = BeautifulSoup(f.content, "lxml")

all_votes = soup.find_all('div',class_='question-summary')
for k in range(10):
   a = all_votes[k].find_all('a')
   print(a[0]['href'])
   print(a[0].string)

url_newest =  url+"?sort=newest&days=7"
print(url_newest)
f = requests.get(url_newest)
soup = BeautifulSoup(f.content, "lxml")

all_votes = soup.find_all('div',class_='question-summary')
for k in range(10):
   a = all_votes[k].find_all('a')
   print(a[0]['href'])
   print(a[0].string)
