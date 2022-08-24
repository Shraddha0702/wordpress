// Quick Add Post AJAX
var quickAddBtn = document.querySelector('#quick-add-button');

if( quickAddBtn ) {
    quickAddBtn.addEventListener("click", function(){
        alert('clicked');
        var title= document.querySelector('.admin-quick-add [name="title"]').value
        alert('title');
    });
}