<template>
    <Head :title="title ? `${title} - ${$page.props.app.name}` : $page.props.app.name">
        <meta head-key="description" name="description" :content="description ? description : 'We sell pokemons to trainers who treat them well...'" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <slot />
    </Head>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
    },
    props: {
        title: String,
        description: String,
    },
}
</script>
