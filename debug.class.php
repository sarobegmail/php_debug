<?php

/**
 * @author Roberto Salvati
 * @copyright 2019
 * uso:
 * debug::dbg_screen($sql);
 * 
 * per attivare i cookie digitare sulla console: javascript:document.cookie="debug=debug"
 * per visualizzare sempre il debug, impostare in TRUE la variabile $scrivi_sempre 
 */

class debug{
   
  static function dbg_screen($testo,$accordion=false, $accordion_testo=""){
    global $_COOKIE;
    $scrivi_sempre=false;
    
    if(isset($_COOKIE["debug"]) || $scrivi_sempre){
    
      $arr_dati_chiamante=debug_backtrace();
      if($accordion){
        $num=rand();
        echo "<div class='panel panel-default'>
                <div class='panel-heading' role='tab'>
                  <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion' href='.accordiondbg$num' aria-expanded='true' aria-controls='collapseOne'>
                      Debug $accordion_testo
                    </a>
                  </h4>
                </div>
              <div class='collapse accordiondbg$num'>";
      }
      echo "<p><h3>trace</h3> file: ".$arr_dati_chiamante[0]["file"].": ".$arr_dati_chiamante[0]["line"];
      echo "<br /><pre>risultato $accordion_testo ->";
      if(is_array($testo) || is_object($testo)){
        print_r($testo);
      }else{ 
        echo $testo;
      }
      echo "<-</pre>";
      if($accordion) echo "</div></div>";
    }    

  }
}
?>
