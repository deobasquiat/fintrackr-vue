<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    account: Object,
});
</script>

<template>
    <AppLayout title="Account">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ account.title }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <a
                            href=""
                            style="margin-right: 1.5rem; margin-left: 1rem"
                        >
                            Return
                        </a>

                        <a href="" style="margin-right: 1.5rem">
                            Add Transaction
                        </a>

                        <a href="" style="margin-right: 1.5rem"> Category </a>

                        <a href=""> Edit Account </a>
                    </div>

                    <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
                        <div>
                            <div class="flex items-center mb-4">
                                <h2
                                    class="ml-3 text-xl font-semibold text-gray-900"
                                >
                                    {{ account.title }}
                                </h2>
                            </div>
                            <div
                                class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8"
                            >
                                <div
                                    class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md"
                                >
                                    <p class="font-thin">Account Balance</p>
                                    <h1
                                        class="text-2xl"
                                        :class="{
                                            'text-red-500': accountTotal < 0,
                                            'text-green-500': accountTotal >= 0,
                                        }"
                                    >
                                        ${{ accountTotal }}
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="mt-16">
                            <div class="flex items-center mb-4">
                                <h2
                                    class="ml-3 text-xl font-semibold text-gray-900"
                                >
                                    Total by Category
                                </h2>
                            </div>

                            <div
                                class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8"
                            >
                                <div
                                    class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md"
                                >
                                    <p class="font-thin"></p>
                                    <h1 class="text-2xl"></h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
                        <div>
                            <div class="flex items-center mb-4">
                                <h2
                                    class="ml-3 text-xl font-semibold text-gray-900"
                                >
                                    Transactions
                                </h2>
                            </div>
                            <div
                                class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8"
                            >
                                <div
                                    class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md"
                                >
                                    <div>
                                        <p class="font-thin"></p>

                                        <div>
                                            <p
                                                class="inline-block text-xs text-gray-500 float-right"
                                            ></p>

                                            <p
                                                class="inline-block text-xs text-gray-500"
                                            ></p>
                                        </div>

                                        <h1 class="mt-2 text-2xl">$</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
