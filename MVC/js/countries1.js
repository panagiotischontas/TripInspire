function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }

  /*An array containing all the country names in the world:*/
  var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];


var cities = ["Benguela", "Cabinda", "Jamba", "Luanda - 4 de Fevereiro", "Uige", "Cotonou - Cotonou Cadjehoun Airport", "Francistown", "Gaborone - Sir Seretse Khama International Airport", "Jwaneng", "Maun", "Selibi Phikwe", "Bobo/Dioulasso", "Ouagadougou", "Bujumbura - Bujumbura International Airport", "Douala", "Garoua", "Maroua", "N Gaoundere", "Yaounde", "Praia - Nelson Mandela International Airport", "Sal", "Bambari", "Bangassou", "Bangui - M Poko International Airport", "Berberati", "Biraro", "Bria", "Carnot", "Ouadda", "Abeche", "Moundou", "N Djamena", "Anjouan - Anjouan Airport", "Moroni - Prince Said Ibrahim", "Brazzaville - Maya-Maya Airport", "Kinshasa - N Djili", "Kisangani", "Lisala", "Lumbumbashi", "Pointe Noire", "Djibouti (city) - Djibouti-Ambouli International Airport", "Abu Rudeis", "Abu Simbel", "Al Arish", "Alexandria - Borg el Arab Airport", "Alexandria - El Nhouza Airport", "Assiut", "Aswan - Daraw Airport", "Cairo - Cairo International Airport", "El Minya", "Hurghada International", "Kharga - New Valley", "Luxor", "Marsa Alam", "Marsa Matrah (Marsa Matruh)", "New Valley - Kharga", "Port Said", "Santa Katarina - Mount Sinai", "Sharm El Sheikh", "Siwa", "Malabo - Malabo International Airport", "Asmara - Asmara International", "Addis Ababa - Bole International Airport", "Jijiga", "Jimma", "Jinka - Baco/Jinka Airport", "Lambarene", "Libreville", "Moanda", "Mouila", "Mvengue", "Oyem", "Port Gentil", "Banjul - Banjul International Airport (Yundum International)", "Accra - Kotoka International Airport", "Aiyura", "Amazon Bay", "Bissau - Osvaldo Vieiro International Airport", "Conakry - Conakry International Airport", "Jacquinot Bay", "Labe", "Lae - Lae Nadzab Airport", "Malabo - Malabo International Airport", "Manguna", "Port Moresby - Jackson Field", "Bissau - Osvaldo Vieiro International Airport", "Malindi", "Mombasa - Moi International", "Nairobi", "Maseru - Moshoeshoe International", "Monrovia - Metropolitan Area", "Monrovia - Roberts International", "Benghazi (Bengasi)", "Sehba", "Tripoli - Tripoli International", "Antananarivo (Tanannarive) - Ivato International Airport", "Majunga", "Blantyre (Mandala) - Chileka International Airport", "Lilongwe - Lilongwe International", "Bamako - Bamako-Sénou International Airport", "Nouadhibou", "Nouakchott", "Zouerate", "Mauritius - S.Seewoosagur Ram International", "Rodrigues Island", "Agadir", "Al Hoceima", "Casablanca", "Casablanca, Mohamed V", "Fes", "Marrakesh - Menara Airport", "Ouarzazate", "Oujda", "Rabat - Rabat-Salé Airport", "Tangier - Boukhalef", "Beira", "Maputo - Maputo International", "Katima Mulilo/Mpacha", "Keetmanshoop", "Luederitz", "Mokuti", "Ondangwa", "Oranjemund", "Rundu", "Swakopmund", "Tsumeb", "Windhoek - Eros", "Windhoek - Hosea Kutako International", "Abuja - Nnamdi Azikiwe International Airport", "Agades", "Arlit", "Jos", "Kano", "Lagos - Murtala Muhammed Airport", "Maradi", "Niamey", "Port Harcourt", "Zinder", "Abuja - Nnamdi Azikiwe International Airport", "Jos", "Kano", "Lagos - Murtala Muhammed Airport", "Port Harcourt", "Kigali - Gregoire Kayibanda", "Dakar - Léopold Sédar Senghor International Airport", "Mahe - Seychelles International", "Freetown - Freetown-Lungi International Airport", "Mogadishu", "Aggeneys", "Alexander Bay - Kortdoorn", "Alldays", "Bloemfontein - Bloemfontein Airport", "Cape Town - Cape Town International Airport", "Durban", "East London", "Ellisras", "George", "Johannesburg - OR Tambo International Airport", "Kimberley", "Kleinsee", "Lanseria", "Lusisiki", "Margate", "Messina", "Mkambati", "Mossel Bay", "Mzamba", "Nelspruit", "Nelspruit - Kruger Mpumalanga International Airport", "Newcastle", "Oudtshoorn", "Phalaborwa", "Pietermaritzburg", "Pietersburg", "Pilanesberg/Sun City", "Plettenberg Bay", "Port Elizabeth", "Pretoria - Wonderboom Apt.", "Richards Bay", "Sishen", "Skukuza", "Springbok", "Thaba Nchu", "Ulundi", "Umtata", "Upington", "Vryheid", "Walvis Bay", "Welkom", "Juba", "Juba", "Kassala", "Khartoum - Khartoum International Airport", "Manzini - Matsapha International", "Arusha", "Dar es Salam (Daressalam) - Julius Nyerere Int l", "Dodoma - Dodoma Airport", "Kilimadjaro", "Lome", "Djerba", "Monastir", "Sfax", "Tunis - Carthage", "Entebbe - Entebbe International Airport", "Gulu", "Jinja", "Chipata", "Kitwe", "Lusaka - Lusaka International Airport", "Mfuwe", "N Dola", "Buffalo Range", "Bulawayo", "Gweru", "Harare - Harare International Airport", "Hwange National Park", "Masvingo", "Salisbury", "Victoria Falls", "Jalalabad    ", "Kabul - Khwaja Rawash Airport", "Uruzgan", "Bahrain - Bahrain International Airport", "Barisal", "Chittagong", "Dhaka - Zia International Airport", "Jessore - Jessore Airport", "Sylhet", "Paro", "Bandar Seri Begawan - Brunei International Airport", "Phnom Penh - Pochentong", "Altay", "Beijing", "Beijing - Nanyuan Airport", "Changchun", "Chaoyang, Beijing - Chaoyang Airport", "Chengdu - Shuangliu", "Chongqing - Jiangbei International Airport", "Dalian - Zhoushuizi International Airport", "Guangzhou (Canton) - Baiyun International Airport", "Guilin - Liangjiang", "Hangchow (Hangzhou)", "Harbin (Haerbin)", "Ji an", "Jiamusi - Jiamusi Airport", "Jiayuguan - Jiayuguan Airport", "Jilin", "Jinan", "Jingdezhen", "Jinghong - Gasa Airport", "Jining", "Jinjiang", "Jinzhou - Jinzhou Airport", "Jiujiang - Jiujiang Lushan Airport", "Luxi - Mangshi", "Macau - Macau International Airport", "Nanning", "Qingdao", "Shanghai - Hongqiao", "Shanghai - Pu Dong", "Shenyang", "Shenzhen - Shenzhen Bao an International", "Taiyuan", "Tianjin", "Ulanhot", "Urumqi", "Wuhan", "Xiamen", "Xi an - Xianyang", "Yichang", "Dili - Nicolau Lobato International Airport", "Ahmedabad", "Amritsar", "Anand", "Bagdogra", "Bangalore", "Baroda", "Belgaum", "Bhopal", "Bhubaneswar", "Bombay (Mumbai) - Chhatrapati Shivaji International", "Calcutta (Kolkata) - Netaji Subhas Chandra", "Calicut", "Chandigarh - Chandigarh International Airport", "Chennai (Madras)", "Cochin", "Coimbatore", "Delhi - Indira Gandhi International Airport", "Goa", "Guwahati", "Hyderabad - Rajiv Gandhi International Airport", "Jagdalpur", "Jaipur - Sanganeer", "Jaisalmer   ", "Jalandhar", "Jammu - Satwari", "Jamnagar - Govardhanpur", "Jamshedpur - Sonari Airport", "Jeypore - Jeypore Airport", "Jodhpur", "Jorhat - Rowriah Airport", "Kanpur", "Kolkata (Calcutta) - Netaji Subhas Chandra", "Lucknow", "Madras (Chennai) - Chennai International Airport", "Mysore", "Nagpur", "Patna", "Pune", "Rajkot", "Ranchi", "Srinagar", "Surat", "Thiruvananthapuram", "Tiruchirapally", "Udaipur - Dabok Airport", "Varanasi", "Ayawasi", "Bandung - Husein Sastranegara International Airport", "Denpasar/Bali", "Jakarta - Halim Perdana Kusuma", "Jakarta - Metropolitan Area", "Jakarta - Soekarno-Hatta International", "Jambi - Sultan Taha Syarifudn", "Jayapura - Sentani", "Medan - Polania Int l (now Soewondo AFB)", "Medan - Kualanamu International", "Manado", "Surabaya - Juanda", "Tioman", "Ujung Pandang - Hasanudin Airport", "Abadan", "Tehran (Teheran) - Mehrabad", "Urmiehm (Orumieh)", "Bagdad - Baghdad International Airport", "Basra, Basrah", "Kirkuk", "Mosul", "Elat", "Elat, Ovula", "Haifa", "Jerusalem - Atarot Airport (closed)", "Tel Aviv - Ben Gurion International", "Akita", "Amami", "Aomori", "Chiba City", "Sapporo - New Chitose Airport", "Fukuoka", "Fukushima - Fukushima Airport", "Hachijo Jima", "Hakodate", "Hiroshima International", "Ishigaki - New Ishigaki Airport", "Kagoshima", "Kobe", "Kochi", "Komatsu", "Kumamoto", "Kushiro", "Kyoto", "Matsumoto, Nagano", "Matsuyama", "Miyako Jima (Ryuku Islands) - Hirara", "Miyazaki", "Morioka, Hanamaki", "Nagasaki", "Nagoya - Komaki AFB", "Niigata", "Oita", "Okayama", "Okinawa, Ryukyo Island - Naha", "Osaka, Metropolitan Area", "Osaka - Itami", "Osaka - Kansai International Airport", "Sado Shima", "Sapporo", "Sapporo - Okadama", "Sapporo - New Chitose Airport", "Sendai", "Takamatsu", "Tokushima", "Tokyo", "Tokyo - Haneda", "Tokyo - Narita", "Toyama", "Ube", "Yamagata, Junmachi", "Yokohama", "Amman - Queen Alia International Airport", "Amman - Amman-Marka International Airport", "Aqaba", "Almaty (Alma Ata) - Almaty International Airport", "Astana - Astana International Airport", "Kuwait - Kuwait International", "Bishkek - Manas International Airport", "Beirut - Beirut Rafic Hariri International Airport", "Bintulu", "Johor Bahru - Sultan Ismail International", "Kota Kinabalu", "Kuala Lumpur - International Airport", "Kuala Lumpur - Sultan Abdul Aziz Shah", "Kuantan", "Kuching", "Labuan", "Langkawi (islands)", "Miri", "Penang International", "Sibu", "Tawau", "Ulaanbaatar - Buyant Uhaa Airport", "Janakpur", "Jiri", "Jomsom", "Jumla", "Kathmandu - Tribhuvan International Airport", "Muscat - Seeb", "Salalah", "Bahawalpur", "Bannu", "Chitral", "Dera Ismail Khan - Dera Ismail Khan Airport", "Faisalabad", "Gilgit", "Gwadar", "Hyderabad", "Islamabad - Benazir Bhutto International Airport", "Jacobabad", "Jiwani", "Karachi - Jinnah International Airport", "Khuzdar", "Kohat", "Lahore", "Mianwali", "Mirpur", "Moenjodaro", "Multan", "Muzaffarabad", "Nawab Shah", "Panjgur", "Pasni", "Peshawar", "Quetta", "Rahim Yar Khan - Shaikh Zayed International Airport", "Rawala Kot", "Rawalpindi", "Saidu Sharif", "Sindhri", "Skardu", "Sui", "Sukkur", "Turbat", "Zhob", "Cebu City - Mactan-Cebu International", "Cuyo", "Jolo", "Mactan Island - Nab", "Manila - Ninoy Aquino International", "Doha - Doha International Airport", "Dhahran", "Jeddah - King Abdulaziz International", "Jouf", "Khamis Mushayat", "Madinah (Medina) - Mohammad Bin Abdulaziz", "Medina", "Riyadh - King Khaled International", "Tabuk", "Taif", "Yanbu", "Singapore - Changi", "Singapore - Paya Lebar", "Singapore - Seletar", "Colombo - Bandaranaike International Airport", "Jaffna - Kankesanturai", "Aleppo", "Damascus, International", "Dushanbe (Duschanbe) - Dushanbe Airport", "Bangkok, Don Muang", "Bangkok, Suvarnabhumi International", "Chiang Mai - Chiang Mai International Airport", "Hatyai (Hat Yai)", "Nakhon Si Thammarat", "Pattaya", "Phuket", "Ubon Ratchathani - Muang Ubon Airport", "Udon Thani", "Utapao (Pattaya)", "Adana", "Adiyaman", "Ankara", "Ankara - Esenboga International Airport", "Antalya", "Bodrum - Milas Airport", "Dalaman", "Denizli", "Erzincan", "Erzurum", "Gaziantep", "Istanbul - Istanbul Atatürk Airport", "Istanbul - Sabiha Gokcen", "Izmir", "Izmir - Adnan Menderes Airport", "Kahramanmaras", "Kars", "Kayseri", "Konya", "Malatya", "Maras", "Mardin", "Mus", "Samsun", "Sivas", "Tekirdag - Corlu", "Trabzon", "Van - Ferit Melen", "Ashgabat - Saparmurat Turkmenbashy Int. Airport", "Abu Dhabi - Abu Dhabi International", "Al Ain", "Alfujairah (Fujairah)", "Dubai - Dubai International Airport", "Fujairah, International Airport", "Ras al Khaymah (Ras al Khaimah)", "Sharjah", "Samarkand - Samarkand International Airport", "Tashkent - International", "Termez (Termes)", "Urgench", "Hanoi - Noi Bai International Airport", "Aden - Aden International Airport", "Sanaa (Sana a) - Sana a International", "Tirana - Rinas", "Andorra La Vella - Heliport", "Eriwan (Yerevan, Jerevan)", "Graz", "Innsbruck - Kranebitten", "Klagenfurt", "Linz - Hoersching", "Salzburg - W.A. Mozart", "Wien (Vienna) - Vienna International", "Baku - Heydar Aliyev International Airport", "Nakhichevan", "Minsk, International", "Antwerp", "Brussels - Brussels Airport", "Ghent (Gent)", "Liege", "Mostar", "Sarajevo", "Bourgas/Burgas", "Gorna", "Jambol", "Ruse", "Silistra", "Sofia - Vrazhdebna", "Targovishte", "Varna", "Vidin", "Dubrovnik", "Losinj - Losinj Arpt", "Osijek", "Pula", "Rijeka", "Split", "Zadar", "Zagreb - Zagreb Airport Pleso", "Akrotiri - RAF", "Larnaca", "Limassol", "Nicosia", "Paphos", "Prague - Václav Havel Airport (formerly Ruzyne)", "Uherske Hradiste", "Alborg", "Billund", "Copenhagen - Copenhagen Airport", "Esbjerg", "Faroer - Vágar Airport", "Karup", "Odense", "Roenne", "Skrydstrup", "Soenderborg", "Thisted", "Tallinn - Pirita Harbour", "Tallinn - Ulemiste", "Enontekioe", "Helsinki - Vantaa", "Ivalo", "Joensuu", "Jyväskylä (Jyvaskyla)", "Kajaani", "Kauhajoki", "Kemi/Tornio", "Kittilä", "Kokkola/Pietarsaari", "Kuopio", "Kuusamo", "Lappeenranta", "Mariehamn (Maarianhamina)", "Mikkeli", "Oulu", "Pori", "Rovaniemi", "Savonlinna", "Seinaejoki", "Sodankylae", "Tampere", "Turku", "Vaasa", "Varkaus", "Ajaccio", "Albi", "Annecy", "Aurillac", "Basel/Mulhouse", "Bastia", "Bergerac - Roumanieres", "Biarritz", "Bordeaux - Bordeaux Airport", "Brest", "Calvi", "Cannes – Mandelieu Airport", "Chambery", "Clermont Ferrand", "Dinard", "Disneyland Paris", "Figari", "Frejus", "Grenoble", "La Rochelle", "Lannion", "Lille - Lille Airport", "Limoges", "Lorient", "Lourdes/Tarbes", "Lyon - Lyon-Saint Exupéry Airport ", "Marseille - Marseille Provence Airport", "Metz -  Frescaty", "Metz/Nancy Metz-Nancy-Lorraine", "Montpellier - Montpellier–Méditerranée Airport", "Mulhouse", "Nancy", "Nantes - Nantes Atlantique Airport", "Nice - Cote D Azur Airport", "Nimes", "Paris", "Paris - Charles de Gaulle", "Paris - Le Bourget", "Paris - Orly", "Pau", "Perpignan", "Poitiers - Biard", "Quimper", "Rennes", "Roanne", "Rodez", "Saint Brieuc", "St. Etienne", "Strasbourg - Strasbourg Airport", "Toulouse - Blagnac Airport", "Tbilisi - Novo Alexeyevka", "Augsburg - Augsbur gAirport", "Bayreuth - Bindlacher-Berg", "Berlin", "Berlin, Schoenefeld", "Berlin, Tegel", "Berlin, Tempelhof (ceased operating in 2008)", "Bremen - Bremen Airport (Flughafen Bremen)", "Cottbus - Cottbus-Drewitz Airport", "Cologne - Cologne Airport (Flughafen Köln/Bonn)", "Dortmund", "Dresden - Dresden Airport", "Duesseldorf - Düsseldorf International Airport", "Erfurt - Erfurt Airport (Flughafen Erfurt)", "Frankfurt/Main - Frankfurt Airport (Rhein-Main-Flughafen)", "Frankfurt/Hahn", "Friedrichshafen - Bodensee-Airport Friedrichshafen", "Guettin", "Hamburg - Fuhlsbuettel", "Hannover", "Hof", "Juist (island)", "Karlsruhe-Baden - Soellingen", "Kiel - Holtenau", "Köln, Köln/Bonn", "Leipzig", "Muenchen (Munich) - Franz Josef Strauss", "Muenster/Osnabrueck", "Nürnberg (Nuremberg)", "Paderborn/Lippstadt", "Saarbruecken", "Stuttgart - Echterdingen", "Westerland, Sylt Airport", "Wiesbaden, Air Base", "Araxos", "Athens - Elefthérios Venizélos International Airport", "Athens, Hellinikon Airport", "Chania", "Chios", "Corfu", "Heraklion", "Kalamata", "Karpathos", "Kavalla", "Kos", "Mykonos", "Mytilene (Lesbos)", "Naxos - Naxos Airport", "Preveza/Lefkas", "Rhodos", "Saloniki", "Samos", "Skiathos", "Thessaloniki - Makedonia Apt.", "Thira", "Zakynthos", "Budapest - Budapest Ferihegy International Airport", "Egilsstadir", "Reykjavik - Metropolitan Area", "Reykjavik - Keflavik International", "Cork", "Donegal (Carrickfin)", "Dublin - Dublin International Airport", "Galway", "Kerry County", "Knock", "Shannon (Limerick)", "Sligo", "Alghero Sassari", "Ancona - Ancona Falconara Airport", "Bari", "Bergamo/Milan - Orio Al Serio", "Bologna", "Brescia, Montichiari", "Brindisi", "Cagliari", "Catania", "Elba Island, Marina Di Campo", "Florence (Firenze) - Peretola Airport", "Genoa", "Lamezia Terme", "Lampedusa", "Milan", "Milan - Linate", "Milan - Malpensa", "Milan - Orio Al Serio", "Naples - Naples Capodichino Airport", "Olbia", "Palermo - Punta Raisi", "Pantelleria", "Perugia", "Pescara", "Pisa - Galileo Galilei", "Reggio Calabria", "Rimini", "Rome", "Rome - Ciampino", "Rome - Fuimicino", "Trapani", "Treviso", "Trieste", "Turin", "Venice - Marco Polo", "Verona (Brescia) Montichiari", "Verona", "Riga", "Vilnius", "Wilna (Vilnius)", "Luxembourg", "Ohrid", "Skopje", "Luga", "Chisinau - Chisinau International Airport", "Podgorica", "Tivat", "Amsterdam - Amsterdam Airport Schiphol", "Bonaire", "Curacao - Curaçao International Airport", "Den Haag (The Hague)", "Eindhoven", "Groningen - Eelde", "Lelystad", "Maastricht/Aachen", "Rotterdam", "St. Marteen", "Uden - Volkel Airport", "Alesund", "Alta", "Bardufoss", "Bergen", "Bodo", "Broennoeysund", "Evenes", "Floro", "Hammerfest", "Haugesund", "Kirkenes", "Kristiansand", "Kristiansund", "Lakselv", "Longyearbyen - Svalbard", "Oslo - Oslo Airport, Gardermoen", "Oslo - Fornebu", "Oslo - Sandefjord", "Sogndal", "Stavanger", "Tromsoe", "Trondheim", "Gdansk", "Krakow (Cracow) - John Paul II International Airport", "Poznan, Lawica", "Stettin", "Warsaw - Frédéric Chopin", "Faro", "Funchal", "Horta", "Lisbon - Lisboa", "Ponta Delgada", "Porto", "Porto Santo", "Santa Maria", "Terceira", "Bucharest", "Bucharest - Henri Coanda International Airport", "Constanta (Constan?a) - Constanta Int l Airport", "Iasi", "Timisoara", "Bacau", "Suceava", "Cluj", "Belgrad (Beograd) - Belgrade Nikola Tesla International", "Nis", "Novi Sad", "Pristina", "Bratislava - M. R. Štefánik Airport", "Ljubljana - Brnik", "Maribor", "Alicante", "Almeria", "Arrecife/Lanzarote", "Badajoz", "Barcelona", "Bilbao", "Cordoba", "Fuerteventura", "Gerona", "Granada", "Ibiza", "Jerez de la Frontera/Cadiz - La Parra", "La Coruna", "Las Palmas", "Los Rodeos", "Madrid - Barajas Airport", "Mahon", "Malaga", "Murcia", "Oviedo", "Palma de Mallorca", "Reina Sofia", "Reus", "San Sebastian", "Santa Cruz de la Palma", "Santander", "Santiago de Compostela", "Sevilla", "Tenerife", "Tenerife - Sur Reina Sofia", "Tenerife - Norte Los Rodeos", "Valencia", "Valladolid", "Valverde", "Vigo", "Vitoria", "Zaragoza", "Gothenburg (Göteborg) - Landvetter", "Helsingborg", "Jönköping (Jonkoping) - Axamo Airport", "Kalmar", "Karlstad", "Kiruna", "Kristianstad", "Lidkoeping", "Lulea", "Malmo (Malmoe)", "Malmo (Malmö) - Malmö Airport", "Norrkoeping", "Oerebro", "Ronneby", "Stockholm Metropolitan Area", "Stockholm - Arlanda", "Stockholm - Bromma", "Sundsvall", "Umea", "Vaexjoe", "Vasteras", "Visby", "Altenrhein", "Basel", "Basel/Mulhouse", "Berne, Bern-Belp", "Berne, Railway Service", "Geneva - Geneva-Cointrin International Airport", "Lugano", "Zurich (Zürich) - Kloten", "Kharkov", "Kiev - Borispol", "Kiev - Zhulhany", "Lvov (Lwow, Lemberg)", "Nikolaev", "Odessa", "Simferopol", "Uzhgorod", "Aberdeen", "Barra (the famous tidal beach landing)", "Belfast - George Best Belfast City Airport", "Belfast - Belfast International Airport", "Benbecula", "Birmingham - Birmingham International Airport", "Blackpool", "Bournemouth", "Bristol", "Cambrigde", "Campbeltown", "Cardiff - Cardiff Airport", "Coventry - Baginton", "Derry (Londonderry)", "Doncaster/Sheffield, Robin Hood International Airport", "Dundee", "Exeter", "Fair Isle (Shetland)", "Foula (Shetland)", "Glasgow, Prestwick", "Glasgow", "Humberside", "Inverness", "Islay", "Kent (Manston) Kent International", "Kirkwall (Orkney)", "Land s End", "Leeds/Bradford", "Lerwick/Tingwall (Shetland Islands)", "Liverpool", "London Metropolitan Area", "London - City Airport", "London - Gatwick", "London - Heathrow", "London - Luton", "London - Stansted", "Londonderry - Eglinton", "Lydd - Lydd International Airport", "Manchester", "Newquay", "Newcastle", "Norwich", "Nottingham - East Midlands", "Orkney - Kirkwall", "Out Skerries (Shetland)", "Sheffield, City Airport", "Sheffield, Doncaster, Robin Hood International Airport", "Southampton - Eastleigh", "Southend (London)", "Stansted (London)", "Stornway", "Sumburgh (Shetland)", "Teesside, Durham Tees Valley", "Unst (Shetland Island) - Baltasound Airport", "Wick", "Antigua, V.C. Bird International", "Bahamas - Lynden Pindling International Airport", "Chub Cay", "Freeport - Grand Bahama International Airport", "Govenors Harbour", "Grand Bahama International", "Marsh Harbour", "Nassau", "North Eleuthera", "Rock Sound", "San Salvador", "Treasure Cay", "Bridgetown - Grantley Adams International", "Belize City - Philip S.W.Goldson International", "Attawapiskat, NT", "Bonaventure, PQ", "Calgary - Calgary International Airport", "Cambridge Bay", "Churchill", "Deer Lake/Corner Brook", "Edmonton", "Edmonton, International", "Edmonton, Municipal", "Flin Flon", "Fort Albert", "Fort McMurray", "Fort Smith", "Fort St. John", "Fredericton", "Gander", "Gillam", "Goose Bay", "Halifax International", "Hall Beach", "Hamilton", "Harrington Harbour, PQ", "Inuvik", "Iqaluit (Frobisher Bay)", "Kamloops, BC", "Kaschechawan, PQ", "Kelowna, BC", "Kuujjuaq (FortChimo)", "Kuujjuarapik", "Lac Brochet, MB", "La Grande", "Leaf Rapids", "London", "Moncton", "Montreal", "Montreal - Dorval (Montréal-Trudeau)", "Montreal - Mirabel", "Nanisivik", "Norman Wells", "Ottawa - Hull", "Port Menier, PQ", "Prince George", "Prince Rupert/Digby Island", "Pukatawagan", "Quebec - Quebec International", "Rainbow Lake, AB", "Regina", "Resolute Bay", "Saint John", "Sandspit", "Saskatoon", "Shamattawa, MB", "Smithers", "South Indian Lake, MB", "St. Augustin, PQ", "St. John s", "St. Pierre, NF", "Terrace", "The Pas", "Thompson", "Thunder Bay", "Toronto - Billy Bishop Toronto City Airport", "Toronto - Toronto Pearson International Airport", "Toronto", "Umiujaq", "Uranium City", "Val d Or", "Vancouver - Vancouver International", "Victoria", "Wabush", "Whale Cove, NT", "Whitehorse", "Windsor Ontario", "Winnipeg International", "Yellowknife", "San Jose", "Upala", "Cienfuegos - Jaime González Airport", "Havana - José Martí International", "Holguin", "Santiago - Antonio Maceo Airport", "Varadero", "Casa de Campo - La Romana International Airport", "Samana - Samaná El Catey International Airport", "Melville Hall", "Puerto Plata", "Punta Cana - Punta Cana International", "Santo Domingo", "Casa de Campo - La Romana International Airport", "Samana - Samaná El Catey International Airport", "Puerto Plata", "Punta Cana - Punta Cana International", "Santo Domingo", "San Salvador", "Grenada - Point Salines Airport also Maurice Bishop", "Guatemala City - La Aurora International Airport", "Jacmel   ", "Jeremie - Jeremie Airport", "Port au Prince", "Juticalpa", "Roatan", "San Pedro Sula", "Santa Rosa, Copan", "Tegucigalpa", "Utila", "Kingston - Norman Manley", "Montego Bay - Sangster International", "Acapulco", "Aguascaliente", "Cancun", "Chichen Itza", "Chihuahua - Gen Fierro Villalobos", "Ciudad Del Carmen", "Ciudad Juarez", "Ciudad Obregon", "Ciudad Victoria", "Colima", "Cozmel", "Culiacan", "Guadalajara", "Hermosillo - Gen. Pesqueira Garcia", "Huatulco", "Ixtapa/Zihuatenejo", "Jalapa", "La Paz - Leon", "Lazaro Cardenas", "Leon", "Loreto", "Los Cabos", "Los Mochis", "Manzanillo", "Mazatlan", "Merida", "Mexicali", "Mexico City - Mexico City International Airport", "Mexico City - Atizapan", "Mexico City - Juarez International", "Mexico City - Santa Lucia", "Minatitlan", "Monterrey - Gen. Mariano Escobedo", "Monterrey - Aeropuerto Del Norte", "Morelia", "Nuevo Laredo", "Oaxaca - Xoxocotlan", "Puebla", "Puerto Escondido", "Puerto Vallarta", "San Jose Cabo", "San Luis Potosi", "Santa Rosalia", "Tampico - Gen. F. Javier Mina", "Tijuana - Rodriguez", "Tuxtla Gutierrez", "Uruapan", "Veracruz", "Villahermosa", "Zacatecas", "Managua - Augusto C Sandino", "Jaque   ", "Panama City - Tocumen International", "Basseterre - Robert L. Bradshaw International Airport", "Castries - George F. L. Charles Airport", "St. Lucia Hewanorra", "St. Lucia Vigle", "Kingstown - E. T. Joshua Airport", "St. Vincent", "Union Island", "Port of Spain - Piarco International", "Scarborough - Crown Point International", "Tobago", "Adelaide", "Albany", "Albury", "Alice Springs", "Ayers Rock - Connellan", "Ayr", "Ballina", "Bamaga", "Blackwater", "Bowen", "Brampton Island", "Brisbane", "Broken Hill", "Broome", "Bundaberg", "Burnie (Wynyard)", "Cairns", "Canberra - Canberra Airport", "Carnarvon", "Casino", "Ceduna", "Cessnock", "Charters Towers", "Clermont", "Coffs Harbour", "Collinsville", "Coober Pedy", "Cooktown", "Cooma", "Dalby", "Darwin", "Daydream Island", "Derby", "Devonport", "Dubbo", "Dunk Island", "Dysart", "Emerald", "Emerald", "Esperance", "Geelong", "Geraldton", "Gladstone", "Gold Coast", "Goondiwindi", "Gove (Nhulunbuy)", "Great Keppel Island", "Griffith", "Groote Eylandt - Alyangula", "Gympie", "Hamilton", "Hamilton Island", "Hayman Island", "Hervey Bay", "Hinchinbrook Island", "Hobart", "Home Hill", "Ingham", "Innisfail", "Jandakot", "Julia Creek", "Jundah", "Kalgoorlie", "Karratha", "Karumba", "Katherine", "King Island", "Kingscote", "Kowanyama", "Kununurra", "Launceston", "Laverton", "Learmouth (Exmouth)", "Leinster", "Leonora", "Lindeman Island", "Lismore", "Lizard Island", "Lockhart River", "Longreach", "Mackay", "Maitland", "Maryborough", "Meekatharra", "Melbourne - Melbourne Airport (Tullamarine)", "Merimbula", "Middlemount", "Mildura", "Moranbah", "Moree", "Moruya", "Mount Gambier", "Mount Magnet", "Mt. Isa", "Narrabri", "Narrandera", "Newcastle - Belmont", "Newcastle - Williamtown", "Newman", "Noosa", "Norfolk Island", "Olympic Dam", "Orange", "Orpheus Island", "Paraburdoo", "Perth International", "Port Augusta", "Port Hedland", "Portland", "Port Lincoln", "Port Macquarie", "Prosperpine", "Queenstown", "Rockhampton", "Scone", "Shute Harbour", "Singleton", "South Molle Island", "Streaky Bay", "Sunshine Coast", "Sydney - Sydney Airport", "Tamworth", "Taree", "Temora", "Tennant Creek", "Thursday Island", "Tom Price", "Toowoomba", "Townsville", "Wagga", "Warrnambool", "Weipa", "Whitsunday Resort", "Whyalla", "Wickham", "Wiluna", "Wollongong", "Woomera", "Wyndham", "Castaway", "Nadi", "Nausori", "Suva - Nausori Airport (Luvuluvu)", "Kiritimati (island) - Cassidy International Airport", "Jaluit Island  ", "Pohnpei", "Auckland - Auckland International Airport", "Blenheim", "Christchurch", "Dunedin", "Hamilton", "Incercargill", "Invercargill", "Milford Sound", "Mount Cook", "Nelson", "Palmerston North", "Queenstown", "Rotorua", "Te Anau", "Wellington", "Whakatane", "Whangarei", "Aiyura", "Amazon Bay", "Jacquinot Bay", "Lae - Lae Nadzab Airport", "Manguna", "Port Moresby - Jackson Field", "Apia - Faleolo International Airport", "Pago Pago", "Guadalcanal", "Honiara Henderson International", "Nuku alofa - Fua Amotu International", "Port Vila", "Santo", "Ulei", "Buenos Aires", "Buenos Aires, Ezeiza International Airport", "Buenos Aires, Jorge Newbery", "Cordoba", "Iguazu, Cataratas", "Jose De San Martin", "Jujuy - El Cadillal Airport", "Junin", "Mar del Plata", "Mendoza", "Rosario", "Salta, Gen Belgrano", "San Carlos de Bariloche", "Santa Rosa", "Ushuaia - Islas Malvinas Airport", "Cochabamba", "La Paz - El Alto", "Santa Cruz de la Sierra", "Santa Rosa", "Aracaju", "Belem - Val de Cans International Airport", "Belo Horizonte - Tancredo Neves International Airport", "Boa Vista", "Brasilia - President Juscelino Kubitschek International", "Campo Grande", "Cuiaba - Marechal Rondon International Airport", "Curitiba - Afonso Pena International Airport", "Florianopolis", "Fortaleza - Pinto Martins Airport", "Goiania, Santa Genoveva Airport", "Sao Paulo - Guarulhos International", "Jacobina   ", "Jales", "Januaria", "Jatai", "Joacaba", "Joao Pessoa - Castro Pinto Airport", "Joinville - Cubatao Airport", "Juiz De Fora - Francisco De Assis Airport", "Macapa - Alberto Alcolumbre International Airport", "Maceio - Zumbi dos Palmares International Airport", "Manaus - Eduardo Gomes International Airport", "Montenegro", "Natal - Augusto Severo International Airport", "Palmas", "Porto Alegre - Salgado Filho International Airport", "Porto Velho", "Recife - Guararapes-Gilberto Freyre International", "Rio Branco - Plácido de Castro International Airport", "Rio de Janeiro - Galeao", "Rio de Janeiro - Santos Dumont", "Rio de Janeiro", "Salvador - Salvador International Airport", "Santa Rosa", "Sao Luis - Marechal Cunha Machado International", "Sao Paulo", "Sao Paulo - Congonhas", "Sao Paulo - Guarulhos", "Sao Paulo - Viracopos", "Teresina", "Uberaba", "Uberlandia - Eduardo Gomes Airport", "Urubupunga - Ernesto Pochler Airport", "Uruguaiana - Ruben Berta Airport", "Vitoria - Eurico de Aguiar Salles Airport", "Calama - El Loa", "Easter Island", "Punta Arenas - Presidente Carlos Ibáñez del Campo", "Santiago de Chile - Arturo Merino Benitez", "Valparaiso", "Barranquilla", "Bogota - El Nuevo Dorado International Airport", "Bucaramanga", "Cali", "Cartagena - Rafael Núñez International Airport", "Medellin - José María Córdova International", "Pereira", "San Andres", "Santa Rosalia", "Guayaquil - Simon Bolivar", "Jipijapa", "Quito - Mariscal Sucre International Airport", "Salinas", "Georgetown - Cheddi Jagan International Airport", "Asuncion - Asunción International Airport", "Iquitos", "Jauja", "Juanjui", "Juliaca", "Lima - J Chavez International", "Paramaribo - Zanderij International", "Montevideo - Carrasco International Airport", "Barcelona", "Caracas - Simón Bolívar International Airport", "Ciudad Guayana", "Maracaibo - La Chinita International", "Margerita", "Puerto Ordaz", "Uriman", "Valencia"];
  /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
  autocomplete(document.getElementById("myInput1"),cities);
