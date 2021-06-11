const ul = document.getElementById('detailmenu');
ul.style.listStyle = 'none';
const url = 'https://www.ta-kemore.com/Delivery/public/api/market';

function createNode(element){
    return document.createElement(element);
}
function append(parent, el){
    return parent.appendChild(el);
}


fetch(url)
.then((resp) => resp.json())
.then((data) => {
    let detailmenu = data.data;

//Get the results
    return detailmenu.map((detailmenu) => {
        let li = createNode('li'), //Create the elements we need
            img = createNode('img'),
            span = createNode('span');
           
               
        span.innerHTML = `

        
        <div id="subheader">
        <div id="sub_content">
            <div id="thumb"><img src="https://img.wongnai.com/p/1920x0/2017/11/14/0f158a7d373c40bdbc6d6bb8b5268c5c.jpg" alt=""></div>
            <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="detail_page_2.html">Read 98 reviews</a></small>)</div>
            <h1>${detailmenu.name}</h1>
            <div><em>BKK / Thailand</em></div>
            <div><i class="icon_pin"></i> ${detailmenu.address} - <strong>Delivery charge:</strong> $10, free over $15.</div>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
       `;
       
        append(li, img);
        append(li, span);
        append(ul, li);
    })
})
.catch((error) => { console.log(error);
});