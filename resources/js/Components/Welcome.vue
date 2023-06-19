<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

const props = defineProps({
    totalAccounts: Number,
    overallTotal: Number,
});
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />

            <p class="mt-6 text-gray-500 leading-relaxed">
                FinTrackr is a lightweight personal finance management app for
                tracking debits, credits, and expenses with visually pleasing
                dynamic charts.
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
            <div>
                <div class="flex items-center mb-4">
                    <h2 class="ml-3 text-xl font-semibold text-gray-900">
                        <a>Dashboard</a>
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div
                        class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md"
                    >
                        <p class="font-thin">Total Accounts</p>
                        <h1 class="text-2xl mt-2 font-black">
                            {{ totalAccounts }}
                        </h1>
                    </div>

                    <div
                        class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md"
                    >
                        <p class="font-thin">Overall Balance</p>
                        <h1
                            class="text-2xl"
                            :class="{
                                'text-red-500': overallTotal < 0,
                                'text-green-500': overallTotal >= 0,
                            }"
                        >
                            ${{ overallTotal }}
                        </h1>
                    </div>
                </div>
                <div
                    class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md mt-8"
                >
                    <p class="font-thin">Analytics</p>
                    <h1 class="text-2xl">Placeholder for the Pie Chart</h1>
                </div>
            </div>
        </div>
    </div>
</template>
