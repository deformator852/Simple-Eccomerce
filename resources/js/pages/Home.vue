<script lang="ts" setup>
import Product from '@/components/ui/Product.vue';
import { AppPageProps } from '@/types';
import type { Product as ProductType } from '@/types/product';
import { usePage } from '@inertiajs/vue3';

interface PageProps extends AppPageProps {
    products: ProductType[];
}

const { props } = usePage<PageProps>();
const products = props.products;
</script>
<template>
    <div
        class="grid min-h-36 w-full max-w-7xl min-w-1/12 grid-cols-1 gap-x-5 gap-y-5 md:grid-cols-3"
    >
        <Product
            v-for="product in products"
            :key="product.id"
            :product="product"
            class="w-full"
        >
        </Product>
    </div>
</template>

<style scoped></style>
