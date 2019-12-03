<?php include('include/header.php'); ?>

<?php
//==============================================================
//Pour récuperer les données des équipes
//==============================================================
require('utils/db.php');

$db = dbConnect();

$idTeam = $_GET['id'];

$stmt = $db->prepare('SELECT 
teams.* ,
coachs.id AS coach_id,
coachs.name AS coach_name,
coachs.birthday_date AS coach_birthday,
coachs.nationality AS coach_nationality

FROM teams
INNER JOIN coachs_has_teams
ON coachs_has_teams.id_team =teams.id
INNER JOIN coachs
ON coachs.id =coachs_has_teams.id_coach
WHERE teams.id = :id');   
$stmt->bindValue(':id', $idTeam);
$stmt->execute();
$team = $stmt->fetch();



?>


<body>
  <header class="container-fluide">
    <div class="container">
      <div class=" row rounded  header_contents_team">    
        <div class="col-md-3 align-self-center">
          <img src="<?php echo $team["logo"]; ?>" alt="Logo de l'équipe"> 
        </div>
        <div class="col-md-9 align-self-center name_team">
          <?php echo $team["name"]; ?>
        </div>      
      </div>
    
      <div class="row sub_team_header">

        <ul class="list-group col-md-6">
          <li class="list-group-item">Président : <?php echo $team["president"]; ?></li>
          <li class="list-group-item">Date de création : <?php echo $team["fundation_date"]; ?></li>
          <li class="list-group-item">Adresse : <?php echo $team["adress"]; ?></li>
        </ul>

        <ul class="list-group col-md-6">
          <li class="list-group-item">Entraîneur : <?php echo $team["coach_name"]; ?></li>
          <li class="list-group-item">Date d'anniversaire : <?php echo $team["coach_birthday"]; ?></li>
          <li class="list-group-item">Nationalité : <?php echo $team["coach_nationality"]; ?></li>
        </ul>
      </div>

      <div class="row team_button">
        <div class="col-md-6 text-center">
          <button type="button" class="btn btn-outline-success">
            <a href="<?php echo $team["website"]; ?>">www.mhscfoot.com</a>
          </button>
        </div>
        <div class="col-md-6 text-center">
          <button type="button" class="btn btn-outline-success">
            <a href="<?php echo $team["link"]; ?>">https://www.lequipe.fr</a
            ></button>
          </div>
      </div>
    </div>       
  </header>

  <section>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

  </section>
</body>











<?php include('include/footer.php'); ?>