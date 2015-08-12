<?php
header('Content-Type: application/json');
echo json_encode((object) array('success'=>true));

switch ($_POST['operation'] ) {
    case 'writeUsers':
        file_put_contents('/var/www/html/discussion-forum/assets/js/users.js', "forumUsers=".$_POST['json']);

        break;
    case 'read':
        $data = file_get_contents('/var/www/html/discussion-forum/assets/js/users.js');
        echo $data;
        break;
    case 'writePosts':
        file_put_contents('/var/www/html/discussion-forum/assets/js/posts.js', "forumPosts=".$_POST['json']);

        break;    
}

?>

 