<x-guest-layout>
    <form class="w-full" action="{{ route('alertes.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    Nom & Prénoms
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('prenom') is-invalid @enderror"
                    value="{{ old('prenom') }}" name="prenom" id="grid-city" type="text" placeholder="Jane">
                <div>
                    @error('prenom')
                        <div class="invalid-feedback text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Numéro
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('numero') is-invalid @enderror"
                    value="{{ old('numero') }}" name="numero" id="grid-last-name" type="text" placeholder="Doe">
                <div>
                    @error('numero')
                        <div class="invalid-feedback text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Activité
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('activite') is-invalid @enderror"
                        value="{{ old('activite') }}" id="grid-state" name="activite_id">
                        @foreach ($activites as $jobs)
                            <option value="{{ $jobs->id }}"> {{ $jobs->activite }} </option>
                        @endforeach
                    </select>

                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-3">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Message
                </label>
                <textarea name="message" value="{{ old('message') }}" class="@error('message') is-invalid @enderror resize rounded-md block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
            </div>
        </div>

        <div>
            <button type="submit"
                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">
                Enregistrer
            </button>
        </div>
    </form>
</x-guest-layout>
