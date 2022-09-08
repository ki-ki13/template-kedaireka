<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="stylesheet" href="<?php echo e('/css/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('table-produksi')->html();
} elseif ($_instance->childHasBeenRendered('6QhfCob')) {
    $componentId = $_instance->getRenderedChildComponentId('6QhfCob');
    $componentTag = $_instance->getRenderedChildComponentTagName('6QhfCob');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6QhfCob');
} else {
    $response = \Livewire\Livewire::mount('table-produksi');
    $html = $response->html();
    $_instance->logRenderedChild('6QhfCob', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\FINANCE\template-kedaireka\coba_livewire\resources\views/coba.blade.php ENDPATH**/ ?>