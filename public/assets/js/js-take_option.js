const ul = document.getElementById('listmunu1');
ul.style.listStyle = 'none';
const url = 'https://www.ta-kemore.com/Delivery/public/api/options';

function createNode(element){
    return document.createElement(element);
}
function append(parent, el){
    return parent.appendChild(el);
}


fetch(url)
.then((resp) => resp.json())
.then((data) => {
    let listmunu1 = data.data;

//Get the results
    return listmunu1.map((listmunu1) => {
        let li = createNode('li'), //Create the elements we need
            img = createNode('img'),
            span = createNode('span');
            // img.src = listmunu.media.thumb; //Add the source of the image+
               
        span.innerHTML = `
        <div class="container">
        <div class="row">
            <div class="col">
                <div class="modal_tab">  
                    <img src="assets/img/product/productbig1.jpg" alt="">
                  
                </div>  
            </div> 
             
        </div>    
        <div class="row">
            <div class="col">
                <div class="modal_right">
                    <div class="modal_title mb-10">
                        <h2> ${listmunu1.name}</h2> 
                    </div>
                 <div class="requiredmenu">
                                <h5><b>Select an option</b> </h5>
                                <label>
                                <input type="radio" value="option1" name="options_1" checked>${listmunu1.description} <span>+ ${listmunu1.price}</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_1" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_1" >Extra Large <span>+ $8.30</span>
                                </label>
                               
                </div>
               
                <div class="requiredmenu">
                
                    <h5><b>Add ingredients</b> </h5>
                    <label>
                    <input type="radio" value="">Extra Tomato <span>+ $4.30</span>
                    </label>
                    <label>
                    <input type="radio" value="">Extra Peppers <span>+ $2.50</span>
                    </label>
                    <a href="#0" class="add_to_basket">Add to cart</a>
    </div>
                            
                       
                </div>    
            </div>  
        </div> 
    </div>
       `;
       
        append(li, img);
        append(li, span);
        append(ul, li);
    })
})
.catch((error) => { console.log(error);
});