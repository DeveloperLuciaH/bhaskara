<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Bhaskara</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="container">

        <form name="calculoBhaskara" action="logica-bhaskara.php" method="post" class="mt-5">
            <h2 class="text-center"><i class="fas fa-subscript"></i> Calculo Bhaskara </h2>

            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="valorA_ini">Valor inicial de A</label>
                    <input type="text" class="form-control" name="valorA_ini" placeholder="">

                    <label for="valorA_fim">Valor final de A</label>
                    <input type="text" class="form-control" name="valorA_fim" placeholder="">
                </div>

                <div class="form-group col-md-4">
                    <label for="valorB_ini">Valor inicial de B</label>
                    <input type="text" class="form-control" name="valorB_ini" placeholder=" ">

                    <label for="valorB_fim">Valor final de B</label>
                    <input type="text" class="form-control" name="valorB_fim" placeholder=" ">

                </div>

                <div class="form-group col-md-4">
                    <label for="valorC_ini">Valor inicial de C</label>
                    <input type="text" class="form-control" name="valorC_ini" placeholder="">

                    <label for="valorC_fim">Valor final de C</label>
                    <input type="text" class="form-control" name="valorC_fim" placeholder="">


                </div>
            </div>

            <div class="text-center mt-4"><button type="submit" class="btn btn-dark ">Calcular</button> </div>

        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(() => {
            $('#btn-close-all').on('click', e => {
                $('.alert').alert('close');
            });
        });
    </script>

</body>

</html>