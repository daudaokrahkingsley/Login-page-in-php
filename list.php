<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>List to Enumerator</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-4">
            <div class="card-header">
              <h4>List Of The people to the enumerators</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-7">
                  <form action="" method="GET">
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        name="search"
                        required
                        value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                        class="form-control"
                        placeholder="Search data"
                      />
                      <button type="submit" class="btn btn-primary">
                        Search
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card mt-4">
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Empl. Status</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Region</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                                    $con = mysqli_connect("localhost","root","","population_db");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM people WHERE CONCAT(first_name,last_name) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) >
                  0) { foreach($query_run as $items) { ?>
                  <tr>
                    <td><?= $items['id']; ?></td>
                    <td><?= $items['first_name']; ?></td>
                    <td><?= $items['last_name']; ?></td>
                    <td><?= $items['employ']; ?></td>
                    <td><?= $items['dob']; ?></td>
                    <td><?= $items['gender']; ?></td>
                    <td><?= $items['region']; ?></td>
                  </tr>
                  <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                  <tr>
                    <td colspan="4">Felter</td>
                  </tr>
                  <?php
                                        }
                                    }
                                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <a
        href="login.php"
        style="
          float: right;
          text-decoration: none;
          background-color: blue;
          color: white;
          font-weight: bolder;
          padding: 10px;
        "
        >Back</a
      >
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
