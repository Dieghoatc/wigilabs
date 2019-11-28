<?php include('includes/header.php'); ?>

<form>
    <section id="conviertete-en-orador" class="pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col text-uppercase text-center">
                    <small>PONTE EN CONTACTO</small>
                    <h2>Comenta tus inquietudes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <textarea name="text" class="form-control form-control-lg" placeholder="Sobre qué quieres comentar?"></textarea>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <button type="button" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</form>

<?php include('includes/footer.php'); ?>
