<!-- <? 
   AddEventHandler("main", "OnAfterUserAdd", "OnAfterUserAddHandler"); 
   function OnAfterUserAddHandler(&$arFields) 
   { 
     if($arFields["ID"] > 0) 
     { 
       if(strlen($arFields["UF_BAZA"]) > 0)  //Если поле UF_BAZA заполнено 
       { 
         $arGroups = CUser::GetUserGroup($arFields["ID"]); 
         $arGroups[] = 15; //То добаляем пользователя в группу c ID15 
         CUser::SetUserGroup($arFields["ID"], $arGroups); 
       } 
       else 
       { 
         $arGroups = CUser::GetUserGroup($arFields["ID"]); 
         $arGroups[] = 5; //Иначе в группу c ID5 
         CUser::SetUserGroup($arFields["ID"], $arGroups); 
       } 
     } 
   } 
?> -->