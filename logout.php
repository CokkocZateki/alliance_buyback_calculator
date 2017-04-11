<?php
session_start();
session_unset();
?>

<p>You have been logged out. Redirecting in in <span id="counter">3</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    let i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>