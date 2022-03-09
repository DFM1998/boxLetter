<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Letter Box Post</title>
        <link rel="icon" type="image/x-icon" href="/images/pin.svg">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <link rel="stylesheet" href="/css/ui-toggle.css" type="text/css" media="screen" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://apiv3.geoportail.lu/apiv3loader.js"  type="text/javascript"></script>
        <script type="text/javascript" src="map_design.json"></script>
        <script src="https://kit.fontawesome.com/3de7a0b041.js" crossorigin="anonymous"></script>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

<style>
      @font-face {
        font-family: RajdhaniBold;
        src: url(font/Rajdhani/Rajdhani-Bold.ttf);
        font-weight: bold;
      }
      @font-face {
        font-family: RajdhaniLight;
        src: url(font/Rajdhani/Rajdhani-Light.ttf);
      }
      @font-face {
        font-family: RajdhaniMedium;
        src: url(font/Rajdhani/Rajdhani-Medium.ttf);
      }
      @font-face {
        font-family: RajdhaniRegular;
        src: url(font/Rajdhani/Rajdhani-Regular.ttf);
      }
      @font-face {
        font-family: RajdhaniSemiBold;
        src: url(font/Rajdhani/Rajdhani-SemiBold.ttf);
      }
      body{
        margin: 0px;
        font-family: RajdhaniBold;
      }

      header, footer{
        background-color: #002641;
        color: #FABB00;
      }
      
      header{
        height: 43px;
      }
      footer{
        font-size: 9px;
        text-align: center;
        padding: 2px;
      }
      #map1{
        height: 94vh;
        float: left;
      }
      main{
        display: grid;
        grid-template-columns: minmax(auto, 62%) minmax(440px, 38%);
      }
      aside{
        background-color: #F6F6F6;
        box-shadow: -4px 0px 4px 0px #A9A9A940;
        z-index: 1;
        height: 94vh;
        overflow: scroll;
      }
      
      .lux-map{
        border: 0;
      }

      .filtersContent{
        padding: 25px;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        color: #A9A9A9;
        font-size: 23px;
        background: #FDFDFD;
        height: 250px;
        width: 93%;
        border-radius: 13px;
        box-shadow: 0px 4px 10px 0px #C0C0C040;
      }

      .lux-map .ol-control button:hover{
          background-color: #002641;
      }

      .searchIcon{
        width: 9%;
        height: 35px;
        display: inline-block;
        text-align: center;
        border-right: 0;
      }

      .searchInputField{
        width: 80%;
        height: 42px;
        font-size: 20px;
        font-family: RajdhaniRegular;
        display: inline;
        border: 0;
        border-left: 0.2px solid #0000004F;
        border-right: 0.2px solid #0000004F;
      }

      .searchInputField:focus{
        outline: 0;
      }

      .searchField{
        border: 0.2px solid #0000004F;
        border-radius: 8px;
      }

      hr{
        margin-left: -25px;
        margin-right: -25px;
        border: none;
        background-color: #9B9B9B;
        height: 0.5px;
      }

      .list_location_close{
        margin: auto;
        margin-bottom: 20px;
        text-align: center;
        color: #A9A9A9;
        font-size: 11px;
        background: #FDFDFD;
        height: 120px;
        width: 90%;
        border-radius: 13px;
        display: grid;
        grid-template-columns: 25% 50% auto;
        box-shadow: 0px 4px 10px 0px #C0C0C040;
      }

      .filterTownDiv{
        margin: auto;
        margin-bottom: 20px;
        background: #FDFDFD;
        width: 90%;
        font-size: 20px;
        border-radius: 13px;
        box-shadow: 0px 4px 10px 0px #C0C0C040;
      }

      .filterTownDiv table{
          border-collapse: collapse;
      }

      .filterTownDiv table td{
          padding: 4px;
      }

      .filterTownDiv table tr:first-child td:nth-child(2){
          font-size: 23px;
      }
      .filterTownDiv table td:nth-child(3){
          text-align: center;
      }

      .filterTownDiv table tr:not(:last-child){
          border-bottom: 0.5px solid #9B9B9B;
      }
      .filterTownDiv table tr td:first-child, .filterTownDiv table tr td:nth-child(2){
          border-right: 0.5px solid grey;
      }

      .list_location_open{
        margin: auto;
        margin-bottom: 20px;
        color: #002641;
        font-size: 20px;
        background: #FDFDFD;
        height: 230px;
        width: 90%;
        border-radius: 13px;
        box-shadow: 0px 4px 10px 0px #C0C0C040;
      }
      
      .list_location_open table tr td{
          padding: 5px;
      }

      .pinSearchIcon{
        height: 20px;
      }

      .pickupTime, .pickupAddress{
        border-right: 0.2px solid #9B9B9B;
      }

      .pickupTime, .pickupAddress, .pickupDistance{
        padding-top: 35px;
      }

      .pinSearchIconBar{
        display: inline-block;
        text-align: center;
        width: 9%;
        padding-top: 2px;
      }
      
      .list_location_close .time, .list_location_close .address,.list_location_close .distance{
        color:#002641;
        font-size: 15px;
      }

      .list_location_close .time{
        font-size: 30px;
      }

      .list_location_close .address{
        font-size: 17px;
        font-family: RajdhaniRegular;
      }
      .list_location_close .distance{
        font-size: 20px;
      }

      .resetDefault{
        width: 30px;
        height: 30px;
        margin-right: 5px;
        border-radius: 5px;
      }

      .showListTowns{
        width: 30px;
        height: 30px;
        margin-right: 5px;
        border-radius: 5px;
      }

      /*language nav*/
      .dropbtn {
        padding: 16px;
      }

      .dropdown {
        float:right;
        position: relative;
        display: inline-block;
        z-index: 3;
        margin-right: 10px;
        margin-top: 10px;
      }

      .dropdown-content {
        background-color: #002641;
        display: none;
        position: absolute;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        margin-top: 10px;
      }

      .dropdown-content a {
        color: #F6F6F6;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {
        background-color: #002641;
        color: #FABB00;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .selectTime{
        height: 22px;
        width: 60px;
        border-radius: 4px;
      }


      .dropdown:hover .dropbtn {
        background-color: #002641;
      }
      /*language nav end*/

      .lux-popup-content{
        background-color: white;
        display: grid;
        border-radius: 23px;
        grid-template-columns: 100%;
        font-family: RajdhaniBold;
      }
      .lux-popup{
        border-radius: 23px;
        width: 100%;
        max-width: 500px;
        height: 200px;
      }


      .smallTitle{
        color: #7E7E7E;
        font-size: 10px;
        margin: 0;
      }

      .streetPopup, .timePopup{
        margin: 0;
      }

      .streetPopup{
        font-size: 14px;
      }

      .timePopup{
        font-size: 24px;
      }

      .directionButton{
        font-size: 15px;
        font-family: RajdhaniBold;
        padding-left: 30px;
        padding-right: 30px;
        background-color: #FCFCFC;
        color: #474747;
        border: none;
        border: 0.5px solid #5A5A5A;
        border-radius: 6px;
        padding-top: 5px;
        padding-bottom: 5px;
        transition: background-color 0.3s;
      }

      .directionButton:hover{
        background-color: #002641;
        color: #FCFCFC;
      }

      .sliderDistance{
         width: 60%; 
         margin-bottom: -5px;
      }

      .smallText{
          font-size: 14px;
          color: #A9A9A9;
      }



    @media only screen and (max-width: 600px) {
       main{
            grid-template-columns: 0% minmax(376px,100%);
       } 
       .list_location_close{
           width: 96%;
       }
       .filtersContent{
           padding: 12px;
           font-size: 18px;
           height: 210px;
           width: 96%;
       }
       hr{
           margin-left: -12px;
           margin-right: -12px;
       }

       .showMapButton{
            display: inline-block;
       }

    }
    </style>
    </head>
    <body class="antialiased">

            @if (Route::has('login'))
                <div class="hidden fixed sm:block" style="margin-left: 10px;margin-top: 9px;">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

  


    <header>
        <button class="showMapButton" hidden>map</button>
      <div class="dropdown">
        <a class="dropbtn">EN</a>
        <div class="dropdown-content" style="left:0;">
          <a>LU</a>
          <a>DE</a>
          <a>FR</a>
        </div>
      </div>
    </header>
    <main>
    <div id="map1"></div>
    <script>

        var mydata = JSON.parse(data);
        console.log(data);

        const customJson = {
            "version": 8,
            "name": "Geoportail.lu Road Map",
            "sources": {
              "geoportail.lu_layers": {
                "type": "vector",
                "url": "https://vectortiles.geoportail.lu/data/omt-geoportail-lu.json"
              }
            },
            "layers": [
              {
                "id": "background",
                "type": "background",
                "layout": {"visibility": "visible"},
                "paint": {"background-color": "rgba(248, 248, 248, 1)"}
              },
              {
                "id": "lu_landcover_wood",
                "type": "fill",
                "source": "geoportail.lu_layers",
                "source-layer": "landcover",
                "filter": ["==", "class", "wood"],
                "paint": {"fill-color": "rgba(115, 179, 28, 1)", "fill-opacity": 0.55}
              },
              {
                "id": "lu_water",
                "type": "fill",
                "source": "geoportail.lu_layers",
                "source-layer": "water",
                "filter": ["all", ["==", "$type", "Polygon"], ["!=", "intermittent", 1]],
                "layout": {"visibility": "visible"},
                "paint": {"fill-color": "rgba(0, 27, 25, 1)"}
              },
            ],
            "id": "+geoportail_lu_road_map"
        };

        var curMap = new lux.Map({
            target: 'map1',
            bgLayer: 'basemap_2015_global',
            bgLayerStyle: mydata,
            zoom: 12,
            position: [76825, 75133]
        });

        
        $.getJSON("http://127.0.0.1:8000/api/boxletter/", function(data){
            console.log(data);
            for (let i = 0; i < data.length; i++) {
                const element = data[i];
                let coordinates = element["coordinates"].split(",");
                const pickUpTime = element["pickUpTime"];
                const street = element["street"];
                const city = element["city"];

                var output = '<div><div style="display: ruby-text;"><i class="fa-regular fa-clock fa-2xl" style="color: #002641"></i></div><div style="display: inline-block;margin-left: 10px;"><p class="timePopup">'+pickUpTime+'</p><p class="smallTitle">Pickup time</p></div><hr style="margin-left: -14px; margin-right:-14px;"></div><div style="margin-top:10px;"><div style="display: ruby-text;"><i class="fa-solid fa-map-location-dot fa-2xl" style="color: #002641"></i></div><div style="display: inline-block;margin-left:10px;"><p class="streetPopup" style="line-height: 12px;">'+street+'<br>'+city+'</p><p class="smallTitle">Street</p></div><hr style="margin-left: -14px; margin-right:-14px;"></div><div style="margin: auto;border: 0;"><button class="directionButton">Direction</button></div>'
                curMap.showMarker(
                {
                    position: [parseFloat(coordinates[0]), parseFloat(coordinates[1])],
                    positioning: 'center-center',
                    iconURL: './images/pin.svg',
                    click: true,
                    html: output
                });
            }
        });

        //var position1 = [75977, 75099];
        var position2 = [6.11149,49.61062];
        //var position1 = [98259.62760000027,77052.32989954633];
        var position1 = [92739.74789999983,90096.97799955128]

        /*curMap.showMarker(
            {
            position: position1,
            positioning: 'center-center',
            iconURL: './images/pin.svg',
            click: true,
            html: output
            });
        curMap.showMarker(
            {
            position: position2,
            positionSrs: 4326,
            positioning: 'center-center',
            iconURL: './images/pin.svg',
            click: true,
            html: output
        });*/

        //EPSG:2169
        /*lux.geocode({
            queryString: '22, RUE DU VILLAGE ((PARKING, ENTRE 22 ET 28)), ABWEILER'
        }, function(position) {
            console.log (position);
        });*/

        //console.log(map);
    </script>
    <aside>

      <div class="filtersContent">
        <div class="searchField"><label for="inputFieldSearch"><div class="searchIcon"><i class="fa-solid fa-magnifying-glass fa-sm"></i></div></label><input type="text" id="inputFieldSearch" class="searchInputField" placeholder=" Search"><div class="pinSearchIconBar"><img src="./images/pin.svg" class="pinSearchIcon"></div></div>
        <hr>
        <p style="display: inline; margin: 20px 0 20px 0;color: #474747;">Emptied yet:<input type="checkbox"></p>
        <div style="display: inline-block; float: right;"><button class="resetDefault"><i class="fa-solid fa-arrow-rotate-left"></i></button><button class="showListTowns"><i class="fa-solid fa-list-check"></i></button></div>
        <p style="color: #474747;">Time: <span class="smallText">from</span> <select class="selectTime" id="startTime"></select> <span class="smallText">to</span> <select class="selectTime" id="endTime"><option>??:??</option></select></p>
        <p style="color: #474747;">Distance:<input type="range" class="sliderDistance" min="1" max="100" value="50"><span id="distanceValueDisplay">50</span>km</p>
      </div>
    <script>
        $(document).ready(function(){
            const horraire = ["7:30", "8:00","8:30","9:00","9:30","10:00","10:30","11:00","11:30", "12:00","12:30","13:00","13:30","14:00","14:30","15:00","15:30","16:00","16:30","17:00","17:30","18:00", "18:30","19:00"];
            
            let output = "<option selected disabled>??:??</option>";
            horraire.forEach(value => {
                output += "<option>"+value+"</option>";
            });
            $("#startTime").html(output);

            $("#startTime").change(function(){
                console.log(this.value);
                let value = this.value;
                let index = horraire.indexOf(value);
                let output = "<option selected disabled>??:??</option>";
                for (let i = index; i < horraire.length; i++) {
                    const element = horraire[i];
                    output += "<option>"+element+"</option>"; 
                    console.log(element);
                }
                $("#endTime").html(output);
            })

            $(".sliderDistance").on("change mousemove",function(){
                $("#distanceValueDisplay").html(this.value)
            });

            let check = true;
            $(".showMapButton").click(function(){
                if (check){
                    $("main").css("grid-template-columns", "minmax(376px,100%) 0%");
                    check = false; 
                }else{
                    $("main").css("grid-template-columns", "0% minmax(376px,100%)");
                    check = true;
                }

            })

            $(".list_location_all").click(function(){
                if ($("#"+this.id + " .list_location_close").css('display') != 'none') {
                    $(".list_location_open").hide();
                    $(".list_location_close").show();
                    $("#" + this.id + " .list_location_close").hide("slow");
                    $("#" + this.id + " .list_location_open").show("slow");
                }
            });


            let checkListLocation = true;
            $(".showListTowns").click(function(){
                if(checkListLocation){
                    checkListLocation = false;
                    $(".list_location_all").hide();
                    $(".descriptionText").html(" Filter by Town");
                    $.getJSON("http://localhost:8000/api/cities", function(data){
                        console.log(data);
                        let output = "<div class='filterTownDiv'><table>";
                        output += "<tr><td style='width: 25%'></td><td style='width: 50%'>Select all:</td><td style='width: 25%'><input type='checkbox' id='checkBoxSelectAll' checked></td></tr>";
                        for (let i = 0; i < data.length; i++) {
                            const element = data[i];
                            output += "<tr><td></td><td>"+element["city"]+"</td><td><input type='checkbox' class='townCheckBox' id='checkBoxIdCity_"+element["idCity"]+"' checked></td></tr>";
                        }
                        output += "</table></div>";
                        $(".filterByTownContent").html(output);

                        $("#checkBoxSelectAll").click(function(){
                            if(this.checked){
                                $( ".townCheckBox" ).prop( "checked", true );
                            }else{
                                $( ".townCheckBox" ).prop( "checked", false );
                            }
                        });

                        $(".townCheckBox").click(function(){
                            if ($(".townCheckBox:checkbox:checked").length >= data.length) {
                                $( "#checkBoxSelectAll" ).prop( "checked", true );
                            }else{
                                $( "#checkBoxSelectAll" ).prop( "checked", false );
                            }
                        });

                    })
                }else{
                    checkListLocation = true;
                    $(".list_location_all").show();
                    $(".filterByTownContent").html("");
                    $(".descriptionText").html('<span id="totalBoxLettersFound">10</span> box letters found</p>');
                }
            })

        });
        </script>
      <p style="text-align: center;font-size: 25px;vertical-align: text-top;"><img style="height: 25px;" src="./images/pin.svg" alt=""> <span class="descriptionText"><span id="totalBoxLettersFound">10</span> box letters found</p></span>
        
      <span class="filterByTownContent"></span>
        <span class='list_location_all' id="location_1">
            <div class="list_location_close">
                <span class="pickupTime">
                Pickup Time<br>
                <span class="time">18:30</span>
                </span>
                <span class="pickupAddress">
                Address<br>
                <span class="address">120, route de Luxembourg <br>L-3514 Dudelange</span>
                </span>
                <span class="pickupDistance">
                Distance<br>
                <span class="distance">120 m</span>
                </span>
            </div>
            <div class="list_location_open" hidden>
                <table style="width: 100%;border-collapse: collapse;">
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align:center;width: 25%;">
                        <i class="fa-regular fa-clock" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 35px;">18:30</span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-map-location-dot" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 18px;line-height: 0px;font-family: RajdhaniRegular;"><p>120, route de Luxembourg</p><p>L-3514 Dudelange</p></span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-location-arrow" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span>120 m</span>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style="text-align:center;">
                        <button class="directionButton" style="width: 60%; font-size: 20px;margin-top:5px;" >Direction</button>
                    </td>
                </tr>
                </table> 
            </div>
    </span>

    <span class='list_location_all' id="location_2">
            <div class="list_location_close">
                <span class="pickupTime">
                Pickup Time<br>
                <span class="time">18:30</span>
                </span>
                <span class="pickupAddress">
                Address<br>
                <span class="address">120, route de Luxembourg <br>L-3514 Dudelange</span>
                </span>
                <span class="pickupDistance">
                Distance<br>
                <span class="distance">120 m</span>
                </span>
            </div>
            <div class="list_location_open" hidden>
                <table style="width: 100%;border-collapse: collapse;">
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align:center;width: 25%;">
                        <i class="fa-regular fa-clock" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 35px;">18:30</span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-map-location-dot" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 18px;line-height: 0px;font-family: RajdhaniRegular;"><p>120, route de Luxembourg</p><p>L-3514 Dudelange</p></span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-location-arrow" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span>120 m</span>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style="text-align:center;">
                        <button class="directionButton" style="width: 60%; font-size: 20px;margin-top:5px;" >Direction</button>
                    </td>
                </tr>
                </table> 
            </div>
    </span>
    <span class='list_location_all' id="location_3">
            <div class="list_location_close">
                <span class="pickupTime">
                Pickup Time<br>
                <span class="time">18:30</span>
                </span>
                <span class="pickupAddress">
                Address<br>
                <span class="address">120, route de Luxembourg <br>L-3514 Dudelange</span>
                </span>
                <span class="pickupDistance">
                Distance<br>
                <span class="distance">120 m</span>
                </span>
            </div>
            <div class="list_location_open" hidden>
                <table style="width: 100%;border-collapse: collapse;">
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align:center;width: 25%;">
                        <i class="fa-regular fa-clock" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 35px;">18:30</span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-map-location-dot" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 18px;line-height: 0px;font-family: RajdhaniRegular;"><p>120, route de Luxembourg</p><p>L-3514 Dudelange</p></span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-location-arrow" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span>120 m</span>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style="text-align:center;">
                        <button class="directionButton" style="width: 60%; font-size: 20px;margin-top:5px;" >Direction</button>
                    </td>
                </tr>
                </table> 
            </div>
    </span>
    <span class='list_location_all' id="location_4">
            <div class="list_location_close">
                <span class="pickupTime">
                Pickup Time<br>
                <span class="time">18:30</span>
                </span>
                <span class="pickupAddress">
                Address<br>
                <span class="address">120, route de Luxembourg <br>L-3514 Dudelange</span>
                </span>
                <span class="pickupDistance">
                Distance<br>
                <span class="distance">120 m</span>
                </span>
            </div>
            <div class="list_location_open" hidden>
                <table style="width: 100%;border-collapse: collapse;">
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align:center;width: 25%;">
                        <i class="fa-regular fa-clock" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 35px;">18:30</span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-map-location-dot" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 18px;line-height: 0px;font-family: RajdhaniRegular;"><p>120, route de Luxembourg</p><p>L-3514 Dudelange</p></span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-location-arrow" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span>120 m</span>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style="text-align:center;">
                        <button class="directionButton" style="width: 60%; font-size: 20px;margin-top:5px;" >Direction</button>
                    </td>
                </tr>
                </table> 
            </div>
    </span>
    <span class='list_location_all' id="location_5">
            <div class="list_location_close">
                <span class="pickupTime">
                Pickup Time<br>
                <span class="time">18:30</span>
                </span>
                <span class="pickupAddress">
                Address<br>
                <span class="address">120, route de Luxembourg <br>L-3514 Dudelange</span>
                </span>
                <span class="pickupDistance">
                Distance<br>
                <span class="distance">120 m</span>
                </span>
            </div>
            <div class="list_location_open" hidden>
                <table style="width: 100%;border-collapse: collapse;">
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align:center;width: 25%;">
                        <i class="fa-regular fa-clock" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 35px;">18:30</span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-map-location-dot" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span style="font-size: 18px;line-height: 0px;font-family: RajdhaniRegular;"><p>120, route de Luxembourg</p><p>L-3514 Dudelange</p></span>
                    </td>
                </tr>
                <tr style="border-bottom: 0.2px solid #9B9B9B">
                    <td style="text-align: center;">
                        <i class="fa-solid fa-location-arrow" style="font-size: 30px"></i>
                    </td>
                    <td>
                        <span>120 m</span>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style="text-align:center;">
                        <button class="directionButton" style="width: 60%; font-size: 20px;margin-top:5px;" >Direction</button>
                    </td>
                </tr>
                </table> 
            </div>
    </span>

    </aside>
    </main>
    <footer>
      <p class="footer_content">@copyright 2022</p>
    </footer>
    </body>
</html>
