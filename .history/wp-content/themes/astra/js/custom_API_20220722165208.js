var addbtn=document.getElementById('quick-add-button');
if('addbtn')
{
    addbtn.addEventListener('click',function()
    {
        var title=document.querySelector('.admin-quick-add [name="title"]').value;
        var content=document.querySelector('.admin-quick-add [name="content"]').value;
        alert('Title: '+title);
        alert('Content: '+content);
    });
}