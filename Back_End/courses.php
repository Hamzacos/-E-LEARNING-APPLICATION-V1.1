<?php
require_once('connection.php');

$sql = 'SELECT * FROM `courses`';
$query = $conn->prepare($sql);
$query->execute();
$course = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<?php
  $title="Course";
  include 'header.php';
?>
<body>
<div class="container-fluid bg-light overflow-hidden">
        <div class="row flex-nowrap">
            <?php include 'sideBar.php'; ?>
                <div class="col overflow-auto">
                    <?php include 'navbar.php'; ?>
                    <h5 class="fw-bolder d-none d-sm-block mx-3">Courses List</h5>
              <div class="d-flex align-items-center">
              <button type="button" class="btn  bg-info text-white my-3" onclick="window.location.href = 'ajouter.php';">ADD NEW COURSE</button>
              </div>
                    <table class="table table-striped">
                    <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Name</th>
                            <th scope="col">lien</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach($course as $key => $val):?>
                            <tr>
                            <th scope="row"><?php  echo $val['id'] ?></th>
                            <td><img src=" <?php  echo $val['image']?>" alt="Crouse" width="65px" /></td>
                            <td><?php  echo $val['nom'] ?></td>
                            <td><?php  echo $val['lien'] ?></td>
                            <td><a href="modifier.php?id=<?php echo $val['id'] ; ?>"><i class="fal fa-pen text-info"></a></i>
                                <a href = "suprimer.php?id=<?= $val['id'] ?>"><i class="fal fa-trash text-info mx-1"></a></i></td>
                            </tr>
                            <?php endforeach;; ?>
                        </tbody>
</table>
</div>
        </div>
                </div>
</body>
</html>