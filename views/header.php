<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- couleur orange/violet-->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-bzjLLgZOhgXbSvSc5A9LWWo/mSIYf7U7nFbmYIB2Lgmuiw3vKGJuu+abKoaTx4W6" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/calendar.css">
    <title><?= isset($title) ? h($title): 'Pet.net'; ?></title>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="../public/index.php" class="navbar-brand">Mon calendrier</a>
    </nav>

    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }
}
</script>

