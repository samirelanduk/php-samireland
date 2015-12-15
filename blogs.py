import MySQLdb as mdb
import sys
import os
from config import hostnamel, usernamel, passwordl, dbname, hostnamer, usernamer, passwordr

#Go to the directory of blogposts and get posts as text
current_dir = os.path.sep.join(os.path.realpath(__file__).split("/")[:-1])
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

def update_blogs(hostname, username, password, dbname):
    #Connect to database
    conn = mdb.connect(hostname, username, password, dbname)
    cur = conn.cursor()
    print "\tConnection established..."


    #Delete existing blogposts table entries
    cur.execute("DELETE FROM blogposts;")
    conn.commit()
    print "\tWiped existing table..."


    #Add posts
    print "\tAdding new entires..."
    for post in posts:
        statement = "INSERT INTO blogposts(title, date, body) VALUES ('%s', '%s', '%s');" % \
                    (post["title"],
                     post["date"],
                     post["body"])
        cur.execute(statement)
        conn.commit()

    #Close
    conn.close()

print "Updating local content."
update_blogs(hostnamel, usernamel, passwordl, dbname)

