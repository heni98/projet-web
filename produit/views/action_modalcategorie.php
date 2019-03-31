<!-- Delete -->
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer Categorie</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid text-center">
                    <h5>Voulez-vous vraiment supprimer cette categorie</h5>
                    <h2>nom: <b><?php echo $row['categorie']; ?></b></h2>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="deletecategorie.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Yes</a>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier Categorie</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editcategorie.php?id=<?php echo $row['id']; ?>">
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Nom:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="categorie" id="Categorie" autofocus onblur="verifierCategorie()" class="form-control" value="<?php echo $row['categorie']; ?>">
                                <div class="alert alert-danger" id="alertCategorie" style="display: :none">rempli le champs </div>

                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
                <button type="submit" name="edit" class="btn btn-warning">enregistrer</button>
            </div>
            </form>
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
<!-- /.modal -->