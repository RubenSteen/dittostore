<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
	<div class="bg-white">
		<Header />

		<main>
			<div class="relative bg-white overflow-hidden">
				<div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
					<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
						<div class="sm:max-w-lg">
							<h1 class="text-4xl font font-extrabold tracking-tight text-gray-900 sm:text-6xl">Summer styles are finally here</h1>
							<p class="mt-4 text-xl text-gray-500">
								This year, our new summer collection will shelter you from the harsh elements of a world that doesn't care if you live or die.
							</p>
						</div>
						<div>
							<div class="mt-10">
								<!-- Decorative image grid -->
								<div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
									<div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
										<div class="flex items-center space-x-6 lg:space-x-8">
											<div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
												<div class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100">
													<img
														src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg"
														alt=""
														class="w-full h-full object-center object-cover"
													/>
												</div>
												<div class="w-44 h-64 rounded-lg overflow-hidden">
													<img
														src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg"
														alt=""
														class="w-full h-full object-center object-cover"
													/>
												</div>
											</div>
											<div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
												<div class="w-44 h-64 rounded-lg overflow-hidden">
													<img
														src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg"
														alt=""
														class="w-full h-full object-center object-cover"
													/>
												</div>
												<div class="w-44 h-64 rounded-lg overflow-hidden">
													<img
														src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg"
														alt=""
														class="w-full h-full object-center object-cover"
													/>
												</div>
												<div class="w-44 h-64 rounded-lg overflow-hidden">
													<img
														src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg"
														alt=""
														class="w-full h-full object-center object-cover"
													/>
												</div>
											</div>
											<div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
												<div class="w-44 h-64 rounded-lg overflow-hidden">
													<img
														src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg"
														alt=""
														class="w-full h-full object-center object-cover"
													/>
												</div>
												<div class="w-44 h-64 rounded-lg overflow-hidden">
													<img
														src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg"
														alt=""
														class="w-full h-full object-center object-cover"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>

								<a
									href="#"
									class="inline-block text-center bg-indigo-600 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700"
									>Shop Collection</a
								>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Category section -->
			<section aria-labelledby="category-heading" class="bg-gray-50">
				<div class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
					<div class="sm:flex sm:items-baseline sm:justify-between">
						<h2 id="category-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by Category</h2>
						<a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block"
							>Browse all categories<span aria-hidden="true"> &rarr;</span></a
						>
					</div>

					<div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
						<div class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
							<img
								src="https://tailwindui.com/img/ecommerce-images/home-page-03-featured-category.jpg"
								alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee."
								class="object-center object-cover group-hover:opacity-75"
							/>
							<div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50" />
							<div class="p-6 flex items-end">
								<div>
									<h3 class="font-semibold text-white">
										<a href="#">
											<span class="absolute inset-0" />
											New Arrivals
										</a>
									</h3>
									<p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
								</div>
							</div>
						</div>
						<div class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:relative sm:aspect-none sm:h-full">
							<img
								src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg"
								alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters."
								class="object-center object-cover group-hover:opacity-75 sm:absolute sm:inset-0 sm:w-full sm:h-full"
							/>
							<div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0" />
							<div class="p-6 flex items-end sm:absolute sm:inset-0">
								<div>
									<h3 class="font-semibold text-white">
										<a href="#">
											<span class="absolute inset-0" />
											Accessories
										</a>
									</h3>
									<p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
								</div>
							</div>
						</div>
						<div class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:relative sm:aspect-none sm:h-full">
							<img
								src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg"
								alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk."
								class="object-center object-cover group-hover:opacity-75 sm:absolute sm:inset-0 sm:w-full sm:h-full"
							/>
							<div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0" />
							<div class="p-6 flex items-end sm:absolute sm:inset-0">
								<div>
									<h3 class="font-semibold text-white">
										<a href="#">
											<span class="absolute inset-0" />
											Workspace
										</a>
									</h3>
									<p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
								</div>
							</div>
						</div>
					</div>

					<div class="mt-6 sm:hidden">
						<a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500"
							>Browse all categories<span aria-hidden="true"> &rarr;</span></a
						>
					</div>
				</div>
			</section>

			<!-- Featured section -->
			<section aria-labelledby="cause-heading">
				<div class="relative bg-gray-800 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
					<div class="absolute inset-0 overflow-hidden">
						<img
							src="https://tailwindui.com/img/ecommerce-images/home-page-03-feature-section-full-width.jpg"
							alt=""
							class="w-full h-full object-center object-cover"
						/>
					</div>
					<div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50" />
					<div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
						<h2 id="cause-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Long-term thinking</h2>
						<p class="mt-3 text-xl text-white">
							We're committed to responsible, sustainable, and ethical manufacturing. Our small-scale approach allows us to focus on quality and reduce our
							impact. We're doing our best to delay the inevitable heat-death of the universe.
						</p>
						<a
							href="#"
							class="mt-8 w-full block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto"
							>Read our story</a
						>
					</div>
				</div>
			</section>

			<!-- Favorites section -->
			<section aria-labelledby="favorites-heading">
				<div class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
					<div class="sm:flex sm:items-baseline sm:justify-between">
						<h2 id="favorites-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Our Favorites</h2>
						<a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block"
							>Browse all favorites<span aria-hidden="true"> &rarr;</span></a
						>
					</div>

					<div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-3 sm:gap-y-0 sm:gap-x-6 lg:gap-x-8">
						<div v-for="favorite in favorites" :key="favorite.id" class="group relative">
							<div class="w-full h-96 rounded-lg overflow-hidden group-hover:opacity-75 sm:h-auto sm:aspect-w-2 sm:aspect-h-3">
								<img :src="favorite.imageSrc" :alt="favorite.imageAlt" class="w-full h-full object-center object-cover" />
							</div>
							<h3 class="mt-4 text-base font-semibold text-gray-900">
								<a :href="favorite.href">
									<span class="absolute inset-0" />
									{{ favorite.name }}
								</a>
							</h3>
							<p class="mt-1 text-sm text-gray-500">{{ favorite.price }}</p>
						</div>
					</div>

					<div class="mt-6 sm:hidden">
						<a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500"
							>Browse all favorites<span aria-hidden="true"> &rarr;</span></a
						>
					</div>
				</div>
			</section>

			<!-- CTA section -->
			<section aria-labelledby="sale-heading">
				<div class="pt-32 overflow-hidden sm:pt-14">
					<div class="bg-gray-800">
						<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
							<div class="relative pt-48 pb-16 sm:pb-24">
								<div>
									<h2 id="sale-heading" class="text-4xl font-extrabold tracking-tight text-white md:text-5xl">
										Final Stock.
										<br />
										Up to 50% off.
									</h2>
									<div class="mt-6 text-base">
										<a href="#" class="font-semibold text-white">Shop the sale<span aria-hidden="true"> &rarr;</span></a>
									</div>
								</div>

								<div class="absolute -top-32 left-1/2 transform -translate-x-1/2 sm:top-6 sm:translate-x-0">
									<div class="ml-24 flex space-x-6 min-w-max sm:ml-3 lg:space-x-8">
										<div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
											<div class="flex-shrink-0">
												<img
													class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
													src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg"
													alt=""
												/>
											</div>

											<div class="mt-6 flex-shrink-0 sm:mt-0">
												<img
													class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
													src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg"
													alt=""
												/>
											</div>
										</div>
										<div class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
											<div class="flex-shrink-0">
												<img
													class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
													src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg"
													alt=""
												/>
											</div>

											<div class="mt-6 flex-shrink-0 sm:mt-0">
												<img
													class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
													src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg"
													alt=""
												/>
											</div>
										</div>
										<div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
											<div class="flex-shrink-0">
												<img
													class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
													src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg"
													alt=""
												/>
											</div>

											<div class="mt-6 flex-shrink-0 sm:mt-0">
												<img
													class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
													src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg"
													alt=""
												/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer aria-labelledby="footer-heading" class="bg-white">
			<h2 id="footer-heading" class="sr-only">Footer</h2>
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
					<div class="grid grid-cols-2 gap-8 xl:col-span-2">
						<div class="space-y-16 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
							<div>
								<h3 class="text-sm font-medium text-gray-900">Shop</h3>
								<ul role="list" class="mt-6 space-y-6">
									<li v-for="item in footerNavigation.shop" :key="item.name" class="text-sm">
										<a :href="item.href" class="text-gray-500 hover:text-gray-600">
											{{ item.name }}
										</a>
									</li>
								</ul>
							</div>
							<div>
								<h3 class="text-sm font-medium text-gray-900">Company</h3>
								<ul role="list" class="mt-6 space-y-6">
									<li v-for="item in footerNavigation.company" :key="item.name" class="text-sm">
										<a :href="item.href" class="text-gray-500 hover:text-gray-600">
											{{ item.name }}
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="space-y-16 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
							<div>
								<h3 class="text-sm font-medium text-gray-900">Account</h3>
								<ul role="list" class="mt-6 space-y-6">
									<li v-for="item in footerNavigation.account" :key="item.name" class="text-sm">
										<a :href="item.href" class="text-gray-500 hover:text-gray-600">
											{{ item.name }}
										</a>
									</li>
								</ul>
							</div>
							<div>
								<h3 class="text-sm font-medium text-gray-900">Connect</h3>
								<ul role="list" class="mt-6 space-y-6">
									<li v-for="item in footerNavigation.connect" :key="item.name" class="text-sm">
										<a :href="item.href" class="text-gray-500 hover:text-gray-600">
											{{ item.name }}
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-16 md:mt-16 xl:mt-0">
						<h3 class="text-sm font-medium text-gray-900">Newsletter</h3>
						<p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
						<form v-show="!$page.props.flash.successNewsletter" class="mt-2 flex sm:max-w-md" @submit.prevent="newsletterSubmit">
							<label for="email-address" class="sr-only">Email address</label>
							<input
								v-model="newsletterForm.email"
								id="newsletter-email-address"
								type="email"
								autocomplete="email"
								class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-indigo-500 placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
							/>
							<div class="ml-4 flex-shrink-0">
								<button
									class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-75 disabled:focus:outline-none"
									:disabled="newsletterForm.processing"
									type="submit"
								>
									Subscribe
								</button>
							</div>
						</form>
						<p v-show="$page.props.flash.successNewsletter" class="mt-2 text-sm text-green-500">{{ $page.props.flash.successNewsletter }}</p>
					</div>
				</div>

				<div class="border-t border-gray-200 py-10">
					<p class="text-sm text-gray-500">Copyright &copy; 2021 Clothing Company Inc.</p>
				</div>
			</div>
		</footer>
	</div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3"
