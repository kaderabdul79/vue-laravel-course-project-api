<?php
// for success message
function send_response($message,$data = null){
    $response = [
        'status' => true,
        'message' => $message,
        'data' => $data
    ];

    return response()->json($response);
}

// for errors message
function send_error($message,$messages = [],$code = 404){
    $response = [
        'status' => false,
        'message' => $message
    ];

    !empty($messages) ? $response['errors'] = $messages : null;
    return response()->json($response,$code);
}

?>