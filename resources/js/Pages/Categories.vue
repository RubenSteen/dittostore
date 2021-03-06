<template>
	<Head title="Categories" />

	<div>
		<!-- Mobile filter dialog -->
		<TransitionRoot as="template" :show="mobileFiltersOpen">
			<Dialog as="div" class="relative z-40 lg:hidden" @close="mobileFiltersOpen = false">
				<TransitionChild
					as="template"
					enter="transition-opacity ease-linear duration-300"
					enter-from="opacity-0"
					enter-to="opacity-100"
					leave="transition-opacity ease-linear duration-300"
					leave-from="opacity-100"
					leave-to="opacity-0"
				>
					<div class="fixed inset-0 bg-black bg-opacity-25" />
				</TransitionChild>

				<div class="fixed inset-0 flex z-40">
					<TransitionChild
						as="template"
						enter="transition ease-in-out duration-300 transform"
						enter-from="translate-x-full"
						enter-to="translate-x-0"
						leave="transition ease-in-out duration-300 transform"
						leave-from="translate-x-0"
						leave-to="translate-x-full"
					>
						<DialogPanel class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-6 flex flex-col overflow-y-auto">
							<div class="px-4 flex items-center justify-between">
								<h2 class="text-lg font-medium text-gray-900">Filters</h2>
								<button
									type="button"
									class="-mr-2 w-10 h-10 p-2 flex items-center justify-center text-gray-400 hover:text-gray-500"
									@click="mobileFiltersOpen = false"
								>
									<span class="sr-only">Close menu</span>
									<XIcon class="h-6 w-6" aria-hidden="true" />
								</button>
							</div>

							<!-- Filters -->
							<form class="mt-4">
								<Disclosure as="div" v-for="section in filters" :key="section.name" class="border-t border-gray-200 pt-4 pb-4" v-slot="{ open }">
									<fieldset>
										<legend class="w-full px-2">
											<DisclosureButton class="w-full p-2 flex items-center justify-between text-gray-400 hover:text-gray-500">
												<span class="text-sm font-medium text-gray-900">
													{{ section.name }}
												</span>
												<span class="ml-6 h-7 flex items-center">
													<ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-5 w-5 transform']" aria-hidden="true" />
												</span>
											</DisclosureButton>
										</legend>
										<DisclosurePanel class="pt-4 pb-2 px-4">
											<div class="space-y-6">
												<div v-for="(option, optionIdx) in section.options" :key="option.value" class="flex items-center">
													<input
														:id="`${section.id}-${optionIdx}-mobile`"
														:name="`${section.id}[]`"
														:value="option.value"
														type="checkbox"
														class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500"
													/>
													<label :for="`${section.id}-${optionIdx}-mobile`" class="ml-3 text-sm text-gray-500">
														{{ option.label }}
													</label>
												</div>
											</div>
										</DisclosurePanel>
									</fieldset>
								</Disclosure>
							</form>
						</DialogPanel>
					</TransitionChild>
				</div>
			</Dialog>
		</TransitionRoot>

		<main class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
			<div class="border-b border-gray-200 pb-10">
				<h1 class="text-4xl font-extrabold tracking-tight text-gray-900">New Arrivals</h1>
				<p class="mt-4 text-base text-gray-500">Checkout out the latest release of Basic Tees, new and improved with four openings!</p>
			</div>

			<div class="pt-12 pb-24 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
				<aside>
					<h2 class="sr-only">Filters</h2>

					<button type="button" class="inline-flex items-center lg:hidden" @click="mobileFiltersOpen = true">
						<span class="text-sm font-medium text-gray-700">Filters</span>
						<PlusSmIcon class="flex-shrink-0 ml-1 h-5 w-5 text-gray-400" aria-hidden="true" />
					</button>

					<div class="hidden lg:block">
						<form class="divide-y divide-gray-200 space-y-10">
							<div v-for="(section, sectionIdx) in filters" :key="section.name" :class="sectionIdx === 0 ? null : 'pt-10'">
								<fieldset>
									<legend class="block text-sm font-medium text-gray-900">
										{{ section.name }}
									</legend>
									<div class="pt-6 space-y-3">
										<div v-for="(option, optionIdx) in section.options" :key="option.value" class="flex items-center">
											<input
												:id="`${section.id}-${optionIdx}`"
												:name="`${section.id}[]`"
												:value="option.value"
												type="checkbox"
												class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500"
											/>
											<label :for="`${section.id}-${optionIdx}`" class="ml-3 text-sm text-gray-600">
												{{ option.label }}
											</label>
										</div>
									</div>
								</fieldset>
							</div>
						</form>
					</div>
				</aside>

				<section aria-labelledby="product-heading" class="mt-6 lg:mt-0 lg:col-span-2 xl:col-span-3">
					<h2 id="product-heading" class="sr-only">Products</h2>

					<div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
						<div v-for="product in products" :key="product.id" class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden">
							<div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-96">
								<img :src="product.imageSrc" :alt="product.imageAlt" class="w-full h-full object-center object-cover sm:w-full sm:h-full" />
							</div>
							<div class="flex-1 p-4 space-y-2 flex flex-col">
								<h3 class="text-sm font-medium text-gray-900">
									<a :href="product.href">
										<span aria-hidden="true" class="absolute inset-0" />
										{{ product.name }}
									</a>
								</h3>
								<p class="text-sm text-gray-500">{{ product.description }}</p>
								<div class="flex-1 flex flex-col justify-end">
									<p class="text-sm italic text-gray-500">{{ product.options }}</p>
									<p class="text-base font-medium text-gray-900">{{ product.price }}</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main>
	</div>
