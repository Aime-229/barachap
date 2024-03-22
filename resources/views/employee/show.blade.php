<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails sur l\'employée '.$employeesDetails->nom.' '.$employeesDetails->prenom) }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <img class="w-full object-cover md:h-auto" src="{{ Storage::url($employeesDetails->profil) }}" alt="Profil de lemployée">
                        </div>
                        <div class="w-full md:w-1/2 px-3 align-text-top">
                          <div class="mb-2">
                            <p>Nom : {{$employeesDetails->nom}} </p>
                          </div>
                          <div class="mb-2">
                            <p>Prénom : {{$employeesDetails->prenom}} </p>
                          </div>
                          <div class="mb-2">
                            <p>Numéro : {{$employeesDetails->numero}} </p>
                          </div>
                          <div class="mb-2">
                            <p>Date de Naissance : <span>{{$employeesDetails->datenaissance}}</span></p>
                          </div>
                          <div class="mb-2">
                            <p>Activité : {{$employeesDetails->activite()->value('activite')}} </p>
                          </div>
                          <div class="mb-2">
                            <p>Résidence : {{$employeesDetails->residence}} </p>
                          </div>
                          <div class="mb-2">
                            <p>Personne à contacter : {{$employeesDetails->personneacontacter}} </p>
                          </div>
                          <div class="mb-2">
                            <p>Téléphone de la personne : <span class="inline-flex items-center rounded-md bg-blue-500 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">{{$employeesDetails->numeropersonne}}</span>  </p>
                          </div>
                          <div class="flex flex-wrap -mx-3 mb-6 mt-7">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <button x-data=""
                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                        class="bg-red-700 text-white py-1 px-2 rounded-md">Supprimer</button>

                                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                        <form method="post"
                                            action="{{route('employee.destroy',$employeesDetails->id)}}"
                                            class="p-6">
                                            @csrf
                                            @method('delete')

                                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                                Voulez-vous vraiment supprimé cet employé(e) ?
                                            </h2>

                                            <div class="mt-6 flex justify-end">
                                                <x-secondary-button x-on:click="$dispatch('close')">
                                                    Annuler
                                                </x-secondary-button>

                                                <x-danger-button class="ml-3 bg-red-500">
                                                    Supprimer
                                                </x-danger-button>
                                            </div>
                                        </form>
                                    </x-modal>
                            </div>

                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <a href="{{route('placement.create',$employeesDetails->id)}}" class="font-medium text-white dark:text-orange-500 bg-orange-500 hover:bg-orange-600 py-2 px-4 rounded">Gérer le placement</a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
