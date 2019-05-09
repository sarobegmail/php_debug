# php_debug
Class for variables quick view of the variables


Questa classe consente di visualizzare il dato in ingresso direttamente sul browser, opportunamente formattato.
Per impostazione predefinita, il testo sarà visualizzato SOLO SE sarà presente un cookie sul broser. Il cookie si imposta dalla console del browser digitando: document.cookie="debug=debug"

 ## Usage
 debug::dbg_screen($sql);
  
 per attivare i cookie digitare sulla console: document.cookie="debug=debug"
 per visualizzare sempre il debug, impostare in TRUE la variabile $scrivi_sempre 

## Authors

- [Roberto Salvati](https://github.com/sarobegmail)
