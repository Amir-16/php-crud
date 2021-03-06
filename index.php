<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <title>Php Crud</title>
</head>
<body>


<!-- Modal -->
<div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="insert.php"> 
      <div class="modal-body">
                            
                <div class="form-group">
                   <label for="name">Name</label>
                   <input type="text" class="form-control form-group-sm" name="name" placeholder="Employee Name">
                </div>
                <div class="form-group">
                   <label for="email">Email</label>
                   <input type="text" class="form-control form-group-sm" name="email" placeholder="Employee Email">
                </div>
                <div class="form-group">
                   <label for="designation">Designation</label>
                   <input type="text" class="form-control form-group-sm" name="designation" placeholder="Employee Designation">
                </div>
                <div class="form-group">
                   <label for="salary">Salary</label>
                   <input type="text" class="form-control form-group-sm" name="salary" placeholder="Employee Salary">
                </div>
                
                
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insert" class="btn btn-primary">Save </button>
                </div>
                
        
             </div>
      </form>
      
    </div>
  </div>
</div>

<div class="container">
    <div class="jumbotron">
        <div class="card">
          <h3>Php crud operation with modal</h3>  
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addEmployee">Add Employee</button>
            </div>
        </div>

        <div class="card">
           <div class="card- body">

            <?php
              $con =mysqli_connect("localhost","root","");
              $db =mysqli_select_db($con,'phpcrud');
              
              $query =" SELECT * FROM employee";
              $query_run =mysqli_query($con,$query);
             

              ?>
           <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Salary</th>
                  </tr>
                </thead>

                <?php
                if($query_run)
                {
                  foreach($query_run as $data){
              
                ?>
                 <tbody>
                  <tr>
                    <th > <?php echo $data['id'] ?></th>
                    <td> <?php  echo $data['name'] ?></td>
                    <td><?php   echo $data['email'] ?></td>
                    <td><?php  echo $data['designation'] ?></td>
                    <td><?php  echo $data['salary'] ?></td>
                  </tr>
                </tbody>

              <?php
                  }

                  }
                else{

              echo"no data found";

                }

              ?>
              
                
              </table>
        
        
        
        </div>
        
        </div>

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>