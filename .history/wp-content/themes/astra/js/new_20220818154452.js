var quickAddBtn = document.querySelector('#quick-add-button');

if( quickAddBtn ) {
   
    const options = {

        method: 'GET',
      
        headers: {
      
          Accept: 'application/json',
      
          Authorization: 'Bearer 38fecaaf-2837-e678-711a-b98b88d713d1'
      
        }
      
      };
      
      
      fetch('https://sandbox.dev.clover.com/v3/merchants/VE1TKEVCT7761/categories', options)
      
      
        .then(response => response.json())
      
        .then(response => console.log(response))
      
        .catch(err => console.error(err));
        console.log(response.name);

//         var iterator = response.values();
 
// // Here all the elements of the array is being printed.
// for (let elements of iterator) {
//   console.log(elements);
}


