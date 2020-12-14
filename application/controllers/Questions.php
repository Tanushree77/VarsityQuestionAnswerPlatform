<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Questions extends QA_Publics
{
	function index($str = NULL)
	{
		if (!empty($str))
		{
			$data = array(
				'questions' => $this->qa_model->join2_ajax('question', 'user', 'category', 'question.user_id=user.id_user', 'question.category_id=category.id_category', 'question.id_question DESC', 5, $str),
				'question_tag' => $this->_question_tag(),
				);
			if (!empty($data['questions']))
			{
				$this->load->view('questions/questions_ajax', $data);
			}
			else
			{
				$data = array('messages' => 'Something is Wrong');
	    	$this->_render('independent/messages', $data);
			}
		}
		else
		{
			$data = array(
				'questions' => $this->qa_model->join2_ajax('question', 'user', 'category', 'question.user_id=user.id_user', 'question.category_id=category.id_category', 'question.id_question DESC', 5, 0),
				'question_tag' => $this->_question_tag(),
				);
			if (!empty($data['questions']))
			{
				$this->_render('questions/questions', $data);
			}
			else
			{
				$data = array('messages' => 'No data can be displayed yet.');
				$this->_render('independent/messages', $data);
			}
		}
	}

	function unanswereds($str = NULL)
	{
		if (!empty($str)) {
			$data = array(
				'questions' => $this->qa_model->join2_where_ajax('question', 'user', 'category', 'question.user_id=user.id_user', 'question.category_id=category.id_category', array('answer_id' => NULL), 'question.id_question DESC', 5, $str),
				'question_tag' => $this->_question_tag(),
				);
			if (!empty($data['questions']))
			{
				$this->load->view('questions/unanswereds_ajax', $data);
			}
			else
			{
				$data = array('messages' => 'Something is Wrong');
	        	$this->_render('independent/messages', $data);
			}
		} else {
			$data = array(
				'questions' => $this->qa_model->join2_where_ajax('question', 'user', 'category', 'question.user_id=user.id_user', 'question.category_id=category.id_category', array('answer_id' => NULL), 'question.id_question DESC', 5, 0),
				'question_tag' => $this->_question_tag(),
				);
			if (!empty($data['questions']))
			{
				$this->_render('questions/unanswereds', $data);
			}
			else
			{
				$data = array('messages' => 'No data can be displayed yet.');
				$this->_render('independent/messages', $data);
			}
		}
	}

	function most_view($str = NULL)
	{
		if (!empty($str)) {
			$data = array(
				'questions' => $this->qa_model->join2_ajax('question', 'user', 'category', 'question.user_id=user.id_user', 'question.category_id=category.id_category', 'question.viewers DESC', 5, $str),
				'question_tag' => $this->_question_tag(),
				);
			if (!empty($data['questions']))
			{
				$this->load->view('questions/most_view_ajax', $data);
			}
			else
			{
				$data = array('messages' => 'Something is Wrong');
	    	$this->_render('independent/messages', $data);
			}
		} else {
			$data = array(
				'questions' => $this->qa_model->join2_ajax('question', 'user', 'category', 'question.user_id=user.id_user', 'question.category_id=category.id_category', 'question.viewers DESC', 5, 0),
				'question_tag' => $this->_question_tag(),
				);
			if (!empty($data['questions']))
			{
				$this->_render('questions/most_view', $data);
			}
			else
			{
				$data = array('messages' => 'No data can be displayed yet.');
				$this->_render('independent/messages', $data);
			}
		}
	}

    function _question_tag()
    {
        $var = $this->qa_model->join2('question_tag', 'question', 'tag', 'question_tag.question_id=question.id_question', 'question_tag.tag_id=tag.id_tag', 'question_tag.id_qt');
        return ($var == FALSE)?array():$var;
    }
}
