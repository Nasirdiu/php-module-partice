<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="p-4 dark:bg-gray-800 dark:text-gray-100">
        <div class="container flex justify-between h-16 mx-auto">
            <a rel="noopener noreferrer" href="#" aria-label="Back to homepage" class="flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                    class="w-8 h-8 dark:text-violet-400">
                    <path
                        d="M27.912 7.289l-10.324-5.961c-0.455-0.268-1.002-0.425-1.588-0.425s-1.133 0.158-1.604 0.433l0.015-0.008-10.324 5.961c-0.955 0.561-1.586 1.582-1.588 2.75v11.922c0.002 1.168 0.635 2.189 1.574 2.742l0.016 0.008 10.322 5.961c0.455 0.267 1.004 0.425 1.59 0.425 0.584 0 1.131-0.158 1.602-0.433l-0.014 0.008 10.322-5.961c0.955-0.561 1.586-1.582 1.588-2.75v-11.922c-0.002-1.168-0.633-2.189-1.573-2.742zM27.383 21.961c0 0.389-0.211 0.73-0.526 0.914l-0.004 0.002-10.324 5.961c-0.152 0.088-0.334 0.142-0.53 0.142s-0.377-0.053-0.535-0.145l0.005 0.002-10.324-5.961c-0.319-0.186-0.529-0.527-0.529-0.916v-11.922c0-0.389 0.211-0.73 0.526-0.914l0.004-0.002 10.324-5.961c0.152-0.090 0.334-0.143 0.53-0.143s0.377 0.053 0.535 0.144l-0.006-0.002 10.324 5.961c0.319 0.185 0.529 0.527 0.529 0.916z">
                    </path>
                    <path
                        d="M22.094 19.451h-0.758c-0.188 0-0.363 0.049-0.515 0.135l0.006-0.004-4.574 2.512-5.282-3.049v-6.082l5.282-3.051 4.576 2.504c0.146 0.082 0.323 0.131 0.508 0.131h0.758c0.293 0 0.529-0.239 0.529-0.531v-0.716c0-0.2-0.11-0.373-0.271-0.463l-0.004-0.002-5.078-2.777c-0.293-0.164-0.645-0.26-1.015-0.26-0.39 0-0.756 0.106-1.070 0.289l0.010-0.006-5.281 3.049c-0.636 0.375-1.056 1.055-1.059 1.834v6.082c0 0.779 0.422 1.461 1.049 1.828l0.009 0.006 5.281 3.049c0.305 0.178 0.67 0.284 1.061 0.284 0.373 0 0.723-0.098 1.027-0.265l-0.012 0.006 5.080-2.787c0.166-0.091 0.276-0.265 0.276-0.465v-0.716c0-0.293-0.238-0.529-0.529-0.529z">
                    </path>
                </svg>
            </a>
            <ul class="items-stretch hidden space-x-3 lg:flex">
                <li class="flex">
                    <a rel="noopener noreferrer" href="index.php"
                        class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent dark:text-violet-400 dark:border-violet-400">Home</a>
                </li>
                <li class="flex">
                    <a rel="noopener noreferrer" href="blog.php"
                        class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent">Blog</a>
                </li>
                <li class="flex">
                    <a rel="noopener noreferrer" href="contact.php"
                        class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent">Contact</a>
                </li>

            </ul>
            <div class="items-center flex-shrink-0 hidden lg:flex">
                <button class="self-center px-8 py-3 rounded">Sign in</button>
                <button class="self-center px-8 py-3 font-semibold rounded dark:bg-violet-400 dark:text-gray-900">Sign
                    up</button>
            </div>
            <button class="p-4 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6 dark:text-gray-100">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </header>
    <!-- blog site -->
    <section class="py-6 sm:py-12 dark:bg-gray-800 dark:text-gray-100">
        <div class="container p-6 mx-auto space-y-8">
            <div class="space-y-2 text-center">
                <h2 class="text-3xl font-bold">
                    Featured post
                </h2>

            </div>
            <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">
                <article class="flex flex-col dark:bg-gray-900">
                    <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
                        <img alt="" class="object-cover w-full h-52 dark:bg-gray-500"
                            src="https://source.unsplash.com/200x200/?fashion?1">
                    </a>
                    <div class="flex flex-col flex-1 p-6">
                        <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                        <a rel="noopener noreferrer" href="#"
                            class="text-xs tracking-wider uppercase hover:underline dark:text-violet-400">Convenire</a>
                        <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Te nulla oportere reprimique his
                            dolorum</h3>
                        <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                            <span>June 1, 2020</span>
                            <span>2.1K views</span>
                        </div>

                    </div>
                    <div class="">
                        <a href="blog-detils.php">
                            <button type="button"
                                class="px-8 py-3 font-semibold border rounded text-white bg-black">Rede more</button>
                        </a>
                    </div>
                </article>
                <article class="flex flex-col dark:bg-gray-900">
                    <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
                        <img alt="" class="object-cover w-full h-52 dark:bg-gray-500"
                            src="https://source.unsplash.com/200x200/?fashion?2">
                    </a>
                    <div class="flex flex-col flex-1 p-6">
                        <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                        <a rel="noopener noreferrer" href="#"
                            class="text-xs tracking-wider uppercase hover:underline dark:text-violet-400">Convenire</a>
                        <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Te nulla oportere reprimique his
                            dolorum</h3>
                        <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                            <span>June 2, 2020</span>
                            <span>2.2K views</span>
                        </div>
                    </div>
                    <div class="">
                        <a href="blog-detils.php">
                            <button type="button"
                                class="px-8 py-3 font-semibold border rounded text-white bg-black">Rede more</button>
                        </a>
                    </div>
                </article>
                <article class="flex flex-col dark:bg-gray-900">
                    <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
                        <img alt="" class="object-cover w-full h-52 dark:bg-gray-500"
                            src="https://source.unsplash.com/200x200/?fashion?3">
                    </a>
                    <div class="flex flex-col flex-1 p-6">
                        <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                        <a rel="noopener noreferrer" href="#"
                            class="text-xs tracking-wider uppercase hover:underline dark:text-violet-400">Convenire</a>
                        <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Te nulla oportere reprimique his
                            dolorum</h3>
                        <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                            <span>June 3, 2020</span>
                            <span>2.3K views</span>
                        </div>
                    </div>
                    <div class="">
                        <a href="blog-detils.php">
                            <button type="button"
                                class="px-8 py-3 font-semibold border rounded text-white bg-black">Rede more</button>
                        </a>
                    </div>
                </article>
                <article class="flex flex-col dark:bg-gray-900">
                    <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
                        <img alt="" class="object-cover w-full h-52 dark:bg-gray-500"
                            src="https://source.unsplash.com/200x200/?fashion?4">
                    </a>
                    <div class="flex flex-col flex-1 p-6">
                        <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                        <a rel="noopener noreferrer" href="#"
                            class="text-xs tracking-wider uppercase hover:underline dark:text-violet-400">Convenire</a>
                        <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Te nulla oportere reprimique his
                            dolorum</h3>
                        <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                            <span>June 4, 2020</span>
                            <span>2.4K views</span>
                        </div>
                    </div>
                    <div class="">
                        <a href="blog-detils.php">
                            <button type="button"
                                class="px-8 py-3 font-semibold border rounded text-white bg-black">Rede more</button>
                        </a>
                    </div>
                </article>
                <article class="flex flex-col dark:bg-gray-900">
                    <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
                        <img alt="" class="object-cover w-full h-52 dark:bg-gray-500"
                            src="https://source.unsplash.com/200x200/?fashion?4">
                    </a>
                    <div class="flex flex-col flex-1 p-6">
                        <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                        <a rel="noopener noreferrer" href="#"
                            class="text-xs tracking-wider uppercase hover:underline dark:text-violet-400">Convenire</a>
                        <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Te nulla oportere reprimique his
                            dolorum</h3>
                        <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                            <span>June 4, 2020</span>
                            <span>2.4K views</span>
                        </div>
                    </div>
                    <div class="">
                        <a href="blog-detils.php">
                            <button type="button"
                                class="px-8 py-3 font-semibold border rounded text-white bg-black">Rede more</button>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <footer class="px-4 divide-y dark:bg-gray-800 dark:text-gray-100">
        <div class="container flex flex-col justify-between py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
            <div class="lg:w-1/3">
                <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 lg:justify-start">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full dark:bg-violet-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                            class="flex-shrink-0 w-5 h-5 rounded-full dark:text-gray-900">
                            <path
                                d="M18.266 26.068l7.839-7.854 4.469 4.479c1.859 1.859 1.859 4.875 0 6.734l-1.104 1.104c-1.859 1.865-4.875 1.865-6.734 0zM30.563 2.531l-1.109-1.104c-1.859-1.859-4.875-1.859-6.734 0l-6.719 6.734-6.734-6.734c-1.859-1.859-4.875-1.859-6.734 0l-1.104 1.104c-1.859 1.859-1.859 4.875 0 6.734l6.734 6.734-6.734 6.734c-1.859 1.859-1.859 4.875 0 6.734l1.104 1.104c1.859 1.859 4.875 1.859 6.734 0l21.307-21.307c1.859-1.859 1.859-4.875 0-6.734z">
                            </path>
                        </svg>
                    </div>
                    <span class="self-center text-2xl font-semibold">Brand name</span>
                </a>
            </div>
            <div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-4">
                <div class="space-y-3">
                    <h3 class="tracking-wide uppercase dark:text-gray-50">Product</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer" href="#">Features</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Integrations</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Pricing</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="tracking-wide uppercase dark:text-gray-50">Company</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer" href="#">Privacy</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Terms of Service</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="uppercase dark:text-gray-50">Developers</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer" href="#">Public API</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Documentation</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Guides</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <div class="uppercase dark:text-gray-50">Social media</div>
                    <div class="flex justify-start space-x-3">
                        <a rel="noopener noreferrer" href="#" title="Facebook" class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                class="w-5 h-5 fill-current">
                                <path
                                    d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Twitter" class="flex items-center p-1">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current">
                                <path
                                    d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Instagram" class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                                class="w-5 h-5 fill-current">
                                <path
                                    d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 text-sm text-center dark:text-gray-400">© 1968 Company Co. All rights reserved.</div>
    </footer>
</body>

</html>