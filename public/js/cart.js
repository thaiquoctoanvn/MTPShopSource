// ************************************************
// Shopping Cart API
// ************************************************


var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
  cart = [];
  
  // Constructor
  function Item(id, name, price, count, img) {
    this.id = id;
    this.name = name;
    this.price = price;
    this.count = count;
    this.img = img;
  }
  
  // Save cart
  function saveCart() {
    var cartInfo = JSON.stringify(cart);
    var ciphertext = CryptoJS.AES.encrypt(cartInfo, '3cxz');
    console.log(ciphertext);
    sessionStorage.setItem('shoppingCart', ciphertext);
  }
  
    // Load cart
  function loadCart() {
    var cipher = sessionStorage.getItem('shoppingCart');
    var bytes = CryptoJS.AES.decrypt(cipher.toString(), '3cxz');
    var plaintext = bytes.toString(CryptoJS.enc.Utf8);
    console.log(plaintext);
    cart = JSON.parse(plaintext);
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }
  

  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};
  
  // Add to cart
  obj.addItemToCart = function(id, name, price, count, img) {
    for(var item in cart) {
      if(cart[item].id === id) {
        cart[item].count = parseInt(cart[item].count,10) + parseInt(count,10);
        saveCart();
        return;
      }
    }
    var item = new Item(id, name, price, count, img);
    cart.push(item);
    saveCart();
  }
  obj.addItemToCartt = function(id, name, price, count, img) {
    for(var item in cart) {
      if(cart[item].id === id) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(id, name, price, count, img);
    cart.push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(id, count) {
    for(var i in cart) {
      if (cart[i].id === id) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(id) {
      for(var item in cart) {
        if(cart[item].id === id) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(id) {
    for(var item in cart) {
      if(cart[item].id === id) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += parseInt(cart[item].count,10);
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  // cart : Array
  // Item : Object/Class
  // addItemToCart : Function
  // removeItemFromCart : Function
  // removeItemFromCartAll : Function
  // clearCart : Function
  // countCart : Function
  // totalCart : Function
  // listCart : Function
  // saveCart : Function
  // loadCart : Function
  return obj;
})();


// *****************************************
// Triggers / Events
// ***************************************** 
// Add item

$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var button = $(this);
  var id = button.attr('data-id');
  var name = button.attr('data-name');
  var price = Number(button.attr('data-price'));
  var quantity = $(".soluong").val();
  var img = button.attr('data-img');
  shoppingCart.addItemToCart(id, name, price, quantity, img);
  displayCart();
  $('#myAlert').css("display","block");
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
  
});

function currencyFormatDE(num) {
  return (
    num
      .toFixed(2) // always two decimal digits
      .replace('.', ',') // replace decimal point character with ,
      .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ' €'
  ) // use . as a separator
}

function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  
  for(var i in cartArray) {
    
    output += "<tr style='border-bottom:0px; border-top:0px;'>"
      + "<td style='border-bottom:0px; border-top:0px;'>" + cartArray[i].name + "</td>" 
      + "<td style='border-bottom:0px; border-top:0px;'>(" + cartArray[i].price + " VND)</td>"
      + "<td style='border-bottom:0px; border-top:0px;'><button class='minus-item input-group-addon btn btn-primary' data-id='" + cartArray[i].id + "'>-</button></td>"
      + "<td style='border-bottom:0px; border-top:0px;'><input style='width: auto' type='number' class='item-count form-control' data-id='" + cartArray[i].id + "' value='" + cartArray[i].count + "'></td>"
      + "<td style='border-bottom:0px; border-top:0px;'><button class='plus-item btn btn-primary input-group-addon' data-id=" + cartArray[i].id + ">+</button></td>"
      + "<td style='border-bottom:0px; border-top:0px;'><button class='delete-item btn btn-danger' data-id='" + cartArray[i].id + "'>X</button></td>"
      //+ " = " 
      + "<td style='border-bottom:0px; border-top:0px;'>" + cartArray[i].total + "  VND" + "</td>" 
      + "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var button = $(this);
  var id = button.attr('data-id');
  shoppingCart.removeItemFromCartAll(id);
  displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var button = $(this);
  var id = button.attr('data-id');
  shoppingCart.removeItemFromCart(id);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var button = $(this);
  var id = button.attr('data-id');
  shoppingCart.addItemToCartt(id);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
  var button = $(this);
  var id = button.attr('data-id');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(id, count);
  displayCart();
});

displayCart();