import Header from "@/Shared/Header"
import { ref } from "vue"
import {
	Dialog,
	DialogPanel,
	Popover,
	PopoverButton,
	PopoverGroup,
	PopoverPanel,
	Tab,
	TabGroup,
	TabList,
	TabPanel,
	TabPanels,
	TransitionChild,
	TransitionRoot
} from "@headlessui/vue"
import { MenuIcon, SearchIcon, ShoppingBagIcon, XIcon } from "@heroicons/vue/outline"

let newsletterForm = useForm({
	email: ""
})

let newsletterSubmit = () => {
	newsletterForm.post(route("newsletter"), {
		preserveScroll: true
	})

	newsletterForm.reset()
}

const navigation = {
	categories: [
		{
			id: "women",
			name: "Women",
			featured: [
				{
					name: "New Arrivals",
					href: "#",
					imageSrc: "https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg",
					imageAlt: "Models sitting back to back, wearing Basic Tee in black and bone."
				},
				{
					name: "Basic Tees",
					href: "#",
					imageSrc: "https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg",
					imageAlt: "Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
				}
			],
			sections: [
				{
					id: "clothing",
					name: "Clothing",
					items: [
						{ name: "Tops", href: "#" },
						{ name: "Dresses", href: "#" },
						{ name: "Pants", href: "#" },
						{ name: "Denim", href: "#" },
						{ name: "Sweaters", href: "#" },
						{ name: "T-Shirts", href: "#" },
						{ name: "Jackets", href: "#" },
						{ name: "Activewear", href: "#" },
						{ name: "Browse All", href: "#" }
					]
				},
				{
					id: "accessories",
					name: "Accessories",
					items: [
						{ name: "Watches", href: "#" },
						{ name: "Wallets", href: "#" },
						{ name: "Bags", href: "#" },
						{ name: "Sunglasses", href: "#" },
						{ name: "Hats", href: "#" },
						{ name: "Belts", href: "#" }
					]
				},
				{
					id: "brands",
					name: "Brands",
					items: [
						{ name: "Full Nelson", href: "#" },
						{ name: "My Way", href: "#" },
						{ name: "Re-Arranged", href: "#" },
						{ name: "Counterfeit", href: "#" },
						{ name: "Significant Other", href: "#" }
					]
				}
			]
		},
		{
			id: "men",
			name: "Men",
			featured: [
				{
					name: "New Arrivals",
					href: "#",
					imageSrc: "https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg",
					imageAlt: "Drawstring top with elastic loop closure and textured interior padding."
				},
				{
					name: "Artwork Tees",
					href: "#",
					imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg",
					imageAlt: "Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
				}
			],
			sections: [
				{
					id: "clothing",
					name: "Clothing",
					items: [
						{ name: "Tops", href: "#" },
						{ name: "Pants", href: "#" },
						{ name: "Sweaters", href: "#" },
						{ name: "T-Shirts", href: "#" },
						{ name: "Jackets", href: "#" },
						{ name: "Activewear", href: "#" },
						{ name: "Browse All", href: "#" }
					]
				},
				{
					id: "accessories",
					name: "Accessories",
					items: [
						{ name: "Watches", href: "#" },
						{ name: "Wallets", href: "#" },
						{ name: "Bags", href: "#" },
						{ name: "Sunglasses", href: "#" },
						{ name: "Hats", href: "#" },
						{ name: "Belts", href: "#" }
					]
				},
				{
					id: "brands",
					name: "Brands",
					items: [
						{ name: "Re-Arranged", href: "#" },
						{ name: "Counterfeit", href: "#" },
						{ name: "Full Nelson", href: "#" },
						{ name: "My Way", href: "#" }
					]
				}
			]
		}
	],
	pages: [
		{ name: "Company", href: "#" },
		{ name: "Stores", href: "#" }
	]
}
const favorites = [
	{
		id: 1,
		name: "Black Basic Tee",
		price: "$32",
		href: "#",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg",
		imageAlt: "Model wearing women's black cotton crewneck tee."
	},
	{
		id: 2,
		name: "Off-White Basic Tee",
		price: "$32",
		href: "#",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg",
		imageAlt: "Model wearing women's off-white cotton crewneck tee."
	},
	{
		id: 3,
		name: "Mountains Artwork Tee",
		price: "$36",
		href: "#",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-03.jpg",
		imageAlt: "Model wearing women's burgundy red crewneck artwork tee with small white triangle overlapping larger black triangle."
	}
]
const footerNavigation = {
	shop: [
		{ name: "Bags", href: "#" },
		{ name: "Tees", href: "#" },
		{ name: "Objects", href: "#" },
		{ name: "Home Goods", href: "#" },
		{ name: "Accessories", href: "#" }
	],
	company: [
		{ name: "Who we are", href: "#" },
		{ name: "Sustainability", href: "#" },
		{ name: "Press", href: "#" },
		{ name: "Careers", href: "#" },
		{ name: "Terms & Conditions", href: "#" },
		{ name: "Privacy", href: "#" }
	],
	account: [
		{ name: "Manage Account", href: "#" },
		{ name: "Returns & Exchanges", href: "#" },
		{ name: "Redeem a Gift Card", href: "#" }
	],
	connect: [
		{ name: "Contact Us", href: "#" },
		{ name: "Twitter", href: "#" },
		{ name: "Instagram", href: "#" },
		{ name: "Pinterest", href: "#" }
	]
}

const open = ref(false)
</script>
