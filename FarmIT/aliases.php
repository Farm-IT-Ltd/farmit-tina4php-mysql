<?php

/**
 * FarmIT namespace aliases.
 *
 * Maps FarmIT\ClassName to Tina4\ClassName so both namespaces
 * work during the migration period. Existing Tina4\ imports are
 * unaffected. New code may use FarmIT\ imports.
 */

$__t4 = 'Tina4\\DataMySQL';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\DataMySQL');
}
$__t4 = 'Tina4\\MySQLConnection';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\MySQLConnection');
}
$__t4 = 'Tina4\\MySQLExec';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\MySQLExec');
}
$__t4 = 'Tina4\\MySQLMetaData';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\MySQLMetaData');
}
$__t4 = 'Tina4\\MySQLQuery';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\MySQLQuery');
}
unset($__t4);
