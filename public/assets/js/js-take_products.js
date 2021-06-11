const ul = document.getElementById('listmunu');
ul.style.listStyle = 'none';
const url = 'https://www.ta-kemore.com/Delivery/public/api/products';
const options_api = 'https://www.ta-kemore.com/Delivery/public/api/options';
const optiongroups_api = 'https://www.ta-kemore.com/Delivery/public/api/option_groups';

function createNode(element) {
    return document.createElement(element);
}

function append(parent, el) {
    return parent.appendChild(el);
}

fetch(url)
    .then((resp) => resp.json())
    .then((data) => {
        let listmunu = data.data;

        //Get the results
        return listmunu.map((listmunu) => {
            let li = createNode('li'), //Create the elements we need
                img = createNode('img'),
                span = createNode('span');


            span.innerHTML = `

            <div class="row">
            <div class="col-lg-12 col-xs-12">    
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.php"><img src="${listmunu.media[0].thumb}"> </a>
                                    <a class="secondary_img" href="product-details.php"><img src="${listmunu.media[0].thumb}"></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" onClick="fetchDetail(${listmunu.id})" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.php">เมนู-${listmunu.name}</a></h4>
                              
                                    <div class="price_box"> 
                                        <span class="current_price">ราคา:${listmunu.price}</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">เมนู-${listmunu.name}</a></h4>
                            
                                <div class="price_box"> 
                                    <span class="current_price">ราคา:${listmunu.price}</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to Cart</a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                         <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                        <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        
                                    </ul>
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
    .catch((error) => {
        console.log(error);
    });

    function fetchOptions() {
        // const label = document.getElementById('list_detail');
        //label.style.listStyle = 'none';
        fetch(options_api)
            .then((resp) => resp.json())
            .then((data) => {
                let select_option = data.data;
                //Get the results
                return select_option.map((select_option) => {
                    document.getElementById("select_option").innerHTML = `<label><input type="radio" value="${select_option.id}" name="${select_option.name}" checked> ${select_option.description} <span>+${select_option.price} </span></label>`;
                })
            })
            .catch((error) => {
                console.log(error);
            });
    }

function fetchDetail(id) {
    const span = document.getElementById('list_detail');
    span.style.listStyle = 'none';
    console.log(id)
    fetchOptions();
    fetch(url)
        .then((resp) => resp.json())
        .then((data) => {
            let list_detail = data.data;

            //Get the results
            return list_detail.map((list_detail) => {
                document.getElementById("list_detail").innerHTML = `

        
       <div class="modal_body">
                <div class="">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                            <div class="modal_tab">
                                <img src="${list_detail.media[0].thumb}" alt="">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2> ${list_detail.name}</h2>
                                </div>
                                <hr>
                                <div class="requiredmenu">
                                    <h5><b>Select an option</b> </h5>
                                    <div id="select_option"></div>
                                </div>
                                <hr>
                                <div class="requiredmenu">

                                    <h5><b>Add ingredients</b> </h5>
                                    <label>
                                        <input type="radio" value=""> Extra Tomato <span>+ $4.30</span>
                                    </label>
                                    <label>
                                        <input type="radio" value=""> Extra Peppers <span>+ $2.50</span>
                                    </label>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                            <label>Notes for the restaurant</label>
                                            <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                                        </div>
                                    </div>
                                    <div class="mini_cart_wrapper mb-30">
                                        <a href="javascript:void(0)" data-dismiss="modal" class="add_to_basket">Add to cart</a>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
       `;
            })
        })
        .catch((error) => {
            console.log(error);
        });
}