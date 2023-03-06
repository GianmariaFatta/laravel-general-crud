@extends('layouts.main')

@section('title', 'CARDS')

@section('content')

    @include ('includes.alert')

    <section id="contents-space" class="container">

        <div class="row my-5 g-5 justify-content-between">
            <div class="d-flex justify-content-between" >
                <h1>Cards List</h1>
                <a class="btn btn-primary m-3" href="{{ route('cards.create')}}">Add Card</a>
            </div>
            
            <div id="list-card" class="d-flex flex-wrap">
                @foreach ($cards as $card)
                <div class="cards-button">
                    <div class="col mb-5">
                        <div class="row">

                            <div class="card {{ $card->mana_type }}">
                                {{-- LINK A SHOW --}}
                                <a href="{{ route('cards.show', $card->id) }}">
                                    <div class="col">
                                        <div
                                            class='text-session name border border-4 border-dark p-2 d-flex justify-content-between mb-3'>
                                            <p class='fs-5'>{{ $card->name }}</p>
                                            <span class='fs-5'>                                        <div class="d-flex justify-content-end align-items-center">
                                        @for ($i = 0; $i <= $card->mana_cost; $i++)
                                            <img class='type_mana'
                                                src="{{ asset('images/manas/' . $card->mana_type . '.svg') }}"
                                                alt="">
                                        @endfor
                                        </div></span>
                                        </div>

                                    </div>
                                    <div class="col text-center">
                                        <img class='img-fluid
                                        mb-4 border border-4 border-dark'
                                            src="{{ $card->thumb }}" alt="{{ $card->name }}">
                                    </div>
                                    <div
                                        class='text-session name border border-4 border-dark p-2 d-flex justify-content-between mb-3'>
 
                                        <span>{{ $card->type }}</span>
                                        <span> {{ $card->edition }}</span>
                                    </div>
                                    <div class="text-session col border border-4 p-2 border-dark bg-color-white">
                                        <ul>
                                            <li>{{ $card->first_effect }}</li>
                                            <li>{{ $card->second_effect }}</li>
                                            <li>{{ $card->third_effect }}</li>
                                            <li>{{ $card->fourth_effect }}</li>
                                        </ul>
                                        <div class="col-12">
                                            <p class='text-start'>{{ $card->description }}</p>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <span>{{ $card->strength }}</span>/
                                        <span>{{ $card->constitution }}</span>
                                    </div>
                                </a>
                            </div>
                            {{-- EDIT --}}
                            <a class="btn btn-warning m-3 w-50" href="{{ route('cards.edit', $card->id) }}">Edit</a>

                            {{-- DELETE --}}
                            <form class="w-50 m-3" action="{{ route('cards.destroy', $card->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100">Delete Card</button>
                            </form>

                        </div>
                    </div>
                 </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection

@section('scripts')
    <script>
        vote = getDocument
    </script>
@endsection

<div class="vote m-0">
    <font-awesome-icon icon="fa-solid fa-star" v-for="i in fullStar" :key="i" class="text-warning" />
    <font-awesome-icon icon="fa-solid fa-star" v-for="i in hollowStar" :key="i" />
</div>
