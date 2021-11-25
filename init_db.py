import sqlite3

connection = sqlite3.connect('database.db')


with open('schema.sql') as f:
    connection.executescript(f.read())

cur = connection.cursor()

cur.execute("INSERT INTO posts (title, content) VALUES (?, ?)",
            ('First backup', 'Content for the first backuppost')
            )

cur.execute("INSERT INTO posts (title, content) VALUES (?, ?)",
            ('Second backup', 'Content for the second backup')
            )

connection.commit()
connection.close()