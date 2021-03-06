<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
                  
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="js/uikit.min.js"></script>
        <script type="text/javascript">


var detailsWindow;
var CartWindow;
var stockItems = new Array();
stockItems[0] = new StockItem("Manchester United Jersey, HOME ", "$99.99");
stockItems[1] = new StockItem("Manchester United Jersey, AWAY ", "$89.99");
stockItems[2] = new StockItem("Manchester United Jersey, ALTERNATE ", "$89.99");
stockItems[3] = new StockItem("Real Madrid Jersey, HOME ", "$89.99");
stockItems[4] = new StockItem("Real Madrid Jersey, AWAY ", "$89.99");
stockItems[5] = new StockItem("Real Madrid Jersey, ALTERNATE ", "$89.99");
stockItems[6] = new StockItem("Real Madrid Jersey, GOALKEEPER ", "$89.99");
stockItems[7] = new StockItem("Borussia Dortmund, HOME ", "$89.99");
stockItems[8] = new StockItem("Manchester United Jersey, GOALKEEPER ", "$199.99");

function removeItem(stockId)
{
stockItems[stockId].quantity = 0;
alert("Item Removed From Cart");
showCart();
return false;
}
function addJerseyToCart(stockId)
{
 stockItems[stockId].quantity=1;

Alert.render("Item added successfully"+stockItems[stockId].quantity);
var modalnum = (stockId+1);
var modal = document.getElementById('modal-'+modalnum);
modal.style.display="none";
return false;
}

function showCart()
{
CartWindow = this.window.open('about:blank', 'shoppingcart',
'width=400,height=350');
CartWindow.document.open();
var CartItem;
var containsItems = false;
CartWindow.document.write("<h4>Your shopping Cart contains :</h4>");
for (var i = 0; i < stockItems.length; i++)
{

var stockItem = stockItems[i];
if (stockItem.quantity > 0)
{

CartWindow.document.write(stockItem.title + " at ");
CartWindow.document.write(stockItem.price + " ");
CartWindow.document.write(stockItem.quantity);
CartWindow.document.write("&nbsp&nbsp&nbsp&nbsp");
CartWindow.document.write("<a href='' onclick='return "
+ "window.opener.removeItem(" + i + ")'>");
CartWindow.document.write("Remove Item</a><br />");
containsItems = true;
}
}
if (!containsItems)
{
CartWindow.document.write("<h4>No items</h4>");
}
CartWindow.document.close();
CartWindow.focus();
return false;
}
function StockItem(title, price)
{
this.title = title;
this.price = price;
this.quantity = 0;
}
function CustomAlert()
{ 
this.render = function(dialog)
{ 
var winW = window.innerWidth;
var winH = window.innerHeight;
var dialogoverlay = document.getElementById('dialogoverlay'); 
var dialogbox = document.getElementById('dialogbox'); 
dialogoverlay.style.display = "block"; 
dialogoverlay.style.height = winH+"px"; 
dialogbox.style.left = (winW/2) - (550 * .5)+"px"; 
dialogbox.style.top = "100px"; 
dialogbox.style.display = "block";
document.getElementById('dialogboxhead').innerHTML = "Acknowledge This Message";
document.getElementById('dialogboxbody').innerHTML = dialog;
document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
   } 
   this.ok = function()
   { 
   document.getElementById('dialogbox').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
     }
      } 
      var Alert = new CustomAlert();

</script>
        
        
        <style>
            body{
                   padding:20px 20px 20px 20px;
                   
            }
            
        
        </style>
</head>

<body>
    <div id='cssmenu'>
    <ul>
      <li id="tooltip1"><a href='trial 2.html'>Home<span>Home Sweet Home!</span></a></li>
      <li class='active' id="tooltip1"><a href='#'>Products<span>View All Our Expansive Merchandise</span></a></li>
      <li id="tooltip1"><a href='Aboutus.html'>About Us<span>Learn More About Us</span></a></li>
      <li id="tooltip1"><a href='contactus.html'>Contact Us<span>Feel Free To Get In Touch</span></a></li>
      <li id="tooltip2" style="float:right;"><a href='#'>Login<span>For Our Existing Users</span></a></li>
      <li id="tooltip1" style="float:right;"><a href='#'>Registration<span>For All Our First-Time Users</span></a></li>
      <li id="tooltip1" ><a href=''><img class="cart" src="Items/cart.png" alt="shopping cart" onclick="showCart()"><span>All Your Selected Products Ready For Purchase!</span></a>
    </ul>
</div>
      <div id="dialogoverlay"></div>
       <div id="dialogbox">
        <div>
         <div id="dialogboxhead"></div>
          <div id="dialogboxbody"></div>
           <div id="dialogboxfoot"></div> 
         </div> 
       </div>
       
        <div class="totaldiv">
             <ul id="nav" class="uldesign">
	      <li><a href="home"></a></li>
	      <li><a href="register">Registration</a></li>
		  <li><a href="login">Login</a></li>
             </ul>
	          <div id="content"></div>
        
         
           </div>
           <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
           <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	       <script src="js/general.js"></script>
</body>

</html>