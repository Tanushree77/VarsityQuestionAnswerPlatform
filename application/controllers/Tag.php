<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Tag extends QA_Publics
{
	function index($str = NULL, $ajax = NULL)
	{
		if (!empty($str))
		{
			
			if (!empty($this->_get($str)))
			{
				foreach ($this->_get($str) as $tag)
				{
					if (!empty($ajax)) {
						$data = array(
							'questions' => $this->qa_model->join4_where_ajax('question', 'question_tag', 'tag', 'user', 'category', 'question_tag.question_id=question.id_question', 'question_tag.tag_id=tag.id_tag', 'question.user_id=user.id_user', 'question.category_id=category.id_category', array('tag.tag_name' => uri_decode($str)), 'question.id_question', 5, $ajax),
							);
						if (!empty($data['questions']))
						{
							$this->load->view('questions/questions_ajax', $data);
						}
						else
						{
							show_404();
							return FALSE;
						}
					} else {
						$data = array(
							'tag' => $this->_get($str),
							'questions' => $this->qa_model->join4_where_ajax('question', 'question_tag', 'tag', 'user', 'category', 'question_tag.question_id=question.id_question', 'question_tag.tag_id=tag.id_tag', 'question.user_id=user.id_user', 'question.category_id=category.id_category', array('tag.tag_name' => uri_decode($str)), 'question.id_question', 5, 0),
							);
						if (!empty($data['questions']))
						{
							$this->_render('tag/questions', $data);
						}
						else
						{
							$data = array('messages' => 'No question yet!');
							$this->_render('independent/messages', $data);
						}
					}
				}
			}
			else
			{
				$data = array('messages' => 'Not found!');
				$this->_render('independent/messages', $data);
			}
		}
		else
		{
			$data = array(
				'tags' => $this->qa_model->all('tag', 'id_tag DESC'),
				);
			if (!empty($data['tags']))
			{
				$this->_render('tag/list', $data);
			}
			else
			{
				$data = array('messages' => 'No tag yet!');
				$this->_render('independent/messages', $data);
			}
		}
	}

    function _get($str)
    {
        $var = $this->qa_model->get('tag', array('tag_name' => uri_decode($str)));
        return ($var == FALSE)?array():$var;
    }
}
