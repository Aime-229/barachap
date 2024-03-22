<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier l\'employée') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="w-full" action="{{route('employee.update',$employees->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                Nom
                              </label>
                              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('nom') is-invalid @enderror"
                              value="{{ $employees->nom }}" name="nom" id="grid-city" type="text" placeholder="Jane">
                                <div>
                                    @error('nom')
                                        <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                Prenoms
                              </label>
                              <input value="{{ $employees->prenom }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" name="prenom" id="grid-last-name" type="text" placeholder="Doe">
                              <div>
                                @error('prenom')
                                    <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                @enderror
                              </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                Profil
                              </label>
                              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('profil') is-invalid @enderror" value="{{ old('profil') }}" name="profil" id="grid-zip" type="file">
                              <div>
                                @error('profil')
                                    <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                  Activité
                                </label>
                                <div class="relative">
                                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('activite_id') is-invalid @enderror" value="{{ old('activite_id') }}" id="grid-state" name="activite_id">
                                    @foreach ($employees->activite('activite_id')->get() as $employee)
                                        <option value="{{ $employee->id }}"> {{ $employee->activite }} </option>    
                                    @endforeach
                                  </select>
                                  
                                </div>
                              </div>
                            <div class="w-full md:w-1/2 px-3">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Salaire
                              </label>
                              <input value="{{ $employees->salaire }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('salaire') is-invalid @enderror" id="grid-last-name" value="{{ old('salaire') }}" name="salaire" type="text" placeholder="Salaire">
                              <div>
                                @error('salaire')
                                    <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                        </div>
                        
    
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                Date de naissance
                              </label>
                              <input value="{{ $employees->datenaissance }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('datenaissance') is-invalid @enderror" id="grid-city" value="{{ old('datenaissance') }}" name="datenaissance" type="date">
                              <div>
                                @error('datenaissance')
                                    <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                Résidence
                              </label>
                              <input value="{{ $employees->residence }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('residence') is-invalid @enderror" id="grid-last-name" value="{{ old('residence') }}" name="residence" type="text" placeholder="Yop">
                              <div>
                                @error('residence')
                                    <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                Numéro
                              </label>
                              <input value="{{ $employees->numero }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('numero') is-invalid @enderror" id="grid-zip" value="{{ old('numero') }}" name="numero" type="text" placeholder="61759048">
                              <div>
                                @error('numero')
                                    <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Personne à contacter
                              </label>
                              <input value="{{ $employees->personneacontacter }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('personneacontacter') is-invalid @enderror" id="grid-last-name" value="{{ old('personneacontacter') }}" name="personneacontacter" type="text" placeholder="Jane">
                              <div>
                                @error('personneacontacter')
                                    <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Numéro
                              </label>
                              <input value="{{ $employees->numeropersonne }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('numeropersonne') is-invalid @enderror" id="grid-last-name" value="{{ old('numeropersonne') }}" name="numeropersonne" type="text" placeholder="90210">
                              <div>
                                @error('numeropersonne')
                                    <div class="invalid-feedback text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                          </div>
                        <div>
                            <button type="submit" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">
                                Modifier
                            </button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
