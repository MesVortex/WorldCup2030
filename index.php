<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php
  $servername = "localhost";
  $username = "root";
  $dbname = "worldcup2030";

  $conn = new mysqli($servername, $username,"", $dbname);

  if ($conn->connect_error) {
      die("Erreur de connexion : " . $conn->connect_error);
  }  
?>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">WORLD CUP 2030</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse | navbar-position" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active text-danger" aria-current="page" href="#">Group Stage</a>
            <a class="nav-link" href="#">Semi-Final</a>
            <a class="nav-link" href="#">Final</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section>
      <div>
        <h2>GROUPS</h2>
      </div>
      <div>
        <ul class="d-flex justify-content-center | filter-list">
          <button onclick="Filter('ALL')" type="button" id="All_btn" class="col-lg btn btn-danger me-3">ALL</button>
          <button onclick="Filter('A')" type="button" id="A_btn" class="col-lg btn btn-outline-danger me-3">A</button>
          <button onclick="Filter('B')" type="button" id="B_btn" class="col-lg btn btn-outline-danger me-3">B</button>
          <button onclick="Filter('C')" type="button" id="C_btn" class="col-lg btn btn-outline-danger me-3">C</button>
          <button onclick="Filter('D')" type="button" id="D_btn" class="col-lg btn btn-outline-danger me-3">D</button>
          <button onclick="Filter('E')" type="button" id="E_btn" class="col-lg btn btn-outline-danger me-3">E</button>
          <button onclick="Filter('F')" type="button" id="F_btn" class="col-lg btn btn-outline-danger me-3">F</button>
          <button onclick="Filter('G')" type="button" id="G_btn" class="col-lg btn btn-outline-danger me-3">G</button>
          <button onclick="Filter('H')" type="button" id="H_btn" class="col-lg btn btn-outline-danger me-3">H</button>
        </ul>
      </div>
      <?php
        $sql_group1 = "SELECT * FROM groups WHERE group_ID = 1";
        $result_group1 = $conn->query($sql_group1);
        $sql_group2 = "SELECT * FROM groups WHERE group_ID = 2";
        $result_group2 = $conn->query($sql_group2);
        $sql_group3 = "SELECT * FROM groups WHERE group_ID = 3";
        $result_group3 = $conn->query($sql_group3);
        $sql_group4 = "SELECT * FROM groups WHERE group_ID = 4";
        $result_group4 = $conn->query($sql_group4);
        $sql_group5 = "SELECT * FROM groups WHERE group_ID = 5";
        $result_group5 = $conn->query($sql_group5);
        $sql_group6 = "SELECT * FROM groups WHERE group_ID = 6";
        $result_group6 = $conn->query($sql_group6);
        $sql_group7 = "SELECT * FROM groups WHERE group_ID = 7";
        $result_group7 = $conn->query($sql_group7);
        $sql_group8 = "SELECT * FROM groups WHERE group_ID = 8";
        $result_group8 = $conn->query($sql_group8);
        
        $sql_teams_group1 = "SELECT * FROM teams WHERE TeamGroup = 1";
        $result_teams_group1 = $conn->query($sql_teams_group1);
        $sql_teams_group2 = "SELECT * FROM teams WHERE TeamGroup = 2";
        $result_teams_group2 = $conn->query($sql_teams_group2);
        $sql_teams_group3 = "SELECT * FROM teams WHERE TeamGroup = 3";
        $result_teams_group3 = $conn->query($sql_teams_group3);
        $sql_teams_group4 = "SELECT * FROM teams WHERE TeamGroup = 4";
        $result_teams_group4 = $conn->query($sql_teams_group4);
        $sql_teams_group5 = "SELECT * FROM teams WHERE TeamGroup = 5";
        $result_teams_group5 = $conn->query($sql_teams_group5);
        $sql_teams_group6 = "SELECT * FROM teams WHERE TeamGroup = 6";
        $result_teams_group6 = $conn->query($sql_teams_group6);
        $sql_teams_group7 = "SELECT * FROM teams WHERE TeamGroup = 7";
        $result_teams_group7 = $conn->query($sql_teams_group7);
        $sql_teams_group8 = "SELECT * FROM teams WHERE TeamGroup = 8";
        $result_teams_group8 = $conn->query($sql_teams_group8);

        $sql_stad_group1 = "SELECT * FROM stadium WHERE stad_group = 1";
        $result_stad_group1 = $conn->query($sql_stad_group1);
        $sql_stad_group2 = "SELECT * FROM stadium WHERE stad_group = 2";
        $result_stad_group2 = $conn->query($sql_stad_group2);
        $sql_stad_group3 = "SELECT * FROM stadium WHERE stad_group = 3";
        $result_stad_group3 = $conn->query($sql_stad_group3);
        $sql_stad_group4 = "SELECT * FROM stadium WHERE stad_group = 4";
        $result_stad_group4 = $conn->query($sql_stad_group4);
        $sql_stad_group5 = "SELECT * FROM stadium WHERE stad_group = 5";
        $result_stad_group5 = $conn->query($sql_stad_group5);
        $sql_stad_group6 = "SELECT * FROM stadium WHERE stad_group = 6";
        $result_stad_group6 = $conn->query($sql_stad_group6);
        $sql_stad_group7 = "SELECT * FROM stadium WHERE stad_group = 7";
        $result_stad_group7 = $conn->query($sql_stad_group7);
        $sql_stad_group8 = "SELECT * FROM stadium WHERE stad_group = 8";
        $result_stad_group8 = $conn->query($sql_stad_group8);

      
        if ($result_group1->num_rows > 0) {
          $row_1 = $result_group1->fetch_assoc();
          $row_stad1 = $result_stad_group1->fetch_assoc();
              echo '<div class="d-flex justify-content-around mt-5">
              <article class="card" id="GroupA">
                <div class="card-header">
                  <h5 class="card-title text-center">'. $row_1["groupName"] .'</h5>
                </div>
                <div class="card-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <p>Team</p>
                        <div class="d-flex | stats">
                          <p class="ms-4">W</p>
                          <p class="ms-4">D</p>
                          <p class="ms-4">L</p>
                          <p class="ms-4">Pts</p>
                        </div>
                      </li>';
                      $place = 1;
                      while ($row_groupA = $result_teams_group1->fetch_assoc()) {                     
                      echo '<li type="button" class="list-group-item d-flex justify-content-between | Country-hover" data-bs-toggle="modal" data-bs-target="#groupA_Team'.$place.'">
                        <div class="d-flex">
                          <div class="align-self-center">
                            <p class="card-subtitle mb-2 text-body-secondary me-4 mt-2">'.$place.'</p>
                          </div>
                          <div>
                            <img src="'.$row_groupA["TeamFlag"].'-logo.png" alt="">
                          </div>
                          <div class="align-self-center">
                            <h6 class="card-subtitle mb-2 text-body-secondary ms-4 mt-2">'.$row_groupA["TeamName"].'</h6>
                          </div>
                        </div>
                        <div class="d-flex | stats">
                          <p class="ms-4 mt-2">'.$row_groupA["Win"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupA["Draw"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupA["Lose"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupA["Points"].'</p>
                        </div>
                      </li>
                      <!-- Hidden Modal -->
                      <div class="modal fade" id="groupA_Team'.$place.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                              <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_groupA["TeamName"].'</h3>
                            </div>
                            <div class="modal-body row">
                              <div class="col | flag-pic">
                                <img class="border rounded" src="'.$row_groupA["TeamFlag"].'" alt="">
                              </div>
                              <div class="col align-self-center">
                                <p class="mb-2"><span class="fw-bold">Continent</span>: '.$row_groupA["Continent"].'</p>
                                <p class="mb-2"><span class="fw-bold">Capital</span>: '.$row_groupA["Capital"].'</p>
                                <p class="mb-2"><span class="fw-bold">Population</span>: '.$row_groupA["Population"].'</p>
                                <p class="mb-2"><span class="fw-bold">Key Player</span>: '.$row_groupA["KeyPlayer"].'</p>
                                <p><span class="fw-bold">KP Position</span>: '.$row_groupA["Position"].'</p>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">View Matches</a>
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $place++;
                      }echo'                   
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center" type="button" data-bs-toggle="modal" data-bs-target="#stadGroup'.$row_1["group_ID"].'">
                '.$row_stad1["stad_Name"].'
                </div>
                <!-- Hidden Modal -->
                <div class="modal fade" id="stadGroup'.$row_1["group_ID"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_stad1["stad_Name"].'</h3>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center">
                        <div class="col | stade-pic">
                          <img src="'.$row_stad1["stad_img"].'" alt="">
                        </div>
                        <div class="col">
                          <p class="mb-2 text-center"><span class="fw-bold">Location</span>: '.$row_stad1["Location"].'</p>
                          <p class="mb-2 text-center"><span class="fw-bold">Capacity</span>: '.$row_stad1["Capacity"].'</p>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </section>';


          $row_2 = $result_group2->fetch_assoc();
          $row_stad2 = $result_stad_group2->fetch_assoc();
              echo '<div class="d-flex justify-content-around mt-5">
              <article class="card" id="GroupB">
                <div class="card-header">
                  <h5 class="card-title text-center">'. $row_2["groupName"] .'</h5>
                </div>
                <div class="card-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <p>Team</p>
                        <div class="d-flex | stats">
                          <p class="ms-4">W</p>
                          <p class="ms-4">D</p>
                          <p class="ms-4">L</p>
                          <p class="ms-4">Pts</p>
                        </div>
                      </li>';
                      $place = 1;
                      while ($row_groupB = $result_teams_group2->fetch_assoc()) {                     
                      echo '<li type="button" class="list-group-item d-flex justify-content-between | Country-hover" data-bs-toggle="modal" data-bs-target="#groupB_Team'.$place.'">
                        <div class="d-flex">
                          <div class="align-self-center">
                            <p class="card-subtitle mb-2 text-body-secondary me-4 mt-2">'.$place.'</p>
                          </div>
                          <div>
                            <img src="'.$row_groupB["TeamFlag"].'-logo.png" alt="">
                          </div>
                          <div class="align-self-center">
                            <h6 class="card-subtitle mb-2 text-body-secondary ms-4 mt-2">'.$row_groupB["TeamName"].'</h6>
                          </div>
                        </div>
                        <div class="d-flex | stats">
                          <p class="ms-4 mt-2">'.$row_groupB["Win"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupB["Draw"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupB["Lose"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupB["Points"].'</p>
                        </div>
                      </li>
                      <!-- Hidden Modal -->
                      <div class="modal fade" id="groupB_Team'.$place.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                              <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_groupB["TeamName"].'</h3>
                            </div>
                            <div class="modal-body row">
                              <div class="col | flag-pic">
                                <img class="border rounded" src="'.$row_groupB["TeamFlag"].'" alt="">
                              </div>
                              <div class="col align-self-center">
                                <p class="mb-2"><span class="fw-bold">Continent</span>: '.$row_groupB["Continent"].'</p>
                                <p class="mb-2"><span class="fw-bold">Capital</span>: '.$row_groupB["Capital"].'</p>
                                <p class="mb-2"><span class="fw-bold">Population</span>: '.$row_groupB["Population"].'</p>
                                <p class="mb-2"><span class="fw-bold">Key Player</span>: '.$row_groupB["KeyPlayer"].'</p>
                                <p><span class="fw-bold">KP Position</span>: '.$row_groupB["Position"].'</p>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">View Matches</a>
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $place++;
                      }echo'                   
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center" type="button" data-bs-toggle="modal" data-bs-target="#stadGroup'.$row_2["group_ID"].'">
                '.$row_stad2["stad_Name"].'
                </div>
                <!-- Hidden Modal -->
                <div class="modal fade" id="stadGroup'.$row_2["group_ID"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_stad2["stad_Name"].'</h3>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center">
                        <div class="col | stade-pic">
                          <img src="'.$row_stad2["stad_img"].'" alt="">
                        </div>
                        <div class="col">
                          <p class="mb-2 text-center"><span class="fw-bold">Location</span>: '.$row_stad2["Location"].'</p>
                          <p class="mb-2 text-center"><span class="fw-bold">Capacity</span>: '.$row_stad2["Capacity"].'</p>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </section>';


          $row_3 = $result_group3->fetch_assoc();
          $row_stad3 = $result_stad_group3->fetch_assoc();
              echo '<div class="d-flex justify-content-around mt-5">
              <article class="card" id="GroupC">
                <div class="card-header">
                  <h5 class="card-title text-center">'. $row_3["groupName"] .'</h5>
                </div>
                <div class="card-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <p>Team</p>
                        <div class="d-flex | stats">
                          <p class="ms-4">W</p>
                          <p class="ms-4">D</p>
                          <p class="ms-4">L</p>
                          <p class="ms-4">Pts</p>
                        </div>
                      </li>';
                      $place = 1;
                      while ($row_groupC = $result_teams_group3->fetch_assoc()) {                     
                      echo '<li type="button" class="list-group-item d-flex justify-content-between | Country-hover" data-bs-toggle="modal" data-bs-target="#groupC_Team'.$place.'">
                        <div class="d-flex">
                          <div class="align-self-center">
                            <p class="card-subtitle mb-2 text-body-secondary me-4 mt-2">'.$place.'</p>
                          </div>
                          <div>
                            <img src="'.$row_groupC["TeamFlag"].'-logo.png" alt="">
                          </div>
                          <div class="align-self-center">
                            <h6 class="card-subtitle mb-2 text-body-secondary ms-4 mt-2">'.$row_groupC["TeamName"].'</h6>
                          </div>
                        </div>
                        <div class="d-flex | stats">
                          <p class="ms-4 mt-2">'.$row_groupC["Win"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupC["Draw"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupC["Lose"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupC["Points"].'</p>
                        </div>
                      </li>
                      <!-- Hidden Modal -->
                      <div class="modal fade" id="groupC_Team'.$place.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                              <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_groupC["TeamName"].'</h3>
                            </div>
                            <div class="modal-body row">
                              <div class="col | flag-pic">
                                <img class="border rounded" src="'.$row_groupC["TeamFlag"].'" alt="">
                              </div>
                              <div class="col align-self-center">
                                <p class="mb-2"><span class="fw-bold">Continent</span>: '.$row_groupC["Continent"].'</p>
                                <p class="mb-2"><span class="fw-bold">Capital</span>: '.$row_groupC["Capital"].'</p>
                                <p class="mb-2"><span class="fw-bold">Population</span>: '.$row_groupC["Population"].'</p>
                                <p class="mb-2"><span class="fw-bold">Key Player</span>: '.$row_groupC["KeyPlayer"].'</p>
                                <p><span class="fw-bold">KP Position</span>: '.$row_groupC["Position"].'</p>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">View Matches</a>
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $place++;
                      }echo'                   
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center" type="button" data-bs-toggle="modal" data-bs-target="#stadGroup'.$row_3["group_ID"].'">
                '.$row_stad3["stad_Name"].'
                </div>
                <!-- Hidden Modal -->
                <div class="modal fade" id="stadGroup'.$row_3["group_ID"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_stad3["stad_Name"].'</h3>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center">
                        <div class="col | stade-pic">
                          <img src="'.$row_stad3["stad_img"].'" alt="">
                        </div>
                        <div class="col">
                          <p class="mb-2 text-center"><span class="fw-bold">Location</span>: '.$row_stad3["Location"].'</p>
                          <p class="mb-2 text-center"><span class="fw-bold">Capacity</span>: '.$row_stad3["Capacity"].'</p>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </section>';


          $row_4 = $result_group4->fetch_assoc();
          $row_stad4 = $result_stad_group4->fetch_assoc();
              echo '<div class="d-flex justify-content-around mt-5">
              <article class="card" id="GroupD">
                <div class="card-header">
                  <h5 class="card-title text-center">'. $row_4["groupName"] .'</h5>
                </div>
                <div class="card-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <p>Team</p>
                        <div class="d-flex | stats">
                          <p class="ms-4">W</p>
                          <p class="ms-4">D</p>
                          <p class="ms-4">L</p>
                          <p class="ms-4">Pts</p>
                        </div>
                      </li>';
                      $place = 1;
                      while ($row_groupD = $result_teams_group4->fetch_assoc()) {                 
                      echo '<li type="button" class="list-group-item d-flex justify-content-between | Country-hover" data-bs-toggle="modal" data-bs-target="#groupD_Team'.$place.'">
                        <div class="d-flex">
                          <div class="align-self-center">
                            <p class="card-subtitle mb-2 text-body-secondary me-4 mt-2">'.$place.'</p>
                          </div>
                          <div>
                            <img src="'.$row_groupD["TeamFlag"].'-logo.png" alt="">
                          </div>
                          <div class="align-self-center">
                            <h6 class="card-subtitle mb-2 text-body-secondary ms-4 mt-2">'.$row_groupD["TeamName"].'</h6>
                          </div>
                        </div>
                        <div class="d-flex | stats">
                          <p class="ms-4 mt-2">'.$row_groupD["Win"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupD["Draw"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupD["Lose"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupD["Points"].'</p>
                        </div>
                      </li>
                      <!-- Hidden Modal -->
                      <div class="modal fade" id="groupD_Team'.$place.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                              <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_groupD["TeamName"].'</h3>
                            </div>
                            <div class="modal-body row">
                              <div class="col | flag-pic">
                                <img class="border rounded" src="'.$row_groupD["TeamFlag"].'" alt="">
                              </div>
                              <div class="col align-self-center">
                                <p class="mb-2"><span class="fw-bold">Continent</span>: '.$row_groupD["Continent"].'</p>
                                <p class="mb-2"><span class="fw-bold">Capital</span>: '.$row_groupD["Capital"].'</p>
                                <p class="mb-2"><span class="fw-bold">Population</span>: '.$row_groupD["Population"].'</p>
                                <p class="mb-2"><span class="fw-bold">Key Player</span>: '.$row_groupD["KeyPlayer"].'</p>
                                <p><span class="fw-bold">KP Position</span>: '.$row_groupD["Position"].'</p>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">View Matches</a>
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $place++;
                      }echo'                   
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center" type="button" data-bs-toggle="modal" data-bs-target="#stadGroup'.$row_4["group_ID"].'">
                '.$row_stad4["stad_Name"].'
                </div>
                <!-- Hidden Modal -->
                <div class="modal fade" id="stadGroup'.$row_4["group_ID"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_stad4["stad_Name"].'</h3>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center">
                        <div class="col | stade-pic">
                          <img src="'.$row_stad4["stad_img"].'" alt="">
                        </div>
                        <div class="col">
                          <p class="mb-2 text-center"><span class="fw-bold">Location</span>: '.$row_stad4["Location"].'</p>
                          <p class="mb-2 text-center"><span class="fw-bold">Capacity</span>: '.$row_stad4["Capacity"].'</p>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </section>';


          $row_5 = $result_group5->fetch_assoc();
          $row_stad5 = $result_stad_group5->fetch_assoc();
              echo '<div class="d-flex justify-content-around mt-5">
              <article class="card" id="GroupE">
                <div class="card-header">
                  <h5 class="card-title text-center">'. $row_5["groupName"] .'</h5>
                </div>
                <div class="card-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <p>Team</p>
                        <div class="d-flex | stats">
                          <p class="ms-4">W</p>
                          <p class="ms-4">D</p>
                          <p class="ms-4">L</p>
                          <p class="ms-4">Pts</p>
                        </div>
                      </li>';
                      $place = 1;
                      while ($row_groupE = $result_teams_group5->fetch_assoc()) {                 
                      echo '<li type="button" class="list-group-item d-flex justify-content-between | Country-hover" data-bs-toggle="modal" data-bs-target="#groupE_Team'.$place.'">
                        <div class="d-flex">
                          <div class="align-self-center">
                            <p class="card-subtitle mb-2 text-body-secondary me-4 mt-2">'.$place.'</p>
                          </div>
                          <div>
                            <img src="'.$row_groupE["TeamFlag"].'-logo.png" alt="">
                          </div>
                          <div class="align-self-center">
                            <h6 class="card-subtitle mb-2 text-body-secondary ms-4 mt-2">'.$row_groupE["TeamName"].'</h6>
                          </div>
                        </div>
                        <div class="d-flex | stats">
                          <p class="ms-4 mt-2">'.$row_groupE["Win"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupE["Draw"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupE["Lose"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupE["Points"].'</p>
                        </div>
                      </li>
                      <!-- Hidden Modal -->
                      <div class="modal fade" id="groupE_Team'.$place.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                              <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_groupE["TeamName"].'</h3>
                            </div>
                            <div class="modal-body row">
                              <div class="col | flag-pic">
                                <img class="border rounded" src="'.$row_groupE["TeamFlag"].'" alt="">
                              </div>
                              <div class="col align-self-center">
                                <p class="mb-2"><span class="fw-bold">Continent</span>: '.$row_groupE["Continent"].'</p>
                                <p class="mb-2"><span class="fw-bold">Capital</span>: '.$row_groupE["Capital"].'</p>
                                <p class="mb-2"><span class="fw-bold">Population</span>: '.$row_groupE["Population"].'</p>
                                <p class="mb-2"><span class="fw-bold">Key Player</span>: '.$row_groupE["KeyPlayer"].'</p>
                                <p><span class="fw-bold">KP Position</span>: '.$row_groupE["Position"].'</p>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">View Matches</a>
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $place++;
                      }echo'                   
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center" type="button" data-bs-toggle="modal" data-bs-target="#stadGroup'.$row_5["group_ID"].'">
                '.$row_stad5["stad_Name"].'
                </div>
                <!-- Hidden Modal -->
                <div class="modal fade" id="stadGroup'.$row_5["group_ID"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_stad5["stad_Name"].'</h3>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center">
                        <div class="col | stade-pic">
                          <img src="'.$row_stad5["stad_img"].'" alt="">
                        </div>
                        <div class="col">
                          <p class="mb-2 text-center"><span class="fw-bold">Location</span>: '.$row_stad5["Location"].'</p>
                          <p class="mb-2 text-center"><span class="fw-bold">Capacity</span>: '.$row_stad5["Capacity"].'</p>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </section>';


          $row_6 = $result_group6->fetch_assoc();
          $row_stad6 = $result_stad_group6->fetch_assoc();
              echo '<div class="d-flex justify-content-around mt-5">
              <article class="card" id="GroupF">
                <div class="card-header">
                  <h5 class="card-title text-center">'. $row_6["groupName"] .'</h5>
                </div>
                <div class="card-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <p>Team</p>
                        <div class="d-flex | stats">
                          <p class="ms-4">W</p>
                          <p class="ms-4">D</p>
                          <p class="ms-4">L</p>
                          <p class="ms-4">Pts</p>
                        </div>
                      </li>';
                      $place = 1;
                      while ($row_groupF = $result_teams_group6->fetch_assoc()) {                 
                      echo '<li type="button" class="list-group-item d-flex justify-content-between | Country-hover" data-bs-toggle="modal" data-bs-target="#groupF_Team'.$place.'">
                        <div class="d-flex">
                          <div class="align-self-center">
                            <p class="card-subtitle mb-2 text-body-secondary me-4 mt-2">'.$place.'</p>
                          </div>
                          <div>
                            <img src="'.$row_groupF["TeamFlag"].'-logo.png" alt="">
                          </div>
                          <div class="align-self-center">
                            <h6 class="card-subtitle mb-2 text-body-secondary ms-4 mt-2">'.$row_groupF["TeamName"].'</h6>
                          </div>
                        </div>
                        <div class="d-flex | stats">
                          <p class="ms-4 mt-2">'.$row_groupF["Win"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupF["Draw"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupF["Lose"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupF["Points"].'</p>
                        </div>
                      </li>
                      <!-- Hidden Modal -->
                      <div class="modal fade" id="groupF_Team'.$place.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                              <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_groupF["TeamName"].'</h3>
                            </div>
                            <div class="modal-body row">
                              <div class="col | flag-pic">
                                <img class="border rounded" src="'.$row_groupF["TeamFlag"].'" alt="">
                              </div>
                              <div class="col align-self-center">
                                <p class="mb-2"><span class="fw-bold">Continent</span>: '.$row_groupF["Continent"].'</p>
                                <p class="mb-2"><span class="fw-bold">Capital</span>: '.$row_groupF["Capital"].'</p>
                                <p class="mb-2"><span class="fw-bold">Population</span>: '.$row_groupF["Population"].'</p>
                                <p class="mb-2"><span class="fw-bold">Key Player</span>: '.$row_groupF["KeyPlayer"].'</p>
                                <p><span class="fw-bold">KP Position</span>: '.$row_groupF["Position"].'</p>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">View Matches</a>
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $place++;
                      }echo'                   
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center" type="button" data-bs-toggle="modal" data-bs-target="#stadGroup'.$row_6["group_ID"].'">
                '.$row_stad6["stad_Name"].'
                </div>
                <!-- Hidden Modal -->
                <div class="modal fade" id="stadGroup'.$row_6["group_ID"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_stad6["stad_Name"].'</h3>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center">
                        <div class="col | stade-pic">
                          <img src="'.$row_stad6["stad_img"].'" alt="">
                        </div>
                        <div class="col">
                          <p class="mb-2 text-center"><span class="fw-bold">Location</span>: '.$row_stad6["Location"].'</p>
                          <p class="mb-2 text-center"><span class="fw-bold">Capacity</span>: '.$row_stad6["Capacity"].'</p>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </section>';


          $row_7 = $result_group7->fetch_assoc();
          $row_stad7 = $result_stad_group7->fetch_assoc();
              echo '<div class="d-flex justify-content-around mt-5">
              <article class="card" id="GroupG">
                <div class="card-header">
                  <h5 class="card-title text-center">'. $row_7["groupName"] .'</h5>
                </div>
                <div class="card-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <p>Team</p>
                        <div class="d-flex | stats">
                          <p class="ms-4">W</p>
                          <p class="ms-4">D</p>
                          <p class="ms-4">L</p>
                          <p class="ms-4">Pts</p>
                        </div>
                      </li>';
                      $place = 1;
                      while ($row_groupG = $result_teams_group7->fetch_assoc()) {                 
                      echo '<li type="button" class="list-group-item d-flex justify-content-between | Country-hover" data-bs-toggle="modal" data-bs-target="#groupG_Team'.$place.'">
                        <div class="d-flex">
                          <div class="align-self-center">
                            <p class="card-subtitle mb-2 text-body-secondary me-4 mt-2">'.$place.'</p>
                          </div>
                          <div>
                            <img src="'.$row_groupG["TeamFlag"].'-logo.png" alt="">
                          </div>
                          <div class="align-self-center">
                            <h6 class="card-subtitle mb-2 text-body-secondary ms-4 mt-2">'.$row_groupG["TeamName"].'</h6>
                          </div>
                        </div>
                        <div class="d-flex | stats">
                          <p class="ms-4 mt-2">'.$row_groupG["Win"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupG["Draw"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupG["Lose"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupG["Points"].'</p>
                        </div>
                      </li>
                      <!-- Hidden Modal -->
                      <div class="modal fade" id="groupG_Team'.$place.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                              <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_groupG["TeamName"].'</h3>
                            </div>
                            <div class="modal-body row">
                              <div class="col | flag-pic">
                                <img class="border rounded" src="'.$row_groupG["TeamFlag"].'" alt="">
                              </div>
                              <div class="col align-self-center">
                                <p class="mb-2"><span class="fw-bold">Continent</span>: '.$row_groupG["Continent"].'</p>
                                <p class="mb-2"><span class="fw-bold">Capital</span>: '.$row_groupG["Capital"].'</p>
                                <p class="mb-2"><span class="fw-bold">Population</span>: '.$row_groupG["Population"].'</p>
                                <p class="mb-2"><span class="fw-bold">Key Player</span>: '.$row_groupG["KeyPlayer"].'</p>
                                <p><span class="fw-bold">KP Position</span>: '.$row_groupG["Position"].'</p>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">View Matches</a>
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $place++;
                      }echo'                   
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center" type="button" data-bs-toggle="modal" data-bs-target="#stadGroup'.$row_7["group_ID"].'">
                '.$row_stad7["stad_Name"].'
                </div>
                <!-- Hidden Modal -->
                <div class="modal fade" id="stadGroup'.$row_7["group_ID"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_stad7["stad_Name"].'</h3>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center">
                        <div class="col | stade-pic">
                          <img src="'.$row_stad7["stad_img"].'" alt="">
                        </div>
                        <div class="col">
                          <p class="mb-2 text-center"><span class="fw-bold">Location</span>: '.$row_stad7["Location"].'</p>
                          <p class="mb-2 text-center"><span class="fw-bold">Capacity</span>: '.$row_stad7["Capacity"].'</p>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </section>';


          $row_8 = $result_group8->fetch_assoc();
          $row_stad8 = $result_stad_group8->fetch_assoc();
              echo '<div class="d-flex justify-content-around mt-5">
              <article class="card" id="GroupH">
                <div class="card-header">
                  <h5 class="card-title text-center">'. $row_8["groupName"] .'</h5>
                </div>
                <div class="card-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <p>Team</p>
                        <div class="d-flex | stats">
                          <p class="ms-4">W</p>
                          <p class="ms-4">D</p>
                          <p class="ms-4">L</p>
                          <p class="ms-4">Pts</p>
                        </div>
                      </li>';
                      $place = 1;
                      while ($row_groupH = $result_teams_group8->fetch_assoc()) {                 
                      echo '<li type="button" class="list-group-item d-flex justify-content-between | Country-hover" data-bs-toggle="modal" data-bs-target="#groupH_Team'.$place.'">
                        <div class="d-flex">
                          <div class="align-self-center">
                            <p class="card-subtitle mb-2 text-body-secondary me-4 mt-2">'.$place.'</p>
                          </div>
                          <div>
                            <img src="'.$row_groupH["TeamFlag"].'-logo.png" alt="">
                          </div>
                          <div class="align-self-center">
                            <h6 class="card-subtitle mb-2 text-body-secondary ms-4 mt-2">'.$row_groupH["TeamName"].'</h6>
                          </div>
                        </div>
                        <div class="d-flex | stats">
                          <p class="ms-4 mt-2">'.$row_groupH["Win"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupH["Draw"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupH["Lose"].'</p>
                          <p class="ms-4 mt-2">'.$row_groupH["Points"].'</p>
                        </div>
                      </li>
                      <!-- Hidden Modal -->
                      <div class="modal fade" id="groupH_Team'.$place.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                              <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_groupH["TeamName"].'</h3>
                            </div>
                            <div class="modal-body row">
                              <div class="col | flag-pic">
                                <img class="border rounded" src="'.$row_groupH["TeamFlag"].'" alt="">
                              </div>
                              <div class="col align-self-center">
                                <p class="mb-2"><span class="fw-bold">Continent</span>: '.$row_groupH["Continent"].'</p>
                                <p class="mb-2"><span class="fw-bold">Capital</span>: '.$row_groupH["Capital"].'</p>
                                <p class="mb-2"><span class="fw-bold">Population</span>: '.$row_groupH["Population"].'</p>
                                <p class="mb-2"><span class="fw-bold">Key Player</span>: '.$row_groupH["KeyPlayer"].'</p>
                                <p><span class="fw-bold">KP Position</span>: '.$row_groupH["Position"].'</p>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">View Matches</a>
                              <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $place++;
                      }echo'                   
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center" type="button" data-bs-toggle="modal" data-bs-target="#stadGroup'.$row_8["group_ID"].'">
                '.$row_stad8["stad_Name"].'
                </div>
                <!-- Hidden Modal -->
                <div class="modal fade" id="stadGroup'.$row_8["group_ID"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h3 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">'.$row_stad8["stad_Name"].'</h3>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center">
                        <div class="col | stade-pic">
                          <img src="'.$row_stad8["stad_img"].'" alt="">
                        </div>
                        <div class="col">
                          <p class="mb-2 text-center"><span class="fw-bold">Location</span>: '.$row_stad8["Location"].'</p>
                          <p class="mb-2 text-center"><span class="fw-bold">Capacity</span>: '.$row_stad8["Capacity"].'</p>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </section>';
        } else {
          echo "0 results";
        }      
      ?>
  </main>

  <script src="./js/filtre_script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>