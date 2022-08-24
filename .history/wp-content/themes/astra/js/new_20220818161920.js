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
        .then(response => add_update_item_category(response))
      
        .then(response => console.log(JSON.stringify(response)))
      
        .catch(err => console.error(err));
      


        
//         var iterator = response.values();
 
// // Here all the elements of the array is being printed.
// for (let elements of iterator) {
//   console.log(elements);
}

function add_update_item_category(data) {
   document.write(data);
}
