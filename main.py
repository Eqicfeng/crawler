from bs4 import BeautifulSoup
import requests
import pymysql

# 打开数据库连接
db = pymysql.connect("localhost", "root", "", "test")
cursor = db.cursor()

url = "https://stackoverflow.com/questions/tagged/android"

url_votes = url+"?sort=votes&days=7"
print(url_votes)
f = requests.get(url_votes)
soup = BeautifulSoup(f.content, "lxml")

all_votes = soup.find_all('div',class_='question-summary')
for k in range(10):
   a = all_votes[k].find_all('a')
   cursor.execute("INSERT INTO `newest` VALUES ('%s','%s')" % (a[0].string, a[0]['href']))
   #db.commit()
   print(a[0]['href'])
   print(a[0].string)

url_newest =  url+"?sort=newest&days=7"
print(url_newest)
f = requests.get(url_newest)
soup = BeautifulSoup(f.content, "lxml")

all_newest = soup.find_all('div',class_='question-summary')
for k in range(10):
   a = all_newest[k].find_all('a')
   cursor.execute("INSERT INTO `votes` VALUES ('%s','%s')" % (a[0].string, a[0]['href']))
   #db.commit()
   print(a[0]['href'])
   print(a[0].string)


db.commit()
# 关闭数据库连接
db.close()