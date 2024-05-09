<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <title>Ing. Alejandro</title>
        @vite('resources/css/app.css')
        <link rel="icon" href="{{ asset('/src/images/onlyicon.png')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <nav class="bg-gray-800" x-data="{open: false}">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button @click="open = ! open" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!--
                                Icon when menu is closed.

                                Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="h-6 w-6" :class="open ? 'hidden' : 'block'" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!--
                                Icon when menu is open.

                                Menu open: "block", Menu closed: "hidden"
                            -->
                            <svg class="h-6 w-6":class="open ? 'block' : 'hidden'" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="h-8 w-auto" src="{{asset('/src/images/logoalex.png')}}" alt="Your Company">
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Yo</a>
                        </div>
                        </div>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="{{ asset('/src/images/me.jpeg')}}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="open" class="sm:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Yo</a>
                </div>
            </div>
        </nav>
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32"> <img src="https://images.unsplash.com/photo-1607743386760-88ac62b89b8a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Ing. Alejandro Hernandez Aguilar</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">Soy una persona apasionada por lo que hace y con la inquietud de estar aprendiendo cosas, aspiro a ser una persona exitosa por medio de mis habilidades y esfuerzo.</p>
                </div>
                <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                    <a href="#">28 Años <span aria-hidden="true">&rarr;</span></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hdz.aalejandro@gmail.com&su=SUBJECT&body=BODY">hdz.aalejandro@gmail.com <span aria-hidden="true">&rarr;</span></a>
                    <a href="https://wa.me/4411004962?text=Hola%20estoy%20interesado%20en%20tu%20perfil">4411004962 <span aria-hidden="true">&rarr;</span></a>
                    <a href="https://www.linkedin.com/in/alejandro-hernandez-aguilar-455a13161">Linkedin <span aria-hidden="true">&rarr;</span></a>
                </div>
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">
                            UTEQ
                        </dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">ISC</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">UTEQ</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">TSU</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Intermedio</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Ingles</dd>
                    </div>
                </dl>
                </div>
            </div>
        </div>
        <div>
        <div class="bg-white">
            <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Grupo Sid - Analista de TI</h2>
                    <p class="mt-4 text-gray-500">Desarrollo de Aplicaciones móviles para el control de inventario, las cuales incorporaban alertar en tiempo real, actualización de módulos en aplicaciones de escritorio y análisis de tecnologías para optimizar procesos.</p>

                    <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Periodo</dt>
                            <dd class="mt-2 text-sm text-gray-500">2021 - Actual</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Puesto</dt>
                            <dd class="mt-2 text-sm text-gray-500">Analista de TI</dd>
                        </div>
                    </dl>
                </div>
                <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                    <img src="{{ asset('/src/images/imagework.jpg')}}" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/android_system.png')}}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/imagen2.jpg')}}" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/imagen3.jpg')}}" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                    <img src="{{ asset('/src/images/yap1.jpg')}}" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/yap2.jpg')}}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/yapp3.jpg')}}" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/yapp4.jpg')}}" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
                </div>
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Yapp - Full Stack</h2>
                    <p class="mt-4 text-gray-500">Implementación de sitios web, así como desarrollo back-end y front-end para el correcto funcionamiento de una app que implementaba pagos en línea, ubicación en tiempo real.</p>

                    <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Periodo</dt>
                            <dd class="mt-2 text-sm text-gray-500">2018 - 2021</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Puesto</dt>
                            <dd class="mt-2 text-sm text-gray-500">Desarrollador Full Stack</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Estadia - Ericsson</h2>
                    <p class="mt-4 text-gray-500">Desarrollo de aplicaciones móviles multiplataforma, la cual requería de uso de ubicación en tiempo real, notificaciones y mensajería, así como documentación.</p>

                    <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Periodo</dt>
                            <dd class="mt-2 text-sm text-gray-500">2017 - 2018</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Puesto</dt>
                            <dd class="mt-2 text-sm text-gray-500">Desarrollador-Estadia</dd>
                        </div>
                        
                    </dl>
                </div>
                <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                    <img src="{{ asset('/src/images/eric1.jpg')}}" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/eric2.jpg')}}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/eric3.jpg')}}" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
                    <img src="{{ asset('/src/images/eric4.jpg')}}" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
                </div>
            </div>
        </div>
    </body>
</html>