from bs4 import BeautifulSoup
import requests
import pymysql

db = pymysql.connect("localhost", "root", "", "test")
cursor = db.cursor()

url = "https://stackoverflow.com/questions/tagged/"

url_newest =  url+"android?sort=newest&days=7"
print(url_newest)
f = requests.get(url_newest)
soup = BeautifulSoup(f.content, "lxml")

all_newest = soup.find_all('div',class_='question-summary')
cursor.execute("DROP TABLE IF EXISTS `newest`")
cursor.execute("CREATE TABLE `newest` ( `title` VARCHAR(100) NOT NULL , `url` VARCHAR(100) NOT NULL ) ENGINE = InnoDB")
for k in range(10):
   a = all_newest[k].find_all('a')
   cursor.execute("INSERT INTO `newest` VALUES ('%s','%s')" % (a[0].string.replace("'","\\\'"), a[0]['href'].replace("'","\\\'")))
   print(a[0]['href'])
   print(a[0].string)

url_votes = url+"android?sort=votes&days=7"
print(url_votes)
f = requests.get(url_votes)
soup = BeautifulSoup(f.content, "lxml")

all_votes = soup.find_all('div',class_='question-summary')
cursor.execute("DROP TABLE IF EXISTS `votes`")
cursor.execute("CREATE TABLE `votes` ( `title` VARCHAR(100) NOT NULL , `url` VARCHAR(100) NOT NULL )")
for k in range(10):
   a = all_votes[k].find_all('a')
   cursor.execute("INSERT INTO `votes` VALUES ('%s','%s')" % (a[0].string.replace("'","\\\'"), a[0]['href'].replace("'","\\\'")))
   print(a[0]['href'])
   print(a[0].string)


cursor.execute('SELECT * from keywords')

keywords = cursor.fetchall()
for i in range(len(keywords)):
   url_keyword = url + "%s" % keywords[i]
   keyword = "%s" % keywords[i]
   print(keyword)
   f = requests.get(url_keyword)
   soup = BeautifulSoup(f.content, "lxml")
   all_questions = soup.find_all('div', class_='question-summary')
   cursor.execute("DROP TABLE IF EXISTS `%s`" % keyword)
   cursor.execute(
      "CREATE TABLE `%s` ( `title` VARCHAR(100) NOT NULL , `url` VARCHAR(100) NOT NULL ) ENGINE = InnoDB"% keyword)

   for k in range(10):
      a = all_questions[k].find_all('a')
      cursor.execute("INSERT INTO `%s` VALUES ('%s','%s')" % (
      keyword,a[0].string.replace("'", "\\\'"), a[0]['href'].replace("'", "\\\'")))
      print(a[0]['href'])
      print(a[0].string)
db.commit()
db.close()