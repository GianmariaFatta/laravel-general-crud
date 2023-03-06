@include ('includes.alert')

@if($card->exists)
<form action="{{ route('cards.update', $card->id) }}" method="POST" novalidate>
    {{-- METODO PUT non esistente in HTML ma GESTITO del WEB MIDDLEWARE --}}
@method('PUT')
@else
    <form action="{{ route('cards.store') }}" method="POST" novalidate>
 @endif

     {{-- AUTORIZZO IL TOKEN CSRF  --}}
    @csrf
    {{-- ------------------------ --}}

    <div class="row">

        {{-- SE NEI VALUE degli input METTIAMO gli old mentianiamo
            i "vecchi campi" che c'erano altrimenti passiamo i nostri --}}

        {{-- NAME --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="name" class="form-label">Card name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name of new Card"
                value="{{ old('name', $card->name)}}" required>
            </div>
        </div>

        {{-- MANA-COST --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="mana_cost" class="form-label">Card Cost</label>
                <input name="mana_cost" type="number" min="1" max="5" step="1" class="form-control" id="mana_cost" placeholder="Mana Cost"
                value="{{ old('mana_cost', $card->mana_cost)}}" required>
            </div>
        </div>

         {{-- MANA-TYPE --}}
         <div class="col-6">
            <div class="mb-3">
                <label for="mana_type" class="form-label">Mana Type</label>
                <input name="mana_type" type="text" class="form-control" id="mana_type" placeholder="Mana Type"
                value="{{ old('mana_type', $card->mana_type)}}" required>
            </div>
        </div>
        
        {{-- THUMB --}}
        <div class="col-4">
            <div class="mb-3">
                <label for="thumb" class="form-label">Card Poster</label>
                <input name="thumb" type="url" class="form-control" id="thumb" placeholder="Url of new card Image" 
                value="{{ old('thumb', $card->thumb)}}" required>
            </div>
        </div>
        
        <div class="col-2">
            <p>Preview Image :</p>
            <img src="{{ old('thumb', $card->thumb ?? 'https://picsum.photos/seed/picsum/536/354') }}" id="preview"
                alt="preview" class="img-fluid">
        </div>

        {{-- TYPE --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="type" class="form-label">Card type</label>
                <input name="type" type="text" class="form-control" id="type" placeholder="type of new Card"
                value="{{ old('type', $card->type)}}" required>
            </div>
        </div>

        {{-- EDITION --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="edition" class="form-label">Card edition</label>
                <input name="edition" edition="text" class="form-control" id="edition" placeholder="edition of new Card"
                value="{{ old('edition', $card->edition)}}" required>
            </div>
        </div>

        {{-- EFFECT 1 --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="first_effect" class="form-label">First effect of new card</label>
                <textarea name="first_effect" id="first_effect" class="form-control"  cols="30">
                    {{ old('first_effect', $card->first_effect)}}
                </textarea>
            </div>
        </div>

        {{-- EFFECT 2 --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="second_effect" class="form-label">Second effect of new card</label>
                <textarea name="second_effect" id="second_effect" class="form-control"  cols="30">
                    {{ old('second_effect', $card->second_effect)}}
                </textarea>
            </div>
        </div>

        {{-- EFFECT 3 --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="third_effect" class="form-label">Third effect of new card</label>
                <textarea name="third_effect" id="third_effect" class="form-control"  cols="30">
                    {{ old('third_effect', $card->third_effect)}}
                </textarea>
            </div>
        </div>

        {{-- EFFECT 4 --}}
         <div class="col-6">
            <div class="mb-3">
                <label for="fourth_effect" class="form-label">Fourth effect of new card</label>
                <textarea name="fourth_effect" id="fourth_effect" class="form-control"  cols="30">
                    {{ old('fourth_effect', $card->fourth_effect)}}
                </textarea>
            </div>
        </div>

        {{-- DESCRIPTION --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="description" class="form-label">Description of new card</label>
                <textarea name="description" id="description" class="form-control"  cols="30">
                    {{ old('description', $card->description)}}
                </textarea required>
            </div>
        </div>

        {{-- STRENGTH --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="strength" class="form-label">Card strength</label>
                <input name="strength" type="number" min="1" max="10" step="1" class="form-control" id="strength" placeholder="strength"
                value="{{ old('strength', $card->strength)}}" required>
            </div>
        </div>

        {{-- CONSTITUTION --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="constitution" class="form-label">Card constitution</label>
                <input name="constitution" type="number" min="1" max="10" step="1" class="form-control" id="constitution" placeholder="constitution"
                value="{{ old('constitution', $card->constitution)}}" required>
            </div>
        </div>

    </div>

    {{-- BUTTON FOR SUBMIT --}}
    <div class="d-flex justify-content-end">
        <button class="btn btn-success my-3" type="submit">Save</button>
    </div>
</form>

