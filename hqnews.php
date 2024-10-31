<?php
include('simple_html_dom.php');

$html = file_get_html('http://www.surfrider.org/pages/news-from-surfrider-national/');

foreach($html->find('div.entry') as $e)
	$content = $e->outertext;

foreach($e->find('ul') as $f)
	echo $f->outertext;
?>
