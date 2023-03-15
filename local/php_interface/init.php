  <? 
   AddEventHandler("main", "OnAfterUserAdd", Array("MyClass", "OnAfterUserAddHandler")); 
    


   class MyClass
{
    // создаем обработчик события "OnBeforeUserAdd"
    public static  function OnAfterUserAddHandler(&$arFields) 
    { 
 
      file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/test.txt", 'data '. "\n" . print_r($arFields, 1) . "\n________________\n", FILE_APPEND);
 
 
        
        if( $arFields["UF_CHOSEN_GROUP"]["VALUE"] == 1)  //Если поле UF_BAZA заполнено 
        { 
          $arGroups = CUser::GetUserGroup($arFields["ID"]); 
          $arGroups[] = 6; //То добаляем пользователя в группу c ID15 
          CUser::SetUserGroup($arFields["ID"], $arGroups); 
        } 
        else if( $arFields["UF_CHOSEN_GROUP"]["VALUE"] == 2)
        { 
          $arGroups = CUser::GetUserGroup($arFields["ID"]); 
          $arGroups[] = 7; //Иначе в группу c ID5 
          CUser::SetUserGroup($arFields["ID"], $arGroups); 
        } 
        
 
       
 
    } 
}
?>




 


