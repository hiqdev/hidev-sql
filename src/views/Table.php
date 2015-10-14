<?= "<?php\n" ?>

CREATE TABLE <?= $table ?> (
    <?= $id_field ?>    integer     NOT NULL
);
SELECT * INTO old_<?= $table ?> FROM <?= $table ?> limit 0;
