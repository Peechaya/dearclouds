<html>
    <head>
        <title>Laravel and Jcrop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/jquery.Jcrop.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/jquery.Jcrop.min.js"></script>
    </head>
    <body>
        <h2>Image Cropping with Laravel and Jcrop</h2>
        <img src="<?php echo $file ?>" id="cropimage">

        <?= Form::open() ?>
        <?= Form::hidden('file', $file) ?>
        <?= Form::hidden('x', '', array('id' => 'x')) ?>
        <?= Form::hidden('y', '', array('id' => 'y')) ?>
        <?= Form::hidden('w', '', array('id' => 'w')) ?>
        <?= Form::hidden('h', '', array('id' => 'h')) ?>
        <?= Form::submit('Crop it!') ?>
        <?= Form::close() ?>

        <script type="text/javascript">
            $(function() {
                $('#cropimage').Jcrop({
                    onSelect: updateCoords
                });
            });
            function updateCoords(c) {
                $('#x').val(c.x);
                $('#y').val(c.y);
                $('#w').val(c.w);
                $('#h').val(c.h);
            };
        </script>
    </body>
</html>
