<?php

require_once("29-config.php");

echo session_save_path();
echo "<br>";

var_dump(session_status());
echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "se as sessões estiverem desabilitadas";
        break;
    case PHP_SESSION_NONE:
        echo "se as sessões estiverem habilitadas, mas nenhuma existir";
        break;
    case PHP_SESSION_ACTIVE:
        echo "se as sessões estiverem habilitadas, e uma existir";
        break;
};

/**
 *  FUNCTIONS FOR SESSION
 *  https://www.php.net/manual/pt_BR/book.session.php
 *  
 *  session_abort — Descarta as alterações no array da sessão e encerra a sessão
 *  session_cache_expire — Retorna o prazo do cache atual
 *  session_cache_limiter — Obtém e/ou define o limitador do cache atual
 *  session_commit — Sinônimo de session_write_close
 *  session_create_id — Create new session id
 *  session_decode — Decodifica dados de sessão de uma sessão codificada em formato string
 *  session_destroy — Destrói todos os dados registrados em uma sessão
 *  session_encode — Codifica os dados atuais da sessão como uma sessão codificada em formato string
 *  session_gc — Perform session data garbage collection
 *  session_get_cookie_params — Obtém os parâmetros do cookie da sessão
 *  session_id — Obtém e/ou define o id de sessão atual
 *  session_module_name — Obtém e/ou define o módulo da sessão atual
 *  session_name — Obtém e/ou define o nome da sessão atual
 *  session_regenerate_id — Atualiza o id da sessão atual com um novo id gerado
 *  session_register_shutdown — Função de finalização da sessão
 *  session_reset — Reinicializa um array de sessão com os valores originais
 *  session_save_path — Obtém e/ou define o caminho para armazenamento da sessão atual
 *  session_set_cookie_params — Define os parâmetros do cookie de sessão
 *  session_set_save_handler — Define funções de armazenamento de sessão à nível de usuário
 *  session_start — Inicia uma nova sessão ou resume uma sessão existente
 *  session_status — Retorna o status atual da sessão
 *  session_unset — Libera todas as variáveis de sessão
 *  session_write_close — Guarda os dados de sessão e fecha a sessão
 */
