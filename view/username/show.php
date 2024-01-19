<?php
require_once("c://xampp/htdocs/proyectoSL2/view/head/head.php");
require_once("c://xampp/htdocs/proyectoSL2/controller/usernameController.php");

$obj = new usernameController();
$data = $obj->show($_GET['id']);
?>

<h2 class="text-center">Detalles del registro</h2>

<pre><?php var_dump($data); ?></pre>

<table class="table- container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
        </tr>   
    </thead>

    <tbody>
        <?php if ($data !== false && !empty($data["Idtip"])): ?>
            <tr>
                <td><?php echo $data["Idtip"]; ?></td>
                <td><?php echo $data["NombreTipo"]; ?></td>   
            </tr>
        <?php else: ?>
            <tr>
                <td colspan="2">No se encontraron datos.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/proyectoSL2/view/head/footer.php");
?>
