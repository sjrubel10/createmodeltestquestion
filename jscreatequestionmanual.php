<?php
function manual_exam_question_creation( $question_title, $input, $subject_select ){
    $questions = [];
    $questions_raw = preg_split("/\r\n\r\n/", $input );
    foreach ($questions_raw as $question_raw) {
        $question_options = preg_split("/\r\n/", trim($question_raw));
        if( count( $question_options ) < 2 ){
            continue;
        }
        // Extract the question text
        $question_text = array_shift($question_options);
        // Add the question and its options to the array
        $questions[] = [
            "question"          => $question_text,
            "options"           => $question_options,
            'subject_select'    => $subject_select,
        ];

    }

    return $questions;
}
//include '../init.php';
try{
    if( 1 ){
//    if( $is_loggedin && $_SESSION['user_logged_in_data']['user_pointer'] === 1 ) {
        if ( empty( $_POST ) === false) {
            if ( isset( $_POST ) ){
                $exam_title = $_POST['exam_title'];
                $exam_description = $_POST['exam_description'];
                $is_model_test = $_POST['is_model_test'];
                $select_time = $_POST['select_time'];
                $negative_marking = $_POST['negative_marking'];
                $select_privacy = $_POST['select_privacy'];
                $auto_disable = $_POST['auto_disable'];
                $selecttime = $_POST['selecttime'];
                $exam_year = $_POST['exam_year'];
                $questions = $_POST['questions'];

                // Handle file upload
                $image_upload = '';
                if ( isset($_FILES['image_upload'] ) ) {
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["image_upload"]["name"]);
                    if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], $target_file)) {
                        $image_upload = $target_file;
                    }
                }

                $full_question = array(
                    'question_title' => array(
                        'exam_title' => $exam_title,
                        'exam_description' => $exam_description,
                        'is_model_test' => $is_model_test,
                        'select_time' => $select_time,
                        'negative_marking' => $negative_marking,
                        'select_privacy' => $select_privacy,
                        'auto_disable' => $auto_disable,
                        'selecttime' => $selecttime,
                        'exam_year' => $exam_year
                    ),
                    'question_answer_options' => $questions,
                    'image_upload' => $image_upload
                );

                $subject_select = 1;
//    var_dump( $full_question );
                $result = manual_exam_question_creation( $full_question['question_title'], $full_question['question_answer_options'], $subject_select );

                $response = [
                    'success' => true,
                    'error_code' => 202,
                    'data' => $result
                ];
//                echo json_encode( $result );
            }else{
                $response = [
                    'success' => false,
                    'error_code' => 1004,
                    'data' => 'invalid attempt'
                ];
            }
        }else{
            $response = [
                'success' => false,
                'error_code' => 1003,
                'data' => 'invalid attempt'
            ];
        }
    } else{
        $response = [
            'success' => false,
            'error_code' => 1002,
            'data' => 'invalid attempt'
        ];
    }
}catch (Exception $exception){
    $response = [
        'success' => false,
        'error_code' => 1111,
        'data' => 'compilation error'
    ];
}
echo json_encode($response);