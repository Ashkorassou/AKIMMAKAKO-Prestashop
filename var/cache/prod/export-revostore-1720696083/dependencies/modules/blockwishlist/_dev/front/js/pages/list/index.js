/***
 * 2007-2024 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2024 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

import initVueButtons from '@components/Button';
import removeFromWishlistUrl from 'removeFromWishlistUrl';

const initButtons = () => {
  const products = document.querySelectorAll('.js-product-miniature');

  products.forEach((product) => {
    const wishlistButton = document.createElement('div');

    wishlistButton.classList.add('wishlist-button');
    wishlistButton.dataset.productId = product.dataset.idProduct;
    wishlistButton.dataset.url = removeFromWishlistUrl;
    wishlistButton.dataset.productAttributeId = product.dataset.idProductAttribute;
    wishlistButton.dataset.checked = false;

    product.querySelector('.thumbnail-container').append(wishlistButton);
  });
};

initButtons();
initVueButtons();

const productList = document.querySelectorAll('#products, .featured-products');
const config = {attributes: false, childList: true};

productList.forEach((e) => {
  const callback = function () {
    initButtons();
    initVueButtons();
  };

  const observer = new MutationObserver(callback);

  observer.observe(e, config);
});
