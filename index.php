<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS Feed Reader</title>

    <link rel="stylesheet" href="./public/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <script type="module" src="./public/scripts/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container rounded my-5">
        <form id="feed-reader" class="row g-3 align-items-end justify-content-center p-5" action="./public/parser.php" method="post">
            <div class="col-3">
                <label for="feed-title">Feed Title</label>
                <input class="form-control" type="text" id="feed-title" name="title" required>
            </div>
            <div class="col-5">
                <label for="feed-url">Feed URL</label>
                <input class="form-control" type="text" id="feed-url" name="url" required>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
            <div class="col"></div>
            <div class="col-auto">
                <label for="orderBy">Ordina per</label>
                <select class="form-select" name="orderBy" id="orderBy">
                    <option value="date_asc">Data ASC</option>
                    <option value="date_desc" selected>Data DESC</option>
                    <option value="title_asc">Titolo ASC</option>
                    <option value="title_desc">Titolo DESC</option>
                </select>
            </div>
            <div class="col-auto">
                <label for="pagination">Per pagina</label>
                <select class="form-select" name="per_page" id="pagination">
                    <option value="five">5</option>
                    <option value="ten" selected>10</option>
                    <option value="twenty">20</option>
                    <option value="fifty">50</option>
                </select>
            </div>
            <div class="row col-12 p-0 mt-3 align-items-center">
                <div class="col">
                    <label class="d-inline-block col-auto align-middle p-0" for="search">Cerca</label>
                    <div class="col-auto"></div>
                    <input type="search" id="search" class="form-control col">
                </div>
                <div class="col-auto">
                    <label for="search-type">Cerca per</label>
                    <select class="form-select" name="search_type" id="search-type">
                        <option value="all" selected></option>
                        <option value="title">Titolo</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="px-5">
            <span id="summary" class="px-1"></span>
        </div>
        <div id="container" class="p-5"></div>
        <div id="pages" class="row justify-content-center pb-5"></div>
    </div>
</body>
</html>