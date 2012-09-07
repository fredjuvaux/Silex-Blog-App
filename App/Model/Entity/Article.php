<?php

namespace App\Model\Entity;

class Article extends Base {

  protected $_id;
  protected $_rev;
  protected $title;
  protected $content;
  protected $slug;
  protected $tags;
  protected $category_ids = array();
  protected $user_id;
  protected $type = "article";
  /**
  * States if the article appears on the homepage
  */
  protected $isFeatured=true;

}