$(document).ready(() => {
  const d = document;
  const containerDefault = d.getElementById('productContainer');
  const routes = d.querySelectorAll('.category-link a');

  if(containerDefault) {
    callAjax('app/Ajax/ProductAjax.php', 'POST', { accion: 1 }, getProducts);
  }

  function callAjax(url, method, data, fn) {
    $.ajax({
      url:`${base_url}/${url}`,
      method,
      data,
      dataType: 'json',
      success: (res) => {
        fn(res);
      }
    })
  }
  function getProducts(products) {
    containerDefault.innerHTML = '';

    products.forEach((product) => {
      let product_main,
        product_picture,
        product_tag,
        product_img,
        product_title,
        product_price,
        product_button,
        product_wish;

      product_main = d.createElement('div');
      product_main.className = 'main__product col-12 col-md-3';

      product_picture = d.createElement('picture');
      product_picture.className = 'main__product-picture';

      product_tag = d.createElement('div');
      product_tag.className = 'main__product-tag main__product-tag--new';
      product_tag.innerHTML = '<span>Nuevo</span>';
      product_picture.appendChild(product_tag);

      product_img = d.createElement('img');
      product_img.className = 'main__product-picture-img';
      product_img.src = product.image;
      product_img.alt = product.name;
      product_picture.appendChild(product_img);

      product_title = d.createElement('h6');
      product_title.className = 'main__product-picture-title';
      product_title.textContent = product.name;
      product_picture.appendChild(product_title);

      product_price = d.createElement('span');
      product_price.className = 'main__product-picture-price';
      product_price.textContent = `S/ ${product.price}`;
      product_picture.appendChild(product_price);

      product_button = d.createElement('div');
      product_button.className = 'main__product-cart';
      product_button.innerHTML = '<button class="main__product-cart-button">Añadir al carrito</button>';
      product_button.setAttribute('data_id', product.id)

      product_wish = d.createElement('div');
      product_wish.innerHTML = '<i class="nav__menu-icons-i icon-heart"></i>';
      product_button.appendChild(product_wish);

      product_picture.appendChild(product_button);
      product_main.appendChild(product_picture);
      containerDefault.appendChild(product_main);
    })
  }
})

