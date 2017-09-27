<?php
Class ControllerNews extends Controller
{
	
	public $layouts = "news";
	
	function index() {
		
        $model = new ModelNews($this->registry);
        $news = $model->getNews();
        $this->template->set('news', $news);
        $this->template->show('news');
		
    }
	
	function article($id){
		
		echo "article: $id";
		
	}
		
}
?>