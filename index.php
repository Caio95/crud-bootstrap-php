<?php require_once('config.php'); 
    require_once DBAPI;

    include(HEADER_TEMPLATE);
    $db = open_database();

?>

<h1>Dashboard</h1>
<hr>

<?php if($db) : ?>

<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-2">
        <a href="customers/add.php" class="btn btn-primary">
            <div class="row">
                <div class="col-xs-12 text-center">
                <i class="fa fa-plus fa-3x" aria-hidden="true"></i><p>Novo Cliente</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-2">
        <a href="customers" class="btn btn-default">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                    <p>Clientes</p>
                </div>
            </div>
        </a>
    </div>
</div>

<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>