$(document).ready(() => {
  let d = document;
  const menuHorizontal = d.getElementById('menuHorizontal');

  $.ajax({
    url: `${base_url}/app/Ajax/CategoryAjax.php`,
    method: 'POST',
    data: {
      accion: 2
    },
    dataType: 'json',
    success: (res) => {
      getCategories(res);
    }
  });

  function getCategories(categories) {
    let content = '';
    menuHorizontal.innerHTML = `<li class="nav__menu-li"><a href="${base_url}/home" class="text-decoration-none text-white">Home</a></li>`;

    categories.forEach(({ slug, type, name }) => {
      content += `<li class="nav__menu-li"><a href="${base_url}/${slug}" class="text-decoration-none text-white">${name}</a></li>`;
    });
    menuHorizontal.innerHTML += content;
  }
})