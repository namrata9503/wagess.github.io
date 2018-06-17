<html>
    <head>
        <title>HOME DATA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <div class="col-lg-12">
                <div class="row">
                    
                   <div class="text-center"><h1 class="text-center">Display  FORM data</h1></div>
                    <br><br><br>
                <button id="show" class="btn btn-danger">Show list of users</button>
               
                <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>UserName</th>
                        <th>Salary</th>
                        <th>Incentives</th>
                        <th>Total Salary</th>

                    </thead>
                    <tbody id="response">
                       
                    </tbody>
                </table>
                </div>

            </div>
        </div>
        <script src="display.js"> </script>  

    </body>
    </html>