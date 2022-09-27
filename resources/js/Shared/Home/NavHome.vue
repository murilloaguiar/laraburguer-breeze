<template>
    <nav class="bg-gray-800">
        <div
            class="container flex flex-wrap justify-between items-center mx-auto"
        >
            <a href="https://flowbite.com/" class="flex items-center">
                <img
                    src="assets/images/logo.png"
                    class="mr-3 h-6 sm:h-9"
                    alt="Laraburguer"
                />
                <span
                    class="self-center text-xl text-gray-100 font-semibold whitespace-nowrap dark:text-white"
                    >Laraburguer</span
                >
            </a>
            <div class="flex items-center md:order-2">
                <button
                    type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button"
                    aria-expanded="false"
                    data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom"
                >
                    <span class="sr-only">Open user menu</span>
                    <img
                        class="w-8 h-8 rounded-full"
                        src="/docs/images/people/profile-picture-3.jpg"
                        alt="user photo"
                    />
                </button>
                <!-- Dropdown menu -->
                <div
                    class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown"
                >
                    <div class="py-3 px-4">
                        <span
                            class="block text-sm text-gray-900 dark:text-white"
                            >Bonnie Green</span
                        >
                        <span
                            class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400"
                            >name@flowbite.com</span
                        >
                    </div>
                    <ul class="py-1" aria-labelledby="user-menu-button">
                        <li>
                            <Link
                                href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                >Dashboard</Link
                            >
                        </li>
                        <li>
                            <Link
                                href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                >Settings</Link
                            >
                        </li>
                        <li>
                            <Link
                                href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                >Earnings</Link
                            >
                        </li>
                        <li>
                            <Link
                                href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                >Sign out</Link
                            >
                        </li>
                    </ul>
                </div>
                <button
                    data-collapse-toggle="mobile-menu-2"
                    type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
            </div>
            <div
                class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1"
                id="mobile-menu-2"
            >
                <ul
                    class="flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                >
                    <li>
                        <Link
                            :href="route('index')"
                            class="block py-2 pr-4 pl-3 text-gray-300 bg-blue-700 rounded md:bg-transparent md:p-0 dark:text-white"
                            >Início</Link
                        >
                    </li>
                    <li>
                        <Link
                            :href="route('catalog')"
                            class="block py-2 pr-4 pl-3 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            >Catálogo</Link
                        >
                    </li>

                    <li>
                        <button
                            id="dropdownNavbarLink"
                            data-dropdown-toggle="dropdownNavbar"
                            class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
                        >
                            Dropdown
                            <svg
                                class="ml-1 w-5 h-5"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div
                            id="dropdownNavbar"
                            class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                        >
                            <ul
                                class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Dashboard</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Settings</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Earnings</a
                                    >
                                </li>
                            </ul>
                            <div class="py-1">
                                <a
                                    href="#"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                                    >Sign out</a
                                >
                            </div>
                        </div>
                    </li>

                    <li>
                        <Link
                            :href="route('bag')"
                            class="block py-2 pr-4 pl-3 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            >Carrinho</Link
                        >
                    </li>
                    <li>
                        <Link
                            :href="route('login')"
                            class="block py-2 pr-4 pl-3 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            v-if="!$page.props.auth.user"
                            >Login</Link
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
