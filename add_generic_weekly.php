<?php

include_once 'phplib/base.php';

if (!connectToDB()) {
    echo "Database connection failed, cannot continue. ";
} else {
    $timestamp = time();
    $username = getUsername();
    $range_start = mysql_real_escape_string($_POST['range_start']);
    $range_end = mysql_real_escape_string($_POST['range_end']);
    $report_id = generateWeeklyReportID($username, $range_start, $range_end);
    $state = "final";
    $report = mysql_real_escape_string($_POST['weeklyupdate']);
    $report_type = $_POST['editor'];
    $query = "INSERT INTO generic_weekly (report_id, range_start, range_end, timestamp, user, state, report, report_type) VALUES ('$report_id', '$range_start', '$range_end', '$timestamp', '$username', '$state', '$report', '$report_type')";
    if (!mysql_query($query)) {
        echo "Database update failed, error: " . mysql_error();
    } else {
        if (isset($_POST['do_email'])) {
            # The user clicked the email button so also email a copy of the report
            if (sendEmailReport($username, $report, $range_start, $range_end)) {
                Header("Location: {$ROOT_URL}/add.php?weekly_succ_email=hellyeah");
            }
        } else {
            Header("Location: {$ROOT_URL}/add.php?weekly_succ=hellyeah");
        }
    }
}

