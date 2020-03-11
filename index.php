<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Certification Website</title>
</head>

<body>
    <div class="container p-5">
        <h1 class="text-center">Person's Data</h1>
        <form action="generate.php" method="post">
            <div class="form-group">
                <label for="cert-title">Certificate Title</label>
                <input type="text" class="form-control" id="cert-title" name="title" placeholder="ex. Certificate of Appreciation">
            </div>
            <div class="form-group">
                <label for="cert-head">Certificate Headline</label>
                <input type="text" class="form-control" id="cert-head" name="headline" placeholder="ex. First Place">
            </div>
            <div class="form-group">
                <label for="cert-date">Date</label>
                <input type="text" class="form-control" id="cert-date" name="date" placeholder="ex. 21 September 2020">
            </div>
            <div class="form-group">
                <label for="cert-name">Person Name</label>
                <input type="text" class="form-control" id="cert-name" name="name" placeholder="ex. M Hilmy Haidar">
            </div>
            <div class="form-group">
                <label for="cert-desc">Description</label>
                <textarea class="form-control" id="cert-desc" name="description" rows="3" placeholder="ex. Congratulations"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Generate</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>