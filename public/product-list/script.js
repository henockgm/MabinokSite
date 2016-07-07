var myApp = angular
	
	.module("productCatalogModule", [])

	.controller('mobilePhones', ['$scope', '$location', '$anchorScroll',   
		function($scope, $location, $anchorScroll) {
		
		// defualt sorting filter key on loading page
		$scope.sortColumn = "modelName";
		$scope.reverseSort = false;
		// current expanded table row index initialized with an empity string
		$scope.rowExpandedIndexCurrent = "";
		// previously expanded table row index initialized with an empity string
		$scope.rowExpandedIndexPrevious = "";
		// to store a boolean value for any expaneded row
		$scope.rowExpanded = false;

		


		// scrolls to vieawable area
		// input: id of the table row element
		$scope.scrollToDetialsPan = function() {      
      		$location.hash('bi-row');     
      		$anchorScroll();
    	};

        // sorts Column data
        // param: key name of the column
		$scope.sortDataBy = function (column) {
			$scope.reverseSort = ($scope.sortColumn == column) ? !$scope.reverseSort : false;
			$scope.sortColumn = column;
		};

		// toggles the sort arrow on the table head 
		$scope.getSortClass = function  (column) {
			if($scope.sortColumn == column) {
				return $scope.reverseSort ? 'arrow-down' : 'arrow-up'
			}

			return '';
		};


		// this function is called when a row is clicked.
		// Sets row indexes to current expanded and previous expanded
		// scope variables.  
		$scope.rowSelector = function (rowIndex) {            		

			$scope.refreshRowProperties();
                   
             // check if no row has been expaneded and set the roeExpaneded varable to true
             // and paras index as current active row index 
			if($scope.rowExpanded === false && $scope.rowExpandedIndexCurrent === "") {
             $scope.rowExpanded = true;
             $scope.rowExpandedIndexCurrent = rowIndex;
			}

			//check if row is already expanded 
			else if($scope.rowExpanded === true) {
				// check if the same expaneded row is clicked back and 
				// set rowExapned flag to false
				if($scope.rowExpandedIndexCurrent === rowIndex) {
					$scope.rowExpanded = false;
					$scope.rowExpandedIndexCurrent = "";
				}

				// this option is when a new row is clicked to expand
				else {
					$scope.rowExpandedIndexPrevious = $scope.rowExpandedIndexCurrent;
					$scope.rowExpandedIndexCurrent = rowIndex;
				}

			}
		};

		// returns a css class of left directed carot for each table row
		 $scope.rowCollapsedBtn = function() {
           return 'arrow-left';
		 };

	    // returns a css class of down facing carot for each table row
	    // as row is expaneded
		$scope.rowExpandedBtn = function() {
         return 'arrow-down-exp';
		};
         
         // highlights the left border of expanded row
		$scope.rowMarker = function(index) {
			if($scope.rowExpandedIndexCurrent === index) {		
				return 'row-expanded';	
			}      
		};

        // phone dscription text limit filter 
        $scope.textLimit = 500;
        //  
        $scope.className = "";
        $scope.descriptionMain = "description-mainText";
        $scope.readMoreBtnName = "Read more";
        $scope.readMoreExpanded = false;




		$scope.readMore = function() {
          if($scope.readMoreExpanded === false) {
          	 $scope.textLimit=10000;
          	 $scope.descriptionMain = "description-mainText-more";
          	 $scope.readMoreBtnName = "Read less";	 
          	 $scope.className = "read-more-no-blurr";
          	 $scope.readMoreExpanded = true;
          	
          }

           else {
           	$scope.textLimit=500;
           	$scope.className = "read-more-blurr";
			$scope.descriptionMain = "description-mainText";
			$scope.readMoreBtnName = "Read More";
			$scope.readMoreExpanded = false;
           }	
			
		};

		$scope.readMoreBlurr = function() {
         return className;
		};

		$scope.refreshRowProperties = function(){
			$scope.scrollToDetialsPan();
            $scope.textLimit=500;
            $scope.readMoreBtnName = "Read More";
            $scope.className = "read-more-blurr";
            $scope.descriptionMain = "description-mainText";
            $scope.readMoreExpanded = false;
		};

        // checks the stock value and return true or false 
		$scope.inStock = function(input){
			if(input <= 0){			
				return false;
			}
			return true;
		};

		$scope.outOfStock = function(){		
			return 'out-of-stock';
		};




					

	
// array contaning all table data 
$scope.allPhones = [

					{ 
						modelName: "Microsoft Lumia 550 8GB, black",
						modelFullName: "Microsoft Lumia 550 Windows Phone, black",
						display: "4.7\"", 
						os:"Windows 10", 
						stock: 0 , 
						monthly: 8.95, 
						oneTime: 449.90,
						storage:"8 GB",
						allStock: {
                            store:65,
                            mainWareHouse: 200,
                            otherWareHouse: 434
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaaSillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa. On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "4.7\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Windows 10.8",
							touchScreen: "Touch screen",
							storage: "8 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/lumia550_32gb_black.jpeg",
					},

					{ 
						modelName: "Microsoft Lumia 550 8GB, white",
						modelFullName: "Microsoft Lumia 550 Windows Phone, white", 
						display: "4.7\"", 
						os:"Windows 10", 
						stock: 654 , 
						monthly: 6.95, 
						oneTime: 449.90,
						storage:"8 GB",
						allStock: {
                            store:23,
                            mainWareHouse: 350,
                            otherWareHouse: 653
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa. On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa.Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "4.7\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Windows 10.8",
							touchScreen: "Touch screen",
							storage: "8 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/lumia550_32gb_white.jpeg",
					},




					{ 
						modelName: "Microsoft Lumia 950 32GB, white",
						modelFullName: "Microsoft Lumia 950 Windows Phone (Single-SIM), white", 
						display: "5.2\"", 
						os:"Windows 10", 
						stock: 342 , 
						monthly: 8.95, 
						oneTime: 649.90,
						storage:"32 GB",
						allStock: {
                            store: 65,
                            mainWareHouse: 233,
                            otherWareHouse: 124
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.2\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Windows 10.8",
							touchScreen: "Touch screen",
							storage: "32 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/lumia950_singlesim_32gb.jpeg",
					},


					{ 
						modelName: "Microsoft Lumia 950 32GB, white",
						modelFullName: "Microsoft Lumia 950 Windows Phone  (Dual-SIM), white", 
						display: "5.2\"", 
						os:"Windows 10", 
						stock: 342 , 
						monthly: 8.95, 
						oneTime: 649.90,
						storage:"32 Gb",
						allStock: {
                            store: 88,
                            mainWareHouse: 46,
                            otherWareHouse: 45
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.2\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Windows 10.8",
							touchScreen: "Touch screen",
							storage: "32 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/lumia950_dualsim_32gb.jpeg",
					},



					{ 
						modelName: "Microsoft Lumia 640 16GB, orange",
						modelFullName: "Microsoft Lumia 640 XL LTE Windows Phone, orange", 
						display: "5.0\"", 
						os:"Windows 10", 
						stock: 430 , 
						monthly: 9.95, 
						oneTime: 649.90,
						storage:"16 Gb",
						allStock: {
                            store: 56,
                            mainWareHouse: 34,
                            otherWareHouse: 67
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaasinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.0\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Windows 10.8",
							touchScreen: "Touch screen",
							storage: "16 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/lumia640_XL_32gb.jpeg",
					},

					{ 
						modelName: "Microsoft Lumia 640 16GB, black", 
						modelFullName: "Microsoft Lumia 640 Dual-SIM LTE Windows Phone, black",
						display: "5.0\"", 
						os:"Windows 10", 
						stock: 298 , 
						monthly: 9.95, 
						oneTime: 649.90,
						storage:"16GB Gb",
						allStock: {
                            store: 67,
                            mainWareHouse: 898,
                            otherWareHouse: 676
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa. On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.0\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Windows 10.8",
							touchScreen: "Touch screen",
							storage: "16GB GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/lumia640_dualsim_32gb.jpeg",
					},


					{ 
						modelName: "iPhone 6S 64GB, silver",
						modelFullName: "Apple iPhone 6S 64GB, silver", 
						display: "5.2\"", 
						os:"iOS 9.3", 
						stock: 235 , 
						monthly: 9.95, 
						oneTime: 749.90,
						storage:"64 Gb",
						allStock: {
                            store: 6,
                            mainWareHouse: 22,
                            otherWareHouse: 72
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa. On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa."
						},
						quickDetails: {
							screenType: "5.2\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "iOS 9.3",
							touchScreen: "Touch screen",
							storage: "64 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 12 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/iphone6S_spacegrey_64GB.jpeg",
					},

					{ 
						modelName: "iPhone 6S 64GB, black",
						modelFullName: "Apple iPhone 6S 64GB, black", 
						display: "5.2\"", 
						os:"iOS 9.3", 
						stock: 124 , 
						monthly: 9.95, 
						oneTime: 749.90,
						storage:"64 GB",
						allStock: {
                            store: 3,
                            mainWareHouse: 54,
                            otherWareHouse: 76
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa. Hampden-Sydneyn yliopistossa Virginiassa, etsi yhden vaikeaselkoisimmista latinalaisista sanoista, consectetur, Lorem Ipsumin kappaleesta ja etsi lainauksia sanasta klassisessa kirjallisuudessa löytäen varman lähteen. Lorem Ipsum tulee osista 1.10.32 ja 1.10.33 de Finibus Bonorum et Malorum:ksesta (The Extremes of Good and Evil), jonka teki Cicero vuonna 45 eKr. Tämä kirja on tutkielma etiikasta, joka oli hyvin yleistä Renesanssin aikana. Ensimmäinen Lorem Ipsumin rivi, Lorem ipsum dolor sit amet.., tulee rivistä joka on osassa 1.10.32.Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.2\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "iOS 9.3",
							touchScreen: "Touch screen",
							storage: "64 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 12 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/iphone6S_black_64GB.jpeg",
					},

					{ 
						modelName: "iPhone 6S 64GB, gold",
						modelFullName: "Apple iPhone 6S 64GB, gold", 
						display: "5.2\"", 
						os:"iOS 9.3", 
						stock: 243 , 
						monthly: 9.95, 
						oneTime: 749.90,
						storage:"64 GB",
						allStock: {
                            store: 0,
                            mainWareHouse: 54,
                            otherWareHouse: 67
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa. Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.2\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "iOS 9.3",
							touchScreen: "Touch screen",
							storage: "64 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 12 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/iphone6S_gold_64GB.jpeg",
					},



					{ 
						modelName: "iPhone 6S 64GB, rose gold",
						modelFullName: "Apple iPhone 6S 64GB, rose gold", 
						display: "5.2\"", 
						os:"iOS 9.3", 
						stock: 505 , 
						monthly: 9.95, 
						oneTime: 749.90,
						storage:"64 GB",
						allStock: {
                            store: 23,
                            mainWareHouse: 434,
                            otherWareHouse: 55
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.2\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "iOS 9.3",
							touchScreen: "Touch screen",
							storage: "64 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/iphone6S_rose_64GB.jpeg",
					},


					{ 
						modelName: "iPhone 6SE 64 GB, black",
						modelFullName: "Apple iPhone 6SE 64 Gb, black", 
						display: "4.0\"", 
						os:"iOS 9.3", 
						stock: 594 , 
						monthly: 9.95, 
						oneTime: 749.90,
						storage:"64 GB",
						allStock: {
                            store: 4,
                            mainWareHouse: 45,
                            otherWareHouse: 36
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa. Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "4.0\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "iOS 9.3",
							touchScreen: "Touch screen",
							storage: "64 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/iphone6SE_black_64GB.jpeg",
					},



					{ 
						modelName: "Samsung Galaxy J5 16GB, gold",
						modelFullName: "Samsung Galaxy J5 Android Phone, gold", 
						display: "5.0\"", 
						os:"Android OS, v6.0 (Marshmallow)", 
						stock: 0 , 
						monthly: 5.95, 
						oneTime: 189.90,
						storage:"16 GB",
						allStock: {
                            store: 10,
                            mainWareHouse: 43,
                            otherWareHouse: 34
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.0\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Android OS, v6.0 (Marshmallow)",
							touchScreen: "Touch screen",
							storage: "16 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 10 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/samsung_galaxy_J5.jpeg",
					},

				

					{ 
						modelName: "Samsung Galaxy S7 edge 32 Gb, black",
						modelFullName: "Samsung Galaxy S7 Edge, black", 
						display: "5.0\"", 
						os:"Android OS, v6.0 (Marshmallow)", 
						stock: 201 , 
						monthly: 10.95, 
						oneTime: 749.90,
						storage:"32 GB",
						allStock: {
                            store: 6,
                            mainWareHouse: 21,
                            otherWareHouse: 12
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.0\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Android OS, v6.0 (Marshmallow)",
							touchScreen: "Touch screen",
							storage: "32 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : "14 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/samsung_galaxyS7edge32Gt_black.jpeg",
					},

					{ 
						modelName: "Samsung Galaxy S7 32 Gb, gold",
						modelFullName: "Samsung Galaxy S7 Android Phone, gold", 
						display: "5.0\"", 
						os:"Android OS, v6.0 (Marshmallow)", 
						stock: 473 , 
						monthly: 9.95, 
						oneTime: 649.90,
						storage:"32 GB",
						allStock: {
                            store: 99,
                            mainWareHouse: 100 ,
                            otherWareHouse: 56
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.0\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Android OS, v6.0 (Marshmallow)",
							touchScreen: "Touch screen",
							storage: "32 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 13 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/samsung_galaxyS7edge32Gt_gold.jpeg",
					},

					{ 
						modelName: "Samsung Galaxy S5 Neo, black", 
						modelFullName: "Samsung Galaxy S5 Neo Android Phone, black",
						display: "5.0\"", 
						os:"Android OS, v6.0 (Marshmallow)", 
						stock: 98 , 
						monthly: 7.95, 
						oneTime: 449.90,
						storage:"16 GB",
						allStock: {
                            store: 7,
                            mainWareHouse: 22,
                            otherWareHouse: 24
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret.Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.0\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Android OS, v6.0 (Marshmallow)",
							touchScreen: "Touch screen",
							storage: "16 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 14 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/samsung_galaxyS5Neo_black.jpeg",
					},

					{ 
						modelName: "Sony Xperia Z5, Gold", 
						modelFullName: "Sony Xperia Z5 Android-puhelin, Gold",
						display: "5.0\"", 
						os:"Android OS, v6.0 (Marshmallow)", 
						stock: 77 , 
						monthly: 9.95, 
						oneTime: 449.90,
						storage:"32 GB",
						allStock: {
                            store: 34,
                            mainWareHouse: 44,
                            otherWareHouse: 55
						},
						description: {
							highlight:"Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät.",
							mainText : "Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa. Vastoin yleistä uskomusta, Lorem Ipsum ei ole vain sattumanvarainen teksti. Sillä on pitkät juuret klassisesta latinalaisesta kirjallisuudesta vuonna 45 eKr alkaen, tehden siitä yli 2000 vuotta vanhan. Richard McClintock, latinalainen professori Hampden-Sydneyn yliopistossa Virginiassa.On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa"
						},
						quickDetails: {
							screenType: "5.0\" Full HD Screen",
							resolution:"Resolution 1920 x 1080 px",
							osVersion: "Android OS, v6.0 (Marshmallow)",
							touchScreen: "Touch screen",
							storage: "32 GB internal storage",
							battery: "Battery 3100 mAh",
							camera : " 14 Mpix camera and 5Mpix front facing camera"
						},
						image : "images/SonyXperiaZ5Gold.jpeg",
					},



					
			
				];

}]);
