<?php
session_start();
extract($_SESSION);
if (isset($isLoggedIn) & $isLoggedIn = true) {
    echo "User authenticated. Showing dashboard";
} else {
    header('Location: index.php');
}
include "Config.php";
$config = new Config();

function listAllCharacters()
{
    $characters = array();
    $databaseConfig = new DatabaseConfig();
    $mysqli = new mysqli($databaseConfig->mysqlHost, $databaseConfig->mysqlUsername, $databaseConfig->mysqlPassword, $databaseConfig->mysqlDatabase);
    if (mysqli_connect_errno()) {
        $error = mysqli_connect_error();
        trigger_error("Database Connection Error, $error", E_USER_NOTICE);
    }
    $query = "SELECT * FROM users";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            array_push($characters, $row);
        }
        $result->close();
    }
    return $characters;
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<script src="js/dashboard.js"></script>
<body>
<?php include "partials/header.php" ?>
<div class="container">
    <h3>Dashboard</h3>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">General Settings</a></li>
        <li><a data-toggle="tab" href="#menu1">Buyback Rate</a></li>
        <li><a data-toggle="tab" href="#menu2">Members</a></li>
    </ul>
    <form class="form" id="generalSettingsForm">
    </form>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>General Settings</h3>
            <div class="row">
                <div class="col col-md-6">
                    <div class="form-group">
                        <label for="allianceName">Alliance/Corp Name
                            <input id="allianceName" class="form-control" type="text" name="allianceName"
                                   value="<?php echo $config->allianceName; ?>" required form="generalSettingsForm">
                        </label>
                    </div>
                    <div class="form-group">
                        <input id="submit" type="submit" class="btn btn-success" value="Save" form="generalSettingsForm">
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Buyback Rate</h3>
            <div class="form-group">
                <label for="buyBackRate"> Default Buyback Rate
                    <input id="buyBackRate" class="form-control" type="number" min="0" step="0.01"
                           name="buyBackRate"
                           value="<?php echo $config->buyBackRate; ?>" required form="generalSettingsForm">
                </label>
            </div>
            <div class="form-group">
                <input id="submit" type="submit" class="btn btn-success" value="Save" form="generalSettingsForm">
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Members</h3>
            <div class="row">
                <div class="col col-md-6">
                    <div class="allowedMembers">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Allowed members
                            </div>
                            <div class="panel-body">
                                <div class="member_list">
                                    <ol>
                                        <?php
                                        $characters = listAllCharacters();
                                        foreach ($characters as $character) {
                                            $characterName = $character['characterName'];
                                            $characterId = $character['characterId'];
                                            echo "<li>$characterName - $characterId <span data-characterid='$characterId' class='fa fa-minus-circle delete' style='color: red'></span></li>";
                                        }
                                        ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <p>Add a new member able to access the dashboard</p>
                    <form class="form" id="memberManagementForm">
                        <div class="form-group">
                            <input id="characterName" class="form-control" type="text" name="characterName"
                                   placeholder="Character Name" required>
                        </div>
                        <div class="form-group">
                            <input id="characterId" class="form-control" type="number" name="characterId"
                                   placeholder="Character Id" aria-describedby="characterIdHelpBlock" required>
                        </div>
                        <div id="characterIdHelpBlock" class="helpBlock">
                            <p class="text-info">Character ID can be obtained like <a
                                        href="https://forums.eveonline.com/default.aspx?g=posts&t=155577">so...</a></p>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-warning" type="submit" value="Add">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "partials/footer.php" ?>
</body>
</html>