<?
// Headers
header('Access-Controll-Allow-Orgin: *');
header('Content-Type: application/json');

// Initializing the API
include_once(__DIR__.'/../core/init.php');

// Initializing Post class
$post = new Post($db);
// get the query
$result = $post->data();
// get the row count
$num = $result->rowCount();

if ($num > 0) {
    $data_array = array();
    $data_array['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $data_item = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email
        );
        array_push($data_array['data'], $data_item);
    }
    // Convert to json and than output
    echo json_encode($data_array);
} else {
    // If the num of Rows equal to zerso
    echo json_encode(array('message' => 'No Data found'));
}
