<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Dodaj novi film</title>
    </head>
    <body>
        <form method="POST" action="/filmovi" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="naslov">Naziv filma</label>
                <input type="text" class="form-control" placeholder="Unesite naziv filma" name="naslov"> 
            </div>

            <label class="my-1 mr-2" for="zanr">Žanr</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="zanr">

                <option value="1">Akcija</option>
                <option value="2">Komedija</option>
                <option value="3">Triler</option>
            </select>

            <div class="form-group ">
                <label for="godina">Godina</label>
                <input type="number" min="1900" max="2020" class="form-control" placeholder="Unesite godinu filma" name="godina">   
            </div>

            <div class="form-group ">
                <label for="trajanje">Trajanje</label>
                <input type="number" class="form-control" placeholder="Unesite trajanje filma" name="trajanje">   
            </div>

            <div class="form-group">
                <label for="slika">Slika filma</label>
                <input type="file" class="form-control-file" name="slika" enc>
            </div>

            <button type="submit" class="btn btn-primary" name="novi_film_sbm">Submit</button>
        </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

