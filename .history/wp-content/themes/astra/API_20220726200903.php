<h1>API Test</h1>
<script>
    fetch('http://localhost/wordpress/wp-json/wp/v2/types/post').then(function(response)
    {
        return response.json()
    }).then(function(posts){
        console.log(posts)
    })

</script>