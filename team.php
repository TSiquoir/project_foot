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
coachs.name AS coach_name

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



<section class="container">
  <div class="row">
    <div class="col logo_team">
       <img src="<?php echo $team["logo"]; ?>" alt="Logo de l'équipe">
    
    </div>
    <div class="col name_team">
      <?php echo $team["name"]; ?>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php echo $team["president"]; ?>
      <?php echo $team["fundation_date"]; ?>
    </div>
    <div class="col">
        <?php echo $team["coach_name"]; ?>
    </div>
    <div class="col">
      <a href="<?php echo $team["website"]; ?>"><?php echo $team["website"]; ?></a>
      <a href="<?php echo $team["link"]; ?>"><?php echo $team["link"]; ?>"</a>
    </div>
  </div>
</section>
<?php echo $team["short_name"];?>

<img src="" alt="">




<?php include('include/footer.php'); ?>