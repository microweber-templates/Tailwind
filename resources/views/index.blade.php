<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 1
  description: Home
*/


?>
@extends('templates.tailwind::layouts.master')

@section('content')

    <main class="flex-1">
        <!-- Hero Section -->
        <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48">
            <div class="container mx-auto px-4 md:px-6">
                <div class="grid gap-6 lg:grid-cols-[1fr_600px] lg:gap-12 xl:grid-cols-[1fr_800px]">
                    <div class="flex flex-col justify-center space-y-4">
                        <div class="space-y-2">
                            <h1 class="text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none">
                                Build Your Website Without Coding
                            </h1>
                            <p class="max-w-[600px] text-gray-500 md:text-xl">
                                Microweber is an open-source CMS and website builder that lets you create beautiful websites, online stores, and blogs without technical skills.
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 min-[400px]:flex-row">
                            <a href="#" class="inline-flex items-center justify-center rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Start Building
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4">
                                    <path d="M5 12h14"/>
                                    <path d="m12 5 7 7-7 7"/>
                                </svg>
                            </a>
                            <a href="#" class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                View Templates
                            </a>
                        </div>
                    </div>
                    <div class="mx-auto w-full max-w-[800px] aspect-video overflow-hidden rounded-xl border bg-gray-100">
                        <img
                            src="https://placehold.co/800x450/f3f4f6/a3a3a3?text=Microweber+Dashboard"
                            alt="Microweber dashboard preview"
                            class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-50">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col items-center justify-center space-y-4 text-center">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">
                            Everything You Need to Build Amazing Websites
                        </h2>
                        <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl">
                            Powerful features that make website creation simple, flexible, and enjoyable.
                        </p>
                    </div>
                </div>
                <div class="mx-auto grid max-w-5xl gap-8 py-12 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="flex flex-col items-center space-y-2 rounded-lg border p-6 shadow-sm bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 text-blue-600">
                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"/>
                            <line x1="3" x2="21" y1="9" y2="9"/>
                            <line x1="9" x2="9" y1="21" y2="9"/>
                        </svg>
                        <h3 class="text-xl font-bold">Drag & Drop Editor</h3>
                        <p class="text-center text-gray-500">
                            Build your website visually with an intuitive drag and drop interface.
                        </p>
                    </div>
                    <!-- Feature 2 -->
                    <div class="flex flex-col items-center space-y-2 rounded-lg border p-6 shadow-sm bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 text-blue-600">
                            <circle cx="8" cy="21" r="1"/>
                            <circle cx="19" cy="21" r="1"/>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
                        </svg>
                        <h3 class="text-xl font-bold">E-commerce Ready</h3>
                        <p class="text-center text-gray-500">
                            Create an online store with powerful shopping cart and payment options.
                        </p>
                    </div>
                    <!-- Feature 3 -->
                    <div class="flex flex-col items-center space-y-2 rounded-lg border p-6 shadow-sm bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 text-blue-600">
                            <circle cx="13.5" cy="6.5" r="2.5"/>
                            <circle cx="19" cy="17" r="2"/>
                            <circle cx="6" cy="12" r="2.5"/>
                            <path d="M14 7.5a2 2 0 0 0-4 0v1a2 2 0 0 0 4 0Z"/>
                            <path d="M18 14.5a2 2 0 0 0-4 0v1a2 2 0 0 0 4 0Z"/>
                            <path d="M6.5 9.5a2 2 0 0 0-4 0v1a2 2 0 0 0 4 0Z"/>
                        </svg>
                        <h3 class="text-xl font-bold">Beautiful Templates</h3>
                        <p class="text-center text-gray-500">
                            Choose from hundreds of professionally designed templates.
                        </p>
                    </div>
                    <!-- Feature 4 -->
                    <div class="flex flex-col items-center space-y-2 rounded-lg border p-6 shadow-sm bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 text-blue-600">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
                            <path d="M2 12h20"/>
                        </svg>
                        <h3 class="text-xl font-bold">Multilingual</h3>
                        <p class="text-center text-gray-500">
                            Create websites in multiple languages with built-in translation tools.
                        </p>
                    </div>
                    <!-- Feature 5 -->
                    <div class="flex flex-col items-center space-y-2 rounded-lg border p-6 shadow-sm bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 text-blue-600">
                            <ellipse cx="12" cy="5" rx="9" ry="3"/>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                            <path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"/>
                        </svg>
                        <h3 class="text-xl font-bold">Custom Fields</h3>
                        <p class="text-center text-gray-500">
                            Create custom content types and fields for your specific needs.
                        </p>
                    </div>
                    <!-- Feature 6 -->
                    <div class="flex flex-col items-center space-y-2 rounded-lg border p-6 shadow-sm bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 text-blue-600">
                            <polyline points="16 18 22 12 16 6"/>
                            <polyline points="8 6 2 12 8 18"/>
                        </svg>
                        <h3 class="text-xl font-bold">Developer Friendly</h3>
                        <p class="text-center text-gray-500">
                            Extend functionality with modules, themes, and custom code.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Showcase Section -->
        <section class="w-full py-12 md:py-24 lg:py-32">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col items-center justify-center space-y-4 text-center">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">
                            Websites Built With Microweber
                        </h2>
                        <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl">
                            See what's possible with our powerful website builder.
                        </p>
                    </div>
                </div>
                <div class="mx-auto grid max-w-5xl gap-8 py-12 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Website Example 1 -->
                    <div class="overflow-hidden rounded-lg border shadow-sm">
                        <div class="aspect-video w-full overflow-hidden">
                            <img
                                src="https://placehold.co/400x200/f3f4f6/a3a3a3?text=Website+1"
                                alt="Website example 1"
                                class="h-full w-full object-cover transition-all hover:scale-105"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold">Website Example 1</h3>
                            <p class="text-sm text-gray-500">Business / Portfolio / E-commerce</p>
                        </div>
                    </div>
                    <!-- Website Example 2 -->
                    <div class="overflow-hidden rounded-lg border shadow-sm">
                        <div class="aspect-video w-full overflow-hidden">
                            <img
                                src="https://placehold.co/400x200/f3f4f6/a3a3a3?text=Website+2"
                                alt="Website example 2"
                                class="h-full w-full object-cover transition-all hover:scale-105"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold">Website Example 2</h3>
                            <p class="text-sm text-gray-500">Business / Portfolio / E-commerce</p>
                        </div>
                    </div>
                    <!-- Website Example 3 -->
                    <div class="overflow-hidden rounded-lg border shadow-sm">
                        <div class="aspect-video w-full overflow-hidden">
                            <img
                                src="https://placehold.co/400x200/f3f4f6/a3a3a3?text=Website+3"
                                alt="Website example 3"
                                class="h-full w-full object-cover transition-all hover:scale-105"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold">Website Example 3</h3>
                            <p class="text-sm text-gray-500">Business / Portfolio / E-commerce</p>
                        </div>
                    </div>
                    <!-- Website Example 4 -->
                    <div class="overflow-hidden rounded-lg border shadow-sm">
                        <div class="aspect-video w-full overflow-hidden">
                            <img
                                src="https://placehold.co/400x200/f3f4f6/a3a3a3?text=Website+4"
                                alt="Website example 4"
                                class="h-full w-full object-cover transition-all hover:scale-105"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold">Website Example 4</h3>
                            <p class="text-sm text-gray-500">Business / Portfolio / E-commerce</p>
                        </div>
                    </div>
                    <!-- Website Example 5 -->
                    <div class="overflow-hidden rounded-lg border shadow-sm">
                        <div class="aspect-video w-full overflow-hidden">
                            <img
                                src="https://placehold.co/400x200/f3f4f6/a3a3a3?text=Website+5"
                                alt="Website example 5"
                                class="h-full w-full object-cover transition-all hover:scale-105"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold">Website Example 5</h3>
                            <p class="text-sm text-gray-500">Business / Portfolio / E-commerce</p>
                        </div>
                    </div>
                    <!-- Website Example 6 -->
                    <div class="overflow-hidden rounded-lg border shadow-sm">
                        <div class="aspect-video w-full overflow-hidden">
                            <img
                                src="https://placehold.co/400x200/f3f4f6/a3a3a3?text=Website+6"
                                alt="Website example 6"
                                class="h-full w-full object-cover transition-all hover:scale-105"
                            />
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold">Website Example 6</h3>
                            <p class="text-sm text-gray-500">Business / Portfolio / E-commerce</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        View More Examples
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-50">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col items-center justify-center space-y-4 text-center">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">
                            Trusted by Thousands
                        </h2>
                        <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl">
                            See what our users have to say about Microweber.
                        </p>
                    </div>
                </div>
                <div class="mx-auto grid max-w-5xl gap-8 py-12 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Testimonial 1 -->
                    <div class="flex flex-col justify-between space-y-4 rounded-lg border bg-white p-6 shadow-sm">
                        <div class="space-y-2">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500">
                                "Microweber made it so easy to build my business website. I had no coding experience but was able to create a professional site in just a few days."
                            </p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="rounded-full bg-gray-100 p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-blue-600">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold">Customer 1</h3>
                                <p class="text-sm text-gray-500">Small Business Owner</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="flex flex-col justify-between space-y-4 rounded-lg border bg-white p-6 shadow-sm">
                        <div class="space-y-2">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500">
                                "The e-commerce features are fantastic. Setting up my online store was straightforward, and the payment integration works flawlessly."
                            </p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="rounded-full bg-gray-100 p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-blue-600">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold">Customer 2</h3>
                                <p class="text-sm text-gray-500">Online Shop Owner</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="flex flex-col justify-between space-y-4 rounded-lg border bg-white p-6 shadow-sm">
                        <div class="space-y-2">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-yellow-500">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500">
                                "As a freelancer, I can now build client websites in a fraction of the time. The templates are modern and the customization options are endless."
                            </p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="rounded-full bg-gray-100 p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-blue-600">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold">Customer 3</h3>
                                <p class="text-sm text-gray-500">Web Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="w-full py-12 md:py-24 lg:py-32">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col items-center justify-center space-y-4 text-center">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">
                            Ready to Build Your Website?
                        </h2>
                        <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl">
                            Get started with Microweber today and create a website you'll be proud of.
                        </p>
                    </div>
                    <div class="flex flex-col gap-2 min-[400px]:flex-row">
                        <a href="#" class="inline-flex items-center justify-center rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Start for Free
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            View Pricing
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="edit main-content" data-layout-container rel="content" field="content">


        <module type="layouts" template="header/skin-1"/>
        <module type="layouts" template="features/skin-4"/>
        <module type="layouts" template="content/skin-2"/>
        <module type="layouts" template="features/skin-3"/>
        <module type="layouts" template="content/skin-11"/>
        <module type="layouts" template="blog/skin-1"/>
        <module type="layouts" template="content/skin-13-mirror"/>
        <module type="layouts" template="design/skin-8"/>
        <module type="layouts" template="content/skin-4"/>
        <module type="layouts" template="text-block/skin-4"/>
    </div>
@endsection
