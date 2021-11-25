# Installing Flask
# in this step we will activate our python environment and install flask
# to activate your virtual env you can use different type of commands
# Go to Settings - Tools - Terminal.
# Change Shell Path to C:\Windows\system32\cmd.exe
# Check the Activate virtualenv checkbox.
# Hit apply and open new terminal.

# flask can be installed manually in pycharm
# simply go to your intepreter config and manually install the packages

# In the next step, you’ll make a small web app inside our Python file
# and run it to start the server, which will display some information on the browser.

# Inside our python file you’ll import the Flask object, create a function that returns an HTTP response.

from flask import Flask

app = Flask(__name__)


@app.route('/')
def hello():
    return 'Hello, World!'


if __name__ == "__main__":
    app.run(debug=True)

# this code outputs "hello world" in the browser

# upto now our application only displays a simple message without any html
# now we will use html templates
# Flask provides a render_template() helper function that allows use of the Jinja template


