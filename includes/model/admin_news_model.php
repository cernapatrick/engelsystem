<?php
function News_by_id($id) {
  return sql_select("SELECT * FROM `News` WHERE `ID`='" . sql_escape($id) . "' LIMIT 1");
}

function News_update($eBetreff, $eText, $eTreffen, $id) {
   return sql_query("UPDATE `News` SET
              `Datum`='" . sql_escape(time()) . "',
              `Betreff`='" . sql_escape($_POST["eBetreff"]) . "',
              `Text`='" . sql_escape($_POST["eText"]) . "',
              `UID`='" . sql_escape($user['UID']) . "',
              `Treffen`='" . sql_escape($_POST["eTreffen"]) . "'
              WHERE `ID`='" . sql_escape($id) . "'");
}
function delete_by_id($id) {
  return sql_query("DELETE FROM `News` WHERE `ID`='" . sql_escape($id) . "' LIMIT 1");
}
?>
