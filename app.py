# In this new file, we will import the Flask object
# this is to create a Flask application instance as we did in our previous file

from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.php')

if __name__ == "__main__":
    app.run(debug=True)