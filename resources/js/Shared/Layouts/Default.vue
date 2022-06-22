<template>
	<div class="bg-white">
		<Header />

		<slot />

		<Footer />
	</div>
</template>

<script setup>
import Header from "@/Shared/Header"
import Footer from "@/Shared/Footer"
</script>
