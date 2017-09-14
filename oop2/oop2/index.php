<?php  
include 'Page.php';
include 'User.php';

$contact = new Page();

// $contact->header = 'CONTACT HEADER';

// echo $contact->header;
// echo "<p></p>";
// echo $contact->footer;
// echo "<p></p>";
// $contact->view_info();

// echo "<p></p>";
// $param = 'I am just a parameter';
// $contact->print_param($param);

// $contact->view_footer();

// echo "<p></p>";
// $header = 'CONTACT HEADER FROM PARAMETER';
// $contact->view_header($header);
$num = 0;
$admin = new User($num, 'admin', 'passwprd', 'admin');
$num = $admin->view_count();
echo "<p></p>";
$editor = new User($num);

$num = $editor->view_count();

echo $num;