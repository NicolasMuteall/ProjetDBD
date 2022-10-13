<?php
    include('head.php');
    include('Connect.php');


    $cnx = null;
?>

<div class="container border formulaireconnexion">
    <form id="formconnexion" class="mx-auto mt-3">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </div>
    
    </form>
</div>

<?php include('footer.php'); ?>