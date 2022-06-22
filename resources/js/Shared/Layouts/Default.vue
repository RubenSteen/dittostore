<template>
	<div class="bg-white">
		<Header />

		<main>
			<slot />
		</main>

		<Footer />
	</div>
</template>

<script setup>
import Header from "@/Shared/Header"
import Footer from "@/Shared/Footer"
</script>
