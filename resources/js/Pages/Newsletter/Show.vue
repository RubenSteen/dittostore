<template>
	<Head title="Unsubscribe Newsletter" />

	<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
		<div class="relative max-w-xl mx-auto">
			<svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
				<defs>
					<pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
						<rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
					</pattern>
				</defs>
				<rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
			</svg>
			<svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
				<defs>
					<pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
						<rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
					</pattern>
				</defs>
				<rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
			</svg>
			<div class="text-center">
				<h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Unsubscribe</h2>
				<p class="mt-4 text-lg leading-6 text-gray-500">Are you sure you want to <b>unsubscribe</b> from our newsletter?</p>
			</div>
			<div class="mt-12">
				<form @submit.prevent="submit" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
					<div class="sm:col-span-2">
						<button
							:disabled="form.processing"
							type="submit"
							class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
						>
							Confirm
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3"

const props = defineProps({
	id: {
		type: String,
		required: true
	}
})

let form = useForm({
	id: props.id
})

let submit = () => {
	form.delete(route("newsletter"))
}
</script>
