<!--**
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
 *-->
<template>
  <div class="wishlist-list-container">
    <ul
      class="wishlist-list"
      v-if="items.length > 0 && items"
      v-click-outside="emptyPopups"
    >
      <li
        class="wishlist-list-item"
        :key="list.id_wishlist"
        v-for="list of items"
        :class="{ 'wishlist-list-item-default': list.default }"
      >
        <a
          class="wishlist-list-item-link"
          @click="redirectToList(list.listUrl)"
        >
          <p class="wishlist-list-item-title">
            {{ list.name }}
            <span v-if="list.nbProducts">({{ list.nbProducts }})</span>
            <span v-else>(0)</span>
          </p>

          <div class="wishlist-list-item-right">
            <button
              class="wishlist-list-item-actions"
              @click.stop="togglePopup(list.id_wishlist)"
              v-if="!list.default"
            >
              <i class="material-icons">more_vert</i>
            </button>

            <button
              @click.stop="toggleShare(list.id_wishlist, list.shareUrl)"
              v-if="list.default"
            >
              <i class="material-icons">share</i>
            </button>

            <div
              class="dropdown-menu show"
              v-if="activeDropdowns.includes(list.id_wishlist)"
            >
              <button @click.stop="toggleRename(list.id_wishlist, list.name)">
                {{ renameText }}
              </button>
              <button
                @click.stop="toggleShare(list.id_wishlist, list.shareUrl)"
              >
                {{ shareText }}
              </button>
            </div>

            <button
              @click.stop="toggleDelete(list.id_wishlist, list.name)"
              v-if="!list.default"
            >
              <i class="material-icons">delete</i>
            </button>
          </div>
        </a>
      </li>
    </ul>

    <ContentLoader
      v-if="loading"
      class="wishlist-list-loader"
      height="105"
    >
      <rect
        x="0"
        y="12"
        rx="3"
        ry="0"
        width="100%"
        height="11"
      />
      <rect
        x="0"
        y="36"
        rx="3"
        ry="0"
        width="100%"
        height="11"
      />
      <rect
        x="0"
        y="60"
        rx="3"
        ry="0"
        width="100%"
        height="11"
      />
      <rect
        x="0"
        y="84"
        rx="3"
        ry="0"
        width="100%"
        height="11"
      />
    </ContentLoader>
    <p
      class="wishlist-list-empty"
      v-if="items.length <= 0 && !loading"
    >
      {{ emptyText }}
    </p>
  </div>
</template>

<script>
  import {ContentLoader} from 'vue-content-loader';
  import EventBus from '@components/EventBus';
  import wishlistUrl from 'wishlistUrl';
  import vClickOutside from 'v-click-outside';

  /***
   * Dumb component to display the list of Wishlist on a page
   */
  export default {
    name: 'List',
    components: {
      ContentLoader,
    },
    data() {
      return {
        activeDropdowns: [],
        listUrl: wishlistUrl,
      };
    },
    props: {
      items: {
        type: Array,
        default: () => [],
      },
      renameText: {
        type: String,
        default: 'Rename',
      },
      emptyText: {
        type: String,
        default: '',
      },
      shareText: {
        type: String,
        default: 'Share',
      },
      loading: {
        type: Boolean,
        default: true,
      },
    },
    methods: {
      /***
       * Toggle a dropdown with some actions
       *
       * @param {Int} id The ID of the list which contain this dropdown
       */
      togglePopup(id) {
        if (this.activeDropdowns.includes(id)) {
          this.activeDropdowns = this.activeDropdowns.filter((e) => e !== id);
        } else {
          this.activeDropdowns = [];
          this.activeDropdowns.push(id);
        }
      },
      emptyPopups() {
        this.activeDropdowns = [];
      },
      /***
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleRename(id, title) {
        EventBus.$emit('showRenameWishlist', {
          detail: {listId: id, title},
        });
      },
      /***
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleShare(id, shareUrl) {
        EventBus.$emit('showShareWishlist', {
          detail: {listId: id, shareUrl},
        });
      },
      /***
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleDelete(id) {
        EventBus.$emit('showDeleteWishlist', {
          detail: {listId: id, userId: 1},
        });
      },
      /***
       * Redirect to the list URI
       *
       * @param {String} listUrl The list url
       */
      redirectToList(listUrl) {
        window.location.href = listUrl;
      },
    },
    directives: {
      clickOutside: vClickOutside.directive,
    },
  };
</script>

<style lang="scss" type="text/scss">
  @import '@scss/_variables';

  .wishlist {
    &-list {
      margin-bottom: 0;

      &-empty {
        font-size: 30;
        text-align: center;
        padding: 30px;
        padding-bottom: 20px;
        font-weight: bold;
        color: #000;
      }

      &-loader {
        padding: 0 20px;
        width: 100%;
      }

      &-item {
        &-default {
          border-bottom: 1px solid #0000002e;
        }

        &:hover {
          cursor: pointer;

          .wishlist-list-item-title {
            color: $blue;
          }
        }

        &-link {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 24px 20px;
        }

        .dropdown-menu {
          right: 20px;
          left: inherit;
          display: flex;
          flex-direction: column;
        }

        &-right {
          position: relative;

          > button {
            transition: 0.25s ease-out;

            &:hover {
              opacity: 0.6;
            }

            i {
              color: #7a7a7a;
            }
          }

          .dropdown-menu {
            box-sizing: border-box;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            background-color: #ffffff;
            box-shadow: 2px 2px 10px 0 rgba(0, 0, 0, 0.2);
            padding: 0;
            overflow: hidden;

            > button {
              padding: 10px 20px;
              transition: 0.2s ease-out;
              text-align: left;

              &:hover {
                background-color: #f1f1f1;
              }
            }
          }
        }

        &-title {
          color: #232323;
          font-size: 16px;
          font-weight: bold;
          letter-spacing: 0;
          line-height: 22px;
          margin-bottom: 0;

          span {
            color: #7a7a7a;
            font-size: 16px;
            letter-spacing: 0;
            line-height: 22px;
            font-weight: normal;
            margin-left: 5px;
          }
        }

        button {
          cursor: pointer;
          border: none;
          background: none;

          &:focus {
            outline: 0;
          }
        }
      }
    }
  }
</style>
