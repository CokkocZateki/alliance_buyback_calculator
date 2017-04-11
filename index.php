<?php
session_start();
include "Config.php";
$config = new Config();
?>
<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<body>
<?php include "partials/header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form id="buyBackItems">
                <div class="form-group">
                    <label for="ore"> View your item(s) hangar in either list or details mode (or select items from your
                        assets window) - <kbd>Ctrl + A</kbd> to select all items - <kbd>Ctrl + C</kbd> to copy - <kbd>Ctrl
                            + V</kbd> into the text box below</label>
                    <textarea
                            class="form-control"
                            id="ore"
                            name="ore"
                            rows="10"
                            required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" id="computeBuybackButton" value="Compute buyback" class="btn btn-info">
                </div>
            </form>
            <div>
                <h4 id="grandTotalLabel" style="display: none">Grand Total: <span id="grandTotal"
                                                                                  class="text-success">0</span> ISK</h4>
                <h4 id="buyBackRateLabel" style="display: none">Buy Back Rate: <span id="buyBackRate" class="text-info">0</span>
                </h4>
            </div>
        </div>
        <div class="col-md-6">
            <h3 id="results" style="display: none" class="text-warning">Results</h3>
            <div id="myTable">
            </div>
        </div>
    </div>
</div>
<?php include "partials/footer.php" ?>
</body>
</html>
