<?php

namespace AppBundle\ShowFinder;

class DBShowFinder implements ShowFinderInterface{

  public function findByName($query){
    return;
  }

  public function getName(){
    return 'Local Database';
  }
}
