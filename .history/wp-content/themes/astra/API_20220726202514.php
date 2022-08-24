<?php
/**
 * Template Name: MY API
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */


get_header(); ?>
<style>
.admin-quick-add {
	background-color: #DDD;
	padding: 15px;
	margin-bottom: 15px;
}

.admin-quick-add input,
.admin-quick-add textarea {
	width: 100%;
	border: none;
	padding: 10px;
	margin: 0 0 10px 0;
	box-sizing: border-box;
}
</style>

<h1>API Test</h1>

<button class="js-add-post">Add post</button>
<script>
    
    fetch('http://localhost/wordpress/wp-json/wp/v2/types/post').then(function(response){
        return response.json()
    }).then(function(posts){
        console.log(posts)
    });

    fetch('http://localhost/wordpress/wp-json/jwt-auth/v1/token',{
    method: "POST",
    headers:{
        'Content-Type': 'application/json',
        'accept': 'application/json',
    },

    body:JSON.stringify({
        username: 'root',
        password: 'admin'
    })
    }).then(function(response){
        return response.json()
    }).then(function(user){
        console.log(user.token)
        localStorage.setItem('jwt', user.token)
    });

    function addPost() {
        fetch('http://wp-rest.test/wp-json/wp/v2/product',{
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'accept': 'application/json',
                'Authorization': `Bearer ${localStorage.getItem('jwt')}`
            },
            body:JSON.stringify({
                title: 'Add posts from the frontend',
                content: 'This is the way to add posts from your frontend.',
                status: 'publish'
            })
        }).then(function(response){
            return response.json()
        }).then(function(post){
            console.log(post)
        });
    }

    const addPostButton = document.querySelector('.js-add-post')
    addPostButton.addEventListener('click', () => addPost())

</script>