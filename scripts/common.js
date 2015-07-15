$(document).ready(function(){
    if($(".readyshow").length>0)
    {
        $(".readyshow").css("display","inline_block");
    }
});

//验证是否符合Email格式
function IsEmail(obj,borderColor)
{
    var regmatch=/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    if(regmatch.test($(obj).val()))
    {
        return true;
    }
    else
    {
        if(borderColor!="")
        {
            $(obj).css("border","solid 1px "+border);            
        }
        return false;
    }
}

function IsBlank(objId,borderColor)
{
    //  alert($(objId).val());
    if($(objId).val().replace(/^\s*$/g,'')=="")
    {     
        $(objId).css("border","solid 1px "+borderColor);
        return true;
    }
    else
    {
        $(objId).css("border","solid 1px gray");
        return false;
    }
        
}
