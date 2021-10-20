    /*First Menu*/ 
    function TopHeader() {
        let topnav = document.getElementById("myTopnav");
        if (topnav.className === "topnav") {
          topnav.className += " responsive";
        } else {
          topnav.className = "topnav";
        }
      }
      
          /*Second Menu*/ 
      function MidMenu() {
        let topnav = document.getElementById("myTopnav2");
        if (topnav.className === "topnav2") {
          topnav.className += " responsive2";
        } else {
          topnav.className = "topnav2";
        }
      }