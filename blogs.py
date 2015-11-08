import MySQLdb as mdb
import sys
import os
from config import hostname, username, password, dbname

#Go to the directory of blogposts and get posts as text
current_dir = "/".join(os.path.realpath(__file__).split("/")[:-1])
posts = []
os.chdir("%s%sSource%sblog" % (current_dir, os.path.sep, os.path.sep))
for post in [f for f in os.listdir(".") if "~" not in f]:
    f = open(post)
    posts.append([l for l in f.readlines() if l.rstrip()])
    f.close()


#Process the posts
posts = [{
    "date": "-".join([post[0][:4], post[0][4:6], post[0][6:]]).rstrip(),
    "title": post[1].rstrip(),
    "body": "".join(post[2:]).rstrip()
    } for post in posts]
print "%i posts here" % len(posts)


#Connect to database
conn = mdb.connect("localhost", "site", "pring000als", "samireland")
cur = conn.cursor()


#Delete existing blogposts table entries
cur.execute("DELETE FROM blogposts;")
conn.commit()


#Add posts
for post in posts:
    statement = "INSERT INTO blogposts(title, date, body) VALUES ('%s', '%s', '%s');" % \
                (post["title"],
                 post["date"],
                 post["body"])
    cur.execute(statement)
    conn.commit()

#Close
conn.close()
