<?php
$host = "127.0.0.1"; $user = "sql_ida_irvandod"; $pass = "e15b6a37fb08e"; $db = "sql_ida_irvandod";
$mysqli = @new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    echo "CONNECT_ERRNO=".$mysqli->connect_errno."\n";
    echo "CONNECT_ERROR=".$mysqli->connect_error."\n";
    exit(1);
}
$result = $mysqli->query("SELECT COUNT(*) FROM wp_options");
$row = $result->fetch_row();
print "OK COUNT=".$row[0]."\n";
$mysqli->close();
