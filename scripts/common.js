function IsBlank(objId,border)
{
    //  alert($(objId).val());
    if($(objId).val().replace(/^\s*$/g,'')=="")
    {     
        $(objId).css("border","solid 1px "+border);
        return true;
    }
    else
    {
        $(objId).css("border","solid 1px gray");
        return false;
    }
        
}
