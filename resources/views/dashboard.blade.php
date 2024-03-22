<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-wrap -mx-3 mb-6 mt-7">
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <div class="max-w-sm rounded overflow-hidden bg-blue-600 shadow-lg">
                                <div class="px-6 py-4">
                                  <div class="font-bold text-white text-xl mb-2">Total Activité</div>
                                  <p class="text-white text-base">
                                    {{ count($activites) }}
                                  </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <div class="px-6 py-4">
                                  <div class="font-bold text-xl mb-2">Total Employée</div>
                                  <p class="text-gray-700 text-base">
                                    {{ count($employees) }}
                                  </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <div class="max-w-sm rounded overflow-hidden bg-green-800 shadow-lg">
                                <div class="px-6 py-4">
                                  <div class="font-bold text-white text-xl mb-2">Placements</div>
                                  <p class="text-white text-base">
                                    {{ count($placements) }}
                                  </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <div class="px-6 py-4">
                                  <div class="font-bold text-xl mb-2">Alertes</div>
                                  <p class="text-gray-700 text-base">
                                    {{ count($alertes) }}
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
