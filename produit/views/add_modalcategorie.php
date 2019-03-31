<!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter Categorie</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="addcategorie.php" , enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Categorie:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" autofocus onblur="verifierCategorie()" id="Categorie" name="categorie">
                                <div class="alert alert-danger" id="alertCategorie" style="display: :none">rempli le champs </div>

                            </div>
                        </div>
                        <div style="height:10px;"></div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
                <button type="submit" name="add" id="btn" class="btn btn-primary">enregistrer</button>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
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