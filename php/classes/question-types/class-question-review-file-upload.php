<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class QSM_Question_Review_File_Upload extends QSM_Question_Review {
    function __construct( $question_id = 0 , $question_title_old = '' , $answer_array = array() ){
        parent::__construct( $question_id , $question_title_old , $answer_array );
    }

    public function set_user_answer(){
        if ( isset( $_POST[ 'question' . $this->question_id ] ) ) {
            $user_answer_key   = 'url';
            $user_answer_value = $this->sanitize_answer_from_post( $_POST[ 'question' . $this->question_id ] );
            $this->user_answer[$user_answer_key] = $user_answer_value;
        }
    }

    public function set_answer_status(){
        $this->answer_status = 'correct';    
    }
}