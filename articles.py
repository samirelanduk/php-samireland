import MySQLdb as mdb
import sys
import os
from config import hostname, username, password, dbname

#Go to the directory of blogarticles and get articles as text
current_dir = os.path.sep.join(os.path.realpath(__file__).split(os.path.sep)[:-1])
articles = []
os.chdir("%s%sSource%sarticles" % (current_dir, os.path.sep, os.path.sep))
for article in [f for f in os.listdir(".") if "~" not in f]:
    f = open(article)
    articles.append([l for l in f.readlines() if l.rstrip()])
    f.close()


#Process the articles
chars = "abcdefghijklmnopqrstuvwxyz "
articles = [{
    "url": "".join([char for char in article[1].rstrip().lower() if char in chars]).replace(" ", "-"),
    "date": "-".join([article[0][:4], article[0][4:6], article[0][6:]]).rstrip(),
    "title": article[1].rstrip(),
    "type": article[2].strip(),
    "blurb": article[3].strip() if article[3].strip() != "<NONE>" else None,
    "body": "".join(article[4:]).rstrip()
    } for article in articles]
print "%i articles here" % len(articles)


#Connect to database
conn = mdb.connect(hostname, username, password, dbname)
cur = conn.cursor()


#Delete existing blogarticles table entries
cur.execute("DROP TABLE articles;")
conn.commit()
cur.execute("create table articles (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, url varchar(255), title varchar(255), date date, type varchar(255), blurb varchar(255), body text);")
conn.commit()



#Add articles
for article in articles:
    statement = "INSERT INTO articles(url, title, date, type, blurb, body) VALUES ('%s', '%s', '%s', '%s', '%s', '%s');" % \
                (article["url"],
                 article["title"],
                 article["date"],
                 article["type"],
                 article["blurb"],
                 article["body"])
    cur.execute(statement)
    conn.commit()

#Close
conn.close()
