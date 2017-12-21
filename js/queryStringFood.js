function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
}
       
var price = getParameterByName('price');
var image = getParameterByName('image');
var title = getParameterByName('title');
var description = getParameterByName('description');
var carbohydrate = getParameterByName('carb');
var calories = getParameterByName('cal');
var protein = getParameterByName('pro');
var ingredient1 = getParameterByName('ing1');
var ingredient2 = getParameterByName('ing2');
var ingredient3 = getParameterByName('ing3');



document.getElementById("tableh1").innerHTML = title;
document.getElementById('row19data1').innerHTML = description;
document.getElementById("row1data1").innerHTML = price;
document.getElementById('img').src = image;
document.getElementById("row12data4").innerHTML = carbohydrate;
document.getElementById('row13data4').innerHTML = calories;
document.getElementById("row14data4").innerHTML = protein;
document.getElementById("ing1").innerHTML = ingredient1;
document.getElementById('ing2').innerHTML = ingredient2;
document.getElementById("ing3").innerHTML = ingredient3;


var value = $('input[name=size]:checked').val();
if(value=='Medium')
{
	document.getElementById("row17data1").innerHTML = "4 people";
}


var value;
if (document.getElementById('r1').checked) {
  value = document.getElementById('r1').value;
}else if (document.getElementById('r2').checked) {
  value = document.getElementById('r2').value;
}else if (document.getElementById('r3').checked) {
  value = document.getElementById('r3').value;
}



if(value=='Medium')
{
	document.getElementById("row17data1").innerHTML = "4 people";
}





// if (document.getElementById('r1').checked) {
//   document.getElementById("serves").innerHTML =  2 people;
// }
// if (document.getElementById('r2').checked) {
//   document.getElementById("serves").innerHTML =  4 people;
// }
// if (document.getElementById('r3').checked) {
//   document.getElementById("serves").innerHTML =  8 people;
// }


function createQuery(){
	var price = document.getElementById('row1data1').innerHTML;
	var title = document.getElementById('tableh1').innerHTML;
	var quantity = document.getElementById('quantity').value;

	window.location.href = 'shoppingcart.html' + '?price=' +price+ '&title='+title+ '&quantity='+quantity;

	// var price = getParameterByName('price');
	// var title = getParameterByName('title');
	// var quantity = getParameterByName('quantity');
	// alert(title);

	//setTimeout(printShopping, 3000);
	

}

// function printShopping(){
// 	document.getElementById('item').innerHTML = title;
// 	document.getElementById("price").innerHTML = price;
// }