<strong>Database Connected: </strong>
<?php
    try {
        \DB::connection('oracle2')->getPDO();
        echo \DB::connection('oracle2')->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
?>
