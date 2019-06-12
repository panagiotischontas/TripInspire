<?php

class FiltersController{

  public $model;


  public function __construct(){
  }

  public function setModel($model){
    $this->model = $model;
  }



  public function getInput(){
    $this->model->filterDepartureCity="";
    $this->model->filterDate = "";
    $this->model->filterPrice[0] = "";
    $this->model->filterPrice[1] = "";
    $this->model->filterCities = array();
    //GET THE DEPARTURE CITY
    $this->model->filterDepartureCity = "IAS"; //default


    //GET THE DEPARTURE DATE
    $this->model->filterDate = date("d/m/Y", strtotime("+1 day"));


    $this->model->filterPrice[0] = $_GET['minPrice'];
    $this->model->filterPrice[1] =  $_GET['maxPrice'];



    foreach ($this->model->tari as $key => $value) {
      //key = continent
      if(isset($_GET[$key])){
        //ia toate aeroporturile din continentul KEY

        //incepand cu tarile
        echo "value: " . count($value);
        for ($i=0; $i < count($value); $i++) {
          //acum luam fiecare aeroport
          // echo "onair: : " . count($this->model->OnAir[$value[$i]]);
          echo $value[$i] . " ";
          for ($j=0; $j < count($this->model->OnAir[$value[$i]]); $j++) {
            echo $this->model->OnAir[$value[$i]][$j][1] . " ";
            if(!in_array($this->model->OnAir[$value[$i]][$j][1],  $this->model->filterCities)){
                array_push($this->model->filterCities, $this->model->OnAir[$value[$i]][$j][1]);
            }
          }
        }

      }
    }

    foreach ($this->model->OnAir as $key => $value) {
    //key = tara
      if(isset($_GET[$key])){
        //ia toate aeroporturile din tarile KEY
        // echo $value[0][0] . " " ;
        for ($i=0; $i < count($value); $i++) {
          //acum luam fiecare aeroport
          //for ($j=0; $j < count($this->model->OnAir[$value[$i]]); $j++) {
            if(!in_array($value[$i][1],  $this->model->filterCities)){
                array_push($this->model->filterCities, $value[$i][1]);
            }
          //}
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

echo  count($this->model->filterCities) . " ";
for ($i=0; $i < count($this->model->filterCities); $i++) {
  echo $this->model->filterCities[$i] . " ";
}


  }





}
