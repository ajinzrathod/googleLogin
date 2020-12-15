<?php
require_once('head.php');
require_once('google-signin.php');
?>

<!-- This button is just for loading auth2, thats why it is hidden -->
<div class="g-signin2" data-onsuccess="onSignIn" style="display: none;"></div>

<a href="#" id="signOut" onclick="signOut();">Sign out</a>
<script>
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
  }
</script>