</template>

<script setup>
import { ref } from "vue"
import {
	Dialog,
	DialogPanel,
	Disclosure,
	DisclosureButton,
	DisclosurePanel,
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
import { ChevronDownIcon, PlusSmIcon } from "@heroicons/vue/solid"

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
const breadcrumbs = [{ id: 1, name: "Men", href: "#" }]
const filters = [
	{
		id: "color",
		name: "Color",
		options: [
			{ value: "white", label: "White" },
			{ value: "beige", label: "Beige" },
			{ value: "blue", label: "Blue" },
			{ value: "brown", label: "Brown" },
			{ value: "green", label: "Green" },
			{ value: "purple", label: "Purple" }
		]
	},
	{
		id: "category",
		name: "Category",
		options: [
			{ value: "new-arrivals", label: "All New Arrivals" },
			{ value: "tees", label: "Tees" },
			{ value: "crewnecks", label: "Crewnecks" },
			{ value: "sweatshirts", label: "Sweatshirts" },
			{ value: "pants-shorts", label: "Pants & Shorts" }
		]
	},
	{
		id: "sizes",
		name: "Sizes",
		options: [
			{ value: "xs", label: "XS" },
			{ value: "s", label: "S" },
			{ value: "m", label: "M" },
			{ value: "l", label: "L" },
			{ value: "xl", label: "XL" },
			{ value: "2xl", label: "2XL" }
		]
	}
]
const products = [
	{
		id: 1,
		name: "Basic Tee 8-Pack",
		href: "#",
		price: "$256",
		description: "Get the full lineup of our Basic Tees. Have a fresh shirt all week, and an extra for laundry day.",
		options: "8 colors",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg",
		imageAlt: "Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green."
	},
	{
		id: 2,
		name: "Basic Tee",
		href: "#",
		price: "$32",
		description: "Look like a visionary CEO and wear the same black t-shirt every day.",
		options: "Black",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg",
		imageAlt: "Front of plain black t-shirt."
	},
	{
		id: 2,
		name: "Basic Tee",
		href: "#",
		price: "$32",
		description: "Look like a visionary CEO and wear the same black t-shirt every day.",
		options: "Black",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg",
		imageAlt: "Front of plain black t-shirt."
	},
	{
		id: 2,
		name: "Basic Tee",
		href: "#",
		price: "$32",
		description: "Look like a visionary CEO and wear the same black t-shirt every day.",
		options: "Black",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg",
		imageAlt: "Front of plain black t-shirt."
	},
	{
		id: 2,
		name: "Basic Tee",
		href: "#",
		price: "$32",
		description: "Look like a visionary CEO and wear the same black t-shirt every day.",
		options: "Black",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg",
		imageAlt: "Front of plain black t-shirt."
	},
	{
		id: 2,
		name: "Basic Tee",
		href: "#",
		price: "$32",
		description: "Look like a visionary CEO and wear the same black t-shirt every day.",
		options: "Black",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg",
		imageAlt: "Front of plain black t-shirt."
	},
	{
		id: 2,
		name: "Basic Tee",
		href: "#",
		price: "$32",
		description: "Look like a visionary CEO and wear the same black t-shirt every day.",
		options: "Black",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg",
		imageAlt: "Front of plain black t-shirt."
	},
	{
		id: 2,
		name: "Basic Tee",
		href: "#",
		price: "$32",
		description: "Look like a visionary CEO and wear the same black t-shirt every day.",
		options: "Black",
		imageSrc: "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg",
		imageAlt: "Front of plain black t-shirt."
	}
]

const mobileMenuOpen = ref(false)
const mobileFiltersOpen = ref(false)
</script>
