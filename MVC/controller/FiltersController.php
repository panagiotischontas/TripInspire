<?php

class FiltersController{

  public $model;


  public function __construct(){
  }

  public function setModel($model){
    $this->model = $model;
  }



  public function getInput(){
    foreach ($this->model->tari as $key => $value) {
      //key = continent
      if(isset($_GET[$key])){
        //ia toate aeroporturile din continentul KEY

        //incepand cu tarile
        for ($i=0; $i < count($value); $i++) {
          //acum luam fiecare aeroport
          for ($j=0; $j < count($this->model->OnAir[$value[$i]]); $j++) {
            if(!in_array($this->model->OnAir[$value[$i]][$j][1],  $this->model->$filterCities)){
                array_push($this->model->$filterCities, $this->model->OnAir[$value[$i]][$j][1]);
            }
          }
        }

      }
    }

    foreach ($this->model->OnAir as $key => $value) {
    //key = tara
      if(isset($_GET[$key])){
        //ia toate aeroporturile din tarile KEY
        for ($i=0; $i < count($value); $i++) {
          //acum luam fiecare aeroport
          for ($j=0; $j < count($this->model->OnAir[$value[$i]]); $j++) {
            if(!in_array($this->model->OnAir[$value[$i]][$j][1],  $this->model->filterCities)){
                array_push($this->model->filterCities, $this->model->OnAir[$value[$i]][$j][1]);
            }
          }
        }

      }
    }


    foreach ($this->model->OnAir as $key => $t) {
      for ($h=0; $h < count($t); $h++) {
      // $t[$h][0] = oras &&  $t[$h][1] = aeroport
        if(isset($_GET[$t[$h][0]])){
          if(!in_array($this->model->OnAir[$key][$h][1],  $this->model->filterCities)){
              array_push($this->model->filterCities, $this->model->OnAir[$key][$h][1]);
          }
        }

      }

    }


for ($i=0; $i < count($this->model->filterCities); $i++) {
  echo $this->model->filterCities[$i] . " ";
}


  }





}
