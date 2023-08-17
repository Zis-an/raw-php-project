# raw-php-project




This project is going to be a Glossary. 
One where visitors can view a list of terms and their definitions. 
They will also be able to search for a term in order to get a definition. 
And it'll also have an admin section so that user can login in order to manage the terms.





# 16th August, 2023
There are mainly two types of file till now. Controllers and views.
  
  # Lesson - 1
  
  # Controller: 
      
      index.php
        functions.php is required inside index.php

      functions.php
          view($name, $model) -> require(layout.view.php)
  
  # Views: 
  
      1. index.view.php
      2. layout.view.php -> require("$name.view.php")


  # Lesson - 2

  # Controller:

      index.php
        receives data in $data variable.
        only app.php is required.
        $data is sent to the view() function.

      functions.php
        view($name, $model) -> receiving $data -> require(layout.view.php)
        
        get_data() -> gets file from CONFIG array which is inside config.php file. 
                      Stores the file in a variable and returns the variable. 
                      Uses two functions to create/get file data. 
                          1. file_put_contents($file_name, '')
                          2. file_get_contents($file_name)


      ---- New File ----

      config.php
        Holds the data of the application and user info in an array.

      app.php
        Holds all require('') statements for the application.



  # Lesson - 3

  # Controller:

    index.php
      data retrived from the file is decoded into json format using json_decode() function and passed to the view function to generate a view.
      variable inside the call of view function is removed and get_terms() function call is added.
      Title is served in a single line.

    app.php
      New require of file_functions.php is added.

    ---- New File ----

    file_functions.php
      File related functions are moved into the file named file_functions.php. New function named get_terms is created to return json decoded data.

  # Views:

    index.view.php
      data gets to stored inside $model. A foreach loop performs on the variable to display each item stored inside the model in a table.
