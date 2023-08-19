<?php
require('model/database.php');
require('model/assignments_db.php');
require('model/course_db.php');

$assignment_id = filter_input(INPUT_POST, 'assignment_id', FILTER_VALIDATE_INT);
$description = htmlspecialchars(filter_input(INPUT_POST, 'description'));
$course_name = htmlspecialchars(filter_input(INPUT_POST, 'course_name'));

$course_id = filter_input(INPUT_POST, 'course_id', FILTER_VALIDATE_INT);
if (!$course_id) {
    $course_id = filter_input(INPUT_GET, 'course_id', FILTER_VALIDATE_INT);
}


$action = htmlspecialchars(filter_input(INPUT_POST, 'action'));
if (!$action) {
    $action = htmlspecialchars(filter_input(INPUT_GET, 'action'));
    if (!$action) {
        $action = 'list_assignments';
    }
}


switch ($action) {
    default;
        $course_name = get_course_name($course_id);
        $course = get_courses();
        $assignments = get_assignment_by_course($course_id);
        include('view/assignment_list.php');
}
