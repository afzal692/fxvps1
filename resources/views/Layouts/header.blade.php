  <header
      class="navigation header relative z-30 bg-transparent top-0 transition-all duration-200"
    >
      <div class="px-4">
        <div class="mx-auto container">
          <div class="relative flex items-center justify-between gap-5 py-4">
            <a href="/" class="relative shrink-0">
              <figure>
                <img class="w-32" src="./images/logo.svg" alt="logo.svg" />
              </figure>
            </a>
            <nav
              class="ease fixed -right-[999px] top-0 flex h-full w-72 flex-col justify-start gap-5 bg-white px-10 pt-20 transition-all duration-300 xl:static xl:w-full xl:items-center xl:justify-center xl:bg-transparent xl:px-0 xl:pt-0"
              id="navbar"
            >
              <button
                type="button"
                id="close"
                class="xl:hidden w-8 h-8 absolute top-0 -left-7 bg-white p-1"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
              <ul
                class="flex flex-col gap-8 xl:flex-row xl:items-center xl:gap-5 2xl:gap-10"
              >
                <li>
                  <a href="/pricing" class="font-bold text-base xl:text-xl text-black"
                    >VPS PLANS
                  </a>
                </li>
                <li>
                  <a href="/ultra-low-latency-vps" class="font-bold text-base xl:text-xl text-black"
                    >BROKER LATENCY</a
                  >
                </li>
                <li>
                  <a href="/pricing#exclvps" class="font-bold text-base xl:text-xl text-black"
                    >EXCL VPS</a
                  >
                </li>
                <li>
                  <a href="/dedicated-server" class="font-bold text-base xl:text-xl text-black"
                    >DEDICATED SERVER</a
                  >
                </li>
                <li>
                  <a href="affiliate" class="font-bold text-base xl:text-xl text-black"
                    >AFFILIATE</a
                  >
                </li>
                <li>
                  <a href="free-vps" class="font-bold text-base xl:text-xl text-black"
                    >FREE VPS</a
                  >
                </li>
                <li class="xl:hidden flex">
                  <a
                    href="#"
                    class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
                  >
                    <span
                      class="flex h-full w-full items-center gap-2 rounded-full bg-white py-1 px-6 sm:py-2.5 transition-all group-hover:bg-transparent sm:px-10"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 group-hover:stroke-white"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                        />
                      </svg>
                      <span class="group-hover:text-white">Login</span>
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
            <div class="shrink-0">
              <ul class="flex gap-3 items-center justify-end">
                <li class="xl:flex hidden">
                  <a
                    href="#"
                    class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
                  >
                    <span
                      class="flex h-full w-full items-center gap-2 rounded-full bg-white py-1 px-6 sm:py-2.5 transition-all group-hover:bg-transparent sm:px-10"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 group-hover:stroke-white"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                        />
                      </svg>
                      <span class="group-hover:text-white">Login</span>
                    </span>
                  </a>
                </li>
                <li class="shrink-0 xl:hidden">
                  <button
                    type="button"
                    id="burger"
                    class="border-0 bg-transparent"
                  >
                    <svg
                      class="stroke-primary"
                      width="26"
                      height="22"
                      viewBox="0 0 18 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M1 1H17M1 7H17M1 13H17"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div
          class="mobile-overlay fixed left-0 top-0 right-0 bottom-0 z-50 hidden h-full w-full bg-black bg-opacity-30 transition-all duration-500 ease-in-out xl:hidden"
        ></div>
      </div>
    </header>