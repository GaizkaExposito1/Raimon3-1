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
      /*
      $('.btn-counter').on('click', function(event, count) {
        event.preventDefault();
        
        var $this = $(this),
            count = $this.attr('data-count'),
            active = $this.hasClass('active'),
            multiple = $this.hasClass('multiple-count');
      });
      */
      /*function cambiarIdioma() {
        let Es=document.getElementById("langFlagSpain");
        let Eus=document.getElementById("langFlagBasque");
        if(Eus.style.display="none"){
          Eus.style.display="block";
          Es.style.display="none";
        }else{
          Eus.style.display="none";
          Es.style.display="block";
        }
      }*/