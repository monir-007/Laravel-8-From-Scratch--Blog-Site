<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-5 bg-gray-100 border border-gray-200 p-10 rounded-xl">

            <style>
                .-z-1 {
                    z-index: -1;
                }

                .origin-0 {
                    transform-origin: 0%;
                }

                input:focus ~ label,
                input:not(:placeholder-shown) ~ label,
                textarea:focus ~ label,
                textarea:not(:placeholder-shown) ~ label,
                select:focus ~ label,
                select:not([value='']):valid ~ label {
                    --tw-translate-x: 0;
                    --tw-translate-y: 0;
                    --tw-rotate: 0;
                    --tw-skew-x: 0;
                    --tw-skew-y: 0;
                    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                    --tw-scale-x: 0.75;
                    --tw-scale-y: 0.75;
                    --tw-translate-y: -1.5rem;
                }

                input:focus ~ label,
                select:focus ~ label {
                    --tw-text-opacity: 1;
                    color: rgba(0, 0, 0, var(--tw-text-opacity));
                    left: 0px;
                }
            </style>


            <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
                <h1 class="text-2xl font-bold mb-8">Registration</h1>
                <form method="POST" action="/registration" novalidate>
                    @csrf

                    <div class="relative z-0 w-full mb-5">
                        <input
                            type="text"
                            name="name"
                            placeholder=" "
                            required
                            value="{{old('name')}}"
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                        />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter
                            name</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input
                            type="text"
                            name="username"
                            placeholder=" "
                            required
                            value="{{old('username')}}"
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                        />
                        <label for="username" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter
                            Username</label>
                    </div>

                    <div class="relative z-0 w-full mb-5">
                        <input
                            type="email"
                            name="email"
                            placeholder=" "
                            required
                            value="{{old('email')}}"
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                        />
                        <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter email
                            address</label>
                    </div>

                    <div class="relative z-0 w-full mb-5">
                        <input
                            type="password"
                            name="password"
                            placeholder=" "
                            required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                        />
                        <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter
                            password</label>
                    </div>

                    <button
                        type="submit"
                        class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none"
                    >
                        Sign In
                    </button>
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-red-500 text-xs">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                </form>
            </div>


            {{--            <script>--}}
            {{--                'use strict'--}}

            {{--                document.getElementById('button').addEventListener('click', toggleError)--}}
            {{--                const errMessages = document.querySelectorAll('#error')--}}

            {{--                function toggleError() {--}}
            {{--                    errMessages.forEach((el) => {--}}
            {{--                        el.classList.toggle('hidden')--}}
            {{--                    })--}}

            {{--                    const allBorders = document.querySelectorAll('.border-gray-200')--}}
            {{--                    const allTexts = document.querySelectorAll('.text-gray-500')--}}
            {{--                    allBorders.forEach((el) => {--}}
            {{--                        el.classList.toggle('border-red-600')--}}
            {{--                    })--}}
            {{--                    allTexts.forEach((el) => {--}}
            {{--                        el.classList.toggle('text-red-600')--}}
            {{--                    })--}}
            {{--                }--}}
            {{--            </script>--}}
        </main>
    </section>
</x-layout>
