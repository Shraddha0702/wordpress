var addbtn=document.getElementById('quick-add-button');
if('addbtn')
{
    addbtn.addEventListener('click',function()
    {
        var title=document.querySelector('.admin-quick-add [name="title"]').value;
        var content=document.querySelector('.admin-quick-add [name="content"]').value;
     
        var post_data={
            "title":title,
            "content":content
        }
        var createPost=new XMLHttpRequest();
        createPost.open('POST','http://localhost/wordpress/wp-json/wp/v2/posts');
        createPost.setRequestHeader('X-WP-Nonce',additionalaData.nonce);
        createPost.setRequestHeader('Content-Type','application/json;charset:utf=8');
        createPost.send(JSON.stringify(post_data));
    });
}