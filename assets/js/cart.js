document.addEventListener('DOMContentLoaded', loadCart);

function loadCart() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const cartItemsContainer = document.getElementById('cartItems');
  const totalPriceElement = document.getElementById('totalPrice');
  let totalPrice = 0;

  cartItemsContainer.innerHTML = '';
  cart.forEach((product, index) => {
    const productElement = document.createElement('div');
    productElement.className = 'cart-item';
    productElement.innerHTML = `
      <p>${product.name} - $${product.price.toFixed(2)}</p>
      <button onclick="removeFromCart(${index})">Remove</button>
    `;
    cartItemsContainer.appendChild(productElement);
    totalPrice += product.price;
  });

  totalPriceElement.textContent = `Total Price: $${totalPrice.toFixed(2)}`;
}

function removeFromCart(index) {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.splice(index, 1);
  localStorage.setItem('cart', JSON.stringify(cart));
  loadCart();
}

function clearCart() {
  localStorage.removeItem('cart');
  loadCart();
}