$keys = array('youmaypass',); 
$users = array('3037561072',); 
$sub = $_GET["key"];
$subuser = $_GET["user"];
if (in_array($sub,$keys,TRUE)) if (in_array($subuser,$users,TRUE)) {
print('True');
