
<!-- add -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter Produit</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="add.php"  enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Nom:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="nom" autofocus onblur="verifierNom()"  id="Nom" class="form-control">
                                <div class="alert alert-danger" id="alertNom" style="display: none"> rempli le champs
                                </div>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Marque:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" autofocus onblur="verifierMarque()" id="Marque" name="marque" class="form-control" >
                                <div class="alert alert-danger" id="alertMarque" style ="display:none">rempli le champs </div>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Categorie:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="categorie" autofocus onblur="verifierCategorie() "id="Categorie" class="form-control" >

                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Quantite:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" name="quantite" class="form-control" >
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Prix:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" name="prix" class="form-control" >
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Description:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="description" class="form-control" >
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Image:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="file" name="image"  id="image"">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
                <button type="submit" id="btn" name="add" class="btn btn-primary">ajouter</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    function verifierNom()
    {
        var nom = document.getElementById("Nom").value;

        if(nom == "")
        {
            document.getElementById("alertNom").style.display = "block";
            document.getElementById("btn").disabled = true;
        }
        else
        {
            document.getElementById("alertNom").style.display = "none";
            document.getElementById("btn").disabled = false;
        }
    }
    function verifierMarque()
    {
        var marque = document.getElementById("Marque").value;

        if(marque == "")
        {
            document.getElementById("alertMarque").style.display = "block";
            document.getElementById("btn").disabled = true;
        }
        else
        {
            document.getElementById("alertMarque").style.display = "none";
            document.getElementById("btn").disabled = false;
        }
    }
    function verifierCategorie()
    {
        var categorie = document.getElementById("Categorie").value;

        if(categorie == "")
        {
            document.getElementById("alertCategorie").style.display = "block";
            document.getElementById("btn").disabled = true;
        }
        else
        {
            document.getElementById("alertCategorie").style.display = "none";
            document.getElementById("btn").disabled = false;
        }
    }


</script>
<!-- /.modal -->