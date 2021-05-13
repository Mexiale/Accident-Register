<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="/css/font.css">
    <title>Accident Form</title>
</head>

<body>
 <div class="container-fluid">
         <div class="col-lg-6 offset-3 mt-5 form-card">
        <div class="offset-4">
            <div>
                <img src="logo.png" alt="Logo">
            </div>
            <div>
                <h4>Kevin KONE</h4>
            </div>
        </div>
        <form>
            <div class="form-group row">
                <label for="nbrevictime" class=" label col-sm-4 col-form-label col-form-label-sm">Nombre de victime</label>
                <div class="col-sm-8">
                    <input name="nb_victime" id="nb_victime" type="number" class="form-control form-control-sm"
                        id="nbrevictime" placeholder="Veuillez entrer le nombre de victime" require>
                </div>
            </div>
            <div class="form-group row">
                <label for="lieu" class="label col-sm-4 col-form-label col-form-label-sm">Lieu</label>
                <div class="col-sm-8">
                    <select class="custom-select" id="validationTooltip04" required>
                        <option selected disabled value="">Veuillez selctionner un lieu</option>
                        <option value="Axe Abidjan-Yamoussoukro">Axe Abidjan-Yamoussoukro</option>
                        <option value="Autoroute du Nord">Autoroute du Nord</option>
                        <option value="Axe Ferke-Katiola">Axe Ferke-Katiola</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="date" class="label col-sm-4 col-form-label col-form-label-sm">Nombre de victime</label>
                <div class="col-sm-8">
                    <input name="date" id="date" type="date" class="form-control form-control-sm" id="date"
                        placeholder="Veuillez choisir une date" require>
                </div>
            </div>
            <div class="form-group row">
                <label for="mise_en_cause" class=" label col-sm-4 col-form-label col-form-label-sm">Mise en Cause</label>
                <div class="col-sm-8">
                    <input name="mise_en_cause" id="mise_en_cause" type="text" class="form-control form-control-sm"
                        id="mise_en_cause" placeholder="Veuillez entrer la mise en cause" require>
                </div>
            </div>
            <button type="submit" class="btn btn-danger col-lg-4 offset-4 btn">Enregistrer</button>
        </form>
    </div>
 </div>
</body>

</html>