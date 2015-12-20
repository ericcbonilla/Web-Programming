
var menuitems = [
			{itemname:"hamburger",price:3.00},
			{itemname:"hotdog",price:2.00},
			{itemname:"fudgecookie",price:3.00},
			{itemname:"frenchfries",price:1.00},
			{itemname:"cola",price:1.50},
			{itemname:"water",price:0.20}

			];
function getItemPrice(item)
{
	for (var i = 0; i < menuitems.length; ++i){
		if (menuitems[i].itemname == item) {// item found
				return menuitems[i].price;
		}		
	}
	return 0;
}
function updateOrder() {
 var orderString="";
 var n = document.getElementById("entries").length;
 var total = 0;

 for(i=0;i<n;++i) {
  if(document.getElementById("entries").options[i].selected) {
	var selectedItem = document.getElementById("entries").options[i].value;
	var price = getItemPrice(selectedItem);
	total += price;		//Add on each item to the total amount
	orderString += selectedItem+" Price: $"+price+"\n";
  }
 }
 var orderheading = "Your order is:\n";
 document.getElementById("summary").value=orderheading + orderString +"\n" + "Total: $" + total;
 
}
function processOrder()
{
	alert ("Your order will be ready in 5 min");
 
}
function registerEvents()
{
	var optionList = document.getElementById("entries");
	optionList.onchange = updateOrder;
	var orderBtn = document.getElementById("order");
	orderBtn.onclick = processOrder;
}

