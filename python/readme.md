
Pasos para integrar python con xampp

1. Download and Install Xampp
Xampp is a software which acts as a web server on your local machine
Website:https://www.apachefriends.org/index.html
Downloads: https://www.apachefriends.org/downloa...

2. Download and Install Python
This is obvious, as without Python installed, you cannot run any Python programs
Website: https://www.python.org/
Downloads: https://www.python.org/downloads/

3. Go to your Xampp folder and then
Xampp / apache / conf / httpd.conf
Any line commencing with # signifies a comment

4. Add this string to the bottom of the httpd.conf file
AddHandler cgi-script .py
ScriptInterpreterSource Registry-Strict

This enables Xampp to handle .py scripts aka your Python programs.

5. Search in httpd.conf for the following string: IfModule dir_module. You will see a lot of index.xx, home.xx or default.xx elements. Just add index.py, home.py and default.py

This ensures that when you input a url such as localhost/my_webapp/, Xampp will use index.py as the web application’s home page

6. (Opcional) Lastly you can change the location of your root / public folder. This is the folder where you place your Python programs for Xampp to serve them as web applications. 

Search for the string DocumentRoot. You will see that Xampp uses by default the directory htdocs. You can change that to any other directory on your drive. It does not have to be within the Xampp directory.

7. In your Python code insert in the first line the path to your Python installation preceded by #!,
For example:  ! C:/Users/pruebas/AppData/Local/Programs/Python/Python310/python.exe (es la ruta donde se instaló python)

8. Before you utilize any print statement in your Python code, ensure that your script outputs HTML. This  is done with: print("Content-Type: text/html\n")