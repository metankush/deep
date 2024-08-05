<!DOCTYPE html>
<html class="no-js" lang="zxx">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="#" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Site Title -->
    <title>Add Slider</title>

    <!-- Fav Icon -->
    <link rel="icon" href="img/favicon.png" />

    <!--  Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/slick.min.css" />
    <link rel="stylesheet" href="css/font-awesome-all.min.css" />
    <link rel="stylesheet" href="css/charts.min.css" />
    <link rel="stylesheet" href="css/datatables.min.css" />
    <link rel="stylesheet" href="css/fancy-box.min.css" />
    <link rel="stylesheet" href="css/nice-select.min.css" />
    <link rel="stylesheet" href="css/pikaday.min.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body id="crancy-dark-light">
    <div class="crancy-body-area">
      <!-- crancy Admin Menu -->
      <div class="crancy-smenu" id="CrancyMenu">
        <!-- Admin Menu -->
          <?php include('leftsidebaar.php'); ?>
        <!-- End Admin Menu -->
      </div>
      <!-- End crancy Admin Menu -->

      <!-- Start Header -->
      <header class="crancy-header">
        <div class="container g-0">
          <div class="row g-0">
            <div class="col-12">
              <!-- Dashboard Header -->
              <div class="crancy-header__inner">
                <div class="crancy-header__middle">
                  <div
                    id="crancy__sicon"
                    class="crancy__sicon close-icon d-none"
                  >
                    <img src="img/arrow-icon.svg" />
                  </div>
                  <div class="crancy-header__heading">
                    <h3 class="crancy-header__title m-0">Add Product</h3>
                    <p class="crancy-header__text">
                      Let’s check your store today
                    </p>
                  </div>

                  <div class="crancy-header__left">
                    <div class="crancy-header__nav-bottom">
                      <!-- Logo -->
                      <div class="logo crancy-sidebar-padding">
                        <a class="crancy-logo" href="index.html">
                          <!-- Logo for Default -->
                          <img
                            class="crancy-logo__main"
                            src="img/logo.png"
                            alt="#"
                          />
                          <img
                            class="crancy-logo__main--dark"
                            src="img/logo-dark.html"
                            alt="#"
                          />
                          <!-- Logo for Dark Version -->
                          <img
                            class="crancy-logo__main--small"
                            src="img/logo-icon.png"
                            alt="#"
                          />
                          <img
                            class="crancy-logo__main--small--dark"
                            src="img/logo-icon-dark.html"
                            alt="#"
                          />
                        </a>
                      </div>
                    </div>
                    <!--  End Logo -->
                    <!-- Search Form -->
                    <div class="crancy-header__form">
                      <form class="crancy-header__form-inner" action="#">
                        <button class="search-btn" type="submit">
                          <svg
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <circle
                              cx="9.78639"
                              cy="9.78614"
                              r="8.23951"
                              stroke="#9AA2B1"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              d="M15.5176 15.9448L18.7479 19.1668"
                              stroke="#9AA2B1"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <input
                          name="s"
                          value=""
                          type="text"
                          placeholder="Search Dashboard"
                        />
                        <a href="#" class="crancy-header__command">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="18"
                            height="18"
                            viewBox="0 0 18 18"
                            fill="none"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M3.32501 14.5H1C0.585786 14.5 0.25 14.1642 0.25 13.75C0.25 13.3358 0.585786 13 1 13H3.32501C3.67247 11.2883 5.18578 10 7 10C8.81422 10 10.3275 11.2883 10.675 13H17C17.4142 13 17.75 13.3358 17.75 13.75C17.75 14.1642 17.4142 14.5 17 14.5H10.675C10.3275 16.2117 8.81422 17.5 7 17.5C5.18578 17.5 3.67247 16.2117 3.32501 14.5ZM4.75 13.75C4.75 12.5074 5.75736 11.5 7 11.5C8.24264 11.5 9.25 12.5074 9.25 13.75C9.25 14.9926 8.24264 16 7 16C5.75736 16 4.75 14.9926 4.75 13.75Z"
                              fill="#5D6A83"
                            />
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M7.32501 4.5H1C0.585786 4.5 0.25 4.16421 0.25 3.75C0.25 3.33579 0.585786 3 1 3H7.32501C7.67247 1.28832 9.18578 0 11 0C12.8142 0 14.3275 1.28832 14.675 3H17C17.4142 3 17.75 3.33579 17.75 3.75C17.75 4.16421 17.4142 4.5 17 4.5H14.675C14.3275 6.21168 12.8142 7.5 11 7.5C9.18578 7.5 7.67247 6.21168 7.32501 4.5ZM8.75 3.75C8.75 2.50736 9.75736 1.5 11 1.5C12.2426 1.5 13.25 2.50736 13.25 3.75C13.25 4.99264 12.2426 6 11 6C9.75736 6 8.75 4.99264 8.75 3.75Z"
                              fill="#5D6A83"
                            />
                          </svg>
                        </a>
                      </form>
                    </div>
                    <!-- End Search Form -->
                  </div>

                  <div class="crancy-header__right">
                    <div class="crancy-header__group">
                      <div class="crancy-header__group-two">
                        <div class="crancy-header__right">
                          <!-- Header Single -->
                          <div class="crancy-header__single">
                            <!-- Crancy Language -->
                            <a class="crancy-language_main">
                              <img src="img/flag-selected.png" />
                            </a>
                            <!-- Dropdown List -->
                            <div class="crancy-dropdown crancy-language">
                              <div class="crancy-dropdown__heading">
                                <div class="crancy-dropdown__close">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="35"
                                    height="35"
                                    viewBox="0 0 35 35"
                                    fill="none"
                                  >
                                    <path
                                      d="M17.5 16.086L21.0355 12.5505C21.4261 12.1599 22.0592 12.1599 22.4497 12.5505C22.8403 12.941 22.8403 13.5741 22.4497 13.9647L18.9142 17.5002L22.4497 21.0357C22.8403 21.4263 22.8403 22.0594 22.4497 22.45C22.0592 22.8405 21.4261 22.8405 21.0355 22.45L17.5 18.9144L13.9645 22.45C13.5739 22.8405 12.9408 22.8405 12.5503 22.45C12.1597 22.0594 12.1597 21.4263 12.5503 21.0357L16.0858 17.5002L12.5503 13.9647C12.1597 13.5741 12.1597 12.941 12.5503 12.5505C12.9408 12.1599 13.5739 12.1599 13.9645 12.5505L17.5 16.086Z"
                                    />
                                  </svg>
                                </div>
                                <h3 class="crancy-dropdown__title">
                                  Select Language
                                </h3>
                                <a href="#" class="crancy-dropdown__toggle"
                                  ><img src="img/toggle-icons.svg"
                                /></a>
                              </div>
                              <div class="crancy-dropdown__hover--inner">
                                <ul class="crancy-dlanguage">
                                  <a class="active" href="#">
                                    <span class="crancy-dlanguage__icon"
                                      ><img src="img/language-check-icon.svg"
                                    /></span>
                                    <img
                                      class="crancy-dlanguage__img"
                                      src="img/flag-1.png"
                                    />
                                    <h4 class="crancy-dlanguage__title">
                                      English
                                    </h4>
                                  </a>
                                  <a href="#">
                                    <span class="crancy-dlanguage__icon"
                                      ><img src="img/language-check-icon.svg"
                                    /></span>
                                    <img
                                      class="crancy-dlanguage__img"
                                      src="img/flag-2.png"
                                    />
                                    <h4 class="crancy-dlanguage__title">
                                      German
                                    </h4>
                                  </a>
                                  <a href="#">
                                    <span class="crancy-dlanguage__icon"
                                      ><img src="img/language-check-icon.svg"
                                    /></span>
                                    <img
                                      class="crancy-dlanguage__img"
                                      src="img/flag-3.png"
                                    />
                                    <h4 class="crancy-dlanguage__title">
                                      French
                                    </h4>
                                  </a>
                                  <a href="#">
                                    <span class="crancy-dlanguage__icon"
                                      ><img src="img/language-check-icon.svg"
                                    /></span>
                                    <img
                                      class="crancy-dlanguage__img"
                                      src="img/flag-4.png"
                                    />
                                    <h4 class="crancy-dlanguage__title">
                                      Chinese
                                    </h4>
                                  </a>
                                  <a href="#">
                                    <span class="crancy-dlanguage__icon"
                                      ><img src="img/language-check-icon.svg"
                                    /></span>
                                    <img
                                      class="crancy-dlanguage__img"
                                      src="img/flag-5.png"
                                    />
                                    <h4 class="crancy-dlanguage__title">
                                      Swedish
                                    </h4>
                                  </a>
                                  <a href="#">
                                    <span class="crancy-dlanguage__icon"
                                      ><img src="img/language-check-icon.svg"
                                    /></span>
                                    <img
                                      class="crancy-dlanguage__img"
                                      src="img/flag-6.png"
                                    />
                                    <h4 class="crancy-dlanguage__title">
                                      Spanish
                                    </h4>
                                  </a>
                                </ul>
                              </div>
                            </div>
                            <!-- End Dropdown List -->
                          </div>
                          <!-- End Header Single -->

                          <!-- Header Option Group -->
                          <div class="crancy-header__options">
                            <!-- Header Message -->
                            <div
                              class="crancy-header__single crancy-header__single--messages"
                            >
                              <a class="crancy-header__blink" href="inbox.html">
                                <svg
                                  class="crancy-header__svg--icon"
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <path
                                    d="M20.7848 17.875C20.7228 17.687 20.6779 17.404 20.8029 17.131C21.2589 16.152 21.4999 15.069 21.4999 14C21.4999 11.005 19.6648 8.27499 16.9208 7.11499C15.7878 4.40799 13.1129 2.50098 10.0009 2.50098C5.86588 2.50098 2.50186 5.865 2.50186 10C2.50186 11.077 2.74095 12.161 3.19595 13.139C3.29495 13.347 3.30188 13.609 3.21988 13.869L2.56583 15.814C2.41283 16.275 2.53184 16.777 2.87784 17.123C3.12384 17.369 3.44791 17.5 3.78091 17.5C3.91691 17.5 4.05292 17.478 4.18692 17.434L6.12491 16.783C6.39391 16.698 6.65488 16.706 6.86588 16.807C6.94088 16.842 7.02081 16.867 7.09781 16.9C8.25681 19.657 10.9959 21.501 13.9999 21.501C15.0699 21.501 16.1518 21.26 17.1278 20.806C17.4028 20.68 17.688 20.725 17.871 20.785L19.8139 21.436C20.2759 21.589 20.779 21.467 21.123 21.123C21.467 20.779 21.587 20.277 21.434 19.812L20.7848 17.875ZM5.8129 15.832L3.87003 16.485C3.72703 16.533 3.62287 16.453 3.58487 16.415C3.54787 16.378 3.4668 16.276 3.5148 16.131L4.17081 14.179C4.33281 13.669 4.30798 13.146 4.10098 12.712C3.70898 11.869 3.50186 10.931 3.50186 9.99902C3.50186 6.41602 6.41688 3.5 10.0009 3.5C13.5849 3.5 16.4999 6.41602 16.4999 9.99902C16.4999 13.582 13.5849 16.498 10.0009 16.498C9.06788 16.498 8.1309 16.291 7.2919 15.901C6.8539 15.693 6.3309 15.665 5.8129 15.832ZM19.8358 18.189L20.485 20.126C20.534 20.275 20.4519 20.378 20.4149 20.415C20.3779 20.452 20.2718 20.533 20.1288 20.486L18.185 19.835C17.674 19.669 17.1639 19.69 16.7089 19.897C15.8619 20.292 14.9249 20.5 13.9999 20.5C11.7039 20.5 9.58591 19.258 8.42691 17.327C8.94391 17.439 9.47289 17.498 10.0009 17.498C14.1359 17.498 17.4999 14.134 17.4999 9.99902C17.4999 9.46202 17.4409 8.94 17.3329 8.435C19.2599 9.592 20.4999 11.707 20.4999 14C20.4999 14.925 20.2909 15.862 19.8949 16.712C19.6879 17.163 19.6678 17.672 19.8358 18.189ZM6.49991 8.5C6.49991 8.224 6.72391 8 6.99991 8H12.9999C13.2759 8 13.4999 8.224 13.4999 8.5C13.4999 8.776 13.2759 9 12.9999 9H6.99991C6.72391 9 6.49991 8.776 6.49991 8.5ZM9.99991 12H6.99991C6.72391 12 6.49991 11.776 6.49991 11.5C6.49991 11.224 6.72391 11 6.99991 11H9.99991C10.2759 11 10.4999 11.224 10.4999 11.5C10.4999 11.776 10.2759 12 9.99991 12Z"
                                  />
                                </svg>
                              </a>
                              <!-- Dropdown List -->
                              <div
                                class="crancy-dropdown crancy-dropdown__messages"
                              >
                                <div class="crancy-dropdown__heading">
                                  <div class="crancy-dropdown__close">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="35"
                                      height="35"
                                      viewBox="0 0 35 35"
                                      fill="none"
                                    >
                                      <path
                                        d="M17.5 16.086L21.0355 12.5505C21.4261 12.1599 22.0592 12.1599 22.4497 12.5505C22.8403 12.941 22.8403 13.5741 22.4497 13.9647L18.9142 17.5002L22.4497 21.0357C22.8403 21.4263 22.8403 22.0594 22.4497 22.45C22.0592 22.8405 21.4261 22.8405 21.0355 22.45L17.5 18.9144L13.9645 22.45C13.5739 22.8405 12.9408 22.8405 12.5503 22.45C12.1597 22.0594 12.1597 21.4263 12.5503 21.0357L16.0858 17.5002L12.5503 13.9647C12.1597 13.5741 12.1597 12.941 12.5503 12.5505C12.9408 12.1599 13.5739 12.1599 13.9645 12.5505L17.5 16.086Z"
                                      />
                                    </svg>
                                  </div>
                                  <h3 class="crancy-dropdown__title">
                                    Messages
                                  </h3>
                                  <a href="#" class="crancy-dropdown__toggle"
                                    ><img src="img/toggle-icons.svg"
                                  /></a>
                                </div>
                                <ul
                                  class="crancy-balance_list crancy-header-messages"
                                >
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img
                                          src="img/chat-author1.png"
                                          alt="#"
                                        />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title"
                                            >
                                              <a href="inbox.html"
                                                >Devon Lane</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              In most states, the ....
                                            </p>
                                          </div>
                                          <a class="crancy-header-messages__btn"
                                            >Send</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img
                                          src="img/chat-author2.png"
                                          alt="#"
                                        />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title"
                                            >
                                              <a href="inbox.html"
                                                >Jerome Bell</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              Twenty 30-sec ...
                                            </p>
                                          </div>
                                          <a class="crancy-header-messages__btn"
                                            >Send</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img
                                          src="img/chat-author3.png"
                                          alt="#"
                                        />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title"
                                            >
                                              <a href="inbox.html"
                                                >Devon Lane</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              In most states, the ....
                                            </p>
                                          </div>
                                          <a
                                            class="crancy-header-messages__btn crancy-header-messages__btn--warning"
                                            >Warning</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img
                                          src="img/chat-author4.png"
                                          alt="#"
                                        />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title"
                                            >
                                              <a href="inbox.html"
                                                >Brooklyn Simmons</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              Alcohol based ...
                                            </p>
                                          </div>
                                          <a class="crancy-header-messages__btn"
                                            >Send</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                </ul>
                                <div class="crancy-dropdown__button">
                                  <a href="#" class="crancy-dropdown__view"
                                    >View All <i class="fa fa-arrow-right"></i
                                  ></a>
                                </div>
                              </div>
                              <!-- End Dropdown List -->
                            </div>
                            <!-- End Header Message -->

                            <!-- Header Notifications -->
                            <div class="crancy-header__single">
                              <a
                                class="crancy-header__blink"
                                href="notifications.html"
                              >
                                <svg
                                  class="crancy-header__svg--icon"
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <path
                                    d="M19.9718 5.81691L19.2802 6.10701H19.2802L19.9718 5.81691ZM19.357 6.29011C19.5172 6.67208 19.9568 6.85184 20.3388 6.69162C20.7207 6.5314 20.9005 6.09187 20.7403 5.70989L19.357 6.29011ZM16.7785 1.80364C16.394 1.64981 15.9575 1.83687 15.8036 2.22146C15.6498 2.60604 15.8369 3.04252 16.2215 3.19636L16.7785 1.80364ZM16.6672 2.56689L16.3887 3.26325L16.6672 2.56689ZM4.0768 5.81691L4.76842 6.10701L4.0768 5.81691ZM3.30838 5.70989C3.14816 6.09187 3.32792 6.5314 3.70989 6.69162C4.09187 6.85184 4.5314 6.67208 4.69162 6.29011L3.30838 5.70989ZM7.82719 3.19636C8.21178 3.04252 8.39884 2.60604 8.245 2.22146C8.09117 1.83687 7.65469 1.64981 7.2701 1.80364L7.82719 3.19636ZM7.38142 2.56689L7.10288 1.87053L7.10288 1.87053L7.38142 2.56689ZM18.2395 8.97519L17.4943 9.05977L18.2395 8.97519ZM18.6867 12.9153L19.4319 12.8307V12.8307L18.6867 12.9153ZM5.31328 12.9153L4.56806 12.8307L4.56806 12.8307L5.31328 12.9153ZM5.76046 8.97519L6.50568 9.05977L5.76046 8.97519ZM4.44779 14.8721L3.87668 14.386H3.87668L4.44779 14.8721ZM19.5522 14.8721L18.9811 15.3583L19.5522 14.8721ZM14.2699 4.37366H13.5199C13.5199 4.69424 13.7237 4.97938 14.027 5.08322L14.2699 4.37366ZM9.73005 4.37366L9.973 5.08322C10.2763 4.97938 10.4801 4.69424 10.4801 4.37366H9.73005ZM15.7023 20.2632C15.8477 19.8753 15.6511 19.4431 15.2632 19.2977C14.8753 19.1523 14.4431 19.3489 14.2977 19.7368L15.7023 20.2632ZM9.7023 19.7368C9.55694 19.3489 9.12467 19.1523 8.7368 19.2977C8.34893 19.4431 8.15234 19.8753 8.2977 20.2632L9.7023 19.7368ZM19.2802 6.10701L19.357 6.29011L20.7403 5.70989L20.6635 5.5268L19.2802 6.10701ZM16.2215 3.19636L16.3887 3.26325L16.9458 1.87053L16.7785 1.80364L16.2215 3.19636ZM20.6635 5.5268C19.964 3.85927 18.6247 2.54211 16.9458 1.87053L16.3887 3.26325C17.6945 3.78559 18.7362 4.81004 19.2802 6.10701L20.6635 5.5268ZM3.38518 5.5268L3.30838 5.70989L4.69162 6.29011L4.76842 6.10701L3.38518 5.5268ZM7.2701 1.80364L7.10288 1.87053L7.65996 3.26325L7.82719 3.19636L7.2701 1.80364ZM4.76842 6.10701C5.31244 4.81004 6.35411 3.78559 7.65996 3.26325L7.10288 1.87053C5.42393 2.54211 4.08464 3.85927 3.38518 5.5268L4.76842 6.10701ZM17.7772 17.25H6.22281V18.75H17.7772V17.25ZM17.4943 9.05977L17.9415 12.9998L19.4319 12.8307L18.9848 8.89061L17.4943 9.05977ZM6.05849 12.9998L6.50568 9.05977L5.01525 8.89061L4.56806 12.8307L6.05849 12.9998ZM5.01889 15.3583C5.59621 14.6801 5.96028 13.8652 6.05849 12.9998L4.56806 12.8307C4.50519 13.3846 4.27067 13.9231 3.87668 14.386L5.01889 15.3583ZM17.9415 12.9998C18.0397 13.8652 18.4038 14.6801 18.9811 15.3583L20.1233 14.386C19.7293 13.9231 19.4948 13.3846 19.4319 12.8307L17.9415 12.9998ZM6.22281 17.25C5.56777 17.25 5.10443 16.926 4.89056 16.5492C4.68409 16.1854 4.68714 15.748 5.01889 15.3583L3.87668 14.386C3.11141 15.285 3.08777 16.4116 3.58598 17.2895C4.07679 18.1544 5.04947 18.75 6.22281 18.75V17.25ZM17.7772 18.75C18.9505 18.75 19.9232 18.1544 20.414 17.2895C20.9122 16.4116 20.8886 15.285 20.1233 14.386L18.9811 15.3583C19.3129 15.748 19.3159 16.1854 19.1094 16.5492C18.8956 16.926 18.4322 17.25 17.7772 17.25V18.75ZM15.0199 4.37366V4.26995H13.5199V4.37366H15.0199ZM18.9848 8.89061C18.7055 6.43026 16.8806 4.47476 14.5129 3.6641L14.027 5.08322C15.9441 5.73962 17.2913 7.27101 17.4943 9.05977L18.9848 8.89061ZM10.4801 4.37366V4.26995H8.98005V4.37366H10.4801ZM6.50568 9.05977C6.7087 7.27101 8.05587 5.73962 9.973 5.08322L9.48711 3.6641C7.11944 4.47476 5.29449 6.43026 5.01525 8.89061L6.50568 9.05977ZM12 2.75C12.8394 2.75 13.5199 3.4305 13.5199 4.26995H15.0199C15.0199 2.60208 13.6679 1.25 12 1.25V2.75ZM12 1.25C10.3321 1.25 8.98005 2.60208 8.98005 4.26995H10.4801C10.4801 3.4305 11.1606 2.75 12 2.75V1.25ZM14.2977 19.7368C13.975 20.5979 13.0846 21.25 12 21.25V22.75C13.6855 22.75 15.1516 21.7325 15.7023 20.2632L14.2977 19.7368ZM12 21.25C10.9154 21.25 10.025 20.5979 9.7023 19.7368L8.2977 20.2632C8.84835 21.7325 10.3145 22.75 12 22.75V21.25Z"
                                  />
                                </svg>
                              </a>
                              <!-- Dropdown List -->
                              <div
                                class="crancy-dropdown crancy-dropdown__messages"
                              >
                                <div class="crancy-dropdown__heading">
                                  <div class="crancy-dropdown__close">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="35"
                                      height="35"
                                      viewBox="0 0 35 35"
                                      fill="none"
                                    >
                                      <path
                                        d="M17.5 16.086L21.0355 12.5505C21.4261 12.1599 22.0592 12.1599 22.4497 12.5505C22.8403 12.941 22.8403 13.5741 22.4497 13.9647L18.9142 17.5002L22.4497 21.0357C22.8403 21.4263 22.8403 22.0594 22.4497 22.45C22.0592 22.8405 21.4261 22.8405 21.0355 22.45L17.5 18.9144L13.9645 22.45C13.5739 22.8405 12.9408 22.8405 12.5503 22.45C12.1597 22.0594 12.1597 21.4263 12.5503 21.0357L16.0858 17.5002L12.5503 13.9647C12.1597 13.5741 12.1597 12.941 12.5503 12.5505C12.9408 12.1599 13.5739 12.1599 13.9645 12.5505L17.5 16.086Z"
                                      />
                                    </svg>
                                  </div>
                                  <h3 class="crancy-dropdown__title">
                                    Notifications
                                  </h3>
                                  <a href="#" class="crancy-dropdown__toggle"
                                    ><img src="img/toggle-icons.svg"
                                  /></a>
                                </div>
                                <ul
                                  class="crancy-balance_list crancy-header-messages"
                                >
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img src="img/notify-1.png" alt="#" />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title crancy-header-messages__title--v2"
                                            >
                                              <a href="inbox.html"
                                                >Withdraw USDT</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              $659.10
                                            </p>
                                          </div>
                                          <a
                                            class="crancy-header-messages__btn crancy-header-messages__btn--completed"
                                            >Completed</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img src="img/notify-2.png" alt="#" />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title crancy-header-messages__title--v2"
                                            >
                                              <a href="inbox.html"
                                                >Withdraw USDT</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              $659.10
                                            </p>
                                          </div>
                                          <a
                                            class="crancy-header-messages__btn crancy-header-messages__btn--completed"
                                            >Completed</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img src="img/notify-3.png" alt="#" />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title crancy-header-messages__title--v2"
                                            >
                                              <a href="inbox.html"
                                                >New Login Activity</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              Ip : 192.168.1.1
                                            </p>
                                          </div>
                                          <a
                                            class="crancy-header-messages__btn crancy-header-messages__btn--warning"
                                            >Warning</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img src="img/notify-1.png" alt="#" />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title crancy-header-messages__title--v2"
                                            >
                                              <a href="inbox.html"
                                                >Withdraw USDT</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              $659.10
                                            </p>
                                          </div>
                                          <a
                                            class="crancy-header-messages__btn crancy-header-messages__btn--completed"
                                            >Completed</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                  <!-- Single Message -->
                                  <li>
                                    <div class="crancy-header-messages__inner">
                                      <div
                                        class="crancy-header-messages__author"
                                      >
                                        <img src="img/notify-2.png" alt="#" />
                                        <div
                                          class="crancy-header-messages__contnt"
                                        >
                                          <div
                                            class="crancy-header-messages__inside"
                                          >
                                            <h4
                                              class="crancy-header-messages__title crancy-header-messages__title--v2"
                                            >
                                              <a href="inbox.html"
                                                >Withdraw USDT</a
                                              >
                                            </h4>
                                            <p
                                              class="crancy-header-messages__desc"
                                            >
                                              $659.10
                                            </p>
                                          </div>
                                          <a
                                            class="crancy-header-messages__btn crancy-header-messages__btn--completed"
                                            >Completed</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- End Single Message -->
                                </ul>
                                <div class="crancy-dropdown__button">
                                  <a href="#" class="crancy-dropdown__view"
                                    >View All <i class="fa fa-arrow-right"></i
                                  ></a>
                                </div>
                              </div>
                              <!-- End Dropdown List -->
                            </div>
                            <!-- End Notifications -->

                            <!-- Header Settings -->
                            <div class="crancy-header__settings">
                              <a
                                class="crancy-header__blink"
                                href="profile-info.html"
                              >
                                <svg
                                  class="crancy-header__svg--icon"
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <path
                                    d="M20.7439 15.7206L20.1043 15.3289V15.3289L20.7439 15.7206ZM19.7894 17.2794L20.429 17.6711V17.6711L19.7894 17.2794ZM3.25609 8.27942L2.61648 7.88775H2.61648L3.25609 8.27942ZM4.21064 6.72057L4.85025 7.11223L4.21064 6.72057ZM6.81852 6.06172L7.1771 5.403L7.1771 5.403L6.81852 6.06172ZM3.95487 10.7383L3.59629 11.397H3.59629L3.95487 10.7383ZM17.1815 17.9383L16.8229 18.597L16.8229 18.597L17.1815 17.9383ZM20.0451 13.2617L19.6866 13.9204V13.9205L20.0451 13.2617ZM4.21064 17.2794L3.57103 17.6711L3.57103 17.6711L4.21064 17.2794ZM3.25609 15.7206L3.8957 15.3289L3.8957 15.3289L3.25609 15.7206ZM19.7894 6.72058L20.429 6.32892V6.32892L19.7894 6.72058ZM20.7439 8.27943L20.1043 8.67109V8.67109L20.7439 8.27943ZM20.0451 10.7383L20.4037 11.397L20.0451 10.7383ZM17.1815 6.06174L17.5401 6.72046V6.72046L17.1815 6.06174ZM3.95487 13.2617L4.31345 13.9205H4.31345L3.95487 13.2617ZM6.81851 17.9383L6.45994 17.2795L6.45993 17.2795L6.81851 17.9383ZM17.08 6.11698L16.7214 5.45825L17.08 6.11698ZM6.92 6.11697L6.56142 6.77569L6.56142 6.77569L6.92 6.11697ZM17.08 17.883L17.4386 17.2243L17.4386 17.2243L17.08 17.883ZM6.92 17.883L7.27858 18.5418L7.27858 18.5418L6.92 17.883ZM11.0455 3.75H12.9545V2.25H11.0455V3.75ZM12.9545 20.25H11.0455V21.75H12.9545V20.25ZM11.0455 20.25C10.3631 20.25 9.88635 19.7389 9.88635 19.2H8.38635C8.38635 20.6493 9.61906 21.75 11.0455 21.75V20.25ZM14.1136 19.2C14.1136 19.7389 13.6369 20.25 12.9545 20.25V21.75C14.3809 21.75 15.6136 20.6493 15.6136 19.2H14.1136ZM12.9545 3.75C13.6369 3.75 14.1136 4.26107 14.1136 4.8H15.6136C15.6136 3.35071 14.3809 2.25 12.9545 2.25V3.75ZM11.0455 2.25C9.61906 2.25 8.38635 3.35071 8.38635 4.8H9.88635C9.88635 4.26107 10.3631 3.75 11.0455 3.75V2.25ZM20.1043 15.3289L19.1498 16.8878L20.429 17.6711L21.3835 16.1122L20.1043 15.3289ZM3.8957 8.67108L4.85025 7.11223L3.57103 6.32891L2.61648 7.88775L3.8957 8.67108ZM4.85025 7.11223C5.15889 6.6082 5.88055 6.40506 6.45993 6.72045L7.1771 5.403C5.93027 4.72428 4.31676 5.11109 3.57103 6.32891L4.85025 7.11223ZM4.31345 10.0795C3.75746 9.77688 3.6043 9.14696 3.8957 8.67108L2.61648 7.88775C1.85352 9.13373 2.32606 10.7055 3.59629 11.397L4.31345 10.0795ZM19.1498 16.8878C18.8411 17.3918 18.1195 17.5949 17.5401 17.2795L16.8229 18.597C18.0697 19.2757 19.6832 18.8889 20.429 17.6711L19.1498 16.8878ZM21.3835 16.1122C22.1465 14.8663 21.6739 13.2945 20.4037 12.603L19.6866 13.9205C20.2425 14.2231 20.3957 14.853 20.1043 15.3289L21.3835 16.1122ZM4.85025 16.8878L3.8957 15.3289L2.61648 16.1122L3.57103 17.6711L4.85025 16.8878ZM19.1498 7.11225L20.1043 8.67109L21.3835 7.88777L20.429 6.32892L19.1498 7.11225ZM20.1043 8.67109C20.3957 9.14697 20.2425 9.77689 19.6866 10.0795L20.4037 11.397C21.6739 10.7055 22.1465 9.13374 21.3835 7.88777L20.1043 8.67109ZM17.5401 6.72046C18.1195 6.40507 18.8411 6.60822 19.1498 7.11225L20.429 6.32892C19.6832 5.1111 18.0697 4.72429 16.8229 5.40301L17.5401 6.72046ZM3.8957 15.3289C3.6043 14.853 3.75746 14.2231 4.31345 13.9205L3.59629 12.603C2.32606 13.2945 1.85352 14.8663 2.61648 16.1122L3.8957 15.3289ZM3.57103 17.6711C4.31675 18.8889 5.93027 19.2757 7.1771 18.597L6.45993 17.2795C5.88055 17.5949 5.15889 17.3918 4.85025 16.8878L3.57103 17.6711ZM17.4386 6.7757L17.5401 6.72046L16.8229 5.40301L16.7214 5.45825L17.4386 6.7757ZM6.45993 6.72045L6.56142 6.77569L7.27858 5.45824L7.1771 5.403L6.45993 6.72045ZM17.5401 17.2795L17.4386 17.2243L16.7214 18.5417L16.8229 18.597L17.5401 17.2795ZM6.56142 17.2243L6.45994 17.2795L7.17709 18.597L7.27858 18.5418L6.56142 17.2243ZM3.59629 11.397C4.07404 11.6571 4.07404 12.3429 3.59629 12.603L4.31345 13.9205C5.83498 13.0922 5.83498 10.9078 4.31345 10.0795L3.59629 11.397ZM7.27858 18.5418C7.77798 18.2699 8.38635 18.6314 8.38635 19.2H9.88635C9.88635 17.4934 8.06035 16.4084 6.56142 17.2243L7.27858 18.5418ZM15.6136 19.2C15.6136 18.6314 16.222 18.2699 16.7214 18.5417L17.4386 17.2243C15.9397 16.4083 14.1136 17.4934 14.1136 19.2H15.6136ZM20.4037 12.603C19.926 12.3429 19.926 11.6571 20.4037 11.397L19.6866 10.0795C18.165 10.9078 18.165 13.0922 19.6866 13.9204L20.4037 12.603ZM6.56142 6.77569C8.06035 7.59165 9.88635 6.50663 9.88635 4.8H8.38635C8.38635 5.3686 7.77798 5.7301 7.27858 5.45824L6.56142 6.77569ZM16.7214 5.45825C16.222 5.73011 15.6136 5.36861 15.6136 4.8H14.1136C14.1136 6.50663 15.9397 7.59166 17.4386 6.7757L16.7214 5.45825ZM14.25 12C14.25 13.2426 13.2426 14.25 12 14.25V15.75C14.0711 15.75 15.75 14.0711 15.75 12H14.25ZM12 14.25C10.7574 14.25 9.75001 13.2426 9.75001 12H8.25001C8.25001 14.0711 9.92894 15.75 12 15.75V14.25ZM9.75001 12C9.75001 10.7574 10.7574 9.75 12 9.75V8.25C9.92894 8.25 8.25001 9.92893 8.25001 12H9.75001ZM12 9.75C13.2426 9.75 14.25 10.7574 14.25 12H15.75C15.75 9.92893 14.0711 8.25 12 8.25V9.75Z"
                                  />
                                </svg>
                              </a>
                            </div>
                            <!-- Header Nav -->
                          </div>
                          <!-- End Header Option Group-->

                          <!-- Header Author -->
                          <div class="crancy-header__single">
                            <a href="profile-overview.html"
                              ><div class="crancy-header__author-img">
                                <img src="img/profile-pic.png" alt="#" /></div
                            ></a>
                            <!-- crancy Profile Hover -->

                            <!-- Dropdown List -->
                            <div
                              class="crancy-dropdown crancy-dropdown--acount"
                            >
                              <div class="crancy-dropdown__hover--inner">
                                <ul class="crancy-dmenu">
                                  <li>
                                    <a href="#">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.1202 12.78C12.0502 12.77 11.9602 12.77 11.8802 12.78C10.1202 12.72 8.72021 11.28 8.72021 9.50998C8.72021 7.69998 10.1802 6.22998 12.0002 6.22998C13.8102 6.22998 15.2802 7.69998 15.2802 9.50998C15.2702 11.28 13.8802 12.72 12.1202 12.78Z"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M18.7398 19.3801C16.9598 21.0101 14.5998 22.0001 11.9998 22.0001C9.39977 22.0001 7.03977 21.0101 5.25977 19.3801C5.35977 18.4401 5.95977 17.5201 7.02977 16.8001C9.76977 14.9801 14.2498 14.9801 16.9698 16.8001C18.0398 17.5201 18.6398 18.4401 18.7398 19.3801Z"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      My Profile
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          d="M2 12V7C2 4.79086 3.79086 3 6 3H18C20.2091 3 22 4.79086 22 7V17C22 19.2091 20.2091 21 18 21H8M6 8L9.7812 10.5208C11.1248 11.4165 12.8752 11.4165 14.2188 10.5208L18 8M2 15H8M2 18H8"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                        />
                                      </svg>
                                      Inbox
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          d="M15 10L13.7071 11.2929C13.3166 11.6834 13.3166 12.3166 13.7071 12.7071L15 14M14 12L22 12M6 20C3.79086 20 2 18.2091 2 16V8C2 5.79086 3.79086 4 6 4M6 20C8.20914 20 10 18.2091 10 16V8C10 5.79086 8.20914 4 6 4M6 20H14C16.2091 20 18 18.2091 18 16M6 4H14C16.2091 4 18 5.79086 18 8"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                        />
                                      </svg>
                                      Logout
                                    </a>
                                  </li>
                                </ul>
                                <ul class="crancy-dmpage">
                                  <li><a href="#">Privacy Policy</a></li>
                                  <li><a href="#">About</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- End Dropdown List -->
                          </div>
                          <!-- End Header Author -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End Header -->

      <!-- crancy Dashboard -->
      <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">
          <div class="row">
            <div class="col-xxl-8 col-12 crancy-main__column">
              <div class="crancy-body">
                <!-- Dashboard Inner -->
                <div class="crancy-dsinner">
                  <form action="#">
                    <div class="row">
                      <div class="col-lg-6 col-12 mg-top-30">
                        <!-- Product Card -->
                        <div class="crancy-product-card">
                          <h4 class="crancy-product-card__title">
                            Product Information
                            <a href="#"><img src="img/alert-circle.svg" /></a>
                          </h4>
                          <div class="crancy__item-form--group mg-top-25">
                            <label
                              class="crancy__item-label crancy__item-label-product"
                              >Product Name</label
                            >
                            <input
                              class="crancy__item-input"
                              type="text"
                              placeholder="Bamba Shoes Contrast"
                              required="required"
                            />
                          </div>
                          <div class="crancy__item-form--group mg-top-25">
                            <label
                              class="crancy__item-label crancy__item-label-product"
                              >Category</label
                            >
                            <select
                              class="form-select crancy__item-input"
                              aria-label="Default select example"
                            >
                              <option selected="">Clothing</option>
                              <option value="1">Shoes</option>
                              <option value="2">Jewellery</option>
                            </select>
                          </div>
                          <div class="crancy__item-form--group mg-top-25">
                            <label
                              class="crancy__item-label crancy__item-label-product"
                              >Collection</label
                            >
                            <input
                              class="crancy__item-input"
                              type="text"
                              placeholder="Premium Shoes"
                              required="required"
                            />
                          </div>
                        </div>
                        <!-- End Product Card -->
                      </div>
                      <div class="col-lg-6 col-12 mg-top-30">
                        <!-- Product Card -->
                        <div class="crancy-product-card">
                          <h4 class="crancy-product-card__title">
                            Product Image
                            <a href="#"><img src="img/alert-circle.svg" /></a>
                          </h4>
                          <p>
                            Select a product photo or drag and drop up to 5
                            photos at once here. Include min. 2 attractive
                            photos to make the product more attractive to
                            buyers.
                          </p>
                          <div class="crancy-product-card__img">
                            <div class="row mg-btm-20">
                              <div
                                class="col-lg-6 col-md-6 col-12 mg-top-form-20"
                              >
                                <div class="crancy-product-card__upload">
                                  <div class="crancy-product-card__uploaded">
                                    <img src="img/product-upload.jpg" />
                                  </div>
                                </div>
                              </div>
                              <div
                                class="col-lg-6 col-md-6 col-12 mg-top-form-20"
                              >
                                <div
                                  class="crancy-product-card__upload crancy-product-card__upload--border"
                                >
                                  <input
                                    type="file"
                                    class="btn-check"
                                    name="options"
                                    id="input-img1"
                                    autocomplete="off"
                                  />
                                  <label
                                    class="crancy-image-video-upload__label"
                                    for="input-img1"
                                  >
                                    <img src="img/upload-file.png" />
                                    <h4
                                      class="crancy-image-video-upload__title"
                                    >
                                      Drag &amp; Drop or
                                      <span class="crancy-primary-color"
                                        >Choose File</span
                                      >
                                      to upload
                                    </h4>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <p>
                              The image format is .jpg .jpeg .png and a minimum
                              size of 300 x 300px (For optimal images minimum
                              size of 700 x 700 px).
                            </p>
                          </div>
                        </div>
                        <!-- End Product Card -->
                      </div>
                      <div class="col-lg-6 col-12 mg-top-30">
                        <!-- Product Card -->
                        <div class="crancy-product-card">
                          <h4 class="crancy-product-card__title">
                            Detail Product
                            <a href="#"><img src="img/alert-circle.svg" /></a>
                          </h4>
                          <div class="crancy__item-form--group mg-top-25">
                            <label
                              class="crancy__item-label crancy__item-label-product crancy-flex-between"
                              >Description <span>53/2000</span></label
                            >
                            <textarea
                              class="crancy__item-input crancy__item-textarea"
                              type="text"
                              placeholder="The Green to Wear 2.0 standard aims to reduce the environmental"
                              required="required"
                            ></textarea>
                          </div>
                          <div class="crancy__item-form--group mg-top-25">
                            <label
                              class="crancy__item-label crancy__item-label-product"
                              >Video URL <span>(optional)</span></label
                            >
                            <input
                              class="crancy__item-input"
                              type="url"
                              placeholder="Add Video URL"
                              required="required"
                            />
                          </div>
                        </div>
                        <!-- End Product Card -->
                      </div>
                      <div class="col-lg-6 col-12 mg-top-30">
                        <!-- Product Card -->
                        <div class="crancy-product-card">
                          <h4 class="crancy-product-card__title">
                            Variants
                            <a href="#"><img src="img/alert-circle.svg" /></a>
                          </h4>
                          <div class="crancy__item-form--group mg-top-25">
                            <label
                              class="crancy__item-label crancy__item-label-product crancy-flex-between"
                              >Variant 1
                              <a href="#"><img src="img/trash-icon.svg" /></a
                            ></label>
                            <select
                              class="form-select crancy__item-input"
                              aria-label="Default select example"
                            >
                              <option selected="">Clothing</option>
                              <option value="1">Shoes</option>
                              <option value="2">Jewellery</option>
                            </select>
                          </div>
                          <div class="crancy__item-form--group mg-top-25">
                            <label
                              class="crancy__item-label crancy__item-label-product"
                              >Add Size</label
                            >
                            <div class="crancy__item-form--add">
                              <input
                                class="crancy__item-input"
                                type="text"
                                required="required"
                              />
                              <div class="crancy__item-form--add__group">
                                <a class="crancy__item-form--add__single"
                                  >EU-39 <i class="fas fa-times"></i
                                ></a>
                                <a class="crancy__item-form--add__single"
                                  >EU-39 <i class="fas fa-times"></i
                                ></a>
                              </div>
                            </div>
                          </div>

                          <div class="crancy__item-form--group mg-top-5">
                            <div class="crancy__item-form--added">
                              <div
                                class="form-group crancy-form-checkbox__added mg-top-15"
                              >
                                <input
                                  class="d-none"
                                  type="checkbox"
                                  id="add1"
                                  name="add1"
                                />
                                <label class="crancy-form-labe2" for="add1"
                                  >EU-39
                                  <span><i class="fas fa-times"></i></span
                                ></label>
                              </div>
                              <div
                                class="form-group crancy-form-checkbox__added mg-top-15"
                              >
                                <input
                                  class="d-none"
                                  type="checkbox"
                                  id="add2"
                                  name="add2"
                                />
                                <label class="crancy-form-labe2" for="add2"
                                  >EU-40
                                  <span><i class="fas fa-times"></i></span
                                ></label>
                              </div>
                              <div
                                class="form-group crancy-form-checkbox__added mg-top-15"
                              >
                                <input
                                  class="d-none"
                                  type="checkbox"
                                  id="add3"
                                  name="add3"
                                />
                                <label class="crancy-form-labe2" for="add3"
                                  >EU-41
                                  <span><i class="fas fa-times"></i></span
                                ></label>
                              </div>
                              <div
                                class="form-group crancy-form-checkbox__added mg-top-15"
                              >
                                <input
                                  class="d-none"
                                  type="checkbox"
                                  id="add4"
                                  name="add4"
                                />
                                <label class="crancy-form-labe2" for="add4"
                                  >EU-42
                                  <span><i class="fas fa-times"></i></span
                                ></label>
                              </div>
                              <div
                                class="form-group crancy-form-checkbox__added mg-top-15"
                              >
                                <input
                                  class="d-none"
                                  type="checkbox"
                                  id="add5"
                                  name="add5"
                                />
                                <label class="crancy-form-labe2" for="add5"
                                  >EU-43
                                  <span><i class="fas fa-times"></i></span
                                ></label>
                              </div>
                              <div
                                class="form-group crancy-form-checkbox__added mg-top-15"
                              >
                                <input
                                  class="d-none"
                                  type="checkbox"
                                  id="add6"
                                  name="add6"
                                />
                                <label class="crancy-form-labe2" for="add6"
                                  >EU-44
                                  <span><i class="fas fa-times"></i></span
                                ></label>
                              </div>
                            </div>
                          </div>

                          <div class="crancy__item-form--group mg-top-25">
                            <button class="crancy-btn crancy-btn--add-new">
                              <i class="fas fa-plus"></i> New Variant
                            </button>
                          </div>
                        </div>
                        <!-- End Product Card -->
                      </div>
                    </div>
                  </form>
                </div>
                <!-- End Dashboard Inner -->
              </div>
            </div>

            <div class="col-xxl-4 col-12 crancy-main__sidebar">
              <div class="crancy-sidebar mg-top-30">
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-6 col-md-6 col-12 crancy-sidebar__widget"
                  >
                    <!-- crancy Single Sidebar -->
                    <div class="crancy-sidebar__single">
                      <!-- Sidebar Heading -->
                      <div class="crancy-sidebar__heading">
                        <h4 class="crancy-sidebar__title">Sales history</h4>
                        <a href="#" class="crancy-sidebar__toggles"
                          ><img src="img/toggle-icon2.svg"
                        /></a>
                      </div>

                      <!-- Wallet Card -->
                      <ul class="crancy-sidebar__historylist">
                        <li>
                          <div class="crancy-sidebar__history">
                            <div class="crancy-sidebar__history-thumb">
                              <img src="img/sales-history-1.png" alt="#" />
                              <h4 href="#">
                                <a href="#"
                                  ><span class="crancy-sidebar__history-title"
                                    >Rompi Berkancing</span
                                  ></a
                                >
                                <b
                                  class="crancy-sidebar__history-name crancy-pcolor"
                                  >$400.98<span>April 29, 2022</span></b
                                >
                              </h4>
                            </div>
                            <div
                              class="crancy-sidebar__history-grow crancy-gcolor"
                            >
                              +324.75%
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="crancy-sidebar__history">
                            <div class="crancy-sidebar__history-thumb">
                              <img src="img/sales-history-2.png" alt="#" />
                              <h4 href="#">
                                <a href="#"
                                  ><span class="crancy-sidebar__history-title"
                                    >Blazer assorted pocket</span
                                  ></a
                                >
                                <b
                                  class="crancy-sidebar__history-name crancy-pcolor"
                                  >$550.75<span>April 28, 2022</span></b
                                >
                              </h4>
                            </div>
                            <div
                              class="crancy-sidebar__history-grow crancy-rcolor"
                            >
                              -324.75%
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="crancy-sidebar__history">
                            <div class="crancy-sidebar__history-thumb">
                              <img src="img/sales-history-3.png" alt="#" />
                              <h4 href="#">
                                <a href="#"
                                  ><span class="crancy-sidebar__history-title"
                                    >Pattern top with knot</span
                                  ></a
                                >
                                <b
                                  class="crancy-sidebar__history-name crancy-pcolor"
                                  >$210.98<span>April 25, 2022</span></b
                                >
                              </h4>
                            </div>
                            <div
                              class="crancy-sidebar__history-grow crancy-gcolor"
                            >
                              -324.75%
                            </div>
                          </div>
                        </li>
                      </ul>
                      <!-- End Wallet Card -->
                    </div>
                    <!-- End crancy Single Sidebar -->
                  </div>

                  <div
                    class="col-xl-12 col-lg-6 col-md-6 col-12 crancy-sidebar__widget"
                  >
                    <!-- crancy Single Sidebar -->
                    <div class="crancy-sidebar__single">
                      <div class="crancy-sidebar__heading">
                        <h4 class="crancy-sidebar__title">View Date</h4>
                      </div>
                      <div id="crancy-calender" class="crancy-default-cd"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End crancy Dashboard -->
    </div>

    <!-- Dashra Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/final-countdown.min.js"></script>
    <script src="js/fancy-box.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery-jvectormap.html"></script>
    <script src="js/jvector-map.html"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/pikaday.min.js"></script>
    <script src="js/main.js"></script>

    <script>
      $(document).ready(function () {
        $("#crancy-table__main").DataTable({
          searching: true, // Enable search functionality
          info: true,
          lengthChange: true, // Enable the ability to change the number of records per page
          pageLength: 8,
          lengthMenu: [
            [8, 14, 25, 50, -1],
            [8, 14, 25, 50, "All"],
          ],
          language: {
            paginate: {
              next: '<i class="fas fa-angle-right"></i>',
              previous: '<i class="fas fa-angle-left"></i>',
            },
            lengthMenu: "Show result: _MENU_ ", // Customize the "Show entries" text
          },
          dom: 'rt<"crancy-table-bottom"flp><"clear">', // Set the desired layout for the table
        });
      });
    </script>
    <script>
      var picker = new Pikaday({ field: document.getElementById("dateInput") });
      // Create a new instance of Pikaday for the date-input field
      const picker1 = new Pikaday({
        field: document.getElementById("date-input"),
        format: "DD MMM", // Set the desired format
        toString(date, format) {
          const day = date.getDate();
          const month = date.toLocaleString("default", { month: "short" });
          const formattedDate = `${day} ${month}`;
          return formattedDate;
        },
      });

      // Create another instance of Pikaday for the dateInput field
      const picker2 = new Pikaday({
        field: document.getElementById("dateInput"),
        // ... other options for the dateInput picker
      });
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var calendarEl = document.getElementById("crancy-calender");
        var calendar = new FullCalendar.Calendar(calendarEl, {
          defaultView: "timeGridWeek",
          contentHeight: "auto",
          height: "100%",
          fixedWeekCount: false,
          showNonCurrentDates: true,
          columnHeaderFormat: {
            week: "ddd",
          },
        });
        calendar.render();
      });
    </script>

    <script>
      jQuery(document).ready(function ($) {
        $(".circle__one").circleProgress({
          size: 82,
          thickness: 8,
          lineCap: "round",
          fill: {
            // the fill color and border radius of the progress bar
            color: "#194BFB",
            borderRadius: "5px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 5,
            borderRadius: "315px",
          },
          emptyFill: "#CEE6FF", // the background color of the progress bar
        });

        $(".circle__two").circleProgress({
          lineCap: "round",
          fill: {
            // the fill color and border radius of the progress bar
            color: "#EF5DA8",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 50,
            borderRadius: "50px",
          },
          emptyFill: "#FCDFEE", // the background color of the progress bar
        });

        $(".circle__three").circleProgress({
          lineCap: "round",
          fill: {
            // the fill color and border radius of the progress bar
            color: "#27AE60",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 50,
            borderRadius: "50px",
          },
          emptyFill: "#D4EFDF", // the background color of the progress bar
        });

        $(".circle__four").circleProgress({
          lineCap: "round",
          fill: {
            // the fill color and border radius of the progress bar
            color: "#9B51E0",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 50,
            borderRadius: "50px",
          },
          emptyFill: "#EBDCF9", // the background color of the progress bar
        });

        $(".circle_side_one").circleProgress({
          startAngle: -Math.PI / 1,
          lineCap: "round",
          size: 250,
          fill: {
            // the fill color and border radius of the progress bar
            color: "#9B51E0",
            borderRadius: "10px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 190,
            borderRadius: "10px",
          },
          emptyFill: "#D7B9F3", // the background color of the progress bar
        });

        $(".circle_side_two").circleProgress({
          startAngle: -Math.PI / 3,
          lineCap: "round",
          size: 250,
          fill: {
            // the fill color and border radius of the progress bar
            color: "#0A82FD",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 190,
            borderRadius: "50px",
          },
          emptyFill: "#9DCDFE", // the background color of the progress bar
        });

        $(".circle_side_three").circleProgress({
          startAngle: -Math.PI / 2,
          lineCap: "round",
          size: 250,
          fill: {
            // the fill color and border radius of the progress bar
            color: "#F2C94C",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 190,
            borderRadius: "50px",
          },
          emptyFill: "#FAE9B7", // the background color of the progress bar
        });
      });
    </script>
    <script>
      // Chart One
      const ctx = document.getElementById("myChart_one").getContext("2d");
      const myChart_one = new Chart(ctx, {
        type: "bar",

        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "AVG Sale",
              data: [55, 70, 25, 65, 50, 70, 50, 65, 80, 75, 45, 70],
              backgroundColor: [
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#0A82FD",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
              ],
              hoverBackgroundColor: "#0A82FD",
              fill: true,
              tension: 0.4,
              borderWidth: 0,
              borderSkipped: false,
              borderRadius: 8,
              borderRadius: {
                topLeft: 8, // Apply border radius to the top-left corner
                topRight: 8, // Apply border radius to the top-right corner
                bottomLeft: 0, // Keep bottom-left corner square
                bottomRight: 0, // Keep bottom-right corner square
              },
              barPercentage: 0.8,
              categoryPercentage: 0.5,
            },
            {
              label: "Total Sell",
              data: [45, 65, 15, 70, 45, 65, 55, 55, 65, 65, 60, 65],
              backgroundColor: [
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#F2C94C",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
              ],
              hoverBackgroundColor: [
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
              ],
              borderWidth: 0,
              borderSkipped: false,
              borderRadius: 8,
              borderRadius: {
                topLeft: 8, // Apply border radius to the top-left corner
                topRight: 8, // Apply border radius to the top-right corner
                bottomLeft: 0, // Keep bottom-left corner square
                bottomRight: 0, // Keep bottom-right corner square
              },
              barPercentage: 0.8,
              categoryPercentage: 0.5,
            },
          ],
        },

        options: {
          maintainAspectRatio: false,
          responsive: true,
          scales: {
            x: {
              ticks: {
                color: "#5D6A83",
              },
              grid: {
                display: false,
                drawBorder: false,
                color: "#D7DCE7",
              },
            },
            y: {
              ticks: {
                color: "#5D6A83",
                callback: function (value, index, values) {
                  return (value / 10) * 10 + "%";
                },
              },
              grid: {
                drawBorder: false,
                color: "#D7DCE7",
                borderDash: [5, 5],
              },
            },
          },
          plugins: {
            tooltip: {
              padding: 10,
              displayColors: true,
              yAlign: "bottom",
              backgroundColor: "#fff",
              titleColor: "#000",
              titleFont: { weight: "normal" },
              bodyColor: "#2F3032",
              cornerRadius: 12,
              boxPadding: 3,
              usePointStyle: true,
              borderWidth: 0,
              font: {
                size: 14,
              },
              caretSize: 9,
              bodySpacing: 100,
            },
            legend: {
              position: "top",
              display: false,
            },
            title: {
              display: false,
              text: "Sell History",
            },
          },
        },
      });

      // Chart Two
      const ctx_two = document.getElementById("myChart_two").getContext("2d");

      const myChart_two = new Chart(ctx_two, {
        type: "doughnut",

        data: {
          labels: ["Website", "Google", "Others"],
          datasets: [
            {
              data: [50, 20, 30],
              backgroundColor: ["#436CFF", "#F7CA16", "#F7F8FA"],
              hoverOffset: 2,
              borderWidth: 0,
            },
          ],
        },

        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: "top",
              display: false,
            },
            title: {
              display: false,
              text: "Sell History",
            },
            tooltip: {
              enabled: false, // Set enabled to false to hide data labels on hover
            },
          },
        },
      });
    </script>
  </body>

<!-- Mirrored from zomur.vercel.app/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2024 06:18:52 GMT -->
</html>
