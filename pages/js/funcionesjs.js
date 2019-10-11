//FUNCIONES LECHE
  function funcionHC_LECHE(){
  var rac_leche = Number(document.getElementById("rac_leche").value);
  document.getElementById("hc_rac_leche").value = rac_leche*12
  }

  function funcionPROTE_LECHE(){
  var rac_leche = Number(document.getElementById("rac_leche").value);
  document.getElementById("prote_rac_leche").value = rac_leche*9;
  }

  function funcionLIPI_LECHE(){
  var rac_leche = Number(document.getElementById("rac_leche").value);
  document.getElementById("lipi_rac_leche").value = rac_leche*5;
  }
  function funcionKC_LECHE(){
  var hc_rac_leche = Number(document.getElementById("hc_rac_leche").value);
  var prote_rac_leche = Number(document.getElementById("prote_rac_leche").value);
  var lipi_rac_leche = Number(document.getElementById("lipi_rac_leche").value);
  document.getElementById("kc_rac_leche").value = (hc_rac_leche*4)+(prote_rac_leche*4)+(lipi_rac_leche*9);
  }
  //FUNCIONES CARNE
  function funcionHC_CARNE(){
  var rac_carne = Number(document.getElementById("rac_carne").value);
  document.getElementById("hc_rac_carne").value = rac_carne*0;
  }
  function funcionPROTE_CARNE(){
  var rac_carne = Number(document.getElementById("rac_carne").value);
  document.getElementById("prote_rac_carne").value = rac_carne*7;
  }
  function funcionLIPI_CARNE(){
  var rac_carne = Number(document.getElementById("rac_carne").value);
  document.getElementById("lipi_rac_carne").value = rac_carne*4;
  }
  function funcionKC_CARNE(){
  var hc_rac_carne = Number(document.getElementById("hc_rac_carne").value);
  var prote_rac_carne = Number(document.getElementById("prote_rac_carne").value);
  var lipi_rac_carne = Number(document.getElementById("lipi_rac_carne").value);
  document.getElementById("kc_rac_carne").value = (hc_rac_carne*4)+(prote_rac_carne*4)+(lipi_rac_carne*9);
  }

  //FUNCIONES FRUTA
  function funcionHC_FRUTA(){
  var rac_fruta = Number(document.getElementById("rac_fruta").value);
  document.getElementById("hc_rac_fruta").value = rac_fruta*15;
  }
  function funcionPROTE_FRUTA(){
  var rac_fruta = Number(document.getElementById("rac_fruta").value);
  document.getElementById("prote_rac_fruta").value = rac_fruta*0;
  }
  function funcionLIPI_FRUTA(){
  var rac_fruta = Number(document.getElementById("rac_fruta").value);
  document.getElementById("lipi_rac_fruta").value = rac_fruta*0;
  }
  function funcionKC_FRUTA(){
  var hc_rac_fruta = Number(document.getElementById("hc_rac_fruta").value);
  var prote_rac_fruta = Number(document.getElementById("prote_rac_fruta").value);
  var lipi_rac_fruta = Number(document.getElementById("lipi_rac_fruta").value);
  document.getElementById("kc_rac_fruta").value = (hc_rac_fruta*4)+(prote_rac_fruta*4)+(lipi_rac_fruta*9);
  }

  //FUNCIONES VEGETALES

  function funcionHC_VEGETALES(){
  var rac_vegetales = Number(document.getElementById("rac_vegetales").value);
  document.getElementById("hc_rac_vegetales").value = rac_vegetales*4;
  }
  function funcionPROTE_VEGETALES(){
  var rac_vegetales = Number(document.getElementById("rac_vegetales").value);
  document.getElementById("prote_rac_vegetales").value = rac_vegetales*2;
  }
  function funcionLIPI_VEGETALES(){
  var rac_vegetales = Number(document.getElementById("rac_vegetales").value);
  document.getElementById("lipi_rac_vegetales").value = rac_vegetales*0;
  }
  function funcionKC_VEGETALES(){
  var hc_rac_vegetales = Number(document.getElementById("hc_rac_vegetales").value);
  var prote_rac_vegetales = Number(document.getElementById("prote_rac_vegetales").value);
  var lipi_rac_vegetales = Number(document.getElementById("lipi_rac_vegetales").value);
  document.getElementById("kc_rac_vegetales").value = (hc_rac_vegetales*4)+(prote_rac_vegetales*4)+(lipi_rac_vegetales*9);
  }

  //FUNCIONES CEREALES Y TUBERCULOS
  function funcionHC_CYT(){
  var rac_cyt = Number(document.getElementById("rac_cyt").value);
  document.getElementById("hc_rac_cyt").value = rac_cyt*15;
  }
  function funcionPROTE_CYT(){
  var rac_cyt = Number(document.getElementById("rac_cyt").value);
  document.getElementById("prote_rac_cyt").value = rac_cyt*2;
  }
  function funcionLIPI_CYT(){
  var rac_cyt = Number(document.getElementById("rac_cyt").value);
  document.getElementById("lipi_rac_cyt").value = rac_cyt*0;
  }
  function funcionKC_CYT(){
  var hc_rac_cyt = Number(document.getElementById("hc_rac_cyt").value);
  var prote_rac_cyt = Number(document.getElementById("prote_rac_cyt").value);
  var lipi_rac_cyt = Number(document.getElementById("lipi_rac_cyt").value);
  document.getElementById("kc_rac_cyt").value = (hc_rac_cyt*4)+(prote_rac_cyt*4)+(lipi_rac_cyt*9);
  }

  //FUNCIONES LEGUMINOSAS
  function funcionHC_LEGUMINOSAS(){
  var rac_leguminosas = Number(document.getElementById("rac_leguminosas").value);
  document.getElementById("hc_rac_leguminosas").value = rac_leguminosas*20;
  }
  function funcionPROTE_LEGUMINOSAS(){
  var rac_leguminosas = Number(document.getElementById("rac_leguminosas").value);
  document.getElementById("prote_rac_leguminosas").value = rac_leguminosas*8;
  }
  function funcionLIPI_LEGUMINOSAS(){
  var rac_leguminosas = Number(document.getElementById("rac_leguminosas").value);
  document.getElementById("lipi_rac_leguminosas").value = rac_leguminosas*1;
  }
  function funcionKC_LEGUMINOSAS(){
  var hc_rac_leguminosas = Number(document.getElementById("hc_rac_leguminosas").value);
  var prote_rac_leguminosas = Number(document.getElementById("prote_rac_leguminosas").value);
  var lipi_rac_leguminosas = Number(document.getElementById("lipi_rac_leguminosas").value);
  document.getElementById("kc_rac_leguminosas").value = (hc_rac_leguminosas*4)+(prote_rac_leguminosas*4)+(lipi_rac_leguminosas*9);
  }

  //FUNCIONES GRASAS
  function funcionHC_GRASAS(){
  var rac_grasas = Number(document.getElementById("rac_grasas").value);
  document.getElementById("hc_rac_grasas").value = rac_grasas*0;
  }
  function funcionPROTE_GRASAS(){
  var rac_grasas = Number(document.getElementById("rac_grasas").value);
  document.getElementById("prote_rac_grasas").value = rac_grasas*0;
  }
  function funcionLIPI_GRASAS(){
  var rac_grasas = Number(document.getElementById("rac_grasas").value);
  document.getElementById("lipi_rac_grasas").value = rac_grasas*5;
  }
  function funcionKC_GRASAS(){
  var hc_rac_grasas = Number(document.getElementById("hc_rac_grasas").value);
  var prote_rac_grasas = Number(document.getElementById("prote_rac_grasas").value);
  var lipi_rac_grasas = Number(document.getElementById("lipi_rac_grasas").value);
  document.getElementById("kc_rac_grasas").value = (hc_rac_grasas*4)+(prote_rac_grasas*4)+(lipi_rac_grasas*9);
  }

  //FUNCIONES AZUCARES
  function funcionHC_AZUCARES(){
  var rac_azucares = Number(document.getElementById("rac_azucares").value);
  document.getElementById("hc_rac_azucares").value = rac_azucares*10;
  }
  function funcionPROTE_AZUCARES(){
  var rac_azucares = Number(document.getElementById("rac_azucares").value);
  document.getElementById("prote_rac_azucares").value = rac_azucares*0;
  }
  function funcionLIPI_AZUCARES(){
  var rac_azucares = Number(document.getElementById("rac_azucares").value);
  document.getElementById("lipi_rac_azucares").value = rac_azucares*0;
  }

  function funcionKC_AZUCARES()
  {
  var hc_rac_azucares = Number(document.getElementById("hc_rac_azucares").value);
  var prote_rac_azucares = Number(document.getElementById("prote_rac_azucares").value);
  var lipi_rac_azucares = Number(document.getElementById("lipi_rac_azucares").value);
  document.getElementById("kc_rac_azucares").value = (hc_rac_azucares*4)+(prote_rac_azucares*4)+(lipi_rac_azucares*9);
  }


  function funcionTOTAL_HC()
  {
    var hc_rac_leche = Number(document.getElementById("hc_rac_leche").value);
    var hc_rac_carne = Number(document.getElementById("hc_rac_carne").value);
    var hc_rac_fruta = Number(document.getElementById("hc_rac_fruta").value);
    var hc_rac_vegetales = Number(document.getElementById("hc_rac_vegetales").value);
    var hc_rac_cyt = Number(document.getElementById("hc_rac_cyt").value);
    var hc_rac_leguminosas = Number(document.getElementById("hc_rac_leguminosas").value);
    var hc_rac_grasas = Number(document.getElementById("hc_rac_grasas").value);
    var hc_rac_azucares = Number(document.getElementById("hc_rac_azucares").value);
    document.getElementById("total_hc").value = (hc_rac_leche)+(hc_rac_carne)+(hc_rac_fruta)+(hc_rac_vegetales)+(hc_rac_cyt)+(hc_rac_leguminosas)+(hc_rac_grasas)+(hc_rac_azucares);
    var total_kc=  Number(document.getElementById("total_kc").value);

    document.getElementById("hc_grs").value = (hc_rac_leche)+(hc_rac_carne)+(hc_rac_fruta)+(hc_rac_vegetales)+(hc_rac_cyt)+(hc_rac_leguminosas)+(hc_rac_grasas)+(hc_rac_azucares);
    var hc_grs =  Number(document.getElementById("hc_grs").value);

    document.getElementById("hc_kc").value = hc_grs*4;
    var hc_kc=Number(document.getElementById("hc_kc").value);
    document.getElementById("hc_porcentaje").value= ((hc_kc*100)/total_kc).toFixed(2);

  }

  function funcionTOTAL_PROTEINAS()
  {
    var prote_rac_leche = Number(document.getElementById("prote_rac_leche").value);
    var prote_rac_carne = Number(document.getElementById("prote_rac_carne").value);
    var prote_rac_fruta = Number(document.getElementById("prote_rac_fruta").value);
    var prote_rac_vegetales = Number(document.getElementById("prote_rac_vegetales").value);
    var prote_rac_cyt = Number(document.getElementById("prote_rac_cyt").value);
    var prote_rac_leguminosas = Number(document.getElementById("prote_rac_leguminosas").value);
    var prote_rac_grasas = Number(document.getElementById("prote_rac_grasas").value);
    var prote_rac_azucares = Number(document.getElementById("prote_rac_azucares").value);
    document.getElementById("total_prote").value = (prote_rac_leche)+(prote_rac_carne)+(prote_rac_fruta)+(prote_rac_vegetales)+(prote_rac_cyt)+(prote_rac_leguminosas)+(prote_rac_grasas)+(prote_rac_azucares);
    var total_kc=  Number(document.getElementById("total_kc").value);
    document.getElementById("prote_grs").value = (prote_rac_leche)+(prote_rac_carne)+(prote_rac_fruta)+(prote_rac_vegetales)+(prote_rac_cyt)+(prote_rac_leguminosas)+(prote_rac_grasas)+(prote_rac_azucares);
    var prote_grs =  Number(document.getElementById("prote_grs").value);
    document.getElementById("prote_kc").value = prote_grs*4;
    var prote_kc=Number(document.getElementById("prote_kc").value);
    document.getElementById("prote_porcentaje").value= ((prote_kc*100)/total_kc).toFixed(2);
  }
  function funcionTOTAL_LIPIDOS()
  {
    var lipi_rac_leche = Number(document.getElementById("lipi_rac_leche").value);
    var lipi_rac_carne = Number(document.getElementById("lipi_rac_carne").value);
    var lipi_rac_fruta = Number(document.getElementById("lipi_rac_fruta").value);
    var lipi_rac_vegetales = Number(document.getElementById("lipi_rac_vegetales").value);
    var lipi_rac_cyt = Number(document.getElementById("lipi_rac_cyt").value);
    var lipi_rac_leguminosas = Number(document.getElementById("lipi_rac_leguminosas").value);
    var lipi_rac_grasas = Number(document.getElementById("lipi_rac_grasas").value);
    var lipi_rac_azucares = Number(document.getElementById("lipi_rac_azucares").value);
    document.getElementById("total_lipi").value = (lipi_rac_leche)+(lipi_rac_carne)+(lipi_rac_fruta)+(lipi_rac_vegetales)+(lipi_rac_cyt)+(lipi_rac_leguminosas)+(lipi_rac_grasas)+(lipi_rac_azucares);
    var total_kc=  Number(document.getElementById("total_kc").value);
    document.getElementById("lipi_grs").value = (lipi_rac_leche)+(lipi_rac_carne)+(lipi_rac_fruta)+(lipi_rac_vegetales)+(lipi_rac_cyt)+(lipi_rac_leguminosas)+(lipi_rac_grasas)+(lipi_rac_azucares);
    var lipi_grs =  Number(document.getElementById("lipi_grs").value);
    document.getElementById("lipi_kc").value = lipi_grs*4;
    var lipi_kc=Number(document.getElementById("lipi_kc").value);
    document.getElementById("lipi_porcentaje").value= ((lipi_kc*100)/total_kc).toFixed(2);
  }
  function funcionTOTAL_KC()
  {
    var kc_rac_leche = Number(document.getElementById("kc_rac_leche").value);
    var kc_rac_carne = Number(document.getElementById("kc_rac_carne").value);
    var kc_rac_fruta = Number(document.getElementById("kc_rac_fruta").value);
    var kc_rac_vegetales = Number(document.getElementById("kc_rac_vegetales").value);
    var kc_rac_cyt = Number(document.getElementById("kc_rac_cyt").value);
    var kc_rac_leguminosas = Number(document.getElementById("kc_rac_leguminosas").value);
    var kc_rac_grasas = Number(document.getElementById("kc_rac_grasas").value);
    var kc_rac_azucares = Number(document.getElementById("kc_rac_azucares").value);
    document.getElementById("total_kc").value = (kc_rac_leche)+(kc_rac_carne)+(kc_rac_fruta)+(kc_rac_vegetales)+(kc_rac_cyt)+(kc_rac_leguminosas)+(kc_rac_grasas)+(kc_rac_azucares);
  }




  //FUNCIONES LECHE
    function comida_funcionHC_LECHE(){
    var comida_rac_leche = Number(document.getElementById("comida_rac_leche").value);
    document.getElementById("comida_hc_rac_leche").value = comida_rac_leche*12;
    }

    function comida_funcionPROTE_LECHE(){
    var comida_rac_leche = Number(document.getElementById("comida_rac_leche").value);
    document.getElementById("comida_prote_rac_leche").value = comida_rac_leche*9;
    }

    function comida_funcionLIPI_LECHE(){
    var comida_rac_leche = Number(document.getElementById("comida_rac_leche").value);
    document.getElementById("comida_lipi_rac_leche").value = comida_rac_leche*5;
    }
    function comida_funcionKC_LECHE(){
    var comida_hc_rac_leche = Number(document.getElementById("comida_hc_rac_leche").value);
    var comida_prote_rac_leche = Number(document.getElementById("comida_prote_rac_leche").value);
    var comida_lipi_rac_leche = Number(document.getElementById("comida_lipi_rac_leche").value);
    document.getElementById("comida_kc_rac_leche").value = (comida_hc_rac_leche*4)+(comida_prote_rac_leche*4)+(comida_lipi_rac_leche*9);
    }
    //FUNCIONES CARNE
    function comida_funcionHC_CARNE(){
    var comida_rac_carne = Number(document.getElementById("comida_rac_carne").value);
    document.getElementById("comida_hc_rac_carne").value = comida_rac_carne*0;
    }
    function comida_funcionPROTE_CARNE(){
    var comida_rac_carne = Number(document.getElementById("comida_rac_carne").value);
    document.getElementById("comida_prote_rac_carne").value = comida_rac_carne*7;
    }
    function comida_funcionLIPI_CARNE(){
    var comida_rac_carne = Number(document.getElementById("comida_rac_carne").value);
    document.getElementById("comida_lipi_rac_carne").value = comida_rac_carne*4;
    }
    function comida_funcionKC_CARNE(){
    var comida_hc_rac_carne = Number(document.getElementById("comida_hc_rac_carne").value);
    var comida_prote_rac_carne = Number(document.getElementById("comida_prote_rac_carne").value);
    var comida_lipi_rac_carne = Number(document.getElementById("comida_lipi_rac_carne").value);
    document.getElementById("comida_kc_rac_carne").value = (comida_hc_rac_carne*4)+(comida_prote_rac_carne*4)+(comida_lipi_rac_carne*9);
    }

    //FUNCIONES FRUTA
    function comida_funcionHC_FRUTA(){
    var comida_rac_fruta = Number(document.getElementById("comida_rac_fruta").value);
    document.getElementById("comida_hc_rac_fruta").value = comida_rac_fruta*15;
    }
    function comida_funcionPROTE_FRUTA(){
    var comida_rac_fruta = Number(document.getElementById("comida_rac_fruta").value);
    document.getElementById("comida_prote_rac_fruta").value = comida_rac_fruta*0;
    }
    function comida_funcionLIPI_FRUTA(){
    var comida_rac_fruta = Number(document.getElementById("comida_rac_fruta").value);
    document.getElementById("comida_lipi_rac_fruta").value = comida_rac_fruta*0;
    }
    function comida_funcionKC_FRUTA(){
    var comida_hc_rac_fruta = Number(document.getElementById("comida_hc_rac_fruta").value);
    var comida_prote_rac_fruta = Number(document.getElementById("comida_prote_rac_fruta").value);
    var comida_lipi_rac_fruta = Number(document.getElementById("comida_lipi_rac_fruta").value);
    document.getElementById("comida_kc_rac_fruta").value = (comida_hc_rac_fruta*4)+(comida_prote_rac_fruta*4)+(comida_lipi_rac_fruta*9);
    }

    //FUNCIONES VEGETALES

    function comida_funcionHC_VEGETALES(){
    var comida_rac_vegetales = Number(document.getElementById("comida_rac_vegetales").value);
    document.getElementById("comida_hc_rac_vegetales").value = comida_rac_vegetales*4;
    }
    function comida_funcionPROTE_VEGETALES(){
    var comida_rac_vegetales = Number(document.getElementById("comida_rac_vegetales").value);
    document.getElementById("comida_prote_rac_vegetales").value = comida_rac_vegetales*2;
    }
    function comida_funcionLIPI_VEGETALES(){
    var comida_rac_vegetales = Number(document.getElementById("comida_rac_vegetales").value);
    document.getElementById("comida_lipi_rac_vegetales").value = comida_rac_vegetales*0;
    }
    function comida_funcionKC_VEGETALES(){
    var comida_hc_rac_vegetales = Number(document.getElementById("comida_hc_rac_vegetales").value);
    var comida_prote_rac_vegetales = Number(document.getElementById("comida_prote_rac_vegetales").value);
    var comida_lipi_rac_vegetales = Number(document.getElementById("comida_lipi_rac_vegetales").value);
    document.getElementById("comida_kc_rac_vegetales").value = (comida_hc_rac_vegetales*4)+(comida_prote_rac_vegetales*4)+(comida_lipi_rac_vegetales*9);
    }

    //FUNCIONES CEREALES Y TUBERCULOS
    function comida_funcionHC_CYT(){
    var comida_rac_cyt = Number(document.getElementById("comida_rac_cyt").value);
    document.getElementById("comida_hc_rac_cyt").value = comida_rac_cyt*15;
    }
    function comida_funcionPROTE_CYT(){
    var comida_rac_cyt = Number(document.getElementById("comida_rac_cyt").value);
    document.getElementById("comida_prote_rac_cyt").value = comida_rac_cyt*2;
    }
    function comida_funcionLIPI_CYT(){
    var comida_rac_cyt = Number(document.getElementById("comida_rac_cyt").value);
    document.getElementById("comida_lipi_rac_cyt").value = comida_rac_cyt*0;
    }
    function comida_funcionKC_CYT(){
    var comida_hc_rac_cyt = Number(document.getElementById("comida_hc_rac_cyt").value);
    var comida_prote_rac_cyt = Number(document.getElementById("comida_prote_rac_cyt").value);
    var comida_lipi_rac_cyt = Number(document.getElementById("comida_lipi_rac_cyt").value);
    document.getElementById("comida_kc_rac_cyt").value = (comida_hc_rac_cyt*4)+(comida_prote_rac_cyt*4)+(comida_lipi_rac_cyt*9);
    }

    //FUNCIONES LEGUMINOSAS
    function comida_funcionHC_LEGUMINOSAS(){
    var comida_rac_leguminosas = Number(document.getElementById("comida_rac_leguminosas").value);
    document.getElementById("comida_hc_rac_leguminosas").value = comida_rac_leguminosas*20;
    }
    function comida_funcionPROTE_LEGUMINOSAS(){
    var comida_rac_leguminosas = Number(document.getElementById("comida_rac_leguminosas").value);
    document.getElementById("comida_prote_rac_leguminosas").value = comida_rac_leguminosas*8;
    }
    function comida_funcionLIPI_LEGUMINOSAS(){
    var comida_rac_leguminosas = Number(document.getElementById("comida_rac_leguminosas").value);
    document.getElementById("comida_lipi_rac_leguminosas").value = comida_rac_leguminosas*1;
    }
    function comida_funcionKC_LEGUMINOSAS(){
    var comida_hc_rac_leguminosas = Number(document.getElementById("comida_hc_rac_leguminosas").value);
    var comida_prote_rac_leguminosas = Number(document.getElementById("comida_prote_rac_leguminosas").value);
    var comida_lipi_rac_leguminosas = Number(document.getElementById("comida_lipi_rac_leguminosas").value);
    document.getElementById("comida_kc_rac_leguminosas").value = (comida_hc_rac_leguminosas*4)+(comida_prote_rac_leguminosas*4)+(comida_lipi_rac_leguminosas*9);
    }

    //FUNCIONES GRASAS
    function comida_funcionHC_GRASAS(){
    var comida_rac_grasas = Number(document.getElementById("comida_rac_grasas").value);
    document.getElementById("comida_hc_rac_grasas").value = comida_rac_grasas*0;
    }
    function comida_funcionPROTE_GRASAS(){
    var comida_rac_grasas = Number(document.getElementById("comida_rac_grasas").value);
    document.getElementById("comida_prote_rac_grasas").value = comida_rac_grasas*0;
    }
    function comida_funcionLIPI_GRASAS(){
    var comida_rac_grasas = Number(document.getElementById("comida_rac_grasas").value);
    document.getElementById("comida_lipi_rac_grasas").value = comida_rac_grasas*5;
    }
    function comida_funcionKC_GRASAS(){
    var comida_hc_rac_grasas = Number(document.getElementById("comida_hc_rac_grasas").value);
    var comida_prote_rac_grasas = Number(document.getElementById("comida_prote_rac_grasas").value);
    var comida_lipi_rac_grasas = Number(document.getElementById("comida_lipi_rac_grasas").value);
    document.getElementById("comida_kc_rac_grasas").value = (comida_hc_rac_grasas*4)+(comida_prote_rac_grasas*4)+(comida_lipi_rac_grasas*9);
    }

    //FUNCIONES AZUCARES
    function comida_funcionHC_AZUCARES(){
    var comida_rac_azucares = Number(document.getElementById("comida_rac_azucares").value);
    document.getElementById("comida_hc_rac_azucares").value = comida_rac_azucares*10;
    }
    function comida_funcionPROTE_AZUCARES(){
    var comida_rac_azucares = Number(document.getElementById("comida_rac_azucares").value);
    document.getElementById("comida_prote_rac_azucares").value = comida_rac_azucares*0;
    }
    function comida_funcionLIPI_AZUCARES(){
    var comida_rac_azucares = Number(document.getElementById("comida_rac_azucares").value);
    document.getElementById("comida_lipi_rac_azucares").value = comida_rac_azucares*0;
    }

    function comida_funcionKC_AZUCARES()
    {
    var comida_hc_rac_azucares = Number(document.getElementById("comida_hc_rac_azucares").value);
    var comida_prote_rac_azucares = Number(document.getElementById("comida_prote_rac_azucares").value);
    var comida_lipi_rac_azucares = Number(document.getElementById("comida_lipi_rac_azucares").value);
    document.getElementById("comida_kc_rac_azucares").value = (comida_hc_rac_azucares*4)+(comida_prote_rac_azucares*4)+(comida_lipi_rac_azucares*9);
    }


    function comida_funcionTOTAL_HC()
    {
      var comida_hc_rac_leche = Number(document.getElementById("comida_hc_rac_leche").value);
      var comida_hc_rac_carne = Number(document.getElementById("comida_hc_rac_carne").value);
      var comida_hc_rac_fruta = Number(document.getElementById("comida_hc_rac_fruta").value);
      var comida_hc_rac_vegetales = Number(document.getElementById("comida_hc_rac_vegetales").value);
      var comida_hc_rac_cyt = Number(document.getElementById("comida_hc_rac_cyt").value);
      var comida_hc_rac_leguminosas = Number(document.getElementById("comida_hc_rac_leguminosas").value);
      var comida_hc_rac_grasas = Number(document.getElementById("comida_hc_rac_grasas").value);
      var comida_hc_rac_azucares = Number(document.getElementById("comida_hc_rac_azucares").value);
      document.getElementById("comida_total_hc").value = (comida_hc_rac_leche)+(comida_hc_rac_carne)+(comida_hc_rac_fruta)+(comida_hc_rac_vegetales)+(comida_hc_rac_cyt)+(comida_hc_rac_leguminosas)+(comida_hc_rac_grasas)+(comida_hc_rac_azucares);


      var comida_total_kc=  Number(document.getElementById("comida_total_kc").value);

      document.getElementById("comida_hc_grs").value = (comida_hc_rac_leche)+(comida_hc_rac_carne)+(comida_hc_rac_fruta)+(comida_hc_rac_vegetales)+(comida_hc_rac_cyt)+(comida_hc_rac_leguminosas)+(comida_hc_rac_grasas)+(comida_hc_rac_azucares);
      var comida_hc_grs =  Number(document.getElementById("comida_hc_grs").value);

      document.getElementById("comida_hc_kc").value = comida_hc_grs*4;
      var comida_hc_kc=Number(document.getElementById("comida_hc_kc").value);
      document.getElementById("comida_hc_porcentaje").value= ((comida_hc_kc*100)/comida_total_kc).toFixed(2);



    }
    function comida_funcionTOTAL_PROTEINAS()
    {
      var comida_prote_rac_leche = Number(document.getElementById("comida_prote_rac_leche").value);
      var comida_prote_rac_carne = Number(document.getElementById("comida_prote_rac_carne").value);
      var comida_prote_rac_fruta = Number(document.getElementById("comida_prote_rac_fruta").value);
      var comida_prote_rac_vegetales = Number(document.getElementById("comida_prote_rac_vegetales").value);
      var comida_prote_rac_cyt = Number(document.getElementById("comida_prote_rac_cyt").value);
      var comida_prote_rac_leguminosas = Number(document.getElementById("comida_prote_rac_leguminosas").value);
      var comida_prote_rac_grasas = Number(document.getElementById("comida_prote_rac_grasas").value);
      var comida_prote_rac_azucares = Number(document.getElementById("comida_prote_rac_azucares").value);
      document.getElementById("comida_total_prote").value = (comida_prote_rac_leche)+(comida_prote_rac_carne)+(comida_prote_rac_fruta)+(comida_prote_rac_vegetales)+(comida_prote_rac_cyt)+(comida_prote_rac_leguminosas)+(comida_prote_rac_grasas)+(comida_prote_rac_azucares);


      var comida_total_kc=  Number(document.getElementById("comida_total_kc").value);
      document.getElementById("comida_prote_grs").value = (comida_prote_rac_leche)+(comida_prote_rac_carne)+(comida_prote_rac_fruta)+(comida_prote_rac_vegetales)+(comida_prote_rac_cyt)+(comida_prote_rac_leguminosas)+(comida_prote_rac_grasas)+(comida_prote_rac_azucares);
      var comida_prote_grs =  Number(document.getElementById("comida_prote_grs").value);
      document.getElementById("comida_prote_kc").value = comida_prote_grs*4;
      var comida_prote_kc=Number(document.getElementById("comida_prote_kc").value);
      document.getElementById("comida_prote_porcentaje").value= ((comida_prote_kc*100)/comida_total_kc).toFixed(2);

    }
    function comida_funcionTOTAL_LIPIDOS()
    {
      var comida_lipi_rac_leche = Number(document.getElementById("comida_lipi_rac_leche").value);
      var comida_lipi_rac_carne = Number(document.getElementById("comida_lipi_rac_carne").value);
      var comida_lipi_rac_fruta = Number(document.getElementById("comida_lipi_rac_fruta").value);
      var comida_lipi_rac_vegetales = Number(document.getElementById("comida_lipi_rac_vegetales").value);
      var comida_lipi_rac_cyt = Number(document.getElementById("comida_lipi_rac_cyt").value);
      var comida_lipi_rac_leguminosas = Number(document.getElementById("comida_lipi_rac_leguminosas").value);
      var comida_lipi_rac_grasas = Number(document.getElementById("comida_lipi_rac_grasas").value);
      var comida_lipi_rac_azucares = Number(document.getElementById("comida_lipi_rac_azucares").value);
      document.getElementById("comida_total_lipi").value = (comida_lipi_rac_leche)+(comida_lipi_rac_carne)+(comida_lipi_rac_fruta)+(comida_lipi_rac_vegetales)+(comida_lipi_rac_cyt)+(comida_lipi_rac_leguminosas)+(comida_lipi_rac_grasas)+(comida_lipi_rac_azucares);



      var comida_total_kc=  Number(document.getElementById("comida_total_kc").value);
      document.getElementById("comida_lipi_grs").value = (comida_lipi_rac_leche)+(comida_lipi_rac_carne)+(comida_lipi_rac_fruta)+(comida_lipi_rac_vegetales)+(comida_lipi_rac_cyt)+(comida_lipi_rac_leguminosas)+(comida_lipi_rac_grasas)+(comida_lipi_rac_azucares);
      var comida_lipi_grs =  Number(document.getElementById("comida_lipi_grs").value);
      document.getElementById("comida_lipi_kc").value = comida_lipi_grs*4;
      var comida_lipi_kc=Number(document.getElementById("comida_lipi_kc").value);
      document.getElementById("comida_lipi_porcentaje").value= ((comida_lipi_kc*100)/comida_total_kc).toFixed(2);
    }
    function comida_funcionTOTAL_KC()
    {
      var comida_kc_rac_leche = Number(document.getElementById("comida_kc_rac_leche").value);
      var comida_kc_rac_carne = Number(document.getElementById("comida_kc_rac_carne").value);
      var comida_kc_rac_fruta = Number(document.getElementById("comida_kc_rac_fruta").value);
      var comida_kc_rac_vegetales = Number(document.getElementById("comida_kc_rac_vegetales").value);
      var comida_kc_rac_cyt = Number(document.getElementById("comida_kc_rac_cyt").value);
      var comida_kc_rac_leguminosas = Number(document.getElementById("comida_kc_rac_leguminosas").value);
      var comida_kc_rac_grasas = Number(document.getElementById("comida_kc_rac_grasas").value);
      var comida_kc_rac_azucares = Number(document.getElementById("comida_kc_rac_azucares").value);
      document.getElementById("comida_total_kc").value = (comida_kc_rac_leche)+(comida_kc_rac_carne)+(comida_kc_rac_fruta)+(comida_kc_rac_vegetales)+(comida_kc_rac_cyt)+(comida_kc_rac_leguminosas)+(comida_kc_rac_grasas)+(comida_kc_rac_azucares);
    }




    //FUNCIONES LECHE
      function cena_funcionHC_LECHE(){
      var cena_rac_leche = Number(document.getElementById("cena_rac_leche").value);
      document.getElementById("cena_hc_rac_leche").value = cena_rac_leche*12;
      }

      function cena_funcionPROTE_LECHE(){
      var cena_rac_leche = Number(document.getElementById("cena_rac_leche").value);
      document.getElementById("cena_prote_rac_leche").value = cena_rac_leche*9;
      }

      function cena_funcionLIPI_LECHE(){
      var cena_rac_leche = Number(document.getElementById("cena_rac_leche").value);
      document.getElementById("cena_lipi_rac_leche").value = cena_rac_leche*5;
      }
      function cena_funcionKC_LECHE(){
      var cena_hc_rac_leche = Number(document.getElementById("cena_hc_rac_leche").value);
      var cena_prote_rac_leche = Number(document.getElementById("cena_prote_rac_leche").value);
      var cena_lipi_rac_leche = Number(document.getElementById("cena_lipi_rac_leche").value);
      document.getElementById("cena_kc_rac_leche").value = (cena_hc_rac_leche*4)+(cena_prote_rac_leche*4)+(cena_lipi_rac_leche*9);
      }
      //FUNCIONES CARNE
      function cena_funcionHC_CARNE(){
      var cena_rac_carne = Number(document.getElementById("cena_rac_carne").value);
      document.getElementById("cena_hc_rac_carne").value = cena_rac_carne*0;
      }
      function cena_funcionPROTE_CARNE(){
      var cena_rac_carne = Number(document.getElementById("cena_rac_carne").value);
      document.getElementById("cena_prote_rac_carne").value = cena_rac_carne*7;
      }
      function cena_funcionLIPI_CARNE(){
      var cena_rac_carne = Number(document.getElementById("cena_rac_carne").value);
      document.getElementById("cena_lipi_rac_carne").value = cena_rac_carne*4;
      }
      function cena_funcionKC_CARNE(){
      var cena_hc_rac_carne = Number(document.getElementById("cena_hc_rac_carne").value);
      var cena_prote_rac_carne = Number(document.getElementById("cena_prote_rac_carne").value);
      var cena_lipi_rac_carne = Number(document.getElementById("cena_lipi_rac_carne").value);
      document.getElementById("cena_kc_rac_carne").value = (cena_hc_rac_carne*4)+(cena_prote_rac_carne*4)+(cena_lipi_rac_carne*9);
      }

      //FUNCIONES FRUTA
      function cena_funcionHC_FRUTA(){
      var cena_rac_fruta = Number(document.getElementById("cena_rac_fruta").value);
      document.getElementById("cena_hc_rac_fruta").value = cena_rac_fruta*15;
      }
      function cena_funcionPROTE_FRUTA(){
      var cena_rac_fruta = Number(document.getElementById("cena_rac_fruta").value);
      document.getElementById("cena_prote_rac_fruta").value = cena_rac_fruta*0;
      }
      function cena_funcionLIPI_FRUTA(){
      var cena_rac_fruta = Number(document.getElementById("cena_rac_fruta").value);
      document.getElementById("cena_lipi_rac_fruta").value = cena_rac_fruta*0;
      }
      function cena_funcionKC_FRUTA(){
      var cena_hc_rac_fruta = Number(document.getElementById("cena_hc_rac_fruta").value);
      var cena_prote_rac_fruta = Number(document.getElementById("cena_prote_rac_fruta").value);
      var cena_lipi_rac_fruta = Number(document.getElementById("cena_lipi_rac_fruta").value);
      document.getElementById("cena_kc_rac_fruta").value = (cena_hc_rac_fruta*4)+(cena_prote_rac_fruta*4)+(cena_lipi_rac_fruta*9);
      }

      //FUNCIONES VEGETALES

      function cena_funcionHC_VEGETALES(){
      var cena_rac_vegetales = Number(document.getElementById("cena_rac_vegetales").value);
      document.getElementById("cena_hc_rac_vegetales").value = cena_rac_vegetales*4;
      }
      function cena_funcionPROTE_VEGETALES(){
      var cena_rac_vegetales = Number(document.getElementById("cena_rac_vegetales").value);
      document.getElementById("cena_prote_rac_vegetales").value = cena_rac_vegetales*2;
      }
      function cena_funcionLIPI_VEGETALES(){
      var cena_rac_vegetales = Number(document.getElementById("cena_rac_vegetales").value);
      document.getElementById("cena_lipi_rac_vegetales").value = cena_rac_vegetales*0;
      }
      function cena_funcionKC_VEGETALES(){
      var cena_hc_rac_vegetales = Number(document.getElementById("cena_hc_rac_vegetales").value);
      var cena_prote_rac_vegetales = Number(document.getElementById("cena_prote_rac_vegetales").value);
      var cena_lipi_rac_vegetales = Number(document.getElementById("cena_lipi_rac_vegetales").value);
      document.getElementById("cena_kc_rac_vegetales").value = (cena_hc_rac_vegetales*4)+(cena_prote_rac_vegetales*4)+(cena_lipi_rac_vegetales*9);
      }

      //FUNCIONES CEREALES Y TUBERCULOS
      function cena_funcionHC_CYT(){
      var cena_rac_cyt = Number(document.getElementById("cena_rac_cyt").value);
      document.getElementById("cena_hc_rac_cyt").value = cena_rac_cyt*15;
      }
      function cena_funcionPROTE_CYT(){
      var cena_rac_cyt = Number(document.getElementById("cena_rac_cyt").value);
      document.getElementById("cena_prote_rac_cyt").value = cena_rac_cyt*2;
      }
      function cena_funcionLIPI_CYT(){
      var cena_rac_cyt = Number(document.getElementById("cena_rac_cyt").value);
      document.getElementById("cena_lipi_rac_cyt").value = cena_rac_cyt*0;
      }
      function cena_funcionKC_CYT(){
      var cena_hc_rac_cyt = Number(document.getElementById("cena_hc_rac_cyt").value);
      var cena_prote_rac_cyt = Number(document.getElementById("cena_prote_rac_cyt").value);
      var cena_lipi_rac_cyt = Number(document.getElementById("cena_lipi_rac_cyt").value);
      document.getElementById("cena_kc_rac_cyt").value = (cena_hc_rac_cyt*4)+(cena_prote_rac_cyt*4)+(cena_lipi_rac_cyt*9);
      }

      //FUNCIONES LEGUMINOSAS
      function cena_funcionHC_LEGUMINOSAS(){
      var cena_rac_leguminosas = Number(document.getElementById("cena_rac_leguminosas").value);
      document.getElementById("cena_hc_rac_leguminosas").value = cena_rac_leguminosas*20;
      }
      function cena_funcionPROTE_LEGUMINOSAS(){
      var cena_rac_leguminosas = Number(document.getElementById("cena_rac_leguminosas").value);
      document.getElementById("cena_prote_rac_leguminosas").value = cena_rac_leguminosas*8;
      }
      function cena_funcionLIPI_LEGUMINOSAS(){
      var cena_rac_leguminosas = Number(document.getElementById("cena_rac_leguminosas").value);
      document.getElementById("cena_lipi_rac_leguminosas").value = cena_rac_leguminosas*1;
      }
      function cena_funcionKC_LEGUMINOSAS(){
      var cena_hc_rac_leguminosas = Number(document.getElementById("cena_hc_rac_leguminosas").value);
      var cena_prote_rac_leguminosas = Number(document.getElementById("cena_prote_rac_leguminosas").value);
      var cena_lipi_rac_leguminosas = Number(document.getElementById("cena_lipi_rac_leguminosas").value);
      document.getElementById("cena_kc_rac_leguminosas").value = (cena_hc_rac_leguminosas*4)+(cena_prote_rac_leguminosas*4)+(cena_lipi_rac_leguminosas*9);
      }

      //FUNCIONES GRASAS
      function cena_funcionHC_GRASAS(){
      var cena_rac_grasas = Number(document.getElementById("cena_rac_grasas").value);
      document.getElementById("cena_hc_rac_grasas").value = cena_rac_grasas*0;
      }
      function cena_funcionPROTE_GRASAS(){
      var cena_rac_grasas = Number(document.getElementById("cena_rac_grasas").value);
      document.getElementById("cena_prote_rac_grasas").value = cena_rac_grasas*0;
      }
      function cena_funcionLIPI_GRASAS(){
      var cena_rac_grasas = Number(document.getElementById("cena_rac_grasas").value);
      document.getElementById("cena_lipi_rac_grasas").value = cena_rac_grasas*5;
      }
      function cena_funcionKC_GRASAS(){
      var cena_hc_rac_grasas = Number(document.getElementById("cena_hc_rac_grasas").value);
      var cena_prote_rac_grasas = Number(document.getElementById("cena_prote_rac_grasas").value);
      var cena_lipi_rac_grasas = Number(document.getElementById("cena_lipi_rac_grasas").value);
      document.getElementById("cena_kc_rac_grasas").value = (cena_hc_rac_grasas*4)+(cena_prote_rac_grasas*4)+(cena_lipi_rac_grasas*9);
      }

      //FUNCIONES AZUCARES
      function cena_funcionHC_AZUCARES(){
      var cena_rac_azucares = Number(document.getElementById("cena_rac_azucares").value);
      document.getElementById("cena_hc_rac_azucares").value = cena_rac_azucares*10;
      }
      function cena_funcionPROTE_AZUCARES(){
      var cena_rac_azucares = Number(document.getElementById("cena_rac_azucares").value);
      document.getElementById("cena_prote_rac_azucares").value = cena_rac_azucares*0;
      }
      function cena_funcionLIPI_AZUCARES(){
      var cena_rac_azucares = Number(document.getElementById("cena_rac_azucares").value);
      document.getElementById("cena_lipi_rac_azucares").value = cena_rac_azucares*0;
      }

      function cena_funcionKC_AZUCARES()
      {
      var cena_hc_rac_azucares = Number(document.getElementById("cena_hc_rac_azucares").value);
      var cena_prote_rac_azucares = Number(document.getElementById("cena_prote_rac_azucares").value);
      var cena_lipi_rac_azucares = Number(document.getElementById("cena_lipi_rac_azucares").value);
      document.getElementById("cena_kc_rac_azucares").value = (cena_hc_rac_azucares*4)+(cena_prote_rac_azucares*4)+(cena_lipi_rac_azucares*9);
      }


      function cena_funcionTOTAL_HC()
      {
        var cena_hc_rac_leche = Number(document.getElementById("cena_hc_rac_leche").value);
        var cena_hc_rac_carne = Number(document.getElementById("cena_hc_rac_carne").value);
        var cena_hc_rac_fruta = Number(document.getElementById("cena_hc_rac_fruta").value);
        var cena_hc_rac_vegetales = Number(document.getElementById("cena_hc_rac_vegetales").value);
        var cena_hc_rac_cyt = Number(document.getElementById("cena_hc_rac_cyt").value);
        var cena_hc_rac_leguminosas = Number(document.getElementById("cena_hc_rac_leguminosas").value);
        var cena_hc_rac_grasas = Number(document.getElementById("cena_hc_rac_grasas").value);
        var cena_hc_rac_azucares = Number(document.getElementById("cena_hc_rac_azucares").value);
        document.getElementById("cena_total_hc").value = (cena_hc_rac_leche)+(cena_hc_rac_carne)+(cena_hc_rac_fruta)+(cena_hc_rac_vegetales)+(cena_hc_rac_cyt)+(cena_hc_rac_leguminosas)+(cena_hc_rac_grasas)+(cena_hc_rac_azucares);



        var cena_total_kc=  Number(document.getElementById("cena_total_kc").value);

        document.getElementById("cena_hc_grs").value = (cena_hc_rac_leche)+(cena_hc_rac_carne)+(cena_hc_rac_fruta)+(cena_hc_rac_vegetales)+(cena_hc_rac_cyt)+(cena_hc_rac_leguminosas)+(cena_hc_rac_grasas)+(cena_hc_rac_azucares);


        var cena_hc_grs =  Number(document.getElementById("cena_hc_grs").value);

        document.getElementById("cena_hc_kc").value = cena_hc_grs*4;
        var cena_hc_kc=Number(document.getElementById("cena_hc_kc").value);
        document.getElementById("cena_hc_porcentaje").value= ((cena_hc_kc*100)/cena_total_kc).toFixed(2);







      }
      function cena_funcionTOTAL_PROTEINAS()
      {
        var cena_prote_rac_leche = Number(document.getElementById("cena_prote_rac_leche").value);
        var cena_prote_rac_carne = Number(document.getElementById("cena_prote_rac_carne").value);
        var cena_prote_rac_fruta = Number(document.getElementById("cena_prote_rac_fruta").value);
        var cena_prote_rac_vegetales = Number(document.getElementById("cena_prote_rac_vegetales").value);
        var cena_prote_rac_cyt = Number(document.getElementById("cena_prote_rac_cyt").value);
        var cena_prote_rac_leguminosas = Number(document.getElementById("cena_prote_rac_leguminosas").value);
        var cena_prote_rac_grasas = Number(document.getElementById("cena_prote_rac_grasas").value);
        var cena_prote_rac_azucares = Number(document.getElementById("cena_prote_rac_azucares").value);
        document.getElementById("cena_total_prote").value = (cena_prote_rac_leche)+(cena_prote_rac_carne)+(cena_prote_rac_fruta)+(cena_prote_rac_vegetales)+(cena_prote_rac_cyt)+(cena_prote_rac_leguminosas)+(cena_prote_rac_grasas)+(cena_prote_rac_azucares);



        var cena_total_kc=  Number(document.getElementById("cena_total_kc").value);
        document.getElementById("cena_prote_grs").value = (cena_prote_rac_leche)+(cena_prote_rac_carne)+(cena_prote_rac_fruta)+(cena_prote_rac_vegetales)+(cena_prote_rac_cyt)+(cena_prote_rac_leguminosas)+(cena_prote_rac_grasas)+(cena_prote_rac_azucares);
        var cena_prote_grs =  Number(document.getElementById("cena_prote_grs").value);
        document.getElementById("cena_prote_kc").value = cena_prote_grs*4;
        var cena_prote_kc=Number(document.getElementById("cena_prote_kc").value);
        document.getElementById("cena_prote_porcentaje").value= ((cena_prote_kc*100)/cena_total_kc).toFixed(2);




      }
      function cena_funcionTOTAL_LIPIDOS()
      {
        var cena_lipi_rac_leche = Number(document.getElementById("cena_lipi_rac_leche").value);
        var cena_lipi_rac_carne = Number(document.getElementById("cena_lipi_rac_carne").value);
        var cena_lipi_rac_fruta = Number(document.getElementById("cena_lipi_rac_fruta").value);
        var cena_lipi_rac_vegetales = Number(document.getElementById("cena_lipi_rac_vegetales").value);
        var cena_lipi_rac_cyt = Number(document.getElementById("cena_lipi_rac_cyt").value);
        var cena_lipi_rac_leguminosas = Number(document.getElementById("cena_lipi_rac_leguminosas").value);
        var cena_lipi_rac_grasas = Number(document.getElementById("cena_lipi_rac_grasas").value);
        var cena_lipi_rac_azucares = Number(document.getElementById("cena_lipi_rac_azucares").value);
        document.getElementById("cena_total_lipi").value = (cena_lipi_rac_leche)+(cena_lipi_rac_carne)+(cena_lipi_rac_fruta)+(cena_lipi_rac_vegetales)+(cena_lipi_rac_cyt)+(cena_lipi_rac_leguminosas)+(cena_lipi_rac_grasas)+(cena_lipi_rac_azucares);



        var cena_total_kc=  Number(document.getElementById("cena_total_kc").value);
        document.getElementById("cena_lipi_grs").value = (cena_lipi_rac_leche)+(cena_lipi_rac_carne)+(cena_lipi_rac_fruta)+(cena_lipi_rac_vegetales)+(cena_lipi_rac_cyt)+(cena_lipi_rac_leguminosas)+(cena_lipi_rac_grasas)+(cena_lipi_rac_azucares);
        var cena_lipi_grs =  Number(document.getElementById("cena_lipi_grs").value);
        document.getElementById("cena_lipi_kc").value = cena_lipi_grs*4;
        var cena_lipi_kc=Number(document.getElementById("cena_lipi_kc").value);
        document.getElementById("cena_lipi_porcentaje").value= ((cena_lipi_kc*100)/cena_total_kc).toFixed(2);

      }
      function cena_funcionTOTAL_KC()
      {
        var cena_kc_rac_leche = Number(document.getElementById("cena_kc_rac_leche").value);
        var cena_kc_rac_carne = Number(document.getElementById("cena_kc_rac_carne").value);
        var cena_kc_rac_fruta = Number(document.getElementById("cena_kc_rac_fruta").value);
        var cena_kc_rac_vegetales = Number(document.getElementById("cena_kc_rac_vegetales").value);
        var cena_kc_rac_cyt = Number(document.getElementById("cena_kc_rac_cyt").value);
        var cena_kc_rac_leguminosas = Number(document.getElementById("cena_kc_rac_leguminosas").value);
        var cena_kc_rac_grasas = Number(document.getElementById("cena_kc_rac_grasas").value);
        var cena_kc_rac_azucares = Number(document.getElementById("cena_kc_rac_azucares").value);
        document.getElementById("cena_total_kc").value = (cena_kc_rac_leche)+(cena_kc_rac_carne)+(cena_kc_rac_fruta)+(cena_kc_rac_vegetales)+(cena_kc_rac_cyt)+(cena_kc_rac_leguminosas)+(cena_kc_rac_grasas)+(cena_kc_rac_azucares);
      }



      //FUNCIONES LECHE
        function t24h_funcionHC_LECHE(){
        var t24h_rac_leche = Number(document.getElementById("t24h_rac_leche").value);
        document.getElementById("t24h_hc_rac_leche").value = t24h_rac_leche*12;
        }

        function t24h_funcionPROTE_LECHE(){
        var t24h_rac_leche = Number(document.getElementById("t24h_rac_leche").value);
        document.getElementById("t24h_prote_rac_leche").value = t24h_rac_leche*9;
        }

        function t24h_funcionLIPI_LECHE(){
        var t24h_rac_leche = Number(document.getElementById("t24h_rac_leche").value);
        document.getElementById("t24h_lipi_rac_leche").value = t24h_rac_leche*5;
        }
        function t24h_funcionKC_LECHE(){
        var t24h_hc_rac_leche = Number(document.getElementById("t24h_hc_rac_leche").value);
        var t24h_prote_rac_leche = Number(document.getElementById("t24h_prote_rac_leche").value);
        var t24h_lipi_rac_leche = Number(document.getElementById("t24h_lipi_rac_leche").value);
        document.getElementById("t24h_kc_rac_leche").value = (t24h_hc_rac_leche*4)+(t24h_prote_rac_leche*4)+(t24h_lipi_rac_leche*9);
        }
        //FUNCIONES CARNE
        function t24h_funcionHC_CARNE(){
        var t24h_rac_carne = Number(document.getElementById("t24h_rac_carne").value);
        document.getElementById("t24h_hc_rac_carne").value = t24h_rac_carne*0;
        }
        function t24h_funcionPROTE_CARNE(){
        var t24h_rac_carne = Number(document.getElementById("t24h_rac_carne").value);
        document.getElementById("t24h_prote_rac_carne").value = t24h_rac_carne*7;
        }
        function t24h_funcionLIPI_CARNE(){
        var t24h_rac_carne = Number(document.getElementById("t24h_rac_carne").value);
        document.getElementById("t24h_lipi_rac_carne").value = t24h_rac_carne*4;
        }
        function t24h_funcionKC_CARNE(){
        var t24h_hc_rac_carne = Number(document.getElementById("t24h_hc_rac_carne").value);
        var t24h_prote_rac_carne = Number(document.getElementById("t24h_prote_rac_carne").value);
        var t24h_lipi_rac_carne = Number(document.getElementById("t24h_lipi_rac_carne").value);
        document.getElementById("t24h_kc_rac_carne").value = (t24h_hc_rac_carne*4)+(t24h_prote_rac_carne*4)+(t24h_lipi_rac_carne*9);
        }

        //FUNCIONES FRUTA
        function t24h_funcionHC_FRUTA(){
        var t24h_rac_fruta = Number(document.getElementById("t24h_rac_fruta").value);
        document.getElementById("t24h_hc_rac_fruta").value = t24h_rac_fruta*15;
        }
        function t24h_funcionPROTE_FRUTA(){
        var t24h_rac_fruta = Number(document.getElementById("t24h_rac_fruta").value);
        document.getElementById("t24h_prote_rac_fruta").value = t24h_rac_fruta*0;
        }
        function t24h_funcionLIPI_FRUTA(){
        var t24h_rac_fruta = Number(document.getElementById("t24h_rac_fruta").value);
        document.getElementById("t24h_lipi_rac_fruta").value = t24h_rac_fruta*0;
        }
        function t24h_funcionKC_FRUTA(){
        var t24h_hc_rac_fruta = Number(document.getElementById("t24h_hc_rac_fruta").value);
        var t24h_prote_rac_fruta = Number(document.getElementById("t24h_prote_rac_fruta").value);
        var t24h_lipi_rac_fruta = Number(document.getElementById("t24h_lipi_rac_fruta").value);
        document.getElementById("t24h_kc_rac_fruta").value = (t24h_hc_rac_fruta*4)+(t24h_prote_rac_fruta*4)+(t24h_lipi_rac_fruta*9);
        }

        //FUNCIONES VEGETALES

        function t24h_funcionHC_VEGETALES(){
        var t24h_rac_vegetales = Number(document.getElementById("t24h_rac_vegetales").value);
        document.getElementById("t24h_hc_rac_vegetales").value = t24h_rac_vegetales*4;
        }
        function t24h_funcionPROTE_VEGETALES(){
        var t24h_rac_vegetales = Number(document.getElementById("t24h_rac_vegetales").value);
        document.getElementById("t24h_prote_rac_vegetales").value = t24h_rac_vegetales*2;
        }
        function t24h_funcionLIPI_VEGETALES(){
        var t24h_rac_vegetales = Number(document.getElementById("t24h_rac_vegetales").value);
        document.getElementById("t24h_lipi_rac_vegetales").value = t24h_rac_vegetales*0;
        }
        function t24h_funcionKC_VEGETALES(){
        var t24h_hc_rac_vegetales = Number(document.getElementById("t24h_hc_rac_vegetales").value);
        var t24h_prote_rac_vegetales = Number(document.getElementById("t24h_prote_rac_vegetales").value);
        var t24h_lipi_rac_vegetales = Number(document.getElementById("t24h_lipi_rac_vegetales").value);
        document.getElementById("t24h_kc_rac_vegetales").value = (t24h_hc_rac_vegetales*4)+(t24h_prote_rac_vegetales*4)+(t24h_lipi_rac_vegetales*9);
        }

        //FUNCIONES CEREALES Y TUBERCULOS
        function t24h_funcionHC_CYT(){
        var t24h_rac_cyt = Number(document.getElementById("t24h_rac_cyt").value);
        document.getElementById("t24h_hc_rac_cyt").value = t24h_rac_cyt*15;
        }
        function t24h_funcionPROTE_CYT(){
        var t24h_rac_cyt = Number(document.getElementById("t24h_rac_cyt").value);
        document.getElementById("t24h_prote_rac_cyt").value = t24h_rac_cyt*2;
        }
        function t24h_funcionLIPI_CYT(){
        var t24h_rac_cyt = Number(document.getElementById("t24h_rac_cyt").value);
        document.getElementById("t24h_lipi_rac_cyt").value = t24h_rac_cyt*0;
        }
        function t24h_funcionKC_CYT(){
        var t24h_hc_rac_cyt = Number(document.getElementById("t24h_hc_rac_cyt").value);
        var t24h_prote_rac_cyt = Number(document.getElementById("t24h_prote_rac_cyt").value);
        var t24h_lipi_rac_cyt = Number(document.getElementById("t24h_lipi_rac_cyt").value);
        document.getElementById("t24h_kc_rac_cyt").value = (t24h_hc_rac_cyt*4)+(t24h_prote_rac_cyt*4)+(t24h_lipi_rac_cyt*9);
        }

        //FUNCIONES LEGUMINOSAS
        function t24h_funcionHC_LEGUMINOSAS(){
        var t24h_rac_leguminosas = Number(document.getElementById("t24h_rac_leguminosas").value);
        document.getElementById("t24h_hc_rac_leguminosas").value = t24h_rac_leguminosas*20;
        }
        function t24h_funcionPROTE_LEGUMINOSAS(){
        var t24h_rac_leguminosas = Number(document.getElementById("t24h_rac_leguminosas").value);
        document.getElementById("t24h_prote_rac_leguminosas").value = t24h_rac_leguminosas*8;
        }
        function t24h_funcionLIPI_LEGUMINOSAS(){
        var t24h_rac_leguminosas = Number(document.getElementById("t24h_rac_leguminosas").value);
        document.getElementById("t24h_lipi_rac_leguminosas").value = t24h_rac_leguminosas*1;
        }
        function t24h_funcionKC_LEGUMINOSAS(){
        var t24h_hc_rac_leguminosas = Number(document.getElementById("t24h_hc_rac_leguminosas").value);
        var t24h_prote_rac_leguminosas = Number(document.getElementById("t24h_prote_rac_leguminosas").value);
        var t24h_lipi_rac_leguminosas = Number(document.getElementById("t24h_lipi_rac_leguminosas").value);
        document.getElementById("t24h_kc_rac_leguminosas").value = (t24h_hc_rac_leguminosas*4)+(t24h_prote_rac_leguminosas*4)+(t24h_lipi_rac_leguminosas*9);
        }

        //FUNCIONES GRASAS
        function t24h_funcionHC_GRASAS(){
        var t24h_rac_grasas = Number(document.getElementById("t24h_rac_grasas").value);
        document.getElementById("t24h_hc_rac_grasas").value = t24h_rac_grasas*0;
        }
        function t24h_funcionPROTE_GRASAS(){
        var t24h_rac_grasas = Number(document.getElementById("t24h_rac_grasas").value);
        document.getElementById("t24h_prote_rac_grasas").value = t24h_rac_grasas*0;
        }
        function t24h_funcionLIPI_GRASAS(){
        var t24h_rac_grasas = Number(document.getElementById("t24h_rac_grasas").value);
        document.getElementById("t24h_lipi_rac_grasas").value = t24h_rac_grasas*5;
        }
        function t24h_funcionKC_GRASAS(){
        var t24h_hc_rac_grasas = Number(document.getElementById("t24h_hc_rac_grasas").value);
        var t24h_prote_rac_grasas = Number(document.getElementById("t24h_prote_rac_grasas").value);
        var t24h_lipi_rac_grasas = Number(document.getElementById("t24h_lipi_rac_grasas").value);
        document.getElementById("t24h_kc_rac_grasas").value = (t24h_hc_rac_grasas*4)+(t24h_prote_rac_grasas*4)+(t24h_lipi_rac_grasas*9);
        }

        //FUNCIONES AZUCARES
        function t24h_funcionHC_AZUCARES(){
        var t24h_rac_azucares = Number(document.getElementById("t24h_rac_azucares").value);
        document.getElementById("t24h_hc_rac_azucares").value = t24h_rac_azucares*10;
        }
        function t24h_funcionPROTE_AZUCARES(){
        var t24h_rac_azucares = Number(document.getElementById("t24h_rac_azucares").value);
        document.getElementById("t24h_prote_rac_azucares").value = t24h_rac_azucares*0;
        }
        function t24h_funcionLIPI_AZUCARES(){
        var t24h_rac_azucares = Number(document.getElementById("t24h_rac_azucares").value);
        document.getElementById("t24h_lipi_rac_azucares").value = t24h_rac_azucares*0;
        }

        function t24h_funcionKC_AZUCARES()
        {
        var t24h_hc_rac_azucares = Number(document.getElementById("t24h_hc_rac_azucares").value);
        var t24h_prote_rac_azucares = Number(document.getElementById("t24h_prote_rac_azucares").value);
        var t24h_lipi_rac_azucares = Number(document.getElementById("t24h_lipi_rac_azucares").value);
        document.getElementById("t24h_kc_rac_azucares").value = (t24h_hc_rac_azucares*4)+(t24h_prote_rac_azucares*4)+(t24h_lipi_rac_azucares*9);
        }


        function t24h_funcionTOTAL_HC()
        {
          var t24h_hc_rac_leche = Number(document.getElementById("t24h_hc_rac_leche").value);
          var t24h_hc_rac_carne = Number(document.getElementById("t24h_hc_rac_carne").value);
          var t24h_hc_rac_fruta = Number(document.getElementById("t24h_hc_rac_fruta").value);
          var t24h_hc_rac_vegetales = Number(document.getElementById("t24h_hc_rac_vegetales").value);
          var t24h_hc_rac_cyt = Number(document.getElementById("t24h_hc_rac_cyt").value);
          var t24h_hc_rac_leguminosas = Number(document.getElementById("t24h_hc_rac_leguminosas").value);
          var t24h_hc_rac_grasas = Number(document.getElementById("t24h_hc_rac_grasas").value);
          var t24h_hc_rac_azucares = Number(document.getElementById("t24h_hc_rac_azucares").value);
          document.getElementById("t24h_total_hc").value = (t24h_hc_rac_leche)+(t24h_hc_rac_carne)+(t24h_hc_rac_fruta)+(t24h_hc_rac_vegetales)+(t24h_hc_rac_cyt)+(t24h_hc_rac_leguminosas)+(t24h_hc_rac_grasas)+(t24h_hc_rac_azucares);



          var t24h_total_kc=  Number(document.getElementById("t24h_total_kc").value);
          document.getElementById("t24h_hc_grs").value = (t24h_hc_rac_leche)+(t24h_hc_rac_carne)+(t24h_hc_rac_fruta)+(t24h_hc_rac_vegetales)+(t24h_hc_rac_cyt)+(t24h_hc_rac_leguminosas)+(t24h_hc_rac_grasas)+(t24h_hc_rac_azucares);
          var t24h_hc_grs =  Number(document.getElementById("t24h_hc_grs").value);
          document.getElementById("t24h_hc_kc").value = t24h_hc_grs*4;
          var t24h_hc_kc=Number(document.getElementById("t24h_hc_kc").value);
          document.getElementById("t24h_hc_porcentaje").value= ((t24h_hc_kc*100)/t24h_total_kc).toFixed(2);



        }
        function t24h_funcionTOTAL_PROTEINAS()
        {
          var t24h_prote_rac_leche = Number(document.getElementById("t24h_prote_rac_leche").value);
          var t24h_prote_rac_carne = Number(document.getElementById("t24h_prote_rac_carne").value);
          var t24h_prote_rac_fruta = Number(document.getElementById("t24h_prote_rac_fruta").value);
          var t24h_prote_rac_vegetales = Number(document.getElementById("t24h_prote_rac_vegetales").value);
          var t24h_prote_rac_cyt = Number(document.getElementById("t24h_prote_rac_cyt").value);
          var t24h_prote_rac_leguminosas = Number(document.getElementById("t24h_prote_rac_leguminosas").value);
          var t24h_prote_rac_grasas = Number(document.getElementById("t24h_prote_rac_grasas").value);
          var t24h_prote_rac_azucares = Number(document.getElementById("t24h_prote_rac_azucares").value);
          document.getElementById("t24h_total_prote").value = (t24h_prote_rac_leche)+(t24h_prote_rac_carne)+(t24h_prote_rac_fruta)+(t24h_prote_rac_vegetales)+(t24h_prote_rac_cyt)+(t24h_prote_rac_leguminosas)+(t24h_prote_rac_grasas)+(t24h_prote_rac_azucares);


          var t24h_total_kc=  Number(document.getElementById("t24h_total_kc").value);
          document.getElementById("t24h_prote_grs").value = (t24h_prote_rac_leche)+(t24h_prote_rac_carne)+(t24h_prote_rac_fruta)+(t24h_prote_rac_vegetales)+(t24h_prote_rac_cyt)+(t24h_prote_rac_leguminosas)+(t24h_prote_rac_grasas)+(t24h_prote_rac_azucares);
          var t24h_prote_grs =  Number(document.getElementById("t24h_prote_grs").value);
          document.getElementById("t24h_prote_kc").value = t24h_prote_grs*4;
          var t24h_prote_kc=Number(document.getElementById("t24h_prote_kc").value);
          document.getElementById("t24h_prote_porcentaje").value= ((t24h_prote_kc*100)/t24h_total_kc).toFixed(2);


        }
        function t24h_funcionTOTAL_LIPIDOS()
        {
          var t24h_lipi_rac_leche = Number(document.getElementById("t24h_lipi_rac_leche").value);
          var t24h_lipi_rac_carne = Number(document.getElementById("t24h_lipi_rac_carne").value);
          var t24h_lipi_rac_fruta = Number(document.getElementById("t24h_lipi_rac_fruta").value);
          var t24h_lipi_rac_vegetales = Number(document.getElementById("t24h_lipi_rac_vegetales").value);
          var t24h_lipi_rac_cyt = Number(document.getElementById("t24h_lipi_rac_cyt").value);
          var t24h_lipi_rac_leguminosas = Number(document.getElementById("t24h_lipi_rac_leguminosas").value);
          var t24h_lipi_rac_grasas = Number(document.getElementById("t24h_lipi_rac_grasas").value);
          var t24h_lipi_rac_azucares = Number(document.getElementById("t24h_lipi_rac_azucares").value);
          document.getElementById("t24h_total_lipi").value = (t24h_lipi_rac_leche)+(t24h_lipi_rac_carne)+(t24h_lipi_rac_fruta)+(t24h_lipi_rac_vegetales)+(t24h_lipi_rac_cyt)+(t24h_lipi_rac_leguminosas)+(t24h_lipi_rac_grasas)+(t24h_lipi_rac_azucares);


          var t24h_total_kc=  Number(document.getElementById("t24h_total_kc").value);
          document.getElementById("t24h_lipi_grs").value = (t24h_lipi_rac_leche)+(t24h_lipi_rac_carne)+(t24h_lipi_rac_fruta)+(t24h_lipi_rac_vegetales)+(t24h_lipi_rac_cyt)+(t24h_lipi_rac_leguminosas)+(t24h_lipi_rac_grasas)+(t24h_lipi_rac_azucares);
          var t24h_lipi_grs =  Number(document.getElementById("lipi_grs").value);
          document.getElementById("t24h_lipi_kc").value = t24h_lipi_grs*4;
          var t24h_lipi_kc=Number(document.getElementById("t24h_lipi_kc").value);
          document.getElementById("t24h_lipi_porcentaje").value= ((t24h_lipi_kc*100)/t24h_total_kc).toFixed(2);

        }
        function t24h_funcionTOTAL_KC()
        {
          var t24h_kc_rac_leche = Number(document.getElementById("t24h_kc_rac_leche").value);
          var t24h_kc_rac_carne = Number(document.getElementById("t24h_kc_rac_carne").value);
          var t24h_kc_rac_fruta = Number(document.getElementById("t24h_kc_rac_fruta").value);
          var t24h_kc_rac_vegetales = Number(document.getElementById("t24h_kc_rac_vegetales").value);
          var t24h_kc_rac_cyt = Number(document.getElementById("t24h_kc_rac_cyt").value);
          var t24h_kc_rac_leguminosas = Number(document.getElementById("t24h_kc_rac_leguminosas").value);
          var t24h_kc_rac_grasas = Number(document.getElementById("t24h_kc_rac_grasas").value);
          var t24h_kc_rac_azucares = Number(document.getElementById("t24h_kc_rac_azucares").value);
          document.getElementById("t24h_total_kc").value = (t24h_kc_rac_leche)+(t24h_kc_rac_carne)+(t24h_kc_rac_fruta)+(t24h_kc_rac_vegetales)+(t24h_kc_rac_cyt)+(t24h_kc_rac_leguminosas)+(t24h_kc_rac_grasas)+(t24h_kc_rac_azucares);
        }







        //FUNCIONES LECHE INGEDSTA DIARIA
          function ingestadiaria_funcionHC_LECHE(){
          var ingestadiaria_rac_leche = Number(document.getElementById("ingestadiaria_rac_leche").value);
          document.getElementById("ingestadiaria_hc_rac_leche").value = ingestadiaria_rac_leche*12;
          }

          function ingestadiaria_funcionPROTE_LECHE(){
          var ingestadiaria_rac_leche = Number(document.getElementById("ingestadiaria_rac_leche").value);
          document.getElementById("ingestadiaria_prote_rac_leche").value = ingestadiaria_rac_leche*9;
          }

          function ingestadiaria_funcionLIPI_LECHE(){
          var ingestadiaria_rac_leche = Number(document.getElementById("ingestadiaria_rac_leche").value);
          document.getElementById("ingestadiaria_lipi_rac_leche").value = ingestadiaria_rac_leche*5;
          }
          function ingestadiaria_funcionKC_LECHE(){
          var ingestadiaria_hc_rac_leche = Number(document.getElementById("ingestadiaria_hc_rac_leche").value);
          var ingestadiaria_prote_rac_leche = Number(document.getElementById("ingestadiaria_prote_rac_leche").value);
          var ingestadiaria_lipi_rac_leche = Number(document.getElementById("ingestadiaria_lipi_rac_leche").value);
          document.getElementById("ingestadiaria_kc_rac_leche").value = (ingestadiaria_hc_rac_leche*4)+(ingestadiaria_prote_rac_leche*4)+(ingestadiaria_lipi_rac_leche*9);
          }
          //FUNCIONES CARNE
          function ingestadiaria_funcionHC_CARNE(){
          var ingestadiaria_rac_carne = Number(document.getElementById("ingestadiaria_rac_carne").value);
          document.getElementById("ingestadiaria_hc_rac_carne").value = ingestadiaria_rac_carne*0;
          }
          function ingestadiaria_funcionPROTE_CARNE(){
          var ingestadiaria_rac_carne = Number(document.getElementById("ingestadiaria_rac_carne").value);
          document.getElementById("ingestadiaria_prote_rac_carne").value = ingestadiaria_rac_carne*7;
          }
          function ingestadiaria_funcionLIPI_CARNE(){
          var ingestadiaria_rac_carne = Number(document.getElementById("ingestadiaria_rac_carne").value);
          document.getElementById("ingestadiaria_lipi_rac_carne").value = ingestadiaria_rac_carne*4;
          }
          function ingestadiaria_funcionKC_CARNE(){
          var ingestadiaria_hc_rac_carne = Number(document.getElementById("ingestadiaria_hc_rac_carne").value);
          var ingestadiaria_prote_rac_carne = Number(document.getElementById("ingestadiaria_prote_rac_carne").value);
          var ingestadiaria_lipi_rac_carne = Number(document.getElementById("ingestadiaria_lipi_rac_carne").value);
          document.getElementById("ingestadiaria_kc_rac_carne").value = (ingestadiaria_hc_rac_carne*4)+(ingestadiaria_prote_rac_carne*4)+(ingestadiaria_lipi_rac_carne*9);
          }

          //FUNCIONES FRUTA
          function ingestadiaria_funcionHC_FRUTA(){
          var ingestadiaria_rac_fruta = Number(document.getElementById("ingestadiaria_rac_fruta").value);
          document.getElementById("ingestadiaria_hc_rac_fruta").value = ingestadiaria_rac_fruta*15;
          }
          function ingestadiaria_funcionPROTE_FRUTA(){
          var ingestadiaria_rac_fruta = Number(document.getElementById("ingestadiaria_rac_fruta").value);
          document.getElementById("ingestadiaria_prote_rac_fruta").value = ingestadiaria_rac_fruta*0;
          }
          function ingestadiaria_funcionLIPI_FRUTA(){
          var ingestadiaria_rac_fruta = Number(document.getElementById("ingestadiaria_rac_fruta").value);
          document.getElementById("ingestadiaria_lipi_rac_fruta").value = ingestadiaria_rac_fruta*0;
          }
          function ingestadiaria_funcionKC_FRUTA(){
          var ingestadiaria_hc_rac_fruta = Number(document.getElementById("ingestadiaria_hc_rac_fruta").value);
          var ingestadiaria_prote_rac_fruta = Number(document.getElementById("ingestadiaria_prote_rac_fruta").value);
          var ingestadiaria_lipi_rac_fruta = Number(document.getElementById("ingestadiaria_lipi_rac_fruta").value);
          document.getElementById("ingestadiaria_kc_rac_fruta").value = (ingestadiaria_hc_rac_fruta*4)+(ingestadiaria_prote_rac_fruta*4)+(ingestadiaria_lipi_rac_fruta*9);
          }

          //FUNCIONES VEGETALES

          function ingestadiaria_funcionHC_VEGETALES(){
          var ingestadiaria_rac_vegetales = Number(document.getElementById("ingestadiaria_rac_vegetales").value);
          document.getElementById("ingestadiaria_hc_rac_vegetales").value = ingestadiaria_rac_vegetales*4;
          }
          function ingestadiaria_funcionPROTE_VEGETALES(){
          var ingestadiaria_rac_vegetales = Number(document.getElementById("ingestadiaria_rac_vegetales").value);
          document.getElementById("ingestadiaria_prote_rac_vegetales").value = ingestadiaria_rac_vegetales*2;
          }
          function ingestadiaria_funcionLIPI_VEGETALES(){
          var ingestadiaria_rac_vegetales = Number(document.getElementById("ingestadiaria_rac_vegetales").value);
          document.getElementById("ingestadiaria_lipi_rac_vegetales").value = ingestadiaria_rac_vegetales*0;
          }
          function ingestadiaria_funcionKC_VEGETALES(){
          var ingestadiaria_hc_rac_vegetales = Number(document.getElementById("ingestadiaria_hc_rac_vegetales").value);
          var ingestadiaria_prote_rac_vegetales = Number(document.getElementById("ingestadiaria_prote_rac_vegetales").value);
          var ingestadiaria_lipi_rac_vegetales = Number(document.getElementById("ingestadiaria_lipi_rac_vegetales").value);
          document.getElementById("ingestadiaria_kc_rac_vegetales").value = (ingestadiaria_hc_rac_vegetales*4)+(ingestadiaria_prote_rac_vegetales*4)+(ingestadiaria_lipi_rac_vegetales*9);
          }

          //FUNCIONES CEREALES Y TUBERCULOS
          function ingestadiaria_funcionHC_CYT(){
          var ingestadiaria_rac_cyt = Number(document.getElementById("ingestadiaria_rac_cyt").value);
          document.getElementById("ingestadiaria_hc_rac_cyt").value = ingestadiaria_rac_cyt*15;
          }
          function ingestadiaria_funcionPROTE_CYT(){
          var ingestadiaria_rac_cyt = Number(document.getElementById("ingestadiaria_rac_cyt").value);
          document.getElementById("ingestadiaria_prote_rac_cyt").value = ingestadiaria_rac_cyt*2;
          }
          function ingestadiaria_funcionLIPI_CYT(){
          var ingestadiaria_rac_cyt = Number(document.getElementById("ingestadiaria_rac_cyt").value);
          document.getElementById("ingestadiaria_lipi_rac_cyt").value = ingestadiaria_rac_cyt*0;
          }
          function ingestadiaria_funcionKC_CYT(){
          var ingestadiaria_hc_rac_cyt = Number(document.getElementById("ingestadiaria_hc_rac_cyt").value);
          var ingestadiaria_prote_rac_cyt = Number(document.getElementById("ingestadiaria_prote_rac_cyt").value);
          var ingestadiaria_lipi_rac_cyt = Number(document.getElementById("ingestadiaria_lipi_rac_cyt").value);
          document.getElementById("ingestadiaria_kc_rac_cyt").value = (ingestadiaria_hc_rac_cyt*4)+(ingestadiaria_prote_rac_cyt*4)+(ingestadiaria_lipi_rac_cyt*9);
          }

          //FUNCIONES LEGUMINOSAS
          function ingestadiaria_funcionHC_LEGUMINOSAS(){
          var ingestadiaria_rac_leguminosas = Number(document.getElementById("ingestadiaria_rac_leguminosas").value);
          document.getElementById("ingestadiaria_hc_rac_leguminosas").value = ingestadiaria_rac_leguminosas*20;
          }
          function ingestadiaria_funcionPROTE_LEGUMINOSAS(){
          var ingestadiaria_rac_leguminosas = Number(document.getElementById("ingestadiaria_rac_leguminosas").value);
          document.getElementById("ingestadiaria_prote_rac_leguminosas").value = ingestadiaria_rac_leguminosas*8;
          }
          function ingestadiaria_funcionLIPI_LEGUMINOSAS(){
          var ingestadiaria_rac_leguminosas = Number(document.getElementById("ingestadiaria_rac_leguminosas").value);
          document.getElementById("ingestadiaria_lipi_rac_leguminosas").value = ingestadiaria_rac_leguminosas*1;
          }
          function ingestadiaria_funcionKC_LEGUMINOSAS(){
          var ingestadiaria_hc_rac_leguminosas = Number(document.getElementById("ingestadiaria_hc_rac_leguminosas").value);
          var ingestadiaria_prote_rac_leguminosas = Number(document.getElementById("ingestadiaria_prote_rac_leguminosas").value);
          var ingestadiaria_lipi_rac_leguminosas = Number(document.getElementById("ingestadiaria_lipi_rac_leguminosas").value);
          document.getElementById("ingestadiaria_kc_rac_leguminosas").value = (ingestadiaria_hc_rac_leguminosas*4)+(ingestadiaria_prote_rac_leguminosas*4)+(ingestadiaria_lipi_rac_leguminosas*9);
          }

          //FUNCIONES GRASAS
          function ingestadiaria_funcionHC_GRASAS(){
          var ingestadiaria_rac_grasas = Number(document.getElementById("ingestadiaria_rac_grasas").value);
          document.getElementById("ingestadiaria_hc_rac_grasas").value = ingestadiaria_rac_grasas*0;
          }
          function ingestadiaria_funcionPROTE_GRASAS(){
          var ingestadiaria_rac_grasas = Number(document.getElementById("ingestadiaria_rac_grasas").value);
          document.getElementById("ingestadiaria_prote_rac_grasas").value = ingestadiaria_rac_grasas*0;
          }
          function ingestadiaria_funcionLIPI_GRASAS(){
          var ingestadiaria_rac_grasas = Number(document.getElementById("ingestadiaria_rac_grasas").value);
          document.getElementById("ingestadiaria_lipi_rac_grasas").value = ingestadiaria_rac_grasas*5;
          }
          function ingestadiaria_funcionKC_GRASAS(){
          var ingestadiaria_hc_rac_grasas = Number(document.getElementById("ingestadiaria_hc_rac_grasas").value);
          var ingestadiaria_prote_rac_grasas = Number(document.getElementById("ingestadiaria_prote_rac_grasas").value);
          var ingestadiaria_lipi_rac_grasas = Number(document.getElementById("ingestadiaria_lipi_rac_grasas").value);
          document.getElementById("ingestadiaria_kc_rac_grasas").value = (ingestadiaria_hc_rac_grasas*4)+(ingestadiaria_prote_rac_grasas*4)+(ingestadiaria_lipi_rac_grasas*9);
          }

          //FUNCIONES AZUCARES
          function ingestadiaria_funcionHC_AZUCARES(){
          var ingestadiaria_rac_azucares = Number(document.getElementById("ingestadiaria_rac_azucares").value);
          document.getElementById("ingestadiaria_hc_rac_azucares").value = ingestadiaria_rac_azucares*10;
          }
          function ingestadiaria_funcionPROTE_AZUCARES(){
          var ingestadiaria_rac_azucares = Number(document.getElementById("ingestadiaria_rac_azucares").value);
          document.getElementById("ingestadiaria_prote_rac_azucares").value = ingestadiaria_rac_azucares*0;
          }
          function ingestadiaria_funcionLIPI_AZUCARES(){
          var ingestadiaria_rac_azucares = Number(document.getElementById("ingestadiaria_rac_azucares").value);
          document.getElementById("ingestadiaria_lipi_rac_azucares").value = ingestadiaria_rac_azucares*0;
          }

          function ingestadiaria_funcionKC_AZUCARES()
          {
          var ingestadiaria_hc_rac_azucares = Number(document.getElementById("ingestadiaria_hc_rac_azucares").value);
          var ingestadiaria_prote_rac_azucares = Number(document.getElementById("ingestadiaria_prote_rac_azucares").value);
          var ingestadiaria_lipi_rac_azucares = Number(document.getElementById("ingestadiaria_lipi_rac_azucares").value);
          document.getElementById("ingestadiaria_kc_rac_azucares").value = (ingestadiaria_hc_rac_azucares*4)+(ingestadiaria_prote_rac_azucares*4)+(ingestadiaria_lipi_rac_azucares*9);
          }


          function ingestadiaria_funcionTOTAL_HC()
          {
            var ingestadiaria_hc_rac_leche = Number(document.getElementById("ingestadiaria_hc_rac_leche").value);
            var ingestadiaria_hc_rac_carne = Number(document.getElementById("ingestadiaria_hc_rac_carne").value);
            var ingestadiaria_hc_rac_fruta = Number(document.getElementById("ingestadiaria_hc_rac_fruta").value);
            var ingestadiaria_hc_rac_vegetales = Number(document.getElementById("ingestadiaria_hc_rac_vegetales").value);
            var ingestadiaria_hc_rac_cyt = Number(document.getElementById("ingestadiaria_hc_rac_cyt").value);
            var ingestadiaria_hc_rac_leguminosas = Number(document.getElementById("ingestadiaria_hc_rac_leguminosas").value);
            var ingestadiaria_hc_rac_grasas = Number(document.getElementById("ingestadiaria_hc_rac_grasas").value);
            var ingestadiaria_hc_rac_azucares = Number(document.getElementById("ingestadiaria_hc_rac_azucares").value);
            document.getElementById("ingestadiaria_total_hc").value = (ingestadiaria_hc_rac_leche)+(ingestadiaria_hc_rac_carne)+(ingestadiaria_hc_rac_fruta)+(ingestadiaria_hc_rac_vegetales)+(ingestadiaria_hc_rac_cyt)+(ingestadiaria_hc_rac_leguminosas)+(ingestadiaria_hc_rac_grasas)+(ingestadiaria_hc_rac_azucares);


            var ingestadiaria_total_kc=  Number(document.getElementById("ingestadiaria_total_kc").value);

            document.getElementById("ingestadiaria_hc_grs").value = (ingestadiaria_hc_rac_leche)+(ingestadiaria_hc_rac_carne)+(ingestadiaria_hc_rac_fruta)+(ingestadiaria_hc_rac_vegetales)+(ingestadiaria_hc_rac_cyt)+(ingestadiaria_hc_rac_leguminosas)+(ingestadiaria_hc_rac_grasas)+(ingestadiaria_hc_rac_azucares);
            var ingestadiaria_hc_grs =  Number(document.getElementById("ingestadiaria_hc_grs").value);

            document.getElementById("ingestadiaria_hc_kc").value = ingestadiaria_hc_grs*4;
            var ingestadiaria_hc_kc=Number(document.getElementById("ingestadiaria_hc_kc").value);
            document.getElementById("ingestadiaria_hc_porcentaje").value= ((ingestadiaria_hc_kc*100)/ingestadiaria_total_kc).toFixed(2);



          }

          function ingestadiaria_funcionTOTAL_PROTEINAS()
          {
            var ingestadiaria_prote_rac_leche = Number(document.getElementById("ingestadiaria_prote_rac_leche").value);
            var ingestadiaria_prote_rac_carne = Number(document.getElementById("ingestadiaria_prote_rac_carne").value);
            var ingestadiaria_prote_rac_fruta = Number(document.getElementById("ingestadiaria_prote_rac_fruta").value);
            var ingestadiaria_prote_rac_vegetales = Number(document.getElementById("ingestadiaria_prote_rac_vegetales").value);
            var ingestadiaria_prote_rac_cyt = Number(document.getElementById("ingestadiaria_prote_rac_cyt").value);
            var ingestadiaria_prote_rac_leguminosas = Number(document.getElementById("ingestadiaria_prote_rac_leguminosas").value);
            var ingestadiaria_prote_rac_grasas = Number(document.getElementById("ingestadiaria_prote_rac_grasas").value);
            var ingestadiaria_prote_rac_azucares = Number(document.getElementById("ingestadiaria_prote_rac_azucares").value);
            document.getElementById("ingestadiaria_total_prote").value = (ingestadiaria_hc_rac_leche)+(ingestadiaria_hc_rac_carne)+(ingestadiaria_hc_rac_fruta)+(ingestadiaria_hc_rac_vegetales)+(ingestadiaria_hc_rac_cyt)+(ingestadiaria_hc_rac_leguminosas)+(ingestadiaria_hc_rac_grasas)+(ingestadiaria_hc_rac_azucares);

            var ingestadiaria_total_kc=  Number(document.getElementById("ingestadiaria_total_kc").value);
            document.getElementById("ingestadiaria_prote_grs").value = (ingestadiaria_prote_rac_leche)+(ingestadiaria_prote_rac_carne)+(ingestadiaria_prote_rac_fruta)+(ingestadiaria_prote_rac_vegetales)+(ingestadiaria_prote_rac_cyt)+(ingestadiaria_prote_rac_leguminosas)+(ingestadiaria_prote_rac_grasas)+(ingestadiaria_prote_rac_azucares);
            var ingestadiaria_prote_grs =  Number(document.getElementById("ingestadiaria_prote_grs").value);
            document.getElementById("ingestadiaria_prote_kc").value = ingestadiaria_prote_grs*4;
            var ingestadiaria_prote_kc=Number(document.getElementById("ingestadiaria_prote_kc").value);
            document.getElementById("ingestadiaria_prote_porcentaje").value= ((ingestadiaria_prote_kc*100)/ingestadiaria_total_kc).toFixed(2);

          }
          function ingestadiaria_funcionTOTAL_LIPIDOS()
          {
            var ingestadiaria_lipi_rac_leche = Number(document.getElementById("ingestadiaria_lipi_rac_leche").value);
            var ingestadiaria_lipi_rac_carne = Number(document.getElementById("ingestadiaria_lipi_rac_carne").value);
            var ingestadiaria_lipi_rac_fruta = Number(document.getElementById("ingestadiaria_lipi_rac_fruta").value);
            var ingestadiaria_lipi_rac_vegetales = Number(document.getElementById("ingestadiaria_lipi_rac_vegetales").value);
            var ingestadiaria_lipi_rac_cyt = Number(document.getElementById("ingestadiaria_lipi_rac_cyt").value);
            var ingestadiaria_lipi_rac_leguminosas = Number(document.getElementById("ingestadiaria_lipi_rac_leguminosas").value);
            var ingestadiaria_lipi_rac_grasas = Number(document.getElementById("ingestadiaria_lipi_rac_grasas").value);
            var ingestadiaria_lipi_rac_azucares = Number(document.getElementById("ingestadiaria_lipi_rac_azucares").value);
            document.getElementById("ingestadiaria_total_lipi").value = (ingestadiaria_lipi_rac_leche)+(ingestadiaria_lipi_rac_carne)+(ingestadiaria_lipi_rac_fruta)+(ingestadiaria_lipi_rac_vegetales)+(ingestadiaria_lipi_rac_cyt)+(ingestadiaria_lipi_rac_leguminosas)+(ingestadiaria_lipi_rac_grasas)+(ingestadiaria_lipi_rac_azucares);



            var ingestadiaria_total_kc=  Number(document.getElementById("ingestadiaria_total_kc").value);
            document.getElementById("ingestadiaria_lipi_grs").value = (ingestadiaria_lipi_rac_leche)+(ingestadiaria_lipi_rac_carne)+(ingestadiaria_lipi_rac_fruta)+(ingestadiaria_lipi_rac_vegetales)+(ingestadiaria_lipi_rac_cyt)+(ingestadiaria_lipi_rac_leguminosas)+(comida_lipi_rac_grasas)+(comida_lipi_rac_azucares);
            var ingestadiaria_lipi_grs =  Number(document.getElementById("ingestadiaria_lipi_grs").value);
            document.getElementById("ingestadiaria_lipi_kc").value = ingestadiaria_lipi_grs*4;
            var ingestadiaria_lipi_kc=Number(document.getElementById("ingestadiaria_lipi_kc").value);
            document.getElementById("ingestadiaria_lipi_porcentaje").value= ((ingestadiaria_lipi_kc*100)/ingestadiaria_total_kc).toFixed(2);
          }
          function ingestadiaria_funcionTOTAL_KC()
          {
            var ingestadiaria_kc_rac_leche = Number(document.getElementById("ingestadiaria_kc_rac_leche").value);
            var ingestadiaria_kc_rac_carne = Number(document.getElementById("ingestadiaria_kc_rac_carne").value);
            var ingestadiaria_kc_rac_fruta = Number(document.getElementById("ingestadiaria_kc_rac_fruta").value);
            var ingestadiaria_kc_rac_vegetales = Number(document.getElementById("ingestadiaria_kc_rac_vegetales").value);
            var ingestadiaria_kc_rac_cyt = Number(document.getElementById("ingestadiaria_kc_rac_cyt").value);
            var ingestadiaria_kc_rac_leguminosas = Number(document.getElementById("ingestadiaria_kc_rac_leguminosas").value);
            var ingestadiaria_kc_rac_grasas = Number(document.getElementById("ingestadiaria_kc_rac_grasas").value);
            var ingestadiaria_kc_rac_azucares = Number(document.getElementById("ingestadiaria_kc_rac_azucares").value);
            document.getElementById("ingestadiaria_total_kc").value = (ingestadiaria_kc_rac_leche)+(ingestadiaria_kc_rac_carne)+(ingestadiaria_kc_rac_fruta)+(ingestadiaria_kc_rac_vegetales)+(ingestadiaria_kc_rac_cyt)+(ingestadiaria_kc_rac_leguminosas)+(ingestadiaria_kc_rac_grasas)+(ingestadiaria_kc_rac_azucares);
          }
