var addbtn=document.getElementById('quick-add-button');
if('quick-add-button')
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

        createPost.open("POST", additionalData.siteURL + "/wp-json/wp/v2/posts");
        // createPost.open('POST','http://localhost/wordpress/wp-json/wp/v2/posts');
        createPost.setRequestHeader('X-WP-Nonce', additionalData.nonce);
       
        createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        createPost.send(JSON.stringify(post_data));
    });
}