var intervalID = window.setInterval(myCallback, 1000*60*60*6); //*60*60*6

function myCallback() {
  console.log("i am searching here...");
  let myURL = "https://api.skypicker.com/flights?&limit=50&curr=EUR&fly_from=";
  let = "<?php echo  ?>";



  IAS&fly_to=RO&date_from=20/06/2019";

//concateneaza toi parametrii

  let req  = new Request(myURL, {
  	method: 'GET'
  });


  fetch(req)
  .then((response) => response.json())
  .then(data => {
    if(data.hasOwnProperty('data')){
      //am gasit un zbor
      let res =  data.data;
      console.log(res[0]);
    }
  });

}
