// Quick Add Post AJAX
var quickAddBtn = document.querySelector('#quick-add-button');

if( quickAddBtn ) {
    quickAddBtn.addEventListener("click", function(){
        //alert('clicked');
        var ourPostData = {
            "title" : document.querySelector('.admin-quick-add [name="title"]').value,
            "content" : document.querySelector('.admin-quick-add [name="content"]').value,
            "status": "publish"
        }
        alert ('ourPostData');
    
        var createPost = new XMLHttpRequest();
        createPost.open("POST", "http://localhost/wordpress/wp-json/wp/v2/types/post");
        createPost.setRequestHeader('X-WP-Nonce', additionalaData.nonce);
        createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        createPost.send(JSON.stringify(ourPostData));
                                                                                         
    });
}